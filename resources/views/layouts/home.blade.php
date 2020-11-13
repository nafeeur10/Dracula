<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTech Test</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <style>.text-blood { color: #8a0303; }</style>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>