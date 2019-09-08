@extends('app')

@section('content')
<h2 class="text-center">Form Login</h2>

<form action="{{ url('/authenticate') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-block btn-info">Login</button>
  <div class="text-center py-2"><b>- atau -</b></div>
  <a href="{{ url('/signup') }}" class="btn btn-block btn-outline-info">Daftar</a>
</form>
@endsection