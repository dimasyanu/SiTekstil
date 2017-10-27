@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12 m5 login-form">
			<div class="card">
				<div class="card-title center flow-text">{{ Lang::get('auth.login') }}</div>
				<div class="card-content">
					<form method="POST" action="{{ route('login') }}">
						{{ csrf_field() }}
						<div class="input-field{{ $errors->has('username') ? ' has-error' : '' }}">
							<input id="username" type="text" class="validate" name="username" value="{{ old('username') }}" required autofocus>
							<label for="username">{{ Lang::get('auth.username') }}</label>
							@if ($errors->has('username'))
								<span class="help-block">
									<strong>{{ $errors->first('username') }}</strong>
								</span>
							@endif
						</div>

						<div class="input-field{{ $errors->has('password') ? ' has-error' : '' }}">
							<input id="password" type="password" class="validate" name="password" required>
							<label for="password" class="col-md-4 control-label">{{ Lang::get('auth.password') }}</label>
							@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<input type="checkbox" id="remember" name="remember" class="filled-in" {{ old('remember') ? 'checked' : '' }}>
									<label for="remember">{{ Lang::get('auth.remember_me') }}</label>
								</div>
							</div>
						</div>

						<div class="row">
							<button type="submit" class="btn btn-primary col s12 green" style="margin: 15px 0">
								{{ Lang::get('auth.login') }}
							</button>
							<a class="btn col s12 green" href="{{ route('password.request') }}">
								{{ Lang::get('auth.forgot_password') }}
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
