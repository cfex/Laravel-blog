@extends('layouts.app')

@section('content')

	<a href="/"><button type="button" class="btn btn-default">Go Back</button></a>

	<h1>{{ $post->title }}</h1>

	<p>{{ $post->content }}</p>
	<h5>Author: <strong>{{ $post->user->name }}</strong></h5>
	@if (auth()->id() == $post->user->id)

		<form action="/posts/{{ $post->id }}" method="POST">

				{{ method_field('DELETE') }}
			 	{{ csrf_field() }}

				<div class="form-group">
					<button type="submit" class="btn btn-danger">Delete</button>
				</div>

		</form>

	@endif

	<p>Comments:</p>

		@foreach ($post->comments as $comment)
			<div class="list-group">
			 <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
			    <div class="d-flex w-100 justify-content-between">
			      <h5 class="mb-1"><strong>{{ $comment->user->name }}</strong></h5>
			      <small>{{ $comment->created_at->diffForHumans() }}</small>
			    </div>
			    <p class="mb-1">{{ $comment->content }}</p>
					<br>

					@if (auth()->id() == $comment->user_id)

						<form action="/posts/{{ $comment->id }}/comment" method="POST">

								{{ method_field('DELETE') }}
							 	{{ csrf_field() }}

								<div class="form-group">
									<button type="submit" class="btn btn-sm btn-dark">Delete</button>
								</div>

						</form>

					@endif

			  </a>
			</div>
		@endforeach

		@guest

			<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>Notice!</strong> You have to be logged in to comment on this post. <br>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>

				<a href="{{ route('login') }}"><button type="button" class="btn btn-outline-info">Login</button></a>
				<a href="{{ route('register') }}"><button type="button" class="btn btn-outline-info">Register</button></a>

			</div>
			<p></p>

		@else
			<form action="/posts/{{ $post->id }}/comments" method="POST">

				{{ csrf_field() }}

			  <div class="form-group">
			    <label for="content">Content</label>
			    <textarea class="form-control" name="content" rows="6" placeholder="Content*" required></textarea>
			  </div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg btn-block">Comment</button>
				</div>

			</form>
		@endguest

@endsection
