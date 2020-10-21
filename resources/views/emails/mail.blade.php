<!DOCTYPE html>
<html>
<head>
    <title>Mail de MON SITE WEB !!!!</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
   
    <p>Thank you</p>
    {{ csrf_field() }}
</body>
</html>