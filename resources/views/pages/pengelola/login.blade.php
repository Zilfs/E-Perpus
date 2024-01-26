@extends('layouts.app')
@section('title')
    E-Perpus | Login - Petugas
@endsection
@section('content')
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-start">
                            <h4 class="font-weight-bolder" data-aos="fade-down">Sign In</h4>
                            <p class="mb-0" data-aos="fade-down" data-aos-delay="100">Enter your email and password to sign
                                in</p>
                        </div>
                        <div class="card-body">
                            <form role="form">
                                <div class="mb-3" data-aos="fade-down" data-aos-delay="200">
                                    <input type="email" class="form-control form-control-lg" placeholder="Email"
                                        aria-label="Email">
                                </div>
                                <div class="mb-3" data-aos="fade-down" data-aos-delay="300">
                                    <input type="email" class="form-control form-control-lg" placeholder="Password"
                                        aria-label="Password">
                                </div>
                                <div class="form-check form-switch" data-aos="fade-down" data-aos-delay="400">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <div class="text-center" data-aos="fade-down" data-aos-delay="500">
                                    <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign
                                        in</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto" data-aos="fade-down" data-aos-delay="600">
                                Don't have an account?
                                <a href="{{ route('register') }}" class="text-primary font-weight-bold">Sign
                                    up</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                    <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                        style="background-image: url('/assets/img/library-book.jpg');background-size: cover;"
                        data-aos="fade-left" data-aos-delay="200">
                        <span class="mask bg-dark opacity-6"></span>
                        <h4 class="mt-5 text-white font-weight-bolder position-relative" data-aos="fade-left"
                            data-aos-delay="400">"Halo pembaca setia! 👋"</h4>
                        <p class="text-white position-relative" data-aos="fade-left" data-aos-delay="600">
                            Selamat datang di E-Perpus, Saatnya bergabung dalam era baru literasi digital bersama
                            kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
