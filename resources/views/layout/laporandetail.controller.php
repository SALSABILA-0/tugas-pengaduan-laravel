@extends('layouts.navbar')  

@section('content')
    <table class="table table-dark table-hover">
        <tr>
            <th>ID Pengaduan</th>
            <th>Tanggal Pengaduan</th>
            <th>NIK</th>
            <th>Isi Laporan</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pengaduan as $p)
            <tr>
                <td>{{ $p->id_pengaduan }}</td>
                <td>{{ $p->tgl_pengaduan }}</td>
                <td>{{ $p->nik }}</td>
                <td>{{ $p->isi_laporan }}</td>
                <td>{{ $p->foto }}</td>
                <td>{{ $p->status }}</td>
                <td>
                    <a href="#"><button class="btn btn-danger">delete</button></a>
                    <a href="#"><button class="btn btn-primary">change</button></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection