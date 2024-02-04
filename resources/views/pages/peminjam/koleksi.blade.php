@extends('layouts.home')

@section('title')
    E - Perpus | Buku yang dipinjam
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 text-white">
                <h3 class="text-center text-white">Koleksi Anda</h3>
                <hr class="horizontal light mt-3">
            </div>
            <div class="col-12 col-md-6 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            @forelse ($data as $item)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <a href="{{ route('buku', $item->id) }}">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-3 text-sm">{{ $item->buku->judul }}</h6>
                                            <span class="text-xs" style="color: black">Penulis : <span
                                                    class="text-dark ms-sm-2 font-weight-bold">{{ $item->buku->penulis }}</span></span>
                                            <span class="text-xs" style="color: black">Penerbit : <span
                                                    class="text-dark ms-sm-2 font-weight-bold">{{ $item->buku->penerbit }}</span></span>
                                        </div>
                                        <div class="ms-auto text-end">
                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                href="{{ route('kembalikan-buku', $item->id) }}">Hapus dari koleksi</a>
                                        </div>
                                    </a>

                                </li>
                            @empty
                                <p class="ms-5 text-warning fw-bold">Data Tidak Temukan</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
