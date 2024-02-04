@extends('layouts.home')

@section('title')
    E-Perpus | Buku
@endsection

@section('content')
    <div class="row my-5 px-3 py-4 justify-content-center card">
        <div class="col-12">
            <h4 class="text-black mb-3">Keterangan Buku</h4>
            <hr class="horizontal dark mt-3">
            <div class="row align-items-center bg-gray-100">
                <h6 class="text-sm text-black col-6 col-md-3">Judul : </h6>
                <p class="text secondary col-6 text-sm col-md-9">{{ $buku->judul }}</p>
            </div>
            <div class="row align-items-center">
                <h6 class="text-sm text-black col-6 col-md-3">Penulis : </h6>
                <p class="text secondary col-6 text-sm col-md-9">{{ $buku->penulis }}</p>
            </div>
            <div class="row align-items-center bg-gray-100">
                <h6 class="text-sm text-black col-6 col-md-3">Penerbit : </h6>
                <p class="text secondary col-6 text-sm col-md-9">{{ $buku->penerbit }}</p>
            </div>
            <div class="row align-items-center">
                <h6 class="text-sm text-black col-6 col-md-3">Tahun Terbit : </h6>
                <p class="text secondary col-6 text-sm col-md-9">{{ $buku->tahun_terbit }}</p>
            </div>
            <hr class="horizontal dark mt-3">
            <a href="" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#pinjamModal">Pinjam
                Buku</a>
            <a href="{{ route('tambah-koleksi', $buku->id) }}" class="btn btn-success w-100">Simpan Ke Koleksi</a>
        </div>
    </div>
    <div class="row my-5 px-3 py-4 justify-content-center card">
        <form action="{{ route('ulasan.store') }}" method="post">
            @csrf
            <div class="col-12">
                <h4 class="text-black mb-3">Buat Ulasan</h4>
                <hr class="horizontal dark mt-3">
                <div class="row align-items-center bg-gray-100">
                    <div class="form-group mb-5">
                        <label>Ulasan</label>
                        <textarea id="ulasan" class="form-control" name="ulasan"></textarea>
                    </div>
                    <div class="form-group mb-5">
                        <label>Rating</label>
                        <input type="number" class="form-control" placeholder="Beri nilai antara 1 - 100" name="rating"
                            min="1" max="100">
                        <input type="text" value="{{ $buku->id }}" name="buku_id" hidden>
                    </div>
                </div>
                <hr class="horizontal dark mt-3">
                <button type="submit" class="btn btn-primary w-100">Kirim ulasan</button>
            </div>
        </form>
    </div>
    <div class="row my-5 px-3 py-4 justify-content-center">
        <h4 class="text-black mb-3">Ulasan</h4>
        @forelse ($ulasan as $item)
            <div class="col-12 card py-4 px-4">
                <h6 class="d-flex align-items-center text-black"><i
                        class="fa fa-user me-sm-1"></i>{{ $item->user->username }}</h6>
                <p class="text-secondary text-sm">{{ $item->rating }} / 100</p>
                <div class="flex w-100 text-break">{{ $item->ulasan }}
                </div>
                <div class="d-flex w-100 justify-content-end mt-3 pe-3">
                    <p class="text-secondary">{{ $item->updated_at }}</p>
                </div>
            </div>
        @empty
            <p class="ms-5 text-warning fw-bold">Belum ada ulasan</p>
        @endforelse

    </div>

    <div class="modal fade" id="pinjamModal" tabindex="-1" aria-labelledby="pinjamModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('pinjam-buku') }}" class="row px-3" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h6 class="text-lg">Pilih tanggal pengembalian</h6>
                    </div>
                    <div class="modal-body">
                        <input type="date" class="form-control col-12" name="tanggal_pengembalian">
                        <input type="text" hidden value="{{ $buku->id }}" name="buku_id">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Pinjam</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
