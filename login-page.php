<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Better Moods</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body style="background: url('Image/Vibe-Vacay-Background.png') no-repeat center center/cover;">

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