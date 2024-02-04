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
            @forelse ($data as $item)
                <div class="col-12 col-md-6 mt-4">
                    <div class="card">
                        <div class="card-body pt-4 p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <a href="{{ route('buku', $item->id) }}" class="d-flex row col-12">
                                        <div class="d-flex flex-column col-12 col-md-6">
                                            <h6 class="mb-3 text-sm">{{ $item->buku->judul }}</h6>
                                            <span class="text-xs" style="color: black">Penulis : <span
                                                    class="text-dark ms-sm-2 font-weight-bold">{{ $item->buku->penulis }}</span></span>
                                            <span class="text-xs" style="color: black">Penerbit : <span
                                                    class="text-dark ms-sm-2 font-weight-bold">{{ $item->buku->penerbit }}</span></span>
                                        </div>
                                        <div class="text-end justify-content-end col-12 col-md-6">
                                            <form action="{{ route('hapus-koleksi', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger m-3 w-100 px-3 mb-0">Hapus dari
                                                    koleksi</button>
                                            </form>

                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @empty
                <p class="ms-5 text-warning fw-bold">Data Tidak Temukan</p>
            @endforelse
        </div>
    </div>
@endsection
