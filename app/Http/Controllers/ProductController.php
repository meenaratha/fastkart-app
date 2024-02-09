<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
// use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    public function show_product(){
        return view('admin.pages.products-list');
    }

    public function add_product(){
        return view('admin.pages.add-products');
    }

    // handle fetch all eamployees ajax request
	public function product_fetchAll() {
		$Products = Product::all();
		$output = '';
		if ($Products->count() > 0) {
			$output .= '<table class="table all-package theme-table table-product" id="product_table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($Products as $Product) {
				$output .= '<tr>
                <td>' . $Product->id . '</td>
                <td>
                <div class="table-image">
                    <img src="storage/images/' . $Product->product_image . '" class="img-fluid"
                        alt="">
                </div>
               </td>
               <td>' . $Product->product_name . '</td>
               <td>' . $Product->user_id . '</td>
               <td class="td-price">' . $Product->original_price . '</td>
               <td class="status-danger">
                 <span>' . $Product->status . '</span>
               </td>
               <td>

               <ul>
               <li>
                   <a href="">
                       <i class="ri-eye-line"></i>
                   </a>
               </li>

               <li>
                   <a href="">
                       <i class="ri-pencil-line"></i>
                   </a>
               </li>

               <li>
                   <a href="" data-bs-toggle="modal"
                       data-bs-target="#exampleModalToggle">
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

	// handle insert a new employee ajax request
	public function store(Request $request) {
		$file = $request->file('avatar');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/images', $fileName);

		$empData = ['first_name' => $request->fname, 'last_name' => $request->lname, 'email' => $request->email, 'phone' => $request->phone, 'post' => $request->post, 'avatar' => $fileName];
		Employee::create($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle edit an employee ajax request
	public function edit(Request $request) {
		$id = $request->id;
		$emp = Employee::find($id);
		return response()->json($emp);
	}

	// handle update an employee ajax request
	public function update(Request $request) {
		$fileName = '';
		$emp = Employee::find($request->emp_id);
		if ($request->hasFile('avatar')) {
			$file = $request->file('avatar');
			$fileName = time() . '.' . $file->getClientOriginalExtension();
			$file->storeAs('public/images', $fileName);
			if ($emp->avatar) {
				Storage::delete('public/images/' . $emp->avatar);
			}
		} else {
			$fileName = $request->emp_avatar;
		}

		$empData = ['first_name' => $request->fname, 'last_name' => $request->lname, 'email' => $request->email, 'phone' => $request->phone, 'post' => $request->post, 'avatar' => $fileName];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle delete an employee ajax request
	public function delete(Request $request) {
		$id = $request->id;
		$emp = Employee::find($id);
		if (Storage::delete('public/images/' . $emp->avatar)) {
			Employee::destroy($id);
		}
	}

}
