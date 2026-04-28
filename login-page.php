<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Better Moods</title>
    <style>
        /* Base reset and fonts */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* Tropical beach background */
            background: url('Image/Vibe-Vacay-Background.png') no-repeat center center/cover;
        }

        /* Card Container */
        .login-card {
            background-color: #ffffff;
            padding: 3rem 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 420px;
            text-align: center;
        }

        /* Typography */
        .card-title {
            color: #1e293b;
            font-size: 1.6rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .welcome-text {
            font-size: 1.3rem;
            font-weight: 800;
            color: #000;
            margin-bottom: 0.5rem;
            letter-spacing: 0.5px;
        }

        .divider {
            border: none;
            height: 2px;
            background-color: #e5e7eb;
            margin: 0.5rem 0 1rem;
            width: 100%;
        }

        .instruction {
            color: #9ca3af;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
        }

        /* Form Inputs */
        .input-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input-group input {
            width: 100%;
            padding: 0.8rem 1rem 0.8rem 3rem; /* Left padding for icon */
            border: 2px solid #f3f4f6;
            border-radius: 12px;
            font-size: 1rem;
            outline: none;
            color: #374151;
            transition: border-color 0.2s;
        }

        .input-group input:focus {
            border-color: #1e293b;
        }

        .input-group input::placeholder {
            color: #9ca3af;
        }

        /* Buttons and Links */
        .login-btn {
            width: 100%;
            background-color: #1e293b; /* Dark slate blue */
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: 800;
            cursor: pointer;
            margin-top: 1rem;
            margin-bottom: 1rem;
            transition: background-color 0.2s;
        }

        .login-btn:hover {
            background-color: #0f172a;
        }

        .signup-link {
            color: #1e40af;
            text-decoration: underline;
            font-size: 1rem;
        }
        
        .signup-link:hover {
            color: #1e3a8a;
        }

    </style>
</head>
<body>

    <div class="login-card">
        <h1 class="card-title">Your Journey to Better<br>Moods Starts Here</h1>
        
        <div class="welcome-text">WELCOME BACK</div>
        <hr class="divider">
        
        <p class="instruction">Please enter your account and password</p>

        <form action="./landing-page.php" method="POST">
            <div class="input-group">
                <div class="input-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                <input type="email" placeholder="Email" required>
            </div>

            <div class="input-group">
                <div class="input-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                    </svg>
                </div>
                <input type="password" placeholder="Password" required>
            </div>

            <button type="submit" class="login-btn">Login</button>
        </form>

        <a href="./signup-page.php" class="signup-link">Sign Up</a>
    </div>

</body>
</html>