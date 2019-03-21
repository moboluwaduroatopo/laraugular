@extends('layouts.app')
@section('my-content')
<div class="text-center">
<h3 >Welcome!!</h3>
<a href="registration/create"><button type="button" class="btn btn-primary">SignUp</button></a>
<a href="login"> <button type="button" class="btn btn-primary">Login</button></a>
</div>
<!-- <ol>
	@if(count($name) > 0)
	@foreach($name as $names)
	<li>{{$names}}</li>
	@endforeach
	@endif
</ol> -->
@endsection