<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Clients</h1>
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

</body>
</html>