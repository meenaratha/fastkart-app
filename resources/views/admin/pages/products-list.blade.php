@extends('admin.partial.master-layout')
@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title d-sm-flex d-block">
                        <h5>Products List</h5>
                        <div class="right-options">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">import</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Export</a>
                                </li>
                                <li>
                                    <a class="btn btn-solid" href="" id="add_product"
                                    data-bs-toggle="modal" data-bs-target="#add_product_modal">Add Product</a>

                                </li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="table-responsive" id="product_table_container">
                            {{-- <table class="table all-package theme-table table-product" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="assets/images/product/1.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </td>

                                        <td>Aata Buscuit</td>

                                        <td>Buscuit</td>

                                        <td>12</td>

                                        <td class="td-price">$95.97</td>

                                        <td class="status-danger">
                                            <span>Pending</span>
                                        </td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="order-detail.html">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.pages.add-product-modal')
@endsection

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
<link rel='stylesheet'
  href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

<script>
$(function() {
    // fetch all employees ajax request
    fetchAllEmployees();

function fetchAllEmployees() {

  $.ajax({
    url: '{{ route('product-fetchAll') }}',
    method: 'get',
    success: function(response) {
        // console.log(response);
      $("#product_table_container").html(response);
      $("table").DataTable({
        order: [0, 'desc']
      });
    }
  });
}

});
</script>
