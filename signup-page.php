<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Better Moods</title>
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
            /* Tropical beach background matching the theme */
            background: url('Image/Vibe-Vacay-Background.png') no-repeat center center/cover;
        }

        /* Card Container */
        .signup-card {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 420px;
            text-align: center;
        }

        /* Typography & Headers */
        .card-title {
            color: #000000;
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }

        .divider {
            border: none;
            height: 1px;
            background-color: #9ca3af;
            margin: 0.5rem 0 1rem;
            width: 100%;
        }

        .instruction {
            color: #6b7280;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            text-align: left; /* Left aligned as shown in the design */
        }

        /* Form Inputs */
        .input-group {
            position: relative;
            margin-bottom: 1.2rem;
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
            padding: 0.8rem 1rem 0.8rem 3.2rem; /* Extra left padding for the icon */
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
        .signup-btn {
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
            margin-bottom: 1.5rem;
            transition: background-color 0.2s;
        }

        .signup-btn:hover {
            background-color: #0f172a;
        }

        .login-link {
            color: #1e40af;
            text-decoration: underline;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }
        
        .login-link:hover {
            color: #1e3a8a;
        }

    </style>
</head>
<body>

    <div class="signup-card">
        <h1 class="card-title">Sign Up</h1>
        <hr class="divider">
        <p class="instruction">Please enter your user details.</p>

        <form action="./login-page.php" method="POST">
            
            <div class="input-group">
                <div class="input-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <input type="text" placeholder="Enter Username" required>
            </div>

            <div class="input-group">
                <div class="input-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                    </svg>
                </div>
                <input type="password" placeholder="Password" required>
            </div>

            <div class="input-group">
                <div class="input-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                <input type="email" placeholder="Email" required>
            </div>

            <button type="submit" class="signup-btn">Sign Up</button>
        </form>

        <a href="./login-page.php" class="login-link">
            <span>&larr;</span> Back to Login Page
        </a>
    </div>

</body>
</html>