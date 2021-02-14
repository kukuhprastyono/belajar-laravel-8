@extends('layout/v_template')
@section('title','Detail Guru')
@section('content')
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{url('foto-guru/'.$guru->foto_guru)}}" class="card-img-top" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item">NIP: <span class="">{{$guru->nip_guru}}</span></li>
                    <li class="list-group-item">Nama: <span class="">{{$guru->nama_guru}}</span></li>
                    <li class="list-group-item">Mapel: <span class="">{{$guru->mapel}}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<a type="button" class="btn btn-primary" href="/guru"><i class="fas fa-arrow-left"></i>  Kembali</a>
@endsection