@extends('layout')

@section('content')
<h2> This is the unupdated home page</h2>
<p> Sometimes you might be logged in.. let's see  {{ isset($name) ? $name['username'] : "" }} , {{ isset($name) ? $name['first_name'] : ""}} <br>

</p>
@stop