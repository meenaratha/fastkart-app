<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\forgotPassword;
use Illuminate\Support\Str;
// use Yajra\DataTables\DataTables;
// use DataTables;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    public function registerform(){
        return view('website.pages.register');
    }

    public function loginform(){
        return view('website.pages.login');
    }

    public function forgotform(){
        return view('website.pages.forgot-password');
    }


    public function register_post(Request $request)
    {
        // dd($request);
      $validator = Validator::make($request->all(),[
        'username' =>'required',
        'email' =>'required|email|unique:users',
        'role' =>'required',
        'terms' =>'required',
        'password' =>'required|max:4',

      ]);

      if($validator->fails()){
            return response()->json([
                'status'=>400,
                'messages'=> $validator->getMessageBag()
            ]);
      }else{
        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->terms = $request->terms;
        $user->save();
        return response()->json([
            'status'=>200,
            'messages' => 'Register Successfully !'
        ]);
      }

    }

     //handle login user ajax request
     public function auth_login(Request $request)
     {
         $validator = Validator::make($request->all(),[

             'email' =>'required|email',
             'password' =>'required',

           ]);

           if($validator->fails()){
                 return response()->json([
                     'status'=>400,
                     'messages'=> $validator->getMessageBag()
                 ]);
           }else{
            $user = User::where('email', $request->email)->first();
            if($user){
               if(Hash::check($request->password, $user->password)){
                    $request->session()->put('loggedInUser', $user->id);
                    return response()->json([
                     'status' => 200,
                     'messages' =>'success'
                    ]);
               }else{
                 return response()->json([
                     'status' => 401,
                     'messages' =>'Invalid Credential'
                    ]);
               }
            }else{
             return response()->json([
                 'status' => 401,
                 'messages' =>'User Not Found'
                ]);
            }
         }
     }


 // dashboard

 public function dashboard(){
     return view('admin.home');
 }

 public function logout(){
    if(session()->has('loggedInUser')){
        session()->pull('loggedInUser');
        return redirect('/login');
    }
}
public function forgotPassword(Request $request){
    $validator =  Validator::make($request->all(),[
        'email' => 'required|email|max:100',
    ]);
    if($validator->fails()){
        return response()->json([
            'status' => 400,
            'messages' => $validator->getMessageBag()
        ]);

    }else{
        $token =Str::uuid();
        $user = DB::table('users')->where('email', $request->email)->first();
        $details = [
            'body' => route('password-reset', ['email' => $request->email, 'token' =>
             $token])
        ];
        if($user){
             User::where('email', $request->email)->update([
                'token' =>$token,
                'token_expire' => Carbon::now()->addMinutes(10)->toDateTimeString()
             ]);

             Mail::to($request->email)->send(new forgotPassword($details));
             return response()->json([
                 'status' =>200,
                 'messages' => 'Reset Password link has been sent to your e-mail !'

             ]);
        }else{
            return response()->json([
                'status' =>401,
                'messages' => 'This e-mail is not registered with us !'

            ]);
        }
    }
}
public function passwordresetform(Request $request){
    // return view('website.pages.password-reset');
    $email =  $request->email;
    $token = $request->token;
    return view('website.pages.password-reset', ['email' => $request->email, 'token' =>
    $token]);
}

//handle reset password ajax requst
public function password_reset(Request $request){
//  print_r($_POST);
   $validator = Validator::make($request->all(),[
          'new_password'=>'required|max:3',
          'confirm_password' => 'required|max:3|same:new_password',
   ],[
        'confirm_password.same' =>'Password did not matched',
   ]);

   if($validator->fails()){
          return response()->json([
            'status' =>400,
            'messages' => $validator->getMessageBag()
          ]);
   }else{
      $user = DB::table('users')->where('email', $request->email)->whereNotNull
      ('token')->where('token', $request->token)->where('token_expire','>',Carbon::now())->exists();

      if($user){
         User::where('email', $request->email)->update([
            'password' => Hash::make($request->new_password),
            'token' => null,
            'token_expire' => null,
         ]);

         return response()->json([
            'status' => 200,
            'messages' => 'New password Updated! &nbsp; &nbsp; <a href="/login">Login Now</a>'
         ]);
      }else{
        return response()->json([
            'status' => 401,
            'messages' => 'Reset link expired! Request for a new reset password link'
         ]);
      }
   }
}

//admin pages

public function user_list(){
return view('admin.pages.all-users-list');

}

public function show_userlist(){
    $users = DB::table('users')->get();
		$output = '';
		if ($users->count() > 0) {
			$output .= '<table class="table all-package theme-table" id="table_id">

            <thead>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>

            </tr>
           </thead>
            <tbody >';
			foreach ($users as $user) {
				$output .= '<tr>
                                  <td style="text-align:center;">'.$user->id.'</td>


                                    <td>
                                        <div class="user-name">
                                            <span>'.$user->name.'</span>
                                        </div>
                                    </td>


                                    <td>'.$user->email.'</td>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="" id="'.$user->id.'" class="show_users">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" id="'.$user->id.'" class="edit_users"
                                                data-bs-toggle="offcanvas"
                                                data-bs-target="#edituserOffcanvas"
                                                aria-controls="edituserOffcanvas">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=""  id="'.$user->id.'"
                                                class="delete_users">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
}

public function users_edit(Request $request){

    $id = $request->id;
    $users_data =  DB::table('users')->where('id', $id )->first();
    return response()->json($users_data);

}

// public function user_update(Request $request)
//     {

//         $userData = [
//             'name' => $request->edit_username,
//             'email' => $request->email,
//             'password' => Hash::make($request->edit_password),
//             'role' => $request->edit_role,
//             'terms' => $request->edit_terms,

//         ];
//         $user_data =  DB::table('users')->where('id', $request->userid)->update($userData);

//         return response()->json([
//             'success' => true,
// 			'status' => 200,
//             'message'=>'User Updated Successfully!..'
// 		]);




//     }
public function user_update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'edit_username' =>'required',
            'email' => 'required|email|unique:users,email,'.$request->userid,
            'edit_role' =>'required',
            'edit_terms' =>'required',
            'edit_password' =>'required|max:4',

          ]);
           if($validator->fails()){
            return response()->json([
                'status'=>400,
                'messages'=> $validator->getMessageBag()
            ]);
      }else{
        $userData = [
            'name' => $request->edit_username,
            'email' => $request->email,
            'password' => Hash::make($request->edit_password),
            'role' => $request->edit_role,
            'terms' => $request->edit_terms,

        ];
        $user_data =  DB::table('users')->where('id', $request->userid)->update($userData);

        return response()->json([
            'success' => true,
			'status' => 200,
            'messages'=>'User Updated Successfully!..'
		]);

      }


    }

//user delete

public function user_delete(Request $request)
{
    $users_data =  DB::table('users')->where('id', $request->id )->delete();

    return response()->json([
        // 'success' => true,
        'status' => 200,
        'messages'=>'user Deleted Successfully!..'
    ]);
}


}
