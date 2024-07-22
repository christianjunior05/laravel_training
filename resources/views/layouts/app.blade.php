<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class='container mx-auto mt-4'>
    @include('partials.navbar')
    @yield('content')

     <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html> 
