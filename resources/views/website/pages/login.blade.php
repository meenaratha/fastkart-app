@extends('website.partial.master-page')
@section('body')
 <!-- log in section start -->
 <section class="log-in-section background-image-2 section-b-space">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="{{asset('website/assets/images/inner-page/log-in.png')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="log-in-box">
                    <!--success message-->
                    <div id="login_alert"></div>
                    <div class="log-in-title">
                        <h3>Welcome To Fastkart</h3>
                        <h4>Log In Your Account</h4>
                    </div>

                    <div class="input-box">
                        <form id="loginform" class="row g-4" action="" method="POST" >
                            @csrf
                            <div class="col-12">
                                <div class="form-floating theme-form-floating log-in-form">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                    <label for="email">Email Address</label>
                                </div>
                                <div class="invalid-feedback" id="email-error" style="display: block;"></div>

                            </div>

                            <div class="col-12">
                                <div class="form-floating theme-form-floating log-in-form">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                                <div class="invalid-feedback" id="password-error" style="display: block;"></div>

                            </div>

                            <div class="col-12">
                                <div class="forgot-box">
                                    <div class="form-check ps-0 m-0 remember-box">
                                        <input class="checkbox_animated check-box" type="checkbox"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                    </div>
                                    <a href="forgot.html" class="forgot-password">Forgot Password?</a>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-animation w-100 justify-content-center" type="submit" id="login_btn">Log
                                    In</button>
                            </div>
                        </form>
                    </div>

                    <div class="other-log-in">
                        <h6>or</h6>
                    </div>

                    <div class="log-in-button">
                        <ul>
                            <li>
                                <a href="https://www.google.com/" class="btn google-button w-100">
                                    <img src="{{asset('website/assets/images/inner-page/google.png')}}" class="blur-up lazyload"
                                        alt=""> Log In with Google
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" class="btn google-button w-100">
                                    <img src="{{asset('website/assets/images/inner-page/facebook.png')}}" class="blur-up lazyload"
                                        alt=""> Log In with Facebook
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="other-log-in">
                        <h6></h6>
                    </div>

                    <div class="sign-up-box">
                        <h4>Don't have an account?</h4>
                        <a href="{{ route('register') }}">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- log in section end -->


@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="{{ asset('website/assets/js/validation-message.js') }}"></script>
<script>

$(function(){
    $("#loginform").submit(function(e){
      e.preventDefault();
      $("#login_btn").html('Please wait...');
      $.ajax({
         url:'{{ route('auth.login') }}',
         method: 'post',
         data: $(this).serialize(),
         headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
         dataType:'json',
         success:function(res){
           console.log(res);
        if(res.status == 400){
       showError('email', res.messages.email);
       showError('password', res.messages.password);

    }else if(res.status == 401){
         $("#login_alert").html(showMessage('danger', res.messages));
         $("#loginform")[0].reset();
         removeValidationClasses("#loginform");
         $("#login_btn").html('login');
    }
    else{
        if(res.status == 200 && res.messages == 'success'){
            window.location.href = '{{ route("dashboard") }}';
        }
    }

         }
      });
    });
});


</script>
