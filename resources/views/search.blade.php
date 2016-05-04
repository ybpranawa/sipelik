@extends('app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
    @if(empty($iklan))
      <h1>Tidak ditemukan</h1>
    @else
      <div class="panel panel-info">        
        <div class="panel-heading">Hasil Pencarian</div>
        <div class="panel-body">
          <table class="table table-hover table-stripped">
            <tr>
              <td>Judul iklan</td> 
              <td>Harga(/kg)</td>
              <td>Deskripsi</td>
              <td>Stok(kg)</td>
              <td>Penjual</td>
              <td>Gambar</td>
            </tr>
            @foreach($iklan as $post)
            <tr>
              <td><a href="{{URL::to('iklan_detail')}}/{{$post->id_iklan}}">{{$post->judul_iklan}}</a></td>
              <td>{{$post->harga}}</td>
              <td>{{$post->deskripsi_iklan}}</td>
              <td>{{$post->stok}}</td>
              <td>{{$post->nama_user}}</td>
              <td><img src="{{URL::to($post->gambar)}}" height="42" width="42"></td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    @endif
    </div>
  </div>
</div>
@endsection