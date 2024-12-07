<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Gunsnip</title>
</head>
<body class="h-screen">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-2/12 p-4">
            @include('admin/include.sidebar')
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 p-4 pl-10 overflow-y-auto ">
            @yield('admin/content')
        </div>
    </div>
</body>
</html>