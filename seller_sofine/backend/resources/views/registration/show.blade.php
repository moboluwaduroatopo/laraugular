@extends('layouts.app')
@section('content')
<h3 class="text-center">Registrants{{$reg->id}}</h3>
<div class="container">
<p>Name:{{$reg->username}}</p>
<p>Email:{{$reg->email}}</p>
<a href="/registration/{{$reg->id}}/edit" class="btn btn-primary">Edit</a>
</div>
@endsection