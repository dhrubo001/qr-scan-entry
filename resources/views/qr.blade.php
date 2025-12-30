@extends('layout')


@section('content')
    <h2>Scan QR Code</h2>
    {!! QrCode::size(300)->generate(url('/scan')) !!}
@endsection
