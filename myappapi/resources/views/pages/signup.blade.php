@extends('layouts.app')
@section('my-content')
<div class="container">
<h3 class="text-center">Sign Up</h3>
 <form action="/action_page.php">
 	<div class="form-group">
    <label for="email">Username:</label>
    <input type="text" class="form-control" id="email" name="username">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
@endsection