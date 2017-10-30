@extends('layouts.master')
	
	@section('title', 'Events')

	@section('main')
		<h1>{{$event->namaevent}}</h1>
		<hr>
		<ul>
			<li>{{$event->ketevent}}</li>
			<li>{{$event->venevent}}</li>
			<li>{{$event->addevent}}</li>
			<li><a href="/event/edit/{{$event->idevent}}">Edit</a></li>
			<li>
				<form method="post" action="/events/{{$event->idevent}}">
					<input type="submit" name="delete" value="Delete">
					<input type="hidden" name="_method" value="DELETE">
					{{csrf_field()}}
				</form>

			</li>
		
		</ul>

	@endsection
