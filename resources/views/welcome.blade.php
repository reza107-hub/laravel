<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Practice</title>
</head>

<body>
    <p>Home Page</p>
    <ul>
        <li><a href="{{ route('about') }}"">About</a></li>
        <li><a href="{{ route('user.show', ['id' => 1]) }}">User</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</body>

</html>
