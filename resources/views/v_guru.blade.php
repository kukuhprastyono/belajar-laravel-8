<!-- latihan 2 -->
@extends('layout/v_template')
@section('title','Guru')
@section('content')
<div class="container pt-4">
    @if(session('pesan'))
    <div class="alert alert-success">
    {{session('pesan')}}</div>
    @endif
    <div class="row">
        <div class="col-md-10">
            <h1>Guru</h1>
        </div>
        <div class="col-md-2 my-2">
            <a href="/guru/add" class="btn btn-success ">Tambah Guru</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Mapel</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guru as $item)
            <tr>
                <td>{{$item->id_guru}}</td>
                <td>{{$item->nip_guru}}</td>
                <td>{{$item->nama_guru}}</td>
                <td>{{$item->mapel}}</td>
                <td>
                    <figure class="figure" style="width:100px;">
                        <img src="{{url('foto-guru/'.$item->foto_guru)}}" class="figure-img img-fluid rounded" alt="...">
                    </figure>
                </td>
                <td>
                    <a href="/guru/detail/{{$item->id_guru}}" class="badge bg-info">Detail</a>
                    <a href="" class="badge bg-warning">Edit</a>
                    <a href="" class="badge bg-danger">Remove</a>
                </td>

            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection