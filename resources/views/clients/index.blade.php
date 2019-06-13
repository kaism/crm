@extends('layouts.app')

@section('content')
	<h1 class="heading">Clients</h1>

	{{-- clients --}}
	@if (count($clients))

		@foreach ($clients as $client)
			<div class="card">
				<div class="header flex justify-between">
					<div>{{ $client->name }}</div>
					<div>{{ $client->updated_at }}</div>
				</div>
				<div class="p-4">{{ $client->notes }}</div>
			</div>
		@endforeach

	@else
		<div>No clients.</div>
	@endif

@endsection