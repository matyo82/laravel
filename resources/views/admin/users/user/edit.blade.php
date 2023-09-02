@extends('admin.layout.base')

@section('concat')
    <div id="content" class="main-content">
        <div class="container">

            <div class="container">
                <div class="row layout-top-spacing">

                    <!--       start main             -->
                    <div id="basic" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>ویرایش کاربر</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post" action="{{route('users.update',$user)}}">
										@csrf
										@method('put')
                                            <div class="form-group">
                                                <p>نام:</p>
                                                <label for="t-text" class="sr-only">نام</label>
                                                <input id="t-text" type="text" name="name" placeholder="Some Text..."
                                                       class="form-control" value="{{old('name',$user->name)}}"   required>
												@error('name')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">ایمیل:</label>
                                                <input id="t-text" type="text" name="email" placeholder="Some Text..."
                                                       class="form-control" value="{{old('email',$user->email)}}"  disabled required>
												@error('email')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                            </div>  
											
											<div class="form-group">
                                                <label for="exampleFormControlTextarea1">نقش:</label>
                                                <select class="form-control" name="user_type">
												 <option value="1" @if(old('user_type', $user->user_type) == 1) selected @endif>ادمین</option>
												 <option value="0" @if(old('user_type', $user->user_type) == 0) selected @endif> کاربر معمولی</option>
												</select>
												
												@error('user_type')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                            </div>		

											<div class="form-group">
                                                <label for="exampleFormControlTextarea1">وضعیت:</label>
                                                <select class="form-control" name="status">
												 <option value="1" @if(old('status', $user->status) == 1) selected @endif>فعال</option>
												 <option value="0" @if(old('status', $user->status) == 0) selected @endif>غیر فعال</option>
												</select>
												
												@error('status')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <button class="mt-4 btn btn-primary">submit</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>

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
