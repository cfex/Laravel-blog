@extends('layouts.app')

@section('content')
	@section('content')
	<div class="columns">
		<div class="column is-one-third is-offset-one-third">
			<div class="card">
				<div class="card-content">
					<h1 class="title has-text-centered">
						<i class="fa fas fa-graduation-cap"></i>
						<br>
						Dive into learning today!
					</h1>
					<form action="{{ route('register') }}" method="POST">
						@csrf

						<div class="field">
							<label for="name" class="label">Name</label>
							<div class="control">
								<input id="name" class="input {{ $errors->has('name') ? 'is-danger' : ''}}" value="{{ old('name') }}" name="name" type="text" placeholder="Your Name" required>
							</div>
							@if($errors->has('name'))
								<p class="help is-danger">{{ $errors->first('name') }}</p>
							@endif
						</div>
						<div class="field">
							<label for="email" class="label">Email</label>
							<div class="control">
								<input class="input {{ $errors->has('email') ? 'is-danger' : ''}}" name="email" type="email" value="{{ old('email') }}" placeholder="name@example.com" required>
							</div>
							@if($errors->has('email'))
								<p class="help is-danger">{{ $errors->first('email') }}</p>
							@endif
						</div>
						<div class="field">
							<label for="password" class="label">Password</label>
							<div class="control">
								<input id="password" class="input {{ $errors->has('password') ? 'is-danger' : ''}}" name="password" type="password" required>
							</div>
							@if($errors->has('password'))
								<p class="help is-danger">{{ $errors->first('password') }}</p>
							@endif
						</div>
						<div class="field">
							<label for="password_confirmation" class="label">Password Confirmation</label>
							<div class="control">
								<input id="password_confirmation" class="input {{ $errors->has('password_confirmation') ? 'is-danger' : ''}}" name="password_confirmation" type="password" required>
							</div>
							@if($errors->has('password_confirmation'))
								<p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
							@endif
						</div>

						<div class="control has-text-centered">
						  <button class="button is-medium is-primary is-fullwidth is-rounded is-outlined">Join!</button>
						</div>
					</form>
				</div>
			</div>
			<a href="{{ route('login') }}" class="muted has-text-grey">Already have an account? LogIn</a>
		</div>
	</div>
	@endsection
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
