@extends('layouts.app')

@section('content')
<div class="columns big-description">
	<div class="column content">
		<h1 class="content __title">Are You ready to make your idea alive?</h1>
		<p class="content __paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>
<div class="colum form">
<h2 class="submit-title">Submit Your next idea</h2>
	<div class="column is-three-fifths is-offset-one-fifth">
		<form action="/posts/store" method="POST">

			{{ csrf_field() }}

		  <input class="input is-rounded" type="text" placeholder="Idea Title">
			<hr>
			<textarea class="textarea" placeholder="Describe Your idea" rows="10"></textarea>
			<br>
			<div class="control has-text-centered">
				<button class="button is-medium is-primary is-fullwidth is-rounded is-outlined">Submit</button>
			</div>
		</form>
	</div>
</div>
@endsection
