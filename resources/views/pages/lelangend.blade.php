@extends('layouts.master')

@section('styles')
    body{padding-top:80px;}
@endsection

@section('main')
<div class="container">
        <div class="text-center">
            <h1>Lelang telah berakhir</h1>

        </div>
        <h3>Daftar pemenang lelang</h3>
        @for($i=0;$i < count($pemenang);$i++)
        <div class="row col-md-12">
            <div class="well give">
                <b style="text-transform:capitalize">{{ $pemenang[$i]['username'] }}</b> pemenang untuk <b>{{ $pemenang[$i]['nama'] }}</b> 
            </div>
        </div>
        @endfor

    </div>
@endsection
