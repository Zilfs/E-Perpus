@extends('layouts.dashboard')

@section('title')
    Dashboard | Edit Pengguna
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card" data-aos="fade-down" data-aos-duration="500">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center mt-2">
                            <p class="fw-bold">Edit User</p>
                            <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm ms-auto">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('user.update', $item->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Username</label>
                                    <input class="form-control" type="text" required name="username"
                                        value="{{ $item->username }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email address</label>
                                    <input class="form-control" type="email" required name="email"
                                        value="{{ $item->email }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" required name="nama_lengkap"
                                        value="{{ $item->nama_lengkap }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Role</label>
                                    <select class="form-control" required name="role" id="">
                                        <option value="ADMIN" {{ $item->role == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                                        <option value="PETUGAS" {{ $item->role == 'PETUGAS' ? 'selected' : '' }}>PETUGAS
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Alamat</label>
                                    <input class="form-control" type="text" required name="alamat"
                                        value="{{ $item->alamat }}">
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
