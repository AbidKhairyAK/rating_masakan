@extends('app')

@section('content')
<form action="{{ url('/result') }}" method="post">
  	@csrf
	<p class="text-center">
		Tampilkan Hasil Dari Bulan
		<select class="form-control d-inline-block" style="width: auto;" required name="month">
			<option></option>
			<option value="01">Januari</option>
			<option value="02">Februari</option>
			<option value="03">Maret</option>
			<option value="04">April</option>
			<option value="05">Mei</option>
			<option value="06">Juni</option>
			<option value="07">Juli</option>
			<option value="08">Agustus</option>
			<option value="09">September</option>
			<option value="10">Oktober</option>
			<option value="11">November</option>
			<option value="12">Desember</option>
		</select>
	</p>
	<input type="password" name="pass" placeholder="Ketikkan password..." class="form-control" required="">
	<button class="btn btn-info btn-block mt-3">Submit</button>
</form>
@endsection