<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;



class CategoryController extends Controller
{
    public function category(){

        return view('admin.pages.category-list');
    }

    public function category_list(){
        $categories = DB::table('categories')->get();
		$output = '';
		if ($categories->count() > 0) {
			$output .= '<table class="table all-package theme-table" id="category_table">

            <thead>
            <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>User Id</th>
            <th>Action</th>

            </tr>
           </thead>
            <tbody >';
			foreach ($categories as $category) {
				$output .= '<tr>
                                  <td style="text-align:center;">'.$category->id.'</td>


                                    <td>
                                        <div class="user-name">
                                            <span>'.$category->category_name.'</span>
                                        </div>
                                    </td>


                                    <td>'.$category->user_id.'</td>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="" id="'.$category->id.'" class="show_users">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)"  onClick="editFunc('.$category->id.')"  id="'.$category->id.'" class="edit_users"
                                                data-bs-toggle="offcanvas"
                                                data-bs-target="#edituserOffcanvas"
                                                aria-controls="edituserOffcanvas">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=""     onClick="deleteFunc('.$category->id.')"      id="'.$category->id.'"
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
    public function store_category(Request $request)
    {

        $categoryId = $request->id;
        $userId = $request->user_id;


        $category   =   Category::updateOrCreate(
                    [
                     'id' => $categoryId,
                     'id' => $userId,

                    ],
                    [
                    'category_name' => $request->category_name,
                    ]);


        // Set success message in session
    session()->flash('success', 'Category created successfully!');

    // Return a JSON response with the category data and success message
    return response()->json([
        'status' => 'success',
        'category' => $category,
        'messages' => 'Category created successfully'
    ]);
    }

    public function edit_category(Request $request)
    {
        $where = array('id' => $request->id);
        $category  = Category::where($where)->first();

        // Set success message in session
        session()->flash('success', 'Category edit successfully!');
        return Response()->json([
            'status' => 'success',
            'category' => $category,
            'messages' => 'Category updated successfully'
        ]);

    }

    public function destroy_category(Request $request)
    {
        $category = Category::where('id',$request->id)->delete();

        return Response()->json([
            'status' => 'success',
            'category' => $category,
            'messages' => 'Category deleted successfully'
        ]);
    }

}
