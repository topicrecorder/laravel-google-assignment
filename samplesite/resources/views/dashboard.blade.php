<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #1d4768ff 0%, #90caf9 100%);
            margin: 0;
            padding: 0;
        }
        .navbar {
            background: #1f2235;
            color: #fff;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            font-size: 1.3rem;
            font-weight: 600;
        }

        .navbar a {
            color: #fff;
            margin-left: 1.5rem;
            text-decoration: none;
            font-size: 0.95rem;
        }

        .navbar a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 420px;
            margin: 48px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(25,118,210,0.10), 0 1.5px 4px rgba(0,0,0,0.04);
            padding: 40px 28px 32px 28px;
            text-align: center;
        }
        .user-avatar {
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
        .user-avatar img {
            width: 36px;
            height: 36px;
        }
        h1 {
            color: #1976d2;
            margin-bottom: 28px;
            font-size: 1.7rem;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-bottom: 18px;
        }
        .nav-btn {
            display: inline-block;
            width: 100%;
            background: #1976d2;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 14px 0;
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 8px;
            text-decoration: none;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(25,118,210,0.06);
            cursor: pointer;
        }
        .nav-btn:hover, .nav-btn:focus {
            background: #0d47a1;
            box-shadow: 0 4px 16px rgba(25,118,210,0.12);
        }
        @media (max-width: 480px) {
            .container {
                padding: 24px 6px 18px 6px;
                max-width: 98vw;
            }
            h1 {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
        <!-- Navbar -->
    <div class="navbar">
        <h1>MyApp Dashboard</h1>
        <div>
            <a href="#">Profile</a>
            <a href="#">Settings</a>
            <a href="#">Logout</a>
        </div>
    </div>
    <div class="container">
        <div class="user-avatar">
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Avatar">
        </div>
        <h1>Welcome, {{ Auth::user()->name }}</h1>
        <ul>
            <li><a class="nav-btn" href="/calendar">Calendar</a></li>
            <li><a class="nav-btn" href="/email">Email</a></li>
            <li><a class="nav-btn" href="/todos">ToDos</a></li>
        </ul>
    </div>
</body>
</html>