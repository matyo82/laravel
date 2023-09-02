@extends('front.layouts.master')


@section('head-tag')
    <title>فروشگاه</title>
@endsection

@section('content')
    <div class="breadcrumb-area bg-img" style="background-image:url({{ asset('front-assets/images/bg/breadcrumb.jpg') }});">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>صفحه فروشگاه</h2>
                <ul>
                    <li>
                        <a href="index.html">خانه</a>
                    </li>
                    <li class="active">فروشگاه </li>
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
                                <a class="active" href="#shop-1" data-toggle="tab"><i class="la la-th"></i></a>
                                <a href="#shop-2" data-toggle="tab"><i class="la la-list-ul"></i></a>
                            </div>
                            <p>نمایش {{ $products->count() }} نتیجه</p>
                        </div>
                        <div class="product-sorting-wrapper">
                            <div class="product-shorting shorting-style">
                                <label>صفحه:</label>
                                <select class="text-center">
                                    <option value=""> 20</option>
                                    <option value=""> 23</option>
                                    <option value=""> 30</option>
                                </select>
                            </div>
                            <div class="product-show shorting-style">
                                <label>مرتب بندی:</label>
                                <select class="text-center">
                                    <option value="">قیمت</option>
                                    <option value="">موجودی</option>
                                    <option value="">وضعیت</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="product-details.html"><img src="{{ Illuminate\Support\Facades\Storage::Url($product->image) }}" alt="product"></a>
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <span>Chair</span>
                                                    <h4><a href="product-details.html">{{ $product->name_book }}</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price d-flex">
                                                            <span class="ml-1">تومان</span>
                                                            <span>{{ $product->main_price }}</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ اضافه به سبد خرید</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane">
                                @foreach ($products as $product)
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img src="{{ Illuminate\Support\Facades\Storage::Url($product->image) }}" alt="Product Style">
                                                    </a>
                                                    <div class="product-list-quickview">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span>Chair</span>
                                                    <h4><a href="product-details.html">{{ $product->name_book }}</a></h4>
                                                    <div class="pro-list-price">
                                                        <span>قیمت با تخفیف {{ $product->off_price }}</span>
                                                        <span class="old-price">قیمت اصلی {{ $product->main_price }}</span>
                                                    </div>
                                                    <p>{{ $product->description }}</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="pagination-style text-center">
                                {{ $products->links() }}
                                {{-- <ul>
                                    <li><a class="prev" href="#"><i class="la la-angle-left"></i></a></li>
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a class="active" href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">05</a></li>
                                    <li><a href="#">06</a></li>
                                    <li><a class="next" href="#"><i class="la la-angle-right"></i></a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-wrapper">
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title text-end">جست و جو </h4>
                            <div class="sidebar-search mb-40 mt-20">
                                <form class="sidebar-search-form" action="#">
                                    <input type="text" placeholder="اینجا جست و جو کنید...">
                                    <button>
                                        <i class="la la-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget shop-sidebar-border pt-40">
                            <h4 class="sidebar-title">فروشگاه بر اساس دسته بندی</h4>
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
                            <h4 class="sidebar-title">فیلتر قیمت</h4>
                            <div class="price-filter mt-20">
                                <span>محدوده قیمت : 0 - 500,000 تومان</span>
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <div class="label-input">
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                    </div>
                                    <button type="button">فیلتر</button>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget pt-40 mt-40 shop-sidebar-border">
                            <h4 class="sidebar-title">رنگ ها </h4>
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
                            <h4 class="sidebar-title">اندازه </h4>
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
                            <h4 class="sidebar-title">تگ های محبوب </h4>
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
