<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Laravel Job Board</title>

    <!-- Fonts -->

</head>

<body class="mx-auto mt-10 max-w-2xl bg-slate-200 text-slate-700">
    {{ $slot }}

</body>

</html>
