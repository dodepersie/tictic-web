<!DOCTYPE html>
<html lang="en" data-theme="dim">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>TicTic</title>
</head>
<body>
    <main class="container mx-auto max-w-3xl">
        @yield('container')
    </main>
</body>
</html>
