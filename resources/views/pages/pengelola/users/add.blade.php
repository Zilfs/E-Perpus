@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card" data-aos="fade-down" data-aos-duration="500">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center mt-2">
                            <p class="fw-bold">Buat User Baru</p>
                            <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm ms-auto">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Username</label>
                                    <input class="form-control" type="text" required name="username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email address</label>
                                    <input class="form-control" type="email" required name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Password</label>
                                    <input class="form-control" type="text" required name="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" required name="nama_lengkap">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Role</label>
                                    <select class="form-control" required name="role" id="">
                                        <option value="ADMIN">ADMIN</option>
                                        <option value="PETUGAS">PETUGAS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Alamat</label>
                                    <input class="form-control" type="text" required name="alamat">
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
