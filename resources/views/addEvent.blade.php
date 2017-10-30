@extends('layouts.master')
	
	@section('title', 'Events')

	@section('main')
		@if(count($errors)>0)
			<ul>
				@foreach($errors->all() as $err)
					<li>{{$err}}</li>
				@endforeach
			</ul>
		@endif
		<form method="post" action="/events">
			{{ csrf_field() }}
			<input type="text" name="id" value="{{ old('id') }}"> <br>
			<input type="text" name="nama" value="{{ old('nama') }}"> <br>
			<input type="text" name="venue" value="{{ old('venue') }}"> <br>
			<input type="text" name="alamat" value="{{ old('alamat') }}"> <br>
			<textarea name="desk">
				{{ old('desk') }}
			</textarea> <br>
			<input type="submit" name="edit" value="Add">

		</form>

	@endsection
