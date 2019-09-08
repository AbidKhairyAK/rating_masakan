@extends('app')

@section('content')
<h3 class="text-center">
	Pemenang Bulan {{ $month }}
</h3>
<div class="my-3">
	<button data-toggle="collapse" data-target="#pemenang" class="btn btn-info btn-block">Tampilkan Pemenang</button>

	<div id="pemenang" class="collapse py-5 text-center">
		<h5><b>~ Kelompok Hari {{ $winner['day'] }} ~</b></h5>
		<p>Dengan perolehan skor: <b>{{ $winner['score'] }}</b></p>

		<div class="row mt-5">
			<div class="col-sm-5">
				<div class="d-flex justify-content-between">
					<p>Kl. Senin</p>
					<p><b>{{ $result->kl_senin }}</b></p>
				</div>
				<div class="d-flex justify-content-between">
					<p>Kl. Selasa</p>
					<p><b>{{ $result->kl_selasa }}</b></p>
				</div>
				<div class="d-flex justify-content-between">
					<p>Kl. Rabu</p>
					<p><b>{{ $result->kl_rabu }}</b></p>
				</div>
				<div class="d-flex justify-content-between">
					<p>Kl. Kamis</p>
					<p><b>{{ $result->kl_kamis }}</b></p>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="d-none d-md-block" style="height: 100%; border: 1px solid #777; width: 0; margin: auto"></div>
			</div>
			<div class="col-sm-5">
				<div class="d-flex justify-content-between">
					<p>Kl. Jumat</p>
					<p><b>{{ $result->kl_jumat }}</b></p>
				</div>
				<div class="d-flex justify-content-between">
					<p>Kl. Sabtu</p>
					<p><b>{{ $result->kl_sabtu }}</b></p>
				</div>
				<div class="d-flex justify-content-between">
					<p>Kl. Ahad</p>
					<p><b>{{ $result->kl_ahad }}</b></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection