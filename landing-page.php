<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibe Vacay</title>
    <style>
        /* Base Styles */
        :root {
            --primary-dark: #1e293b;
            --text-main: #333333;
            --bg-light: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            color: var(--text-main);
            background-color: #ffffff;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Navigation */
        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            padding: 1.5rem 4rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            z-index: 10;
        }

        .logo {
            font-size: 1.25rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            font-size: 0.95rem;
            font-weight: 600;
        }

        .auth-buttons {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            font-weight: 600;
        }

        .signup-btn {
            background-color: white;
            color: var(--primary-dark);
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Hero Section */
        .hero {
            height: 80vh;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)), 
                        url('Image/travel_luggage.jpg') center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 4rem;
            color: white;
            position: relative;
        }

        .hero h1 {
            font-size: 3.5rem;
            max-width: 600px;
            line-height: 1.2;
            margin-bottom: 2rem;
        }

        .explore-btn {
            background-color: white;
            color: var(--primary-dark);
            width: fit-content;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 4rem;
        }

        .hero p {
            max-width: 500px;
            font-size: 0.95rem;
            line-height: 1.5;
            position: absolute;
            bottom: 2rem;
        }

        /* Search Section */
        .search-section {
            display: flex;
            justify-content: center;
            padding: 2rem;
        }

        .search-bar {
            background-color: var(--primary-dark);
            padding: 0.5rem;
            padding-left: 1.5rem;
            border-radius: 40px;
            display: flex;
            width: 600px;
            justify-content: space-between;
            align-items: center;
        }

        .search-bar input {
            background: transparent;
            border: none;
            color: white;
            outline: none;
            width: 100%;
        }

        .search-bar input::placeholder {
            color: #cbd5e1;
        }

        .search-bar button {
            background-color: white;
            color: var(--primary-dark);
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Mood Section */
        .mood-section {
            padding: 4rem;
            text-align: center;
        }

        .mood-section h2 {
            font-size: 2rem;
            margin-bottom: 3rem;
        }

        .cards-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .card {
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: flex-end;
            padding: 2rem;
            text-align: left;
            color: white;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 50%);
            z-index: 1;
        }

        .card-content {
            position: relative;
            z-index: 2;
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .card p {
            font-size: 0.9rem;
            line-height: 1.4;
            color: #e2e8f0;
        }

        .card-1 { background: url('Image/Lifestyle-Transformation.jpg') center/cover; }
        .card-2 { background: url('Image/paraglider.jpg') center/cover; }
        .card-3 { background: url('Image/Hiking.jpg') center/cover; }

        /* Features Section */
        .features-section {
            padding: 4rem;
        }

        .features-section h2 {
            font-size: 2rem;
            margin-bottom: 3rem;
        }

        .features-container {
            display: flex;
            gap: 4rem;
        }

        .features-list {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .feature-item {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .feature-title {
            background-color: var(--primary-dark);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            width: 100%;
        }

        .feature-item p {
            font-size: 0.95rem;
            line-height: 1.5;
            padding: 0 0.5rem;
            color: #475569;
        }

        .features-images {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .features-images img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 20px;
        }

    </style>
</head>
<body>

    <header class="navbar">
        <div class="logo">
            <span style="font-size: 1.5rem;"><img src="Image/Vibe-Vacay-Logo.png" alt="Vibe Vacay Logo" style="height: 5.0rem; margin-right: 0.5rem;"> </span> Vibe Vacay
        </div>
        <nav class="nav-links">
            <a href="./landing-page.php">Home</a>
            <a href="./recommendation-page.php">Recommendation</a>
            <a href="./filter-search-page.php">Filter & Search</a>
            <a href="./wishlist-page.php">Wishlist</a>
            <a href="./about-us-page.php">About Us</a>
        </nav>
        <div class="auth-buttons">
            <a href="./login-page.php" class="login">Log In</a>
            <a href="./signup-page.php" class="signup-btn">Sign Up <span>➔</span></a>
        </div>
    </header>

    <section class="hero">
        <h1>Discover your perfect destination based on how you feel</h1>
        <a href="./recommendation-page.php" class="explore-btn">Explore <span>➔</span></a>
        <p>Not sure where to go? Let your mood decide. Discover destinations perfectly matched to how you feel right now.</p>
    </section>

    <section class="search-section">
        <div class="search-bar">
            <input type="text" placeholder="Find places and things to do">
            <button>Search</button>
        </div>
    </section>

    <section class="mood-section">
        <h2>Start Your Journey Based on How You Feel</h2>
        <div class="cards-container">
            <div class="card card-1">
                <div class="card-content">
                    <h3>Relax & Recharge</h3>
                    <p>Find peaceful destinations to unwind from quiet beaches to cozy retreats.</p>
                </div>
            </div>
            <div class="card card-2">
                <div class="card-content">
                    <h3>Adventure Awaits</h3>
                    <p>Feeling bold? Explore thrilling locations packed with excitement and new experiences.</p>
                </div>
            </div>
            <div class="card card-3">
                <div class="card-content">
                    <h3>Escape & Reflect</h3>
                    <p>Reconnect with yourself through calming, meaningful travel experiences.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section">
        <h2>Smarter Travel Starts Here</h2>
        <div class="features-container">
            <div class="features-list">
                <div class="feature-item">
                    <div class="feature-title">Mood-Scape Recommendation Engine</div>
                    <p>Our intelligent system analyzes your mood and suggests destinations that match your emotions, helping you find the perfect getaway effortlessly.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-title">Smart Search & Filtering</div>
                    <p>Easily explore destinations using advanced filters and search tools, with results tailored to your preferences and travel style.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-title">Personalized User Dashboard</div>
                    <p>Manage your trips, track your preferences, and receive customized recommendations — all in one place.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-title">Explore Popular Destinations</div>
                    <p>Stay inspired with trending locations, rankings, and top picks from travelers around the world.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-title">Detailed Destination Insights</div>
                    <p>Access rich information, travel tips, and reviews to make confident travel decisions.</p>
                </div>
            </div>

            <div class="features-images">
                <img src="Image/travel-with-friend.jpg" alt="Group of travelers looking at a view">
                <img src="Image/yellow-van.jpg" alt="Yellow van on a map">
            </div>
        </div>
    </section>

</body>
</html>