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
                                <h4>افزودن کتاب</h4>
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
                                <form method="post" enctype="multipart/form-data" action="{{ route('product.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <p>اسم کتاب:</p>
                                        <label for="t-text1" class="sr-only">اسم کتاب</label>
                                        <input id="t-text1" type="text" name="name_book" placeholder="Some Text..." class="form-control @error('name_book') is-invalid @enderror" value="{{ old('name_book') }}" required>
                                        @error('name_book')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="select-55">نویسنده</label>
                                            <select class="form-control @error('nevisande_id') is-invalid @enderror" id="select-55" name="nevisande_id" value="{{ old('nevisande_id') }}">
                                                @foreach ($nevisandeh as $item)
                                                    <option value="{{ $item[0]->id }}">{{ $item[0]->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('nevisande_id')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword5">انتشارات</label>
                                            <input id="inputPassword5" type="text" name="entesharat" placeholder="متال: انتشارات جنگل" class="form-control  @error('entesharat') is-invalid @enderror" value="{{ old('entesharat') }}" required>
                                            @error('entesharat')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">توضیحات:</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" value="{{ old('description') }}" rows="3" name="description"></textarea>
                                        @error('description')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">شابک</label>
                                            <input type="number" class="form-control @error('shabak') is-invalid @enderror" id="inputEmail4" placeholder="شابک وارد کنید" name="shabak" value="{{ old('shabak') }}">
                                            @error('shabak')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">کد کتاب</label>
                                            <input type="number" class="form-control @error('code_book') is-invalid @enderror" id="inputEmail4" placeholder="کد کتاب وارد کنید" name="code_book" value="{{ old('code_book') }}">
                                            @error('code-book')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">مترجم</label>
                                            <input id="inputPassword4" type="text" name="motarjem" placeholder="متال: قارپو زاده" class="form-control @error('motarjem') is-invalid @enderror" value="{{ old('motarjem') }}" required>
                                            @error('motarjem')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">قیمت اصلی کتاب</label>
                                            <input type="number" class="form-control @error('main_price') is-invalid @enderror" id="inputEmail4" placeholder="قیمت کتاب وارد کنید" name="main_price" value="{{ old('main_price') }}">
                                            @error('main_price')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">قیمت کتاب با تخفیف:</label>
                                            <input type="number" class="form-control @error('off_price') is-invalid @enderror" id="inputEmail4" placeholder="قیمت کتاب وارد کنید" name="off_price" value="{{ old('off_price') }}">
                                            @error('off_price')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-4 mt-3">
                                        <div class="custom-file mb-4">
                                            <label class="custom-file-label @error('image') is-invalid @enderror" for="customFile">انتخاب تصویر</label>
                                            <input type="file" class="custom-file-input" id="customFile" name="image">
                                            @error('image')
                                                <div class="alert alert-danger mt-4">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <div class="n-chk">
                                                    <p>وضعیت انتشار</p>
                                                    <select class="form-control @error('status') is-invalid @enderror" id="select-55" name="status" value="{{ old('status') }}">
                                                        <option value="active">فعال</option>
                                                        <option value="disabled">غیر فعال</option>
                                                    </select>
                                                    @error('status')
                                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">تعداد موجودی در انبار</label>
                                                <input type="number" class="form-control @error('inventory') is-invalid @enderror" id="inputPassword4" placeholder="برای مثال: 222" name="inventory" value="{{ old('inventory') }}">
                                                @error('inventory')
                                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="mt-4 btn btn-primary">افزودن محصول</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!--       end main             -->
                </div>

                <div class="row">

                    <div id="form_grid_layouts" class="col-lg-12">
                        <div class="seperator-header">
                            <h4 class="">لیست دسته بندی ها</h4>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </p>
            </div>
        </div>
    </div>
@endsection
