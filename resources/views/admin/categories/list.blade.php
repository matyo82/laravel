@extends('admin.layout.base')
<?php
$cats = [['mozo', 'موضوع'],
    ['dastan', 'داستان'],
    ['javaez', 'جوایز'],
    ['melal', 'ادبیات ملل'],
    ['sen', 'رده سنی']];
?>
@section('concat')
    <div class="main-content">
        <div class="container">
            <div class="container">
                <div class="row layout-top-spacing">

                    <!--       start main             -->
                    <div id="basic" class="col-lg-12 layout-spacing">
                        <div id="tableFooter" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>لیست دسته بندی ها</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-condensed mb-4">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>name</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cats as $cat)
                                                <tr>
                                                    <th colspan="3" style="color: white">{{ $cat[1] }}</th>
                                                </tr>
                                                @if(isset($list[$cat[0]]))
                                                    @foreach($list[$cat[0]] as $kay=>$item)
                                                        <tr>
                                                            <td>{{ $kay + 1 }}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td class="text-center">
                                                                <ul class="table-controls">
                                                                    <li>
                                                                        <a href="{{ route('categorie.edit',$item->id) }}" data-toggle="tooltip"
                                                                           data-placement="top" title="Edit">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24"
                                                                                 height="24" viewBox="0 0 24 24"
                                                                                 fill="none"
                                                                                 stroke="currentColor"
                                                                                 stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-check-circle text-primary">
                                                                                <path
                                                                                    d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                                                <polyline
                                                                                    points="22 4 12 14.01 9 11.01">
                                                                                </polyline>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form
                                                                            action="{{ route('categorie.destroy',$item->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button
                                                                                style="background: none; border: none"
                                                                                type="submit" data-toggle="tooltip"
                                                                                data-placement="top" title="Delete">
                                                                                <svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24"
                                                                                    height="24" viewBox="0 0 24 24"
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-x-circle text-danger">
                                                                                    <circle cx="12" cy="12"
                                                                                            r="10"></circle>
                                                                                    <line x1="15" y1="9" x2="9"
                                                                                          y2="15"></line>
                                                                                    <line x1="9" y1="9" x2="15"
                                                                                          y2="15"></line>
                                                                                </svg>
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <th colspan="3" style="color: red">هیچ موردی وجود ندارد</th>
                                                    </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>name</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
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
