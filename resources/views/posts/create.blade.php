@extends('layouts.app')

@section('content')

	<form action="/posts/store" method="POST">

		{{ csrf_field() }}

	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" name="title" class="form-control" placeholder="Title*" required>
	  </div>

	  <div class="form-group">
	    <label for="content">Content</label>
	    <textarea class="form-control" name="content" rows="6" placeholder="Content*" required></textarea>
	  </div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-lg btn-block">Publish</button>
		</div>

	</form>

@endsection
