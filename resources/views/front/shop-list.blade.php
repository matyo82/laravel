@extends('front.layouts.master')


@section('head-tag')
    <title>shop-list</title>
@endsection

@section('content')
       <div class="breadcrumb-area bg-img" style="background-image:url({{asset('front-assets/images/bg/breadcrumb.jpg')}});">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>shop page</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">shop list</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area pt-90 pb-90">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-topbar-wrapper">
                            <div class="shop-topbar-left">
                                <div class="view-mode nav">
                                    <a href="#shop-1" data-toggle="tab"><i class="la la-th"></i></a>
                                    <a class="active" href="#shop-2" data-toggle="tab"><i class="la la-list-ul"></i></a>
                                </div>
                                <p>Showing 1 - 20 of 30 results </p>
                            </div>
                            <div class="product-sorting-wrapper">
                                <div class="product-shorting shorting-style">
                                    <label>View:</label>
                                    <select>
                                        <option value=""> 20</option>
                                        <option value=""> 23</option>
                                        <option value=""> 30</option>
                                    </select>
                                </div>
                                <div class="product-show shorting-style">
                                    <label>Sort by:</label>
                                    <select>
                                        <option value="">Default</option>
                                        <option value=""> Name</option>
                                        <option value=""> price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-1.jpg')}}" alt="product"></a>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-2.jpg')}}" alt="product"></a>
                                                    <span class="price-dec">-30%</span>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-3.jpg')}}" alt="product"></a>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-4.jpg')}}" alt="product"></a>
                                                    <span class="price-dec font-dec">NEW</span>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-5.jpg')}}" alt="product"></a>
                                                    <span class="new-stock"><span>Stock <br>Out</span></span>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-6.jpg')}}" alt="product"></a>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-7.jpg')}}" alt="product"></a>
                                                    <span class="price-dec font-dec">NEW</span>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-8.jpg')}}" alt="product"></a>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-1.jpg')}}" alt="product"></a>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-2.jpg')}}" alt="product"></a>
                                                    <span class="price-dec">-30%</span>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-3.jpg')}}" alt="product"></a>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-4.jpg')}}" alt="product"></a>
                                                    <span class="price-dec font-dec">NEW</span>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-5.jpg')}}" alt="product"></a>
                                                    <span class="new-stock"><span>Stock <br>Out</span></span>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-6.jpg')}}" alt="product"></a>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{asset('front-assets/images/product/pro-hm1-7.jpg')}}" alt="product"></a>
                                                    <span class="price-dec font-dec">NEW</span>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
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
                                    </div>
                                </div>
                                <div id="shop-2" class="tab-pane active">
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('front-assets/images/product/pro-hm1-1.jpg')}}" alt="Product Style">
                                                    </a>
                                                    <div class="product-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span>Chair</span>
                                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                                    <div class="pro-list-price">
                                                        <span>$40.00</span>
                                                        <span class="old-price">$50.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('front-assets/images/product/pro-hm1-2.jpg')}}" alt="Product Style">
                                                    </a>
                                                    <div class="product-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span>Chair</span>
                                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                                    <div class="pro-list-price">
                                                        <span>$50.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('front-assets/images/product/pro-hm1-3.jpg')}}" alt="Product Style">
                                                    </a>
                                                    <div class="product-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span>Chair</span>
                                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                                    <div class="pro-list-price">
                                                        <span>$40.00</span>
                                                        <span class="old-price">$50.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('front-assets/images/product/pro-hm1-4.jpg')}}" alt="Product Style">
                                                    </a>
                                                    <div class="product-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span>Chair</span>
                                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                                    <div class="pro-list-price">
                                                        <span>$90.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('front-assets/images/product/pro-hm1-5.jpg')}}" alt="Product Style">
                                                    </a>
                                                    <div class="product-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span>Chair</span>
                                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                                    <div class="pro-list-price">
                                                        <span>$60.00</span>
                                                        <span class="old-price">$80.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('front-assets/images/product/pro-hm1-6.jpg')}}" alt="Product Style">
                                                    </a>
                                                    <div class="product-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span>Chair</span>
                                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                                    <div class="pro-list-price">
                                                        <span>$70.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('front-assets/images/product/pro-hm1-7.jpg')}}" alt="Product Style">
                                                    </a>
                                                    <div class="product-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span>Chair</span>
                                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                                    <div class="pro-list-price">
                                                        <span>$50.00</span>
                                                        <span class="old-price">$60.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-style text-center">
                                    <ul>
                                        <li><a class="prev" href="#"><i class="la la-angle-left"></i></a></li>
                                        <li><a href="#">01</a></li>
                                        <li><a href="#">02</a></li>
                                        <li><a class="active" href="#">03</a></li>
                                        <li><a href="#">04</a></li>
                                        <li><a href="#">05</a></li>
                                        <li><a href="#">06</a></li>
                                        <li><a class="next" href="#"><i class="la la-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-wrapper">
                            <div class="sidebar-widget">
                                <h4 class="sidebar-title">Search </h4>
                                <div class="sidebar-search mb-40 mt-20">
                                    <form class="sidebar-search-form" action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button>
                                            <i class="la la-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget shop-sidebar-border pt-40">
                                <h4 class="sidebar-title">Shop By Categories</h4>
                                <div class="shop-catigory mt-20">
                                    <ul id="faq">
                                        <li> <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-1">Women Fashion <i class="la la-angle-down"></i></a>
                                            <ul id="shop-catigory-1" class="panel-collapse collapse show">
                                                <li><a href="#">Dress </a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Sunglasses </a></li>
                                                <li><a href="#">Sweater </a></li>
                                                <li><a href="#">Handbag </a></li>
                                            </ul>
                                        </li>
                                        <li> <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-2">Men Fashion <i class="la la-angle-down"></i></a>
                                            <ul id="shop-catigory-2" class="panel-collapse collapse">
                                                <li><a href="#">Shirt </a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Sunglasses </a></li>
                                                <li><a href="#">Sweater </a></li>
                                                <li><a href="#">Jacket </a></li>
                                            </ul>
                                        </li>
                                        <li> <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-3">Furniture <i class="la la-angle-down"></i></a>
                                            <ul id="shop-catigory-3" class="panel-collapse collapse">
                                                <li><a href="#"> Chair</a></li>
                                                <li><a href="#">Lift Chair</a></li>
                                                <li><a href="#">Bunk Bed</a></li>
                                                <li><a href="#">Computer Desk</a></li>
                                                <li><a href="#">Bookcase</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="#">Lamp</a></li>
                                        <li> <a href="#">Electronics</a> </li>
                                        <li> <a href="#">Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-price-filter mt-35 shop-sidebar-border pt-40 sidebar-widget">
                                <h4 class="sidebar-title">Price Filter</h4>
                                <div class="price-filter mt-20">
                                    <span>Range:  $100.00 - 1.300.00 </span>
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget shop-sidebar-border pt-40 mt-40">
                                <h4 class="sidebar-title">Refine By </h4>
                                <div class="sidebar-widget-list mt-20">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox"> <a href="#">On Sale <span>4</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">New <span>5</span></a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">In Stock <span>6</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget pt-40 mt-40 shop-sidebar-border">
                                <h4 class="sidebar-title">Colour </h4>
                                <div class="sidebar-widget-list mt-20">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Green <span>7</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Cream <span>8</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Blue <span>9</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Black <span>3</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget pt-40 mt-40 shop-sidebar-border">
                                <h4 class="sidebar-title">Size </h4>
                                <div class="sidebar-widget-list mt-20">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">XL <span>4</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">L <span>5</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">SM <span>6</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">XXL <span>7</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget pt-40 mt-40 shop-sidebar-border">
                                <h4 class="sidebar-title">Popular Tags </h4>
                                <div class="sidebar-widget-tag mt-20">
                                    <ul>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">For Men</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Fashion</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection