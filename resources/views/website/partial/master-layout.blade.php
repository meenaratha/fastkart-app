<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2024 06:11:18 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{ asset('website/assets/images/favicon/1.png')}}" type="image/x-icon">
    <title>On-demand last-mile delivery</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/bootstrap.css')}}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/animate.min.css')}}" />

    <!-- font-awesome css -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/font-awesome.css')}}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/feather-icon.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/slick/slick-theme.css')}}">

    <!-- Iconly css -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/bulk-style.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/vendors/animate.css')}}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/style.css')}}">
</head>

<body class="theme-color-2 bg-effect" style="overflow-x: hidden;">

    <!-- Loader Start -->
     <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    <!-- Header Start -->
  @include('website.partial.header')

     <!-- Header end -->

<!--home content start--->

@yield('body')
<!--home content end-->

<!--footer start--->

@include('website.partial.footer')
<!--footer end--->

    <!-- Quick View Modal Box Start -->
    @include('website.partial.product-quick-view')
    <!-- Quick View Modal Box End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Cookie Bar Box Start -->
    {{-- <div class="cookie-bar-box">
        <div class="cookie-box">
            <div class="cookie-image">
                <img src="{{ asset('website/assets/images/cookie-bar.png')}}" class="blur-up lazyload" alt="">
                <h2>Cookies!</h2>
            </div>

            <div class="cookie-contain">
                <h5 class="text-content">We use cookies to make your experience better</h5>
            </div>
        </div>

        <div class="button-group">
            <button class="btn privacy-button">Privacy Policy</button>
            <button class="btn ok-button">OK</button>
        </div>
    </div> --}}
    <!-- Cookie Bar Box End -->

    <!-- Deal Box Modal Start -->
    @include('website.partial.deal-box')
    <!-- Deal Box Modal End -->
 <!-- Items section Start -->
 @include('website.partial.item-bag')
<!-- Items section End -->

 <!-- Add to cart Modal Start -->
 <div class="add-cart-box">
    <div class="add-iamge">
        <img src="{{ asset('website/assets/images/cake/pro/1.jpg') }}" class="img-fluid" alt="">
    </div>

    <div class="add-contain">
        <h6>Added to Cart</h6>
    </div>
</div>
<!-- Add to cart Modal End -->

    <!-- Tap to top start -->
    <div class="theme-option">
        {{-- <div class="setting-box">
            <button class="btn setting-button">
                <i class="fa-solid fa-gear"></i>
            </button>

            <div class="theme-setting-2">
                <div class="theme-box">
                    <ul>
                        <li>
                            <div class="setting-name">
                                <h4>Color</h4>
                            </div>
                            <div class="theme-setting-button color-picker">
                                <form class="form-control">
                                    <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                    <input type="color" class="form-control form-control-color" id="colorPick"
                                        value="#0da487" title="Choose your color">
                                </form>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>Dark</h4>
                            </div>
                            <div class="theme-setting-button">
                                <button class="btn btn-2 outline" id="darkButton">Dark</button>
                                <button class="btn btn-2 unline" id="lightButton">Light</button>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>RTL</h4>
                            </div>
                            <div class="theme-setting-button rtl">
                                <button class="btn btn-2 rtl-unline">LTR</button>
                                <button class="btn btn-2 rtl-outline">RTL</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}

        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->


    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="{{ asset('website/assets/js/jquery-3.6.0.min.js')}}"></script>

    <!-- jquery ui-->
    <script src="{{ asset('website/assets/js/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('website/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('website/assets/js/bootstrap/bootstrap-notify.min.js')}}"></script>
    <script src="{{ asset('website/assets/js/bootstrap/popper.min.js')}}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('website/assets/js/feather/feather.min.js')}}"></script>
    <script src="{{ asset('website/assets/js/feather/feather-icon.js')}}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('website/assets/js/lazysizes.min.js')}}"></script>

    <!-- Slick js-->
    <script src="{{ asset('website/assets/js/slick/slick.js')}}"></script>
    <script src="{{ asset('website/assets/js/slick/slick-animation.min.js')}}"></script>
    <script src="{{ asset('website/assets/js/slick/custom_slick.js')}}"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset('website/assets/js/auto-height.js')}}"></script>

    <!-- Timer Js -->
    <script src="{{ asset('website/assets/js/timer1.js')}}"></script>

    <!-- Fly Cart Js -->
    <script src="{{ asset('website/assets/js/fly-cart.js')}}"></script>

    <!-- Quantity js -->
    <script src="{{ asset('website/assets/js/quantity-2.js')}}"></script>
    <!-- Zoom Js -->
    <script src="{{ asset('website/assets/js/jquery.elevatezoom.js')}}"></script>
    <script src="{{ asset('website/assets/js/zoom-filter.js')}}"></script>

    <!-- Timer Js -->
    <script src="{{ asset('website/assets/js/timer1.js')}}"></script>

    <!-- Sticky-bar js -->
    <script src="{{ asset('website/assets/js/sticky-cart-bottom.js')}}"></script>

    <!-- WOW js -->
    <script src="{{ asset('website/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('website/assets/js/custom-wow.js')}}"></script>

    <!-- script js -->
    <script src="{{ asset('website/assets/js/script.js')}}"></script>

    <!-- thme setting js -->
    <script src="{{ asset('website/assets/js/theme-setting.js')}}"></script>
</body>


</html>
