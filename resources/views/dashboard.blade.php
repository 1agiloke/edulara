	@extends('layouts.master')

	@section('title','Dashboard')
	@section('main')
		@if(count($record)>0)
			<p>ini dashboard si {{$record->username}}</p>
			<ul>
				<li>{{$record->id}}</li>
				<li>{{$record->username}}</li>
				<li>{{$record->password}}</li>
			</ul>			
		@else
			<p>User not found</p>
		@endif
	@endsection
