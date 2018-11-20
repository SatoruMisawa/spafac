<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('/css/host/style.css') }}">
</head>
<body>
    @include('host.layouts.header')
    @yield('content')
</body>

</html>