@extends('layouts.app')

@section('content')
	<div>{{ $email->message_id }}</div>
	<div>{{ $email->from_address->address }}</div>
	<div>{{ $email->to_address->address }}</div>
	<div>{{ $email->subject }}</div>
	<div>{{ $email->body }}</div>
@endsection