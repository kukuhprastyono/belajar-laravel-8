@extends('layout/v_template')
@section('title','Edit Guru')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 p-4">
            <h4 class="mb-3">Edit Guru</h4>
            <form action="/guru/update/{{$guru->id_guru}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 form-group">
                    <label for="nip_guru" class="form-label">NIP</label>
                    <input type="text" class="form-control @error('nip_guru') is-invalid @enderror" id="nip_guru" placeholder="00X" name="nip_guru" value="{{$guru->nip_guru}}" readonly>
                    @error('nip_guru')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="nama_guru" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama_guru') is-invalid @enderror" id="nama_guru" placeholder="Nama Lengkap" name="nama_guru" value="{{$guru->nama_guru}}">
                    @error('nama_guru')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="mapel" class="form-label">Mapel</label>
                    <select class="form-select @error('mapel') is-invalid @enderror" aria-label="Default select example" name="mapel">
                        <option selected disabled value="">Pilih Mapel</option>
                        <option value="Bahasa Indonesia" @if ($guru->mapel == 'Bahasa Indonesia') selected="selected"@endif>Bahasa Indonesia</option>
                        <option value="Matematika" @if ($guru->mapel == 'Matematika') selected="selected"@endif>Matematika</option>
                        <option value="Ipa" @if ($guru->mapel == 'Ipa') selected="selected"@endif>Ipa</option>
                        <option value="Bahasa Inggris" @if ($guru->mapel == 'Bahasa Inggris') selected="selected"@endif>Bahasa Inggris</option>
                    </select>
                    @error('mapel')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto_guru" class="form-label">Foto Guru</label>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{url('foto-guru/'. $guru->foto_guru)}}" alt="" width="80px">
                        </div>
                        <div class="col-md-8">
                            <input class="form-control @error('foto_guru') is-invalid @enderror" type="file" id="foto_guru" name="foto_guru">
                            @error('foto_guru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection