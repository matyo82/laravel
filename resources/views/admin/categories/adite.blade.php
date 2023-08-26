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
                                        <h4>افزودن دستبه بندی کتاب</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post">
                                            <div class="form-group">
                                                <p>نوع دستبه بندی:</p>
                                                <label>
                                                    <select name="kay" class="form-control">
                                                        <option
                                                            value="mozo" {{ ($categorie->kay == 'mozo')?'selected=""':'' }}>
                                                            دسته بندی موضوعی
                                                        </option>
                                                        <option
                                                            value="dastan" {{ ($categorie->kay == 'dastan')?'selected=""':''}}>
                                                            انواع داستان
                                                        </option>
                                                        <option
                                                            value="javaez" {{ ($categorie->kay == 'javaez')?'selected=""':'' }}>
                                                            جوایز
                                                        </option>
                                                        <option
                                                            value="melal" {{ ($categorie->kay == 'melal')?'selected=""':''}}>
                                                            ادبیات ملل
                                                        </option>
                                                        <option
                                                            value="sen" {{ ($categorie->kay == 'sen')?'selected=""':'' }}>
                                                            گروه سنی
                                                        </option>
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <p>اسم دستبه بندی:</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input name="name" value="{{ $categorie->name }}" id="t-text"
                                                       type="text" placeholder="Some Text..."
                                                       class="form-control" required>
                                                <input type="submit" name="txt" class="mt-4 btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                </div>

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
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </p>
            </div>
        </div>
    </div>
@endsection
