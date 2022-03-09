@extends('layouts.main')

@section('container')
    <a href="/add_mekanik" class="btn btn-primary">
        Tambah Sparepart <i class="fa-solid fa-plus"></i>
    </a>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <table class="table mt-3">
        <thead>

            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Sparepart</th>
                <th scope="col">Kode Sparepart</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tempat Simpan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->nama_sparepart }}</td>
                    <td>{{ $row->kode_sparepart }}</td>
                    <td>{{ $row->jumlah }}</td>
                    <td>{{ $row->tempat }}</td>
                    <td>
                        <a href="/edit_mekanik/{{ $row->id }}" class="btn btn-info">Edit</a>
                        <a href="/del_mekanik/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
