@extends('layouts.home')

@section('title')
    E - Perpus | Buku yang dipinjam
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 mt-4" data-aos="fade-down" data-aos-delay="200">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <div class="row">
                            <h6 class="mb-0 col-12">Buku yang kamu pinjam</h6>
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            @forelse ($data as $item)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">{{ $item->buku->judul }}</h6>
                                        <span class="text-xs">Tanggal Peminjaman : <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $item->tanggal_peminjaman }}</span></span>
                                        <span class="text-xs">Tanggal Pengembalian : <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $item->tanggal_pengembalian }}</span></span>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                            href="javascript:;">Kembalikan buku</a>
                                    </div>
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
