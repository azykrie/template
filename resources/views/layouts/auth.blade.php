<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Auth')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    @vite('resources/css/app.css')
</head>

@extends('layouts.alert.success')
@extends('layouts.alert.error')

<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100">

    @yield('content')

</body>


</html>
