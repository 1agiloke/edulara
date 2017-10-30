@extends('layouts.master')
	
	@section('title', 'Events')

	@section('main')
		<ul>
		@foreach($events as $event)
			<li><a href="/event/{{$event->idevent}}">{{$event->namaevent}}</a></li>	
			
		@endforeach
		<li><a href="/event/add">Add</a></li>
		</ul>
	@endsection
