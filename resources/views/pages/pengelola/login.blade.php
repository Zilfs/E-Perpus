@extends('layouts.app')
@section('title')
    E-Perpus | Login - Pengelola
@endsection
@section('content')
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                    <div class="card">
                        <div class="card-header pb-0 text-start">
                            <h4 class="font-weight-bolder" data-aos="fade-down">Sign In</h4>
                            <p class="mb-5" data-aos="fade-down" data-aos-delay="100">Selamat datang 🎉, Login dan kelola
                                koleksi dan layanan perpustakaan dengan lebih efisien</p>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('authenticate-pengelola') }}" method="POST">
                                @csrf
                                <div class="mb-3" data-aos="fade-down" data-aos-delay="200">
                                    <input type="email" class="form-control form-control-lg" placeholder="Email"
                                        name="email" aria-label="Email">
                                </div>
                                <div class="mb-3" data-aos="fade-down" data-aos-delay="300">
                                    <input type="password" class="form-control form-control-lg" placeholder="Password"
                                        name="password" aria-label="Password" id="passwordField">
                                </div>
                                <div class="form-check form-switch mb-5" data-aos="fade-down" data-aos-delay="400">
                                    <input class="form-check-input" type="checkbox" id="showPw" onclick="showPassword()">
                                    <label class="form-check-label" for="rememberMe">Show Password</label>
                                </div>
                                <div class="text-center" data-aos="fade-down" data-aos-delay="500">
                                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign
                                        in</button>
                                    <a class="btn btn-lg btn-secondary btn-lg w-100 mt-4 mb-0"
                                        href="{{ route('login') }}">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
