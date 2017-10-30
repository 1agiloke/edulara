@extends('layouts.master')

@section('nav')
    <div class="blurred-container">
        <div class="img-src" style="background-image: url('/img/become.jpg');width:100%;"></div>
        <div class="tengahBlur">
            <div class="col-md-8 col-md-offset-2">

                <div>
                    <h2 class="text-center boxHijau">Jadilah Volunteer</h2></div>
                <h4 class="text-center boxHijau">“Karena setiap orang bisa membawa perubahan!”</h4>
            </div>
        </div>
        <!-- <img src="mimpiku-ingin-setinggi-langi.jpg" style="width:100%;">            -->
    </div>
@endsection
<!-- end navbar -->


@section('main')

<div class="main" style="padding:20px 0;">
<div class="row">
<div class="container">

    <div class="col-sm-6 col-sm-offset-3">


        <!-- show any messages that come back with authentication -->
            @if(count($errors)>0)
            <div class="alert alert-danger">
                {{$errors->first()}}
            </div>
            @endif

                <!-- LOGIN FORM -->
                <form action="/volunteer" method="post">
                    <div class="form-group">
                        <label>Nama*</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Umur*</label>
                        <input type="number" class="form-control" name="umur">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="form-group">
                        <label>No telp*</label>
                        <input type="text" class="form-control" name="telepon">
                    </div>
                    <div class="form-group">
                        <label>Email*</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Profesi</label>
                        <input type="text" class="form-control" name="profesi">
                    </div>
                    <div class="form-group">
                        <label>Dalam bidang apa kamu ingin membantu di Educationeer?</label>
                        <select class="selectpicker form-control" title="bidang" name="bidang">
                            <option value="0">Event Volunteer</option>
                            <option value="1">Donor / Sponsor</option>
                            <option value="2">Trainer</option>
                            <option value="3">Penulis Artikel atau penerjemah</option>
                            <option value="4">Photographer atau Videographer</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-flat btn-default hijau form-control">Daftar Volunteer</button>
                </form>


    </div>

</div>
</div>
</div>

@endsection