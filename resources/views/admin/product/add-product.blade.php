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
                                <h4>افزودن دستبه بندی کتاب</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">

                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form method="post">
                                    <div class="form-group">
                                        <p>اسم کتاب:</p>
                                        <label for="t-text1" class="sr-only">اسم کتاب</label>
                                        <input id="t-text1" type="text" name="txt" placeholder="Some Text..."
                                               class="form-control" required>

                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="select-55">نویسنده</label>
                                            <select class="form-control" id="select-55">
                                                <option>Default select</option>
                                                <option>One</option>
                                                <option>Two</option>
                                                <option>Three</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword5">انتشارات</label>
                                            <select class="form-control" id="select-1">
                                                <option>Default select</option>
                                                <option>One</option>
                                                <option>Two</option>
                                                <option>Three</option>
                                            </select></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">توضیحات:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3"></textarea>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">صفحات</label>
                                            <input type="number" class="form-control" id="inputEmail4"
                                                   placeholder="عدد وارد کنید">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">سری چاپ</label>
                                            <input type="number" class="form-control" id="inputPassword4"
                                                   placeholder="سری چاپ">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">شابک</label>
                                            <input type="number" class="form-control" id="inputEmail4"
                                                   placeholder="شابک وارد کنید">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">سری چاپ</label>
                                            <input type="number" class="form-control" id="inputPassword4"
                                                   placeholder="سری چاپ">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">کد کتاب</label>
                                            <input type="number" class="form-control" id="inputEmail4"
                                                   placeholder="کد کتاب وارد کنید">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">مترجم</label>
                                            <select class="form-control">
                                                <option>تست یک</option>
                                                <option>تست دو</option>
                                                <option>تست سه</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">قیمت اصلی کتاب</label>
                                            <input type="number" class="form-control" id="inputEmail4"
                                                   placeholder="قیمت کتاب وارد کنید">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">قیمت کتاب با تخفیف:</label>
                                            <input type="number" class="form-control" id="inputEmail4"
                                                   placeholder="قیمت کتاب وارد کنید">
                                        </div>
                                    </div>

                                    <div class="form-group mb-4 mt-3">
                                        <div class="custom-file mb-4">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="txt" class="mt-4 btn btn-primary">
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
