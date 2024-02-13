@extends('layouts.dashboard')

@section('title')
    Dashboard | Tambah Kategori Buku
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card" data-aos="fade-down" data-aos-duration="500">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center mt-2">
                            <p class="fw-bold">Buat Kategori Baru</p>
                            <a href="{{ route('kategori-buku.index') }}" class="btn btn-primary btn-sm ms-auto">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('kategori-buku.store') }}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Kategori Buku</label>
                                    <input class="form-control" type="text" required name="nama_kategori">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="w-100 btn btn-success my-3" type="submit">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
