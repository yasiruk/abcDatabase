@extends('layout')

@section('content')
<ul>
@foreach ($$users as $$user) 
	<li>{{ $user->username}} , {{ $user->first_name }} , {{ $user->password }} </li>
@endforeach
</ul>
@stop