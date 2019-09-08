@extends('app')

@section('content')
<h2 class="text-center">Form Pendaftaran</h2>
<form action="{{ url('/register') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="form-group">
    <label for="password_confirmation">Ulangi Password:</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
  </div>
  <button type="submit" class="btn btn-block btn-info">Daftar</button>
</form>
@endsection