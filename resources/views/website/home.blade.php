@extends('website.partial.master-layout')
@section('body')
 <!-- Product Sction Start -->
 <section class="product-section">
    <div class="container-fluid-lg">


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="row g-8">
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/1.png') }}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                            <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Bell pepper</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.05s">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/3.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Potato</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <div class="discount">
                                        <label>50%</label>
                                    </div>

                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/5.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Baby Chili</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.15s">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/6.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Broccoli</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <div class="discount">
                                        <label>-25%</label>
                                    </div>

                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/7.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Peru</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.25s">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/9.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Avacado</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/11.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Cucumber</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.35s">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <div class="discount">
                                        <label>-25%</label>
                                    </div>

                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/12.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Beetroot</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/13.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Strawberry</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.45s">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/15.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Corn</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <div class="discount">
                                        <label>50%</label>
                                    </div>

                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/17.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Cabbage</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.55s">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <div class="discount">
                                        <label>-25%</label>
                                    </div>

                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/18.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Ginger</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="cooking" role="tabpanel" aria-labelledby="cooking-tab">
                <div class="row g-8">
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/1.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Eggplant</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/2.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Eggplant</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/3.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Onion</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/4.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Potato</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/5.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Baby Chili</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/6.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Broccoli</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/10.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Pea</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/11.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Cucumber</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/17.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Cabbage</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/18.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Ginger</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="fruits" role="tabpanel" aria-labelledby="fruits-tab">
                <div class="row g-8">
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/8.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Apple</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/14.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Passion</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/16.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Blackberry</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/7.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Peru</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/9.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Apple</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/13.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Strawberry</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/12.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Bell pepper</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="beverage" role="tabpanel" aria-labelledby="beverage-tab">
                <div class="row g-8">
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/1.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Eggplant</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/2.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Eggplant</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/3.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Onion</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/4.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Potato</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/5.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Baby Chili</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/6.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Broccoli</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/10.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Pea</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/11.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Cucumber</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/17.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Cabbage</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/18.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Ginger</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="dairy" role="tabpanel" aria-labelledby="dairy-tab">
                <div class="row g-8">
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="fa-regular fa-heart"></i>                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="{{ asset('website/assets/images/veg-3/cate1/1.png')}}" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Eggplant</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/2.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Eggplant</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/3.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Onion</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/4.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Potato</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/5.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Baby Chili</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/6.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Broccoli</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/10.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Pea</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/11.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Cucumber</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/17.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Cabbage</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                        <div class="product-box-4">
                            <div class="product-image">
                                <div class="label-flex">
                                    <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                        <i class="iconly-Heart icli"></i>
                                    </button>
                                </div>

                                <a href="product-left-thumbnail.html">
                                    <img src="../assets/images/veg-3/cate1/18.png" class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                             <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <a href="compare.html">
                                           <i class="fa-solid fa-arrows-rotate"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-detail">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name">Ginger</h5>
                                </a>
                                <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                                <div class="price-qty">
                                    <div class="counter-number">
                                        <div class="counter">
                                            <div class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa-solid fa-minus"></i>
                                            </div>
                                            <input class="form-control input-number qty-input" type="text"
                                                name="quantity" value="0">
                                            <div class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="buy-button buy-button-2 btn btn-cart">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Sction End -->
@endsection
