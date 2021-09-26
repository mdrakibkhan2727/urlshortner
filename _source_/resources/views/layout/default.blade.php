<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title', 'Document')</title>
    @stack('stylesheet')
</head>
<body>
<div class="min-h-screen flex items-center justify-center bg-blue-200 py-12 px-4 sm:px-6 lg:px-8">
    @yield('content')
</div>
@stack('script')
</body>
</html>
