<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 50px; }
        .login-container { max-width: 400px; margin: auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
        input[type="email"], input[type="password"] { width: 100%; padding: 12px; margin: 8px 0 20px; border: 1px solid #ccc; border-radius: 4px; }
        button { width: 100%; background-color: #1e8067; color: white; padding: 14px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #155a43; }
        .error { color: red; font-size: 0.9em; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
