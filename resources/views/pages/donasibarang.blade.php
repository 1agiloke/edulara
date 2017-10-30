@extends('layouts.master')

@section('styles')
  
    body{
        padding-top: 80px;
    }

@endsection



    <!--

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Lokasi</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="txtSource" placeholder="Masukkan lokasi">
                    </div>
                    <div id="dvDistance">
                    </div>
                    <div id="dvMap" style="height:300px;"></div>
                    <div id="dvPanel" style="height:300px;"></div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
-->
@section('main')
<div class="container" >


    <div class="col-md-6 col-md-offset-3">
            
        <h2>Donasi Barang</h2>

        <form action="/donasibarang" method="post">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                {{$errors->first()}}
            </div>
            @endif
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" placeholder="Nama Barang" name="nama">
            </div>
            <div class="form-group">
                <label>Jenis Barang</label>
                <select class="form-control" title="jenis" name="jenis">
                    <option value="0">Pangan</option>
                    <option value="1">Pakaian</option>
                    <option value="2">Lain-Lain</option>
                </select>
            </div>
            <div class="form-group">
                <label>Satuan</label>
                <input type="text" class="form-control" placeholder="Contoh : 10 kg" name="satuan">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-9">
                        <button type="submit" class="form-control btn btn-default btn-fill " style="color:white">Donasi</button>
                    </div>
                    <div class="col-md-3">
                        <!--                        <button class="form-control btn btn-default btn-fill  " style="color:white" data-toggle="modal" data-target="#myModal">Cek Lokasi</button>-->
                        <a href="/ceklokasi" class="form-control btn btn-default btn-fill  " style="color:white" target="_blank">Cek Lokasi</a>
                    </div>
                </div>
            </div>
        </form>
    </div>


</div>
@endsection
    
