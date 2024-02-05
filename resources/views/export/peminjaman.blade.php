<table>
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>ID User</th>
            <th>Nama Peminjam</th>
            <th>Email Peminjam</th>
            <th>Tanggal Pemnijaman</th>
            <th>Tanggal Pemngembalian</th>
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
                <td>{{ $item->buku->judul }}</td>
                <td>{{ $item->user->id }}</td>
                <td>{{ $item->user->nama_lengkap }}</td>
                <td>{{ $item->user->email }}</td>
                <td>{{ $item->tanggal_peminjaman }}</td>
                <td>{{ $item->tanggal_pengembalian }}</td>
                <td>{{ $item->tanggal_dikembalikan ?? 'Belum Dikembalikan' }}</td>
                <td>{{ $item->status_peminjaman }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
