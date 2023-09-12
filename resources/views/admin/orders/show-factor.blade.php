@extends('admin.layout.base')

@section('concat')
    <div id="content" class="main-content">

        <div class="row layout-top-spacing">

            <!--       start main             -->
            <div id="basic" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>فاکتور خرید شما برای سفارش با کد {{$order->id}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">

                              @if (session()->has('product-generated'))
                                  <div class="alert alert-success col-lg-6 col-12 mx-auto fs-5 text-center" role="alert">
                                      {{ session()->get('product-generated') }}
                                  </div>
                              @endif
                              
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                              <table class="table table-bordered table-striped mb-4">          
                                <thead>
                        <tr>
                            <th>#</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="table-primary">
                            <th>{{ $order->id }}</th>
                            <td class="width-8-rem text-left">
                                 <a href="{{route('orders.show-factor.details',$order)}}" class="btn btn-primary btn-sm text-white">
                                    جزئیات
                                </a>
                            </td>
                        </tr>
                                 <tr class="border-bottom">
                                    <th class="text-left text-white font-weight-bolder">نام مشتری</th>
                                    <td class="text-left text-white font-weight-bolder">
                                    {{ $order->user->name ?? '-' }}
                                    </td>
                                 </tr>    

								 <tr class="border-bottom">
                                    <th class="text-left text-white font-weight-bolder">ایمیل</th>
                                    <td class="text-left text-white font-weight-bolder">
                                    {{ $order->user->email ?? '-' }}
                                    </td>
                                 </tr>	

								 <tr class="border-bottom">
                                    <th class="text-left text-white font-weight-bolder">ادرس</th>
                                    <td class="text-left text-white font-weight-bolder">
                                    {{$order->address->address}}
                                    </td>
                                 </tr>
								 
								 <tr class="border-bottom">
                                    <th class="text-left text-white font-weight-bolder">پلاک</th>
                                    <td class="text-left text-white font-weight-bolder">
                                    {{$order->address->no}}
                                    </td>
                                 </tr>
								 
								 <tr class="border-bottom">
                                    <th class="text-left text-white font-weight-bolder">واحد</th>
                                    <td class="text-left text-white font-weight-bolder">
                                    {{$order->address->unit}}
                                    </td>
                                 </tr>
								 
								 <tr class="border-bottom">
                                    <th class="text-left text-white font-weight-bolder">نام تحویل گیرنده
                                    <td class="text-left text-white font-weight-bolder">
							        {{$order->address->recipient_first_name}}
                                    </td>
                                 </tr>
								 
								 <tr class="border-bottom">
                                    <th class="text-left text-white font-weight-bolder">نام خانوادگی تحویل گیرنده</th>
                                    <td class="text-left text-white font-weight-bolder">
                                    {{$order->address->recipient_last_name}}
                                    </td>
                                 </tr>
								 
								 <tr class="border-bottom">
                                    <th class="text-left text-white font-weight-bolder">درصد تخفیف اعمال شده</th>
                                    <td class="text-left text-white font-weight-bolder">
                                    {{ $order->order_discount_percentage ?? '-' }}%
                                    </td>
                                 </tr>	

								 <tr class="border-bottom">
                                    <th class="text-left text-white font-weight-bolder">مبلغ تخفیف اعمال شده</th>
                                    <td class="text-left text-white font-weight-bolder">
                                    {{ $order->order_discount_amount ?? '-' }}
                                    </td>
                                 </tr>
                               </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                    <!--       end main             -->
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </p>
            </div>
        </div>
    </div>
@endsection

