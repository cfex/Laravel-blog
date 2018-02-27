@extends('layouts.app')

@section('content')

	@if(count($posts))
		@foreach ($posts as $post)
			<div class="columns">
				<div class="column is-three-fifths">
					<div class="card">
					  <header class="card-header">
					    <p class="card-header-title">
					      {{ $post->title }}
					    </p>
					    <a href="/posts/{{ $post->id }}" class="card-header-icon" aria-label="more options">
								Read more
					      <span class="icon">
									<i class="fa fas fa-angle-double-right"></i>
								</span>
					    </a>
					  </header>
					  <div class="card-content">
					    <div class="content">
					      {{ $post->content }}
								<br>
					      <a href="#">@blogapp</a> <a href="#">#css</a> <a href="#">#responsive</a>
					      <br>
					      <time datetime="2016-1-1">{{ $post->created_at->diffForHumans()}}</time>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		@endforeach
	@else
		<p>Be the first to set up a topic!</p>
		<a href="/posts/create" class="btn btn-primary">
			New+
		</a>
	@endif

@endsection
