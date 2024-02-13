@extends('layouts.dashboard')

@section('title')
    Dashboard | Edit Kategori Buku
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card" data-aos="fade-down" data-aos-duration="500">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center mt-2">
                            <p class="fw-bold">Edit Kategori Buku</p>
                            <a href="{{ route('kategori-buku.index') }}" class="btn btn-primary btn-sm ms-auto">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('buku.update', $item->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Judul Buku</label>
                                    <input class="form-control" type="text" required name="judul"
                                        value="{{ $item->judul }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kategori</label>
                                    <select class="form-control" required name="kategori" id="">
                                        @foreach ($data as $kategori)
                                            <option value="{{ $kategori->id }}"
                                                {{ $item->kategori_buku_relasi->kategori->id == $kategori->id ? 'selected' : '' }}>
                                                {{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Penulis</label>
                                    <input class="form-control" type="text" required name="penulis"
                                        value="{{ $item->penulis }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Penerbit</label>
                                    <input class="form-control" type="text" required name="penerbit"
                                        value="{{ $item->penerbit }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahun Terbit</label>
                                    <input class="form-control" type="text" required name="tahun_terbit"
                                        value="{{ $item->tahun_terbit }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="w-100 btn btn-success my-3" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
