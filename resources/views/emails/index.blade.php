<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Emails</h1>
	<table>
		@forelse ($emails as $email)
			<tr>
				<td>{{ $email->from }}</td>
				<td>{{ $email->to }}</td>
				<td><a href="{{ $email->path() }}">{{ $email->subject }}</a></td>
			</tr>
		@empty
			<tr><td colspan='3'>No emails.</td></tr>
		@endforelse
	</table>

</body>
</html>