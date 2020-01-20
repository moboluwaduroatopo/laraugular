@extends('layouts.app')
@section('content')
<h3 class="text-center">Welcome to registrants</h3>
@if(count($data) > 0)
<div class="container">
<ul class="list-group">
	@foreach ($data as $d)
<li class="list-group-item"><a href="/registration/{{$d->id}}" style="display: block">{{$d->username}}</a></li>
@endforeach
{{ $data->links() }}
</ul>
</div>
@endif
@endsection