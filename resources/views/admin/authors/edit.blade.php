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
                                        <h4>ویرایش نویسنده</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post" enctype="multipart/form-data" action="{{ route('author.update', $author) }}">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <p>اسم نویسنده:</p>
                                                <label for="t-text" class="sr-only">اسم نویسنده</label>
                                                <input id="t-text" type="text" name="name" placeholder="راجب نویسنده توضیح دهید" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?: $author->name }}" required>
                                                @error('name')
                                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                <label for="bio">توضیحات:</label>
                                                <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" id="bio" rows="3" autocomplete="off">{{ old('bio') ?: $author->bio }}</textarea>

                                                @error('bio')
                                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-4 mt-4">
                                                <div class="custom-file mb-4">
                                                    <label class="custom-file-label @error('image') is-invalid @enderror" for="customFile">انتخاب تصویر</label>
                                                    <input type="file" class="custom-file-input" id="customFile" name="image">
                                                    @error('image')
                                                        <div class="alert alert-danger mt-4">{{ $message }}</div>
                                                    @enderror
                                                    <section class="row mt-5 d-flex justify-content-center">
                                                        <img src="{{asset($author->image) }}" alt="" width="300" height="300">
                                                    </section>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="mt-4 btn btn-primary">ویرایش نویسنده</button>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </p>
            </div>
        </div>
    </div>
@endsection
