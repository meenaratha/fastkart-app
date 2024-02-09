@extends('admin.partial.master-layout')
@section('body')
 <!-- All User Table Start -->
 <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div id="category_success_alert" style="margin-bottom: 20px;"></div>

                    <div class="title-header option-title">
                        <h5>All Category</h5>
                        <form class="d-inline-flex">
                            <a href="add-new-category.html"
                                class="align-items-center btn btn-theme d-flex" onClick="add()" id="add_category"
                                data-bs-toggle="modal" data-bs-target="#categoryModal">
                                <i data-feather="plus-square"></i>Add New
                            </a>

                        </form>

                    </div>

                    <div class="table-responsive category-table" id="show_category_datas">

                            <table class="table all-package theme-table" id="category_table">
                                {{-- <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Aata Buscuit</td>

                                        <td>26-12-2021</td>

                                        <td>
                                            <div class="table-image">
                                                <img src="assets/images/product/1.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="category-icon">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </td>

                                        <td>buscuit</td>

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
                                </tbody> --}}
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- All User Table Ends-->
@include('admin.pages.add-category-modal')
@endsection

<!-- jQuery library -->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
<script src="{{ asset('website/assets/js/validation-message.js') }}"></script>

<script type="text/javascript">


    fetchallcategories();

function fetchallcategories(){

    $.ajax({
        url:"{{ route('category-list') }}",
        method:"get",
        success:function(response){
            $('#show_category_datas').html(response);
            $('#category_table').DataTable();
            $('#category_table').DataTable({
                order: [[0, 'desc']]
            });
        },
        error:function(error){
            console.log(error);
        },
    });
}
$(document).ready(function(){

   });
     
    function add(){
        $('#categoryform').trigger("reset");
        $('#categorytitle').html("Add Category");
        $('#categoryModal').modal('show');
        $('#id').val('');
    } 
    $(function(){ 
    $('#categoryform').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: "{{ url('admin/category-store')}}",
            data: formData,
             header:{
          'X-CSRF-Token':"{{ csrf_token() }}"
           },
           dataType: 'json',
            cache:false,
            contentType: false,
            processData: false,
            success:function(res){
            console.log(res);
                $("#categoryModal").modal('hide');
                $("#btn-save").html('Submit');
                $("#btn-save"). attr("disabled", false);
                $("#categoryform")[0].reset();
                $("#category_success_alert").html(showMessage('success', res.messages));
                setTimeout(function() {
                $("#category_success_alert").html('');
                 }, 2000);
                 fetchallcategories();


            },
        
        });


    });
});
         
function editFunc(id){
        $.ajax({
            type:"POST",
            url: "{{ url('admin/category-edit') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                $('#EmployeeModal').html("Edit Category");
                $('#employee-modal').modal('show');
                $('#id').val(res.id);
                $('#main_category').val(res.main_category);
                $('#sub_category').val(res.sub_category);
                $('#product_category').val(res.product_category);
            }
        });
    } 
     
    function deleteFunc(id){
        if (confirm("Delete Record?") == true) {
            var id = id;
            // ajax
            $.ajax({
                type:"POST",
                url: "{{ url('category-delete') }}",
                data: { id: id },
                dataType: 'json',
                success: function(res){
                    var oTable = $('#ajax-crud-datatable').dataTable();
                    oTable.fnDraw(false);
                }
            });
        }
    }


    </script>

