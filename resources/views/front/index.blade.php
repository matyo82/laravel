@extends('front.layouts.master-index')


@section('head-tag')
    <title>index</title>
@endsection

@include('front.layouts.index-slider')


@section('content')
    <div class="banner-area pt-100 pb-100">
        <div class="container">
            <div class="bg-img pt-100 pb-100 learn-banner"
                style="background-image:url({{ asset('front-assets/images/bg/banner-bg-1.jpg') }});">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-11">
                        <div class="banner-content">
                            <h2>Premium Home <br>Decorator</h2>
                            <a href="product-details.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-135">
        <div class="container">
            <div class="section-title text-center mb-40">
                <h2>Best Sell</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text</p>
            </div>
            <div class="product-slider-active owl-carousel">
                <div class="product-wrap">
                    <div class="product-img mb-15">
                        <a href="product-details.html"><img src="{{ asset('front-assets/images/product/pro-hm1-1.jpg') }}"
                                alt="product"></a>
                        <div class="product-action">
                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                    class="la la-plus"></i></a>
                            <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                            <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span>Chair</span>
                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                        <div class="price-addtocart">
                            <div class="product-price">
                                <span>$210.00</span>
                            </div>
                            <div class="product-addtocart">
                                <a title="Add To Cart" href="#">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img mb-15">
                        <a href="product-details.html"><img src="{{ asset('front-assets/images/product/pro-hm1-2.jpg') }}"
                                alt="product"></a>
                        <span class="price-dec">-30%</span>
                        <div class="product-action">
                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                    class="la la-plus"></i></a>
                            <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                            <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span>Chair</span>
                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                        <div class="price-addtocart">
                            <div class="product-price">
                                <span>$210.00</span>
                                <span class="old">$230.00</span>
                            </div>
                            <div class="product-addtocart">
                                <a title="Add To Cart" href="#">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img mb-15">
                        <a href="product-details.html"><img src="{{ asset('front-assets/images/product/pro-hm1-3.jpg') }}"
                                alt="product"></a>
                        <span class="new-stock"><span>Stock <br>Out</span></span>
                        <div class="product-action">
                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                    class="la la-plus"></i></a>
                            <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                            <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span>Chair</span>
                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                        <div class="price-addtocart">
                            <div class="product-price">
                                <span>$250.00</span>
                            </div>
                            <div class="product-addtocart">
                                <a title="Add To Cart" href="#">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img mb-15">
                        <a href="product-details.html"><img src="{{ asset('front-assets/images/product/pro-hm1-4.jpg') }}"
                                alt="product"></a>
                        <span class="price-dec font-dec">NEW</span>
                        <div class="product-action">
                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                    class="la la-plus"></i></a>
                            <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                            <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span>Chair</span>
                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                        <div class="price-addtocart">
                            <div class="product-price">
                                <span>$320.00</span>
                                <span class="old">$120.00</span>
                            </div>
                            <div class="product-addtocart">
                                <a title="Add To Cart" href="#">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img mb-15">
                        <a href="product-details.html"><img src="{{ asset('front-assets/images/product/pro-hm1-2.jpg') }}"
                                alt="product"></a>
                        <span class="price-dec">-30%</span>
                        <div class="product-action">
                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                    class="la la-plus"></i></a>
                            <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                            <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span>Chair</span>
                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                        <div class="price-addtocart">
                            <div class="product-price">
                                <span>$210.00</span>
                                <span class="old">$230.00</span>
                            </div>
                            <div class="product-addtocart">
                                <a title="Add To Cart" href="#">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="discount-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="discount-img">
                        <a href="#">
                            <img src="{{ asset('front-assets/images/banner/banner-1.jpg') }}" alt="discount-img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="discount-content">
                        <p>Lorem Ipsum is simply dummy text of the <br>printing and typesetting industry.</p>
                        <h2>Winter Discount <br>Up to 30%</h2>
                        <p class="bright-color">It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout.</p>
                        <div class="discount-btn default-btn btn-hover">
                            <a class="btn-color-theme btn-size-md btn-style-outline" href="product-details.html">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-60">
        <div class="container">
            <div class="section-title text-center mb-40">
                <h2>All Products</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img
                                    src="{{ asset('front-assets/images/product/pro-hm1-1.jpg') }}" alt="product"></a>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                        class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$210.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img
                                    src="{{ asset('front-assets/images/product/pro-hm1-2.jpg') }}"alt="product"></a>
                            <span class="price-dec">-30%</span>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                        class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$250.00</span>
                                    <span class="old">$270.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img
                                    src="{{ asset('front-assets/images/product/pro-hm1-3.jpg') }}" alt="product"></a>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                        class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$200.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img
                                    src="{{ asset('front-assets/images/product/pro-hm1-4.jpg') }}" alt="product"></a>
                            <span class="price-dec font-dec">NEW</span>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                        class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$220.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img
                                    src="{{ asset('front-assets/images/product/pro-hm1-5.jpg') }}" alt="product"></a>
                            <span class="new-stock"><span>Stock <br>Out</span></span>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                        class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$250.00</span>
                                    <span class="old">$260.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img
                                    src="{{ asset('front-assets/images/product/pro-hm1-6.jpg') }}" alt="product"></a>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                        class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$260.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img
                                    src="{{ asset('front-assets/images/product/pro-hm1-7.jpg') }}" alt="product"></a>
                            <span class="price-dec font-dec">NEW</span>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                        class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$240.00</span>
                                    <span class="old">$290.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img
                                    src="{{ asset('front-assets/images/product/pro-hm1-8.jpg') }}"alt="product"></a>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                                        class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$280.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
