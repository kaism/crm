@extends('layouts.app')

@section('content')
	<h1 class="heading">Emails</h1>

	{{-- emails --}}
	@if (count($emails))

		@foreach ($emails as $email)
			<div class="card sm:flex">

				<div class="text-xs text-right sm:w-1/3 sm:text-left lg:w-1/4">
					<div class="header sm:rounded-br sm:pb-1">{{ $email->updated_at }}</div>
					<div class="px-2">
						<span class="text-gray-500">From:</span>
						<span>{{ $email->from_address->address }}</span>
					</div>
					<div class="px-2">
						<span class="text-gray-500">To:</span>
						<span>{{ $email->to_address->address }}</span>
					</div>
				</div>

				<div class="px-2 pt-2 sm:w-2/3 sm:pt-1 lg:w-3/4">
					<a href="{{ $email->path() }}">{{ $email->subject }}</a>
					<br>
					<p class="italic text-gray-600 sm:border-t">{{ str_limit($email->body, 200) }}</p>
				</div>

			</div>
		@endforeach

	@else
		<div>No emails.</div>
	@endif

@endsection