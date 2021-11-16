@extends('layout.main')

@section('container')
<h1>Halaman Profile Mahasiswa</h1>
<table class="table table-sm table-hover">
    <thead align="center">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody align="center">
        @foreach ($mahasiswa as $mhs)
           <tr>
                <td>{{ $mhs->NIM }}</td>
                <td>{{ $mhs->Nama }}</td>
                <td>{{ $mhs->Alamat }}</td>
                <td>{{ $mhs->Jurusan }}</td>
                <td>{{ $mhs->Email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
