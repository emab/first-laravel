@extends('layout')

@section('title', 'Welcome')

@section('content')
	
	<h1>My first website!</h1>

	@foreach($tasks as $task)
		<li>{{ $task }}</li>
	@endforeach

@endsection