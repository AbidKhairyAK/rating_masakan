@extends('app')

@section('content')
@if($exists)
<p class="text-center">Maaf, anda telah mengirim tanggapan hari ini, coba lagi besok.</p>
@else
<p class="text-center">Terimakasih, tanggapan anda telah dikirim.</p>
@endif
@endsection