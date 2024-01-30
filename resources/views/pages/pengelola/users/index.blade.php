@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4" data-aos="fade-down" data-aos-duration="500">
                    <div class="card-header pb-0 d-flex w-100">
                        <h6 class="w-50">Data Pengguna</h6>
                        <div class="d-flex justify-content-end w-50">
                            <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-solid fa-plus me-3"></i>Tambah Data User</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Username and e-mail</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nama lengkap</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Role</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Alamat</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center ms-2">
                                                        <h6 class="mb-0 text-sm">{{ $item->username }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $item->email }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->nama_lengkap }}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm {{ $item->role == 'ADMIN' ? 'bg-gradient-secondary' : ($item->role == 'PETUGAS' ? 'bg-gradient-primary' : 'bg-gradient-success') }}">{{ $item->role }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $item->alamat }}</span>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{ route('user.edit', $item->id) }}"
                                                    class="btn btn-warning btn-sm font-weight-bold text-xs me-2 mt-4"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                                <form action="{{ route('user.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm font-weight-bold text-xs mt-4"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        Hapus
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @empty
                                        Data Not Found
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
