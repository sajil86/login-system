<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @if(session('success'))
        <script>alert("{{ session('success') }}");</script>
    @endif
    
    <div class="welcome-box">
        <h1>Hello World</h1>
    </div>
</body>
</html>