<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraStore</title>
</head>
<body>
    <nav>
        <a href="{{ route('products.index') }}">Products</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
