<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@extends('website.partial.master-page')
@section('body')
  <!-- log in section start -->
  <section class="log-in-section section-b-space forgot-section">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="{{asset('website/assets/images/inner-page/forgot.png')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="log-in-box">
                        <!--messages-->
                        <div id="forgot_alert"></div>

                        <div class="log-in-title">
                            <h3>Welcome To Fastkart</h3>
                            <h4>Forgot your password</h4>
                        </div>

                        <div class="input-box">
                            <form id="forgot_form" class="row g-4" action="" method="POST">
                                @csrf
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email Address" autofocus>
                                        <label for="email">Email Address</label>
                                    </div>
                                    <div class="invalid-feedback" id="email-error" style="display: block;"></div>

                                </div>

                                <div class="col-12">
                                    <button class="btn btn-animation w-100" type="submit" id="forgot_btn">Forgot
                                        Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- log in section end -->

@endsection


<script src="{{ asset('website/assets/js/validation-message.js') }}"></script>
<script>
    $(function(){
        $("#forgot_form").submit(function(e){
            e.preventDefault();
        $("#forgot_btn").html('Please Wait..'),
        $.ajax({
            url: '{{ route('auth.forgot-password') }}',
            method: 'POST',
            data: $(this).serialize(),
            headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
           dataType:'json',
            success:function(res){
              console.log(res);
              if(res.status == 400){
                 showError('email', res.messages.email);

                 $("#forgot_btn").html('Reset Password');
                }
                else if(res.status == 200){
                $("#forgot_alert").html(showMessage('success', res.messages));
                  $("#forgot_form")[0].reset();
                 removeValidationClasses("#forgot_form");
               $("#forgot_btn").html('Send Reset Link');
              }
              else{
                 $("#forgot_alert").html(showMessage('danger', res.messages));
                 $("#forgot_form")[0].reset();
                 removeValidationClasses("#forgot_form");
                 $("#forgot_btn").html('Reset Password');

                  }

        }

        })
        });
    });
</script>
