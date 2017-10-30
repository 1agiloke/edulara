@extends('layouts.master')
  
@section('styles')
    body {
        padding-top: 80px;
    }
@endsection
      


@section('main')
    <div class="container">
        
                <h2 class="text-center">Pendaftaraan Donasi Uang</h2>
                @if($completed)                    
                    @if($completed[0]==0)
                    <div class="alert alert-danger">
                    
                       {!!$completed[1]!!}
                    
                    </div>
        
                    @elseif($completed[0]==1)
                    <div class="alert alert-success">
                       {!!$completed[1]!!}
                    </div>
                    @endif
                @endif
                <form action="/donasiuang" method="post">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                        <h3>Saya mendaftar sebagai</h3>
                        <hr>
                        <div class="form-group">
                            <select class="form-control" title="Donasi Perorangan" name="jenisdonasi">
                                <option value="0">Donasi Perorangan</option>
                                <option value="1">Donasi Institusi/Perusahaan </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>INFOMASI PRIBADI</h3>
                        <hr>
                        <div class="form-group">
                            <label>Nama Lengkap*</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kota/Kabupaten</label>
                            <select class="form-control" title="pilih kota/kabupaten" id="kota" name="kota" data-live-search="true">
                                @for($i=0; $i< count($kabupaten); $i++)

                                    <option data-tokens="{{$kabupaten[$i]->Nama}}" value="{{$kabupaten[$i]->IDKabupaten}}">
                                        {{$kabupaten[$i]->Nama}}
                                    </option>

                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>HP*</label>
                                    <input type="text" name="hp" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Telepon rumah/kantor</label>
                                    <input type="text" name="telepon" class="form-control" placeholder="Optional">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>INFOMASI DONASI</h3>
                        <hr>
                        <p>Silahkan isi informasi besaran donasi di bawah sesuai dengan jenis donasi yang anda pilih.</p>
                        <p>
                            <b>
                                Donasi Perorangan : Besaran donasi antara IDR 50ribu - IDR 1juta
                                <br>
                                Donasi Perusahaan : Besaran donasi antara IDR 500ribu - IDR 5juta
                            </b>
                        </p>
                        <p>
                            <i>Isi hanya dengan angka,tanpa tanda titik atau koma.<br>Contoh:IDR 50.000 ditulis 50000</i>
                        </p>
                        <div class="form-group">

                            <label for="">Besarang Donasi IDR*</label>
                            <input type="text" name="besar" class="form-control" placeholder="per bulan">
                            <small class="text-muted">Minimal 50000</small>
                        </div>
                        <div class="form-group">

                            <label for="">Periode Donasi*</label>
                            <select class="form-control" title="Pilih periode" name="bulan">
                                @for($i=1;$i<=12;$i++)
                                    <option value="{{$i}}">
                                        {{$i}} Bulan</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <button type="submit" class=" btn btn-default btn-fill " style="color:white">Donasi sekarang</button>
                    </div>
                </form>

    </div>
@endsection