@extends('layouts.app')

@section('content')

	@if(Auth::user())
		<h1>Welcome, {{ Auth::user()->name }}</h1>
	@endif

	@if(count($posts))
		@foreach ($posts as $post)
			<div class="card">
			  <div class="card-body">
			    <blockquote class="blockquote mb-0">
						<h2></he><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
			      <p>{{ str_limit($post->content, 250) }}</p>
			      <footer class="blockquote-footer">Author: <strong>{{ $post->user->name }}</strong></footer>
						<cite title="Source Title"> <small>{{ $post->created_at->diffForHumans() }}</small></cite>
					</blockquote>
			  </div>
			</div>
			<br />
		@endforeach
	@else
		<p>Be the first to set up a topic!</p>
		<a href="/posts/create" class="btn btn-primary">
			New+
		</a>
	@endif

@endsection
