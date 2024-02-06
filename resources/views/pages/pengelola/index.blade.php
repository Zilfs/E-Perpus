@extends('layouts.dashboard')

@section('title')
    Dashboard Pengelola
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card" data-aos="fade-down">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Buku Terpinjam</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $buku_terpinjam }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle align-items-center d-flex justify-content-center">
                                    <i class="fa-solid fa-book fa-lg" style="color: #ffffff;" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Buku</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $jumlah_buku }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle align-items-center d-flex justify-content-center">
                                    <i class="fa-solid fa-book-open fa-lg" aria-hidden="true" style="color: #ffffff;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card" data-aos="fade-down" data-aos-delay="200">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Kategori Buku</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $kategori_buku }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card" data-aos="fade-down" data-aos-delay="300">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Pembaca</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $jumlah_pembaca }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle align-items-center d-flex justify-content-center">
                                    <i class="fa-solid fa-users fa-lg" aria-hidden="true" style="color: #ffffff;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 mb-lg-0 mb-4">
                <div class="card" data-aos="fade-down" data-aos-delay="400">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">Peminjaman Hari ini</h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center ">
                            <tbody>
                                @forelse ($peminjaman_hari_ini as $item)
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $item->user->email }}</p>
                                                    <h6 class="text-sm mb-0">{{ $item->user->nama_lengkap }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Buku:</p>
                                                <h6 class="text-sm mb-0">{{ $item->buku->judul }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Tanggal dipinjam:</p>
                                                <h6 class="text-sm mb-0">{{ $item->tanggal_peminjaman }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Tanggal dikembalikan:</p>
                                                <h6 class="text-sm mb-0">
                                                    {{ $item->tanggal_dikembalikan ?? 'Buku belum dikembalikan' }}</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Status:</p>
                                                <h6
                                                    class="text-sm mb-0 {{ $item->status_peminjaman == 'DIPINJAM' ? 'text-primary' : 'text-success' }}">
                                                    {{ $item->status_peminjaman }}</h6>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <p class="ms-5 text-warning fw-bold">Data Tidak Temukan</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
