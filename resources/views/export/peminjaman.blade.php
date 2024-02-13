<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/template/assets/css/argon-dashboard.css">
</head>

<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <div class="row">
        <h3>Laporan Peminjaman</h3>
    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Peminjaman</th>
                <th>ID Buku</th>
                <th>ID User</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Tanggal Dikembalikan</th>
                <th>Status Peminjaman</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->buku_id }}</td>
                    <td>{{ $item->user->id }}</td>
                    <td>{{ $item->tanggal_peminjaman }}</td>
                    <td>{{ $item->tanggal_pengembalian }}</td>
                    <td>{{ $item->tanggal_dikembalikan ?? 'Belum Dikembalikan' }}</td>
                    <td>{{ $item->status_peminjaman }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
