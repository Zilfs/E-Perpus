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
                            <p class="fw-bold">Tambahkan Buku Baru</p>
                            <a href="{{ route('buku.index') }}" class="btn btn-primary btn-sm ms-auto">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('buku.store') }}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Judul Buku</label>
                                    <input class="form-control" type="text" required name="judul">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kategori</label>
                                    <select class="form-control" required name="kategori" id="">
                                        @foreach ($data as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Penulis</label>
                                    <input class="form-control" type="text" required name="penulis">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Penerbit</label>
                                    <input class="form-control" type="text" required name="penerbit">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahun Terbit</label>
                                    <input class="form-control" type="text" required name="tahun_terbit">
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
