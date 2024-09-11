<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Home Page</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('item') }}">Item Page</a>
            <a href="{{ route('picture') }}">Picture Page</a>
        </nav>
    </div>
</body>
</html>
