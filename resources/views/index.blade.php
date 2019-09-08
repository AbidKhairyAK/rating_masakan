@extends('app')

@php
$kelompok = [
  'Senin', 'Selasa', 'Rabu', 'Kamis', "Jumat", 'Sabtu', 'Ahad'
];
@endphp

@section('content')
<h2 class="text-center mb-4">Rating Masakan</h2>

<form action="{{ url('/rate') }}" method="post">
  @csrf
  <div class="form-group">
  	<label for="kelompok">Kelompok Masak Hari:</label>
	  <select class="form-control" id="kelompok" name="kelompok" required>
	    <option></option>
	    @foreach($kelompok as $val)
      <option value="{{ strtolower($val) }}">{{ $val }}</option>
      @endforeach
	  </select>
  </div>
  <div class="form-group">
  	<label>Jumlah Nilai: </label><br>
    @for($i=1;$i<=5;$i++)
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="{{ $i }}" name="nilai" value="{{ $i }}" required>
      <label class="custom-control-label" for="{{ $i }}">{{ $i }}</label>
    </div>
    @endfor
  </div>
  <button type="submit" class="btn btn-block btn-info">Kirim</button>
</form>
@endsection