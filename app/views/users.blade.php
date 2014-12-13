@extends('layout')

@section('content')
<ul>
@foreach ($users as $user) 
	<li><% $user->username %>, <% $user->last_name  %> </li>
@endforeach
</ul>
@stop