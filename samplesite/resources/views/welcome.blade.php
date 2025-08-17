<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyApp</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e1e2f, #2d2d44);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: #1f2235;
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.35);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h2 {
            color: #fff;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .input-group {
            margin-bottom: 1.2rem;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            color: #ccc;
        }

        .input-group input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #333;
            border-radius: 0.6rem;
            background: #2a2d43;
            color: #fff;
            font-size: 1rem;
            transition: border 0.3s ease;
        }

        .input-group input:focus {
            border: 1px solid #4c7cf3;
            outline: none;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 0.85rem;
        }

        .options label {
            color: #aaa;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .options a {
            color: #4c7cf3;
            text-decoration: none;
        }

        .options a:hover {
            text-decoration: underline;
        }

        .btn {
            width: 100%;
            padding: 0.9rem;
            background: #4c7cf3;
            border: none;
            border-radius: 0.6rem;
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #3459c5;
        }

        .google-btn {
            margin-top: 1rem;
            background: #fff;
            color: #444;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .google-btn:hover {
            background: #e6e6e6;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Welcome Back</h2>
        <form method="POST" action="/login">
            @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required autofocus>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="options">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="/forgot-password">Forgot your password?</a>
            </div>

            <button type="submit" class="btn">Log In</button>

            <button type="button" class="btn google-btn" onclick="window.location='{{ route('google.redirect') }}'">
                <img src="https://www.svgrepo.com/show/355037/google.svg" width="18" alt="Google"> Login with Google
            </button>
        </form>
    </div>
</body>
</html>
