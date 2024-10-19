<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @section('header')

    <p>This is the web site Yet No Name</p>

    @show

    <div class="content">
        @yield('content')
    </div>
    
</body>
</html>