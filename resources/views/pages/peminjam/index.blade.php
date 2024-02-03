@extends('layouts.home')

@section('content')
    <div class="row d-lg-block border-radius-2xl position-relative"
        style="height: 500px; background-image: url('/assets/img/hero-img.jpg'); overflow: hidden;">
        <span class="mask bg-dark opacity-6"></span>
        <div class="d-flex flex-column w-100 h-100 justify-content-center align-items-center position-relative">
            <h2 class="text-white">Welcome</h2>
            <p class="text-white">Sambut era baru literasi digital bersama kami di Aplikasi E-Perpustakaan. 🎉😁</p>
        </div>
    </div>
    <div class="row my-5 px-5 justify-content-center">
        <h3 class="text-black text-center">Kategori Buku</h3>
        <hr class="horizontal dark mt-3">
        @forelse ($kategori as $item)
            <a href="" class="col-lg-3 col-md-6 col-12 card bg-primary d-flex flex-column my-4 mx-4"
                style="height: 200px">
                <div class="d-flex w-100 h-50 pt-4">
                    <i class="fa-solid fa-book fa-2xl w-100 h-100" style="color: #ffffff;"></i>
                </div>
                <div class="d-flex h-50 w-100 justify-content-center align-items-center">
                    <h4 class="text-center text-white">{{ $item->nama_kategori }}</h4>
                </div>
            </a>
        @empty
            <p class="ms-5 text-warning fw-bold">Data Kategori Tidak Ditemukan</p>
        @endforelse

    </div>
@endsection
