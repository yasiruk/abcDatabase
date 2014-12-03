@extends('layout')

@section('content')
{{ Form::open(array('url' => 'login', 'class' => 'form-signin', 'style' => 'display: block', 'role' => 'form')) }}
		<h1>Login</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('username') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('username', 'username Address') }}
			{{ Form::text('username', Input::old('username'), array('placeholder' => 'username', 'class' => 'form-control')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', array('class' => 'form-control')) }}
		</p>

		<p>{{ Form::submit('Submit!', array('class' => 'btn btn-default')) }}</p>
	{{ Form::close() }}


@stop
