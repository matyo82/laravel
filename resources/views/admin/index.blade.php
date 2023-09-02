@extends('admin.layout.base')

@section('concat')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3>داشبورد</h3>
            </div>
        </div>

        <div class="row layout-top-spacing">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-two">

                    <div class="widget-heading">
                        <h5 class="">سفارشات اخیر </h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="th-content">Customer</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Product</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Invoice</div>
                                    </th>
                                    <th>
                                        <div class="th-content th-heading">Price</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Status</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                                                   alt="avatar">Andy King
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Nike Sport</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#76894</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$88.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span
                                                class="badge outline-badge-primary">Shipped</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                                                   alt="avatar">Irene Collins
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Speakers</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#75844</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$84.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span
                                                class="badge outline-badge-success">Paid</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                                                   alt="avatar">Laurie Fox
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Camera</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#66894</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$126.04</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span
                                                class="badge outline-badge-danger">Pending</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                                                   alt="avatar">Luke Ivory
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Headphone</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#46894</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$56.07</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span
                                                class="badge outline-badge-success">Paid</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                                                   alt="avatar">Ryan Collins
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Sport</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#89891</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$108.09</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span
                                                class="badge outline-badge-primary">Shipped</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                                                   alt="avatar">Nia Hillyer
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Sunglasses</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#26974</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$168.09</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span
                                                class="badge outline-badge-primary">Shipped</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                                                   alt="avatar">Sonia Shaw
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content product-brand">Watch</div>
                                    </td>
                                    <td>
                                        <div class="td-content">#76844</div>
                                    </td>
                                    <td>
                                        <div class="td-content pricing"><span class="">$110.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span
                                                class="badge outline-badge-success">Paid</span></div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">

                    <div class="widget-heading">
                        <h5 class="">محصولات پر فروش </h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="th-content">Product</div>
                                    </th>
                                    <th>
                                        <div class="th-content th-heading">Price</div>
                                    </th>
                                    <th>
                                        <div class="th-content th-heading">Discount</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Sold</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Source</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                                                  alt="product">Speakers
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$84.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$10.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content">240</div>
                                    </td>
                                    <td>
                                        <div class="td-content"><a href="javascript:void(0);" class="">Direct</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                                                  alt="product">Sunglasses
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$56.07</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$5.07</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content">190</div>
                                    </td>
                                    <td>
                                        <div class="td-content"><a href="javascript:void(0);" class="">Google</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                                                  alt="product">Watch
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$88.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$20.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content">66</div>
                                    </td>
                                    <td>
                                        <div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                                                  alt="product">Laptop
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$110.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$33.00</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content">35</div>
                                    </td>
                                    <td>
                                        <div class="td-content"><a href="javascript:void(0);" class="">Email</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                                                  alt="product">Camera
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$126.04</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$26.04</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content">30</div>
                                    </td>
                                    <td>
                                        <div class="td-content"><a href="javascript:void(0);" class="">Referral</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                                                  alt="product">Shoes
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$108.09</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$47.09</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content">130</div>
                                    </td>
                                    <td>
                                        <div class="td-content"><a href="javascript:void(0);" class="">Google</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                                                  alt="product">Headphone
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="pricing">$168.09</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content"><span class="discount-pricing">$60.09</span></div>
                                    </td>
                                    <td>
                                        <div class="td-content">170</div>
                                    </td>
                                    <td>
                                        <div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All
                    rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-heart">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </p>
            </div>
        </div>

    </div>
@endsection
