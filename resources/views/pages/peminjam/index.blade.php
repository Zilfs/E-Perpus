@extends('layouts.home')

@section('title')
    E-Perpus | Home
@endsection

@section('content')
    <div class="row d-lg-block border-radius-2xl position-relative"
        style="height: 500px; background-image: url('/assets/img/hero-img.jpg'); overflow: hidden;" data-aos="fade-down">
        <span class="mask bg-dark opacity-6"></span>
        <div class="d-flex flex-column w-100 h-100 justify-content-center align-items-center position-relative">
            <h2 class="text-white" data-aos="fade-down" data-aos-delay="100">Welcome</h2>
            <p class="text-white text-center" data-aos="fade-down" data-aos-delay="200">Sambut era baru literasi digital
                bersama kami di Aplikasi E-Perpustakaan. 🎉😁
            </p>
        </div>
    </div>
    <div class="row my-5 px-5 justify-content-center">
        <h3 class="text-black text-center" data-aos="fade-down" data-aos-delay="300">Kategori Buku</h3>
        <hr class="horizontal dark mt-3" data-aos="fade-down" data-aos-delay="350">
        @forelse ($kategori as $item)
            <a href="{{ route('kategori', $item->id) }}"
                class="col-lg-3 col-md-6 col-12 card bg-primary d-flex flex-column my-4 mx-4" style="height: 200px"
                data-aos="fade-down" data-aos-delay="450">
                <div class="d-flex w-100 h-50 pt-4">
                    <i class="fa-solid fa-book fa-2xl w-100 h-100" style="color: #ffffff;"></i>
                </div>
                <div class="d-flex h-50 w-100 justify-content-center align-items-center">
                    <h4 class="text-center text-white">{{ $item->nama_kategori }}</h4>
                </div>
            </a>
        @empty
            <p class="ms-5 text-warning fw-bold" data-aos="fade-down" data-aos-delay="450">Data Kategori Tidak Ditemukan</p>
        @endforelse

    </div>
    <div class="row my-5 px-5 justify-content-center">
        <h3 class="text-black text-center" data-aos="fade-down" data-aos-delay="550">Direkomendasikan</h3>
        <hr class="horizontal dark mt-3" data-aos="fade-down" data-aos-delay="600">
        @forelse ($buku as $item)
            <a href="{{ route('buku', $item->id) }}" class="col-lg-2 col-md-3 col-sm-6 col-12 card bg-gray-100 my-4 mx-4"
                style="height: 100px" data-aos="fade-down" data-aos-delay="700">
                <div class="d-flex w-100 h-100 align-items-center">
                    <i class="fa-solid fa-book-open fa-2xl" style="color: rgba(0, 0, 0, 0.5)"></i>
                    <div class="d-flex flex-column ms-3 h-100 justify-content-center mt-3">
                        <h6 class="text-black text-sm text-break">{{ $item->judul }}
                        </h6>
                        <p class="text-xs text-secondary text-break">Oleh: {{ $item->penulis }}</p>
                    </div>

                </div>
            </a>
        @empty
            <p class="ms-5 text-warning fw-bold" data-aos="fade-down" data-aos-delay="700">Data Buku Tidak Ditemukan</p>
        @endforelse

    </div>
@endsection
