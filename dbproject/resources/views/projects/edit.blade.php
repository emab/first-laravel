@extends('layout')

@section('content')
	<h1>Edit project {{ $project->id }}</h1>
	<form method="POST" action="/projects/{{ $project->id }}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="field">
			<label class="label" for="title">Title</label>
		</div>
		<div class="control">
			<input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
		</div>
		<div class="field">
			<label class="label" for="description">Description</label>
		</div>
		<div class="control">
			<textarea name="description" class="textarea">{{ $project->description }}</textarea>
		</div>
		<div class="field">
			<button type="submit" class="button is-link">Update</button>
		</div>
	</form>
	<form method="POST" action="/projects/{{ $project->id }}">
		@method('delete')
		@csrv
		<div class="field">
			<button type="submit" class="btn btn-danger">Delete</button>
		</div>
	</form>
@endsection