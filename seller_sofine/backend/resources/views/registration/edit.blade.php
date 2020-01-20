@extends('layouts.app')
@section('content')
<div class="container">
<h3 class="text-centre">registration page</h3>
{!! Form::open(['action'=>['RegistrationController@update',$reg->id],'method' => 'PUT']) !!}
    <div class="form-group">
    	{{Form::label('title','User Name')}}
    	{{Form::text('username',$reg->username,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
    	{{Form::label('title','Email')}}
    	{{Form::text('email',$reg->email,['class'=>'form-control'])}}
    </div>
    <!-- <div class="form-group">
    	{{Form::label('title','Password')}}
    	{{Form::password('pwd',['class'=>'form-control'])}}
    </div> -->
    <div class="form-group">
    	{{Form::label('title','Tell us something about yourself')}}
    	{{Form::textarea('somthing','',['id'=>'article-ckeditor','class'=>'form-control'])}}
    </div>

    <div class="form-group">
    	{{Form::submit('submit',['class'=>'btn btn-info'])}}
    </div>
{!! Form::close() !!}
</div>
@endsection