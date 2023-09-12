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
                                        <input id="t-text1" type="text" name="name_book" placeholder="Some Text..." class="form-control" value="{{ old('name_book') }}" required>
												@error('name_book')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="select-55">نویسنده</label>
                                            <select class="form-control" id="select-55" name="author_id" value="{{ old('author_id') }}">
                                                @foreach ($authors as $author)
                                                    <option value="{{ $author->id }}">{{$author->name }}</option>
                                                @endforeach
                                            </select>
												@error('author_id')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="select-55">ژانر</label>
                                            <select class="form-control" id="select-55" name="genre_id" value="{{ old('genre_id') }}">
                                                @foreach ($genres as $genre)
                                                    <option value="{{ $genre->id }}">{{$genre->name }}</option>
                                                @endforeach
                                            </select>
												@error('genre_id')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                        </div>

										<div class="form-group col-md-12">
                                            <label for="select-55">رده سنی</label>
                                            <select class="form-control" id="select-55" name="age_id" value="{{ old('age_id') }}">
                                                @foreach ($ages as $age)
                                                    <option value="{{ $age->id }}">{{$age->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('age_id')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="inputPassword5">انتشارات</label>
                                            <input id="inputPassword5" type="text" name="entesharat" placeholder="متال: انتشارات جنگل" class="form-control" value="{{ old('entesharat') }}" required>
                                            	@error('entesharat')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">توضیحات:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ old('description') }}</textarea>
												@error('description')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">شابک</label>
                                            <input type="number" class="form-control" id="inputEmail4" placeholder="شابک وارد کنید" name="shabak" value="{{ old('shabak') }}">
												@error('shabak')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">کد کتاب</label>
                                            <input type="number" class="form-control" id="inputEmail4" placeholder="کد کتاب وارد کنید" name="code_book" value="{{ old('code_book') }}">
												@error('code_book')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">مترجم</label>
                                            <input id="inputPassword4" type="text" name="motarjem" placeholder="متال: قارپو زاده" class="form-control" value="{{ old('motarjem') }}" required>
												@error('motarjem')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">قیمت اصلی کتاب</label>
                                            <input type="number" class="form-control" id="inputEmail4" placeholder="قیمت کتاب وارد کنید" name="main_price" value="{{ old('main_price') }}">
												@error('main_price')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">قیمت کتاب با تخفیف:</label>
                                            <input type="number" class="form-control" id="inputEmail4" placeholder="قیمت کتاب وارد کنید" name="off_price" value="{{ old('off_price') }}">
												@error('off_price')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-4 mt-3">
                                        <div class="custom-file mb-4">
                                            <label class="custom-file-label" for="customFile">انتخاب تصویر</label>
                                            <input type="file" class="custom-file-input" id="customFile" name="image">
												@error('image')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <div class="n-chk">
                                                    <p>وضعیت انتشار</p>
                                                    <select class="form-control" id="select-55" name="status" value="{{ old('status') }}">
                                                        <option value="1">فعال</option>
                                                        <option value="0">غیر فعال</option>
                                                    </select>
												@error('status')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">تعداد موجودی در انبار</label>
                                                <input type="number" class="form-control" id="inputPassword4" placeholder="برای مثال: 222" name="inventory" value="{{ old('inventory') }}">
												@error('inventory')
                                                 <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                   <strong>
                                                    {{ $message }}
                                                   </strong>
                                                 </span>
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
