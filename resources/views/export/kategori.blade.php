<table>
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Kategori</th>
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
                <td>{{ $item->nama_kategori }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
