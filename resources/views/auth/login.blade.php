<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        @if(session('error'))
            <script>alert("{{ session('error') }}");</script>
        @endif
        
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        
        <!-- Added signup link here -->
        <div class="signup-link">
            Don't have an account? <a href="{{ route('signup') }}">Sign up here</a>
        </div>
    </div>
</body>
</html>