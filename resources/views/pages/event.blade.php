@extends('layouts.master')

@section('main')
    <div class="main">
        <div class="container">
            <h2>UPCOMING EVENT</h2>


            <!-- <% for(var i=0; i<items.length; i++) {%> -->

            @foreach($events as $event)

                <div class="row itemEvent">
                    <div class="col-md-6"><img style="width:100%;" src="/img/{{ $event->imgevent }}"></div>
                    <div class="col-md-6">
                        <h3>{{$event->namaevent}}</h3>
                        <br>
                        <span><div class="col-md-2">Tanggal</div><b>: {{ $event->tglevent }}</b></span>
                        <br>
                        <span><div class="col-md-2">Waktu</div><b>: {{ $event->jambuka }}-{{ $event->jamtutup }}</b></span>
                        <br>
                        <span><div class="col-md-2">Tempat</div><b>: {{ $event->venevent }}</b></span>
                        <br>
                        <span><div class="col-md-2">Alamat</div><b>: {{ $event->addevent }}</b></span>
                        <br>
                        <br>
                        <div class="col-md-12">
                            {{ substr($event->ketevent, 0,400) }}
                            <p><a href="/eventdetail/{{$event->idevent}}" class="btn btn-flat btn-default putihHijau" role="button">Read More</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection