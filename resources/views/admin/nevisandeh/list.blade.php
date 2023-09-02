@extends('admin.layout.base')

@section('concat')
    <div class="main-content">
        <div class="container">
            <div class="container">
                <div class="row layout-top-spacing">

                    <!--       start main             -->
                    <div id="basic" class="col-lg-12 layout-spacing">
                        <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>نویسنده ها</h4>
                                        </div>
                                    </div>
                                    @if (session()->has('success'))
                                        <div class="alert alert-success fs-5 text-center" role="alert">
                                            {{ session()->get('success') }}
                                        </div>
                                    @elseif (session()->has('failed'))
                                        <div class="alert alert-danger fs-5 text-center" role="alert">
                                            {{ session()->get('failed') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="form-group">
                                        <a href="{{ route('nevisandeh.create') }}" class="mt-4 btn btn-success">ایجاد</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mb-4">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">نام</th>
                                                    <th class="text-center">تصویر</th>
                                                    <th class="text-center">بیوگرافی</th>
                                                    <th class="text-center">عملیات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($nevisandehs as $nevisandeh)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <p style="padding-right: 15px " class="align-self-center mb-0">{{ $nevisandeh->name }}</p>
                                                            </div>
                                                        </td>
                                                        <td class="d-flex justify-content-center">
                                                            <img width="150" height="90" src="{{ Illuminate\Support\Facades\Storage::Url($nevisandeh->image) }}">
                                                        </td>
                                                        <td style="max-width: 20rem">{{ Illuminate\Support\Str::limit($nevisandeh->bio , 100 ) }}</td>
                                                        <td class=" text-center">
                                                            <div class="form-group">
                                                                <a href="{{ route('nevisandeh.edit', $nevisandeh) }}" class="mt-4 btn btn-primary">ویرایش</a>
                                                                <form class="d-inline" action="{{ route('nevisandeh.destroy', $nevisandeh) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="mt-4 btn btn-danger"type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
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
