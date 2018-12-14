<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laracasts')</title>
</head>
<body>
<ul>
    <li><a href="/">Welcome</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">contact</a></li>
</ul>
@yield('content')
</body>
</html>
