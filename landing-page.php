<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibe Vacay</title>
    <link rel="stylesheet" href="css/landingpage.css">
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
    <!-- <header id="header">
        <div class="logo-container">
            <img src="icon/LogoName.png" class="logo" />
        </div>

        <p class="logo-name">Vibe Vacay</p>
        <p class="home">Home</p>
        <p class="destination-management">Destination Management</p>
        <p class="statistic">Statistic</p>
        <p class="user-management">User Managememt</p>
        <p class="logout">Log Out</p>


        <div class="profile-box">
            <p class="profile">Profile</p>
            <img src="icon/profile1.jpg" class="profile-icon" />

        </div>
    </header> -->

    <section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)),
        url('Image/travel_luggage.jpg') center/cover;">
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
            <div class="card card-1" style="background-image: url('Image/Lifestyle-Transformation.jpg');">
                <div class="card-content">
                    <h3>Relax & Recharge</h3>
                    <p>Find peaceful destinations to unwind from quiet beaches to cozy retreats.</p>
                </div>
            </div>
            <div class="card card-2" style="background-image: url('Image/paraglider.jpg');">
                <div class="card-content">
                    <h3>Adventure Awaits</h3>
                    <p>Feeling bold? Explore thrilling locations packed with excitement and new experiences.</p>
                </div>
            </div>
            <div class="card card-3" style="background-image: url('Image/Hiking.jpg');">
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