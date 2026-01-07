@extends('frontend.layouts.master')

@section('title')
    Daftar
@endsection

@section('content')
@include('frontend.components.breadcrumb')
    <section class="fp__signup" style="background: url({{ asset('frontend/images/login_bg.jpg') }});">
        <div class="fp__signup_overlay pt_125 xs_pt_95 pb_100 xs_pb_70">
            <div class=" container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                        <div class="fp__login_area">
                            <h2>selamat datang!</h2>
                            <p>daftar untuk melanjutkan</p>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label for="name">nama</label>
                                            <input type="text" placeholder="Nama" name="name" value="{{ old('name') }}" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label for="email">email</label>
                                            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label for="password">password</label>
                                            <input type="password" placeholder="Password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label for="password_confirmation">konfirmasi password</label>
                                            <input type="password" placeholder="Konfirmasi Password" name="password_confirmation" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <button type="submit" class="common_btn">daftar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="create_account">sudah punya akun ? <a href="{{ route('login') }}">login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
