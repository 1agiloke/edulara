@extends('layouts.master')

@section('styles')
        .timer{
            text-align: center;

            margin: 30px auto 0;
            padding: 0 0 10px;

            border-bottom: 1px solid #eee;
        }
        .timer .table-cell{
            display: inline-block;
            margin: 0 5px;

            width: 79px;
            background: url('img/timer.png') no-repeat 0 0;
        }
        .timer .table-cell .tab-val{
            font-size: 35px;
            color: #28B08A;

            height: 81px;
            line-height: 81px;

            margin: 0 0 5px;
        }
        .timer .table-cell .tab-unit{
            font-family: Arial, serif;
            font-size: 12px;
            text-transform: uppercase;
        }

        #simple_timer.timer .table-cell.day,
        #periodic_timer_days.timer .table-cell.hour{
            width: 120px;
            background-image: url('img/timer_long.png');
        }
@endsection


@section('nav')
<div class="blurred-container">
    <div class="img-src" style="background-color:#435061"></div>
    <div class="tengahBlur" style="padding-top:125px;">
        <div class="col-md-4">
            <img src="/img/{{$top->gambar}}" width="100%" alt="">
        </div>
        <div class="col-md-8" style="margin-top:50px; color:white">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                {{$errors->first()}}
            </div>
            @endif
            <h3>{{$top->nama}}</h3>
            {{$top->ket}}
            <p>
                <a href="/lelang/{{$top->id}}" class="btn btn-flat btn-default hijau">BERI PENAWARAN</a>
            </p>
        </div>
    </div>
    <!-- <img src="mimpiku-ingin-setinggi-langi.jpg" style="width:100%;">            -->
</div>      
@endsection 

@section('main')

    <!-- end navbar -->
    <div class="main" style="padding:20px 0;">
    
    <div id="countdowned_timer_event"></div>

        <div class="row" style="padding:40px 30px;">
            <hr>
            <div class="col-md-3">
                <div class="row">
                    <!--                    <button href="#" class="form-control btn btn-flat btn-default hijau">BERI PENAWARAN</button>-->
                </div>
                <div class="row" style="padding-top:20px;">
                    <ul class="list-group" style="">
                        <!--
                        <li class="list-group-item">
                            <span><b>Filter berdasarkan harga</b></span>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="mulai" class="form-control" placeholder="Harga Maksimal">
                                    <p></p>
                                    <a href="#" class="btn btn-flat btn-default hijau">FILTER</a>
                                </div>
                            </div>
                        </li>
-->
                        <li class="list-group-item">
                            <span><b>Produk Kategori</b></span>
                            <div class="row kategori textHijau">
                                <div class="col-md-6">ALL</div>
                                <div class="col-md-6 text-right">
                                    {{count($data)}}
                                </div>
                            </div>
                            @for($i=0; $i < count($kategori); $i++)
                                <div class="row kategori">
                                    <div class="col-md-6" style="text-transform:uppercase;">
                                        {{$kategori[$i]->kategori}}
                                    </div>
                                    <div class="col-md-6 text-right">
                                        {{ $nK[$i] }}
                                    </div>
                                </div>
                            @endfor
                        </li>
                        <li class="list-group-item">
                            <span><b>Produk tag</b></span>
                            <p></p>
                            @for($i=0; $i < count($kategori); $i++)
                                @if(($i+1) % 3==1)
                                <p></p>
                                @endif
                                <a href="#" class="btn btn-flat hijau" style="text-transform:capitalize">
                                    {{$kategori[$i]->kategori}}
                                </a>
                            @endfor
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <h4 class="text-center">TAMPILKAN SEMUA PRODUK DI KATEGORI:<span class="textHijau">ALL</span></h4>
                <div class="row" style="padding-top:20px;">
                    @for($i=0; $i < count($data); $i++)
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail produk">
                                <img src="/img/{{$data[$i]->gambar}}" style="height: 300px; width: 100%; display: block;border-radius:3px;" alt="">
                                <div class="caption text-center">
                                    <p class="judul">
                                        {{$data[$i]->nama}}
                                    </p>
                                </div>
                                <a href="/lelang/{{$data[$i]->id}}" class="form-control btn btn-flat btn-default hijau">BERI PENAWARAN</a>
                            </div>
                        </div>
                    @endfor
                </div>


            </div>
        </div>

    </div>
    <script type="text/javascript" src="/js/jquery.syotimer.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
            $('#countdowned_timer_event').syotimer({
                year: 2017,
                month: 12,
                day: 14,
                hour: 12,
                minute: 41,

                headTitle: '<h3>Waktu hitung mundur lelang</h3>',
                
                afterDeadline: function(syotimer){
                    syotimer.bodyBlock.html('<p>Hitung mundur selesai </p>');
                    syotimer.headBlock.html('<h3>Lelang telah berakhir</h3>');
                    // syotimer.footBlock.html('<i style="color: brown;">Footer of timer after countdown is finished</i>');
                    window.location.href="http://localhost:8000/lelangend";
                }
            });
        });
    </script>
@endsection