
@extends('admin.partial.master-layout')

@section('body')
 <!-- All User Table Start -->
 <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body" >
                    <div class="" id="show_delete_alert" style="margin-bottom: 30px;display:fixed;"></div>

                    <div class="title-header option-title">
                        <h5>All Users</h5>
                        <form class="d-inline-flex">
                            {{-- <a href="add-new-user.html" class="align-items-center btn btn-theme d-flex">
                                <i data-feather="plus"></i>Add New
                            </a> --}}
                            <!-- Button trigger for offcanvas -->
                            <a href="#">
                            <button class="align-items-center btn btn-theme d-flex" type="button" data-bs-toggle="offcanvas"
                             data-bs-target="#exampleOffcanvas"
                            aria-controls="exampleOffcanvas">
                            <i data-feather="plus"></i> Add New
                             </button>
                            </a>
                        </form>
                    </div>
                    <div class="table-responsive table-product" id="show_all_employees">
                        <table class="table all-package theme-table" id="table_id">
                            {{-- <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>password</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Everett C. Green</span>
                                            <span>Essex Court</span>
                                        </div>
                                    </td>

                                    <td>+ 802 - 370 - 2430</td>

                                    <td>EverettCGreen@rhyta.com</td>

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

                            <h1 class="text-center text-secondary my-5">Data Not found</h1>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- All User Table Ends-->

 <!-- Offcanvas -->
@include('admin.pages.add-user-modal')
@include('admin.pages.edit-user-modal')
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> --}}


<script src="{{ asset('website/assets/js/validation-message.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
fetchallusers();

function fetchallusers(){
        $.ajax({
            url: "{{ route('users.data') }}",
            method: "get",
            success: function(response){
                $('#show_all_employees').html(response);
                $('#table_id').DataTable({
                    order: [[0, 'desc']]
                });
            },
            error: function(error){
                console.log(error);
            }
        });
    }

   $(document).ready(function(){
      $('#table_id').DataTable();
   });

$(function(){
    $("#registerform_Authentication").submit(function(e){
    e.preventDefault();
    $("#register_btn").html('Please Wait...');
    $.ajax({
      url:'{{ route('register.post') }}',
      method:'post',
      data:$(this).serialize(),
      header:{
        'X-CSRF-Token':"{{ csrf_token() }}"
           },
      dataType: 'json',
      success:function(res){
        console.log(res);
    if(res.status == 400){
       showError('username', res.messages.username);
       showError('email', res.messages.email);
       showError('password', res.messages.password);
       showError('terms-conditions', res.messages.terms);
       $("#register_btn").html('Add User');

    }else if(res.status == 200){
         $("#show_success_alert").html(showMessage('success', res.messages));
         setTimeout(function() {
           $("#show_success_alert").html('');
           }, 1000);
         $("#registerform_Authentication")[0].reset();
         removeValidationClasses("#registerform_Authentication");
         $("#register_btn").html('Add User');
         fetchallusers();
         var oTable = $('#table_id').dataTable();
          oTable.fnDraw(false);
 //  window.location.href = '{{ route("login") }}';
        // Hide the offcanvas
        var offcanvasElement = document.getElementById('exampleOffcanvas');
        var offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasElement);
        offcanvasInstance.hide();



    }
      }
    });
    });


});

// edit employee ajax request
$(document).on('click', '.edit_users', function(e) {

        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: "{{ route('user-edit') }}",
          method: 'post',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            // console.log(response);
            $("#edit_username").val(response.name);
            $("#edit_email").val(response.email);
            $("#edit_password").val(response.password);
            $("#edit_role").val(response.role);
            $("#edit_terms-conditions").val(response.terms);
            $("#userid").val(response.id);
          }
        });
      });




$(function(){
    $("#edit_userform").submit(function(e){
    e.preventDefault();
    $("#edituser_btn").html('Please Wait...');
    $.ajax({
      url:'{{ route('user-update') }}',
      method:'post',
      data:$(this).serialize(),
      header:{
        'X-CSRF-Token':"{{ csrf_token() }}"
           },
      dataType: 'json',
      success:function(res){
        console.log(res);
    if(res.status == 400){
       showError('edit_username', res.messages.edit_username);
       showError('edit_email', res.messages.edit_email);
       showError('edit_password', res.messages.edit_password);
       showError('edit_terms-conditions', res.messages.edit_terms);
        }
           else if(res.status == 200) {

               fetchallusers();
               $("#show_update_alert").html(showMessage('success', res.messages));
               setTimeout(function() {
                $("#show_update_alert").html('');
                 }, 1000);
               $("#edit_userform")[0].reset();
               removeValidationClasses("#edit_userform");
               $("#edituser_btn").text('Update Employee');
             // Hide the offcanvas
          var offcanvasElement = document.getElementById('edituserOffcanvas');
          var offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasElement);
          offcanvasInstance.hide();

            }
      }
    });
    });


});



//   delete user

$(document).on('click','.delete_users', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('user.delete') }}',
              method: 'post',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                if(response.status == 200) {
                    Swal.fire(
                  'Deleted!',
                   response.message,
                  'success'
                )
                    fetchallusers();
                $("#show_delete_alert").html(showMessage('success', response.messages));
                setTimeout(function() {
                  $("#show_delete_alert").html('');
                   }, 2000);
                }

              }
            });
          }
        })

      });
</script>
