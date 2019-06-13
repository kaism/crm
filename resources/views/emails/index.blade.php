@extends('layouts.app')

@section('content')
	<h1 class="text-xl text-teal-700 mb-3">Emails</h1>

	{{-- emails --}}
	@if (count($emails))

		@foreach ($emails as $email)
			<div class="mb-2 bg-white border rounded">
				<div class="text-xs px-2 text-gray-700 text-right">
					{{ $email->updated_at }}
				</div>
				<div class="text-xs px-2 text-gray-700 text-right">
					<span class="text-xs text-gray-600 font-normal">From</span>
					{{ $email->from_address->address }}
				</div>
				<div class="text-xs px-2 text-gray-700 text-right">
					<span class="text-xs text-gray-600 font-normal">To</span>
					{{ $email->to_address->address }}
				</div>
				<div class="px-2 text-gray-700">
					<a class="" href="{{ $email->path() }}">{{ $email->subject }}</a>
					<br>
					<p class="italic text-gray-500">{{ str_limit($email->body, 100) }}</p>
				</div>
			</div>
		@endforeach

	@else
		<div>No emails.</div>
	@endif

@endsection