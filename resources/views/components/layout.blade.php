<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Laravel App</title>
</head>
<body>

    <a href="{{ route('products.index') }}">Home</a>

    @if(session('status'))
        <div>{{ session('status') }}</div>
    @endif
    {{ $slot }}

</body>
</html>