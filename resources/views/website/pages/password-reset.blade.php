@extends('website.partial.master-page')
@section('body')
 <!-- log in section start -->
 <section class="log-in-section section-b-space">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="{{ asset('website/assets/images/inner-page/sign-up.png') }}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="log-in-box">
                     <!--success message alert-->

                     <div id="resetpassword_alert"></div>
                     <!--success message alert-->
                    <div class="log-in-title">
                        <h3>Welcome To Fastkart</h3>
                        <h4>Create New Password</h4>
                    </div>

                    <div class="input-box">
                        <form id="reset_passwordform" class="row g-4" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                           <input type="hidden" name="email" value="{{ $email }}">
                           <input type="hidden" name="token" value="{{ $token }}">
                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{ $email }}" disabled>
                                    <label for="email">Email Address</label>
                                </div>
                                <div class="invalid-feedback" id="email-error"></div>

                            </div>

                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="password" class="form-control" id="new_password"  name="new_password"
                                        placeholder="New Password">
                                    <label for="password">Password</label>
                                </div>
                                <div class="invalid-feedback" id="new_password-error" style="display: block;"></div>

                            </div>
                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="password" class="form-control" id="confirm_password"  name="confirm_password"
                                        placeholder="Confirm Password">
                                    <label for="password"> Confirm Password</label>
                                </div>
                                <div class="invalid-feedback" id="confirm_password-error" style="display: block;"></div>

                            </div>


                            <div class="col-12">
                                <button class="btn btn-animation w-100" type="submit" id="reset_password_btn">Reset Password</button>

                            </div>
                        </form>
                    </div>





                    <div class="sign-up-box">
                        {{-- <h4>Go to Login </h4> --}}
                        <a href="{{ route('login') }}"><i class="fa fa-arrow-left"></i>
                            Back to Log In</a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-7 col-xl-6 col-lg-6"></div>
        </div>
    </div>
</section>
<!-- log in section end -->


@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="{{ asset('website/assets/js/validation-message.js') }}"></script>
<script>
$(function(){
    $("#reset_passwordform").submit(function(e){
        e.preventDefault();
        $("#reset_password_btn").html("Please wait..");
        $.ajax({
            url:'{{ route('auth.reset') }}',
            method:'POST',
            data: $(this).serialize(),
            headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType:'json',
            success:function(res){
            //    console.log(res);
            if(res.status == 400){
                showError('new_password', res.messages.new_password);
               showError('confirm_password', res.messages.confirm_password);
               $("#reset_password_btn").html("Update Password");

            }else if(res.status == 401){
                $("#resetpassword_alert").html(showMessage('danger', res.messages));
                $("#reset_passwordform")[0].reset();
                  removeValidationClasses("#loginform");
                  $("#reset_password_btn").html('Update Password');
            }
            else{
                $("#reset_passwordform")[0].reset();
                $("#resetpassword_alert").html(showMessage('success', res.messages));
                $("#reset_password_btn").html('Reset Password');

                }
            }
        });
    });

});
</script>
