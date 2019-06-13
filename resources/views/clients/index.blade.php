@extends('layouts.app')

@section('content')
	<h1 class="bg-red-400">Clients</h1>
	<table>
		@forelse ($clients as $client)
			<tr>
				<td>{{ $client->name }}</td>
				<td>{{ $client->notes }}</td>
			</tr>
		@empty
			<tr><td colspan='2'>No clients.</td></tr>
		@endforelse
	</table>
@endsection