<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #e3f2fd 0%, #90caf9 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(25,118,210,0.10), 0 1.5px 4px rgba(0,0,0,0.04);
            padding: 48px 32px 40px 32px;
            max-width: 350px;
            width: 100%;
            text-align: center;
            position: relative;
        }
        .login-logo {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            margin-bottom: 18px;
            box-shadow: 0 2px 8px rgba(25,118,210,0.10);
            background: #e3f2fd;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }
        .login-logo img {
            width: 36px;
            height: 36px;
        }
        h1 {
            color: #1976d2;
            margin-bottom: 32px;
            font-size: 2rem;
        }
        .google-btn {
            display: inline-block;
            background: #fff;
            color: #444;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0,0,0,0.04);
            transition: background 0.2s, box-shadow 0.2s, border 0.2s;
            cursor: pointer;
            text-decoration: none;
            outline: none;
        }
        .google-btn:hover, .google-btn:focus {
            background: #e3f2fd;
            box-shadow: 0 4px 12px rgba(25,118,210,0.10);
            border: 1.5px solid #1976d2;
        }
        .google-icon {
            vertical-align: middle;
            margin-right: 8px;
            height: 20px;
        }
        @media (max-width: 480px) {
            .login-card {
                padding: 32px 8px 24px 8px;
                max-width: 95vw;
            }
            h1 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-logo">
            <img src="https://cdn-icons-png.flaticon.com/128/3759/3759268.png" alt="Windows XP 3D Logo">
        </div>
        <h1>Login</h1>
        <a class="google-btn" href="{{ route('google.redirect') }}">
            <img class="google-icon" src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google icon">
            Login with Google
        </a>
    </div>
</body>
</html>