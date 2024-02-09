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

                     <div id="show_success_alert"></div>
                     <!--success message alert-->
                    <div class="log-in-title">
                        <h3>Welcome To Fastkart</h3>
                        <h4>Create New Account</h4>
                    </div>

                    <div class="input-box">
                        <form id="registerform_Authentication" class="row g-4" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="role" name="role" value="1">

                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="username"
                                    name="username"  placeholder="Full Name">
                                    <label for="fullname">Full Name</label>
                                </div>
                                <div class="invalid-feedback" id="username-error"></div>

                            </div>
                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                    <label for="email">Email Address</label>
                                </div>
                                <div class="invalid-feedback" id="email-error"></div>

                            </div>

                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="password" class="form-control" id="password"  name="password"
                                        placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                                <div class="invalid-feedback" id="password-error" style="display: block;"></div>

                            </div>

                            <div class="col-12">
                                <div class="forgot-box">
                                    <div class="form-check ps-0 m-0 remember-box">
                                        <input class="checkbox_animated check-box" type="checkbox"
                                        id="terms-conditions" name="terms" value="terms-accepted">
                                        <label class="form-check-label" for="flexCheckDefault">I agree with
                                            <span>Terms</span> and <span>Privacy</span></label>
                                    </div>
                                </div>
                                <div class="invalid-feedback" id="terms-conditions-error" style="display: block;"></div>

                            </div>

                            <div class="col-12">
                                <button class="btn btn-animation w-100" type="submit" id="register_btn">Sign Up</button>
                            </div>
                        </form>
                    </div>

                    <div class="other-log-in">
                        <h6>or</h6>
                    </div>

                    <div class="log-in-button">
                        <ul>
                            <li>
                                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin"
                                    class="btn google-button w-100">
                                    <img src="{{ asset('website/assets/images/inner-page/google.png') }}" class="blur-up lazyload"
                                        alt="">
                                    Sign up with Google
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" class="btn google-button w-100">
                                    <img src="{{ asset('website/assets/images/inner-page/facebook.png') }}" class="blur-up lazyload"
                                        alt=""> Sign up with Facebook
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="other-log-in">
                        <h6></h6>
                    </div>

                    <div class="sign-up-box">
                        <h4>Already have an account?</h4>
                        <a href="{{ route('login') }}">Log In</a>
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
    $("#registerform_Authentication").submit(function(e){
    e.preventDefault();
    $("#register_btn").html('Signing...');
    $.ajax({
      url:'{{ route('register.post') }}',
      method:'post',
      data:$(this).serialize(),
      header:{
        'X-CSRF-Token':"{{ csrf_token() }}"
           },
      dataType: 'json',
      success:function(res){
    //    console.log(res);
    if(res.status == 400){
       showError('username', res.messages.username);
       showError('email', res.messages.email);
       showError('password', res.messages.password);
       showError('terms-conditions', res.messages.terms);
    }else if(res.status == 200){
         $("#show_success_alert").html(showMessage('success', res.messages));
         $("#registerform_Authentication")[0].reset();
         removeValidationClasses("#registerform_Authentication");
         $("#register_btn").html('Signed');
         window.location.href = '{{ route("login") }}';


    }
      }
    });
    });


});
</script>
