@extends('layouts.app')

@section('content')
	<h1>Emails</h1>
	<table>
		@forelse ($emails as $email)
			<tr>
				<td>{{ $email->from_address->address }}</td>
				<td>{{ $email->to_address->address }}</td>
				<td><a href="{{ $email->path() }}">{{ $email->subject }}</a></td>
			</tr>
		@empty
			<tr><td colspan='3'>No emails.</td></tr>
		@endforelse
	</table>
@endsection