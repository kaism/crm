<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>{{ $email->message_id }}</div>
	<div>{{ $email->from }}</div>
	<div>{{ $email->to }}</div>
	<div>{{ $email->subject }}</div>
	<div>{{ $email->body }}</div>
</body>
</html>