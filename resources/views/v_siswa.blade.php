<!-- latihan 2 -->
@extends('layout/v_template')
@section('title','siswa')
@section('content')
<div class="container">
    <h1>Siswa</h1>
    <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $data)
            <tr>
                <td>{{$data->id_siswa}}</td>
                <td>{{$data->nis_siswa}}</td>
                <td>{{$data->nama_siswa}}</td>
                <td>{{$data->nama_kelas}}</td>
                <td>{{$data->nama_mapel}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection