@extends('layouts.app')

@section('content')
	<div>{{ $client->name }}</div>
	<div>{{ $client->notes }}</div>
@endsection