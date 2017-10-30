@extends('layouts.master')
	
	@section('title', 'Events')

	@section('main')

		<form method="post" action="/event/edit/{{$event->idevent}}">
			{{ csrf_field() }}
			<input type="text" name="nama" value="{{$event->namaevent}}"> <br>
			<input type="text" name="venue" value="{{$event->venevent}}"> <br>
			<input type="text" name="alamat" value="{{$event->addevent}}"> <br>
			<textarea name="desk">
				{{$event->ketevent}}
			</textarea> <br>
			<input type="hidden" name="_method" value="PUT">
			<input type="submit" name="edit" value="Edit">

		</form>
	
	@endsection
