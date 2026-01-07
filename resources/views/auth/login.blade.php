@extends('frontend.layouts.master')

@section('title')
    Login
@endsection

@section('content')
@include('frontend.components.breadcrumb')
    <section class="fp__signin" style="background: url({{ asset('frontend/images/login_bg.jpg') }});">
        <div class="fp__signin_overlay pt_125 xs_pt_95 pb_100 xs_pb_70">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                        <div class="fp__login_area">
                            <h2>selamat datang kembali!</h2>
                            <p>sign in untuk melanjutkan</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label for="email">email</label>
                                            <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label for="password">password</label>
                                            <input id="password" type="password" placeholder="Password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput fp__login_check_area">
                                            <div class="form-check">
                                                <input id="remember_me" class="form-check-input" type="checkbox"
                                                    id="flexCheckDefault" name="remember">
                                                <label for="remember_me" class="form-check-label" for="flexCheckDefault">
                                                    Ingat Saya
                                                </label>
                                            </div>
                                            <a href="{{ route('password.request') }}">Lupa Password ?</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <button type="submit" class="common_btn">login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="create_account">Belum Punya Akun ? <a href="{{ route('register') }}">Buat Akun Baru</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
