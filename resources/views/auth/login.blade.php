@extends('layouts.app')
@section('content')
<div class="columns">
	<div class="column is-one-third is-offset-one-third">
		<div class="card">
			<div class="card-content">
				<h1 class="title">Login</h1>
				<form action="{{ route('login') }}" method="POST">
					@csrf

					<div class="field">
						<label for="email" class="label">Email</label>
						<div class="control">
							<input class="input {{ $errors->has('email') ? 'is-danger' : ''}}" name="email" type="email" placeholder="name@example.com" required>
						</div>
						@if($errors->has('email'))
							<p class="help is-danger">{{ $errors->first('email') }}</p>
						@endif
					</div>
					<div class="field">
						<label for="password" class="label">Password</label>
						<div class="control">
							<input class="input {{ $errors->has('password') ? 'is-danger' : ''}}" name="password" type="password" required>
						</div>
						@if($errors->has('password'))
							<p class="help is-danger">{{ $errors->first('password') }}</p>
						@endif
					</div>

					<div class="control has-text-centered">
					  <button class="button is-medium is-primary is-fullwidth is-rounded is-outlined">LogIn</button>
					</div>
	        <div class="field">
	            <b-checkbox>Remember Me</b-checkbox>
	        </div>
				</form>
			</div>
		</div>
		<a href="{{ route('password.request') }}" class="muted has-text-grey">Forgot Your Password?</a>
	</div>
</div>
@endsection
