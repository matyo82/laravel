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
                                            <h4>کاربران ادمین </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>role</th>
                                                    <th>status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($admins as $admin)
                                                    @if ($auth_user_id != $admin)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="usr-img-frame mr-2 rounded-circle">
                                                                        <img alt="avatar" class="img-fluid rounded-circle"
                                                                            src="{{ asset('assets/img/90x90.jpg') }}">
                                                                    </div>
                                                                    <p class="align-self-center mb-0">{{ $admin->name }}
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td>{{ $admin->email }}</td>
                                                            <td>{{ $admin->user_type == 0 ? 'user' : 'admin' }}</td>
                                                            <td>{{ $admin->status == 0 ? 'disable' : 'enable' }}</td>
                                                            <td class=" text-center">
                                                                <div class="form-group">
                                                                    <a href="{{ route('admins.edit', $admin) }}"
                                                                        class="mt-4 btn btn-primary">ویرایش</a>
                                                                    <a href="#"
                                                                        class="mt-4 btn btn-success">جزِییات</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg>
                </p>
            </div>
        </div>
    </div>
@endsection
