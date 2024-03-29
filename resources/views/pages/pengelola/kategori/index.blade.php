@extends('layouts.dashboard')

@section('title')
    Dashboard | Data Kategori Buku
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4" data-aos="fade-down" data-aos-duration="500">
                    <div class="card-header pb-0 d-flex row ms-0 me-0">
                        <h6 class="col-12 col-md-4">Data Kategori Buku</h6>
                        <div class="d-flex justify-content-end col-12 col-md-8">
                            <div class="row w-100 justify-content-end">
                                <div class="col-12 col-md-6">
                                    <a href="{{ route('kategori-buku.create') }}" class="btn btn-primary btn-sm w-100"><i
                                            class="fa fa-solid fa-plus me-3"></i>Tambah Data Kategori Buku</a>
                                </div>
                                <div class="col-12 col-md-6">
                                    <a href="{{ route('export-data-kategori-pdf') }}"
                                        class="btn btn-success btn-sm w-100"><i
                                            class="fa-solid fa-file-export me-3"></i>Buat
                                        Laporan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            #</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                            Nama Kategori</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 text-center">{{ $no++ }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $item->nama_kategori }}</span>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{ route('kategori-buku.edit', $item->id) }}"
                                                    class="btn btn-warning btn-sm font-weight-bold text-xs me-2 mt-4"
                                                    data-toggle="tooltip" data-original-title="Edit Kategori Buku">
                                                    Edit
                                                </a>
                                                <a href=""
                                                    class="btn btn-danger btn-sm font-weight-bold text-xs mt-4"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $item->id }} ">
                                                    Hapus
                                                </a>
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
    </div>

    @forelse ($data as $item)
        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="d-flex justify-content-center align-items-center" style="height: 250px">
                            <i class="fa-solid fa-exclamation fa-bounce fa-2xl h-75" style="color: #ea2e2e;"></i>
                        </div>

                        <div class="text-center">
                            <h4>Yakin ingin menghapus data ini?</h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ngga jadi</button>
                        <form action="{{ route('kategori-buku.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @empty
    @endforelse
@endsection
