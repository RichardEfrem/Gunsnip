<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Lepas Kost</title>
    <link rel="icon" href="image/lepaskos-logo.png" type="image/png">
</head>
<body>
    <div class="header">
        @include('User.includes.header')
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="footer">
        @include('User.includes.footer')
    </div>
    
</body>
</html>