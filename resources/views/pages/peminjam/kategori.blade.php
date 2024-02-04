@extends('layouts.home')

@section('title')
    E-Perpus | Kategori {{ $data->nama_kategori }}
@endsection

@section('content')
    <div class="row my-5 px-5 justify-content-center">
        <h3 class="text-white text-center" data-aos="fade-down" data-aos-delay="550">{{ $data->nama_kategori }}</h3>
        <hr class="horizontal light mt-3" data-aos="fade-down" data-aos-delay="600">
        @forelse ($buku as $item)
            <a href="{{ route('buku', $item->id) }}" class="col-lg-2 col-md-3 col-sm-6 col-12 card bg-gray-100 my-4 mx-4"
                style="height: 100px" data-aos="fade-down" data-aos-delay="700">
                <div class="d-flex w-100 h-100 align-items-center">
                    <i class="fa-solid fa-book-open fa-2xl" style="color: rgba(0, 0, 0, 0.5)"></i>
                    <div class="d-flex flex-column ms-3 h-100 justify-content-center mt-3">
                        <h6 class="text-black text-sm text-break">{{ $item->buku->judul }}
                        </h6>
                        <p class="text-xs text-secondary text-break">Oleh: {{ $item->buku->penulis }}</p>
                    </div>

                </div>
            </a>
        @empty
            <p class="ms-5 text-warning fw-bold" data-aos="fade-down" data-aos-delay="700">Buku Dengan Kategori
                {{ $data->nama_kategori }} Tidak Ditemukan</p>
        @endforelse

    </div>
@endsection
