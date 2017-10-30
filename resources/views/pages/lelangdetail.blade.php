@extends('layouts.master')

@section('styles')
    body {
        padding-top: 80px;
    }
@endsection
    
@section('main')
    <div class="main">
        <div class="container">
            <h2>Barang Lelang</h2>
            <div class="row itemEvent">
                <div class="col-md-6">
                    <div class="col-md-12"><img style="width:100%;margin-bottom:10px;" src="/img/<%= items.gambar %>"></div>

                </div>
                <div class="col-md-6">
                    <h3>{{ $data->nama }}</h3>
                    <br>
                    <span><div class="col-md-2">Harga</div><b class="textHijau">: <%= items.harga %></b></span>
                    <br>

                    <br>
                    <div class="col-md-12">
                        <p>{{ $data->ket }}</p>
                            <div class="row">
                                <div class="col-md-12">
                                @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        {{$errors->first()}}
                                    </div>
                                @endif
                                @if(count(penawaran==0))
                                    <div class="alert alert-danger">Belum ada Penawaran jadilah yang pertama</div>
                                @else
                                    <p>Penawaran tertinggi : IDR
                                        {{penawaran->harga}}
                                    </p>
                                    <%}%>

                                </div>
                                <form action="/lelang/<%= items.id %>" method="post">
                                    <div class="col-md-3">
                                        <input type="text" name="jumlah" id="" class="form-control" value="<%= harga +1 %>">

                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-default btn-fill" type="submit" role="button">Beri Penawaran</button>
                                    </div>
                                </form>
                            </div>
                            <p style="margin-top:20px;"><a href="/lelang" class="btn btn-flat btn-default putihHijau" role="button">Back To Lelang</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection