@extends('layouts.app')
@section('title')
    E-Perpus | Register
@endsection
@section('content')
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row">
                <div
                    class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column bg-primary">
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <img src="/assets/img/sign-up.svg" alt="" srcset="" data-aos="fade-right"
                            data-aos-delay="400">
                    </div>
                </div>
                <div
                    class="col-xl-5 px-5 col-lg-5 col-md-7 h-100 d-flex flex-column mx-lg-0 mx-auto position-absolute end-0 top-0 my-auto justify-content-center">
                    <div class="card card-plain justify-content-center position-relative me-5">
                        <div class="card-header pb-0 text-start">
                            <h4 class="font-weight-bolder" data-aos="fade-down">Sign Up</h4>
                            <p class="mb-0" data-aos="fade-down" data-aos-delay="100">Create account</p>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('sign-up') }}" method="POST">
                                @csrf
                                <div class="mb-3" data-aos="fade-down" data-aos-delay="200">
                                    <input type="email" class="form-control form-control-lg" placeholder="Email"
                                        aria-label="Email" name="email">
                                </div>
                                <div class="mb-3" data-aos="fade-down" data-aos-delay="200">
                                    <input type="text" class="form-control form-control-lg" placeholder="Username"
                                        aria-label="Username" name="username">
                                </div>
                                <div class="mb-3" data-aos="fade-down" data-aos-delay="300">
                                    <input type="text" class="form-control form-control-lg" placeholder="Password"
                                        aria-label="Password" name="password">
                                </div>
                                <div class="mb-3" data-aos="fade-down" data-aos-delay="200">
                                    <input type="text" class="form-control form-control-lg" placeholder="Nama lengkap"
                                        aria-label="Nama lengkap" name="nama_lengkap">
                                </div>
                                <div class="mb-3" data-aos="fade-down" data-aos-delay="200">
                                    <input type="text" class="form-control form-control-lg" placeholder="Alamat"
                                        aria-label="Alamat" name="alamat">
                                </div>

                                <div class="text-center" data-aos="fade-down" data-aos-delay="500">
                                    <button type="submit"
                                        class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Register</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto" data-aos="fade-down" data-aos-delay="600">
                                Already have an account?
                                <a href="{{ route('login') }}" class="text-primary font-weight-bold">Sign
                                    in</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
