@extends('layout')

@section('content')
<h2> This is the unupdated home page</h2>
<p> Sometimes you might be logged in.. let's see  {{ $name['username'] }} , {{ $name['first_name']}} <br>

</p>
@stop