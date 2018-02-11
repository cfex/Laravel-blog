@extends('layouts.app')


@section('content')

	<h1>Your posts:</h1>
	<a href="/posts/create">
		<button type="button" class="btn btn-muted btn-md">
			New+
		</button>
	</a>

	<hr>

	@foreach ($posts as $post)
		<ul class="list-group">
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <a href="/posts/{{ $post->id}}">{{ $post->title }}</a>
		    <span class="badge badge-primary badge-pill">Comments: {{ count($post->comments) }}</span>
		  </li>
		</ul>
	@endforeach

@endsection
