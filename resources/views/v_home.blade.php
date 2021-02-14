<!-- latihan 2 -->
@extends('layout/v_template')
@section('title','Home')
@section('content')
<div class="container">
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quibusdam non ad ipsum rerum odit earum vitae, consequatur excepturi! Earum!</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <figure class="figure">
                <img src="{{asset('img/qw.png')}}" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>
        </div>
        <div class="col-md-6">
            <figure class="figure">
                <img src="{{asset('img/s.png')}}" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>
        </div>
    </div>
</div>
<div class="container">
    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <td>{{$nama}}</td>
            <td>{{$alamat}}</td>
        </tr>
    </table>
</div>
@endsection