@extends('layouts.dashboard')

@section('title')
    Dashboard | Data Peminjaman
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-7 mt-4" data-aos="fade-down" data-aos-delay="200">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <div class="row">
                            <h6 class="mb-0 col-6">Buku Terpinjam</h6>
                            <div class="col-6 d-flex justify-content-end align-items-end">
                                <a href="" class="btn btn-primary"><i
                                        class="fa-solid fa-rectangle-list me-2"></i>Lihat
                                    Semua</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            @forelse ($dipinjam as $item)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">{{ $item->buku->judul }}</h6>
                                        <span class="mb-2 text-xs">Nama Peminjam : <span
                                                class="text-dark font-weight-bold ms-sm-2">{{ $item->user->nama_lengkap }}</span></span>
                                        <span class="mb-2 text-xs">Email : <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $item->user->email }}</span></span>
                                        <span class="text-xs">Tanggal Peminjaman : <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $item->tanggal_peminjaman }}</span></span>
                                        <span class="text-xs">Tanggal Pengembalian : <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $item->tanggal_pengembalian }}</span></span>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                    </div>
                                </li>
                            @empty
                                <p class="ms-5 text-warning fw-bold">Data Tidak Temukan</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mt-4" data-aos="fade-down" data-aos-delay="400">
                <div class="card h-100 mb-4">
                    <div class="card-header pb-0 px-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-0">Buku Dikembalikan</h6>
                            </div>

                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Hari Ini</h6>
                        <ul class="list-group">
                            @forelse ($dikembalikan as $item)
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">{{ $item->buku->judul }}</h6>
                                            <span class="text-xs">Tanggal Dikembalikan :
                                                {{ $item->tanggal_dikembalikan }}</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                                        - $ 2,500
                                    </div>
                                </li>
                            @empty
                                <p class="ms-5 text-warning fw-bold">Data Tidak Temukan</p>
                            @endforelse
                        </ul>
                        <hr class="horizontal dark mt-3">
                        <h6 class="my-3">Lewat Batas Pengembalian</h6>
                        <ul class="list-group">
                            @forelse ($terlambat as $item)
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="fas fa-arrow-up"></i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">{{ $item->buku->judul }}</h6>
                                            <span class="text-xs">{{ $item->user->nama_lengkap }}</span>
                                            <span class="text-xs">{{ $item->user->email }}</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + $ 750
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
