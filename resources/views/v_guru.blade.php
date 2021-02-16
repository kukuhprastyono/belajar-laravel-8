<!-- latihan 2 -->
@extends('layout/v_template')
@section('title','Guru')
@section('content')
<div class="container pt-4">
    @if(session('pesan'))
    <div class="alert alert-success">
        {{session('pesan')}}
    </div>
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
                <td></td>
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
                    <a href="/guru/edit/{{$item->id_guru}}" class="badge bg-warning">Edit</a>
                    <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#remove{{$item->id_guru}}">Remove</a>

                </td>

            </tr>
            @endforeach
            @foreach($guru as $data)
            <div class="modal fade" id="remove{{$data->id_guru}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header  bg-danger">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="py-2">Apakah data yakin dihapus?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="" class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                            <a href="/guru/delete/{{$data->id_guru}}" class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>

    </table>
</div>
@endsection