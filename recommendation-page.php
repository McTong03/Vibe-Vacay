<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibe Vacay - Malaysia</title>
    <style>
        /* Base Styles & Variables */
        :root {
            --primary-dark: #1e293b;
            --text-main: #111827;
            --text-muted: #6b7280;
            --bg-light: #f9fafb;
            --border-color: #e5e7eb;
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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
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
            height: 70vh;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), 
                        url('https://images.unsplash.com/photo-1596422846543-75c6fc197f07?auto=format&fit=crop&q=80&w=1920') center/cover;
            display: flex;
            align-items: center;
            padding: 0 4rem;
            color: white;
            position: relative;
        }

        .hero-content {
            max-width: 600px;
            margin-top: 4rem;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.05rem;
            line-height: 1.5;
            margin-bottom: 2rem;
            text-shadow: 0 1px 2px rgba(0,0,0,0.5);
        }

        .tags {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .tag-label {
            font-weight: bold;
            margin-right: 0.5rem;
        }

        .tag {
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            padding: 0.4rem 1.2rem;
            border-radius: 20px;
            font-size: 0.9rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .rating-box {
            position: absolute;
            bottom: 4rem;
            right: 4rem;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(8px);
            padding: 1rem 2rem;
            border-radius: 30px;
            display: flex;
            align-items: baseline;
            gap: 0.5rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .rating-box .score {
            font-size: 3rem;
            font-weight: bold;
        }

        .rating-box .text {
            font-size: 1rem;
        }

        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255,255,255,0.9);
            color: var(--text-main);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            font-size: 1.2rem;
            border: none;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            z-index: 2;
        }

        .nav-arrow.left { left: 2rem; }
        .nav-arrow.right { right: 2rem; }

        /* Search Bar */
        .search-container {
            display: flex;
            justify-content: center;
            margin-top: -1.5rem;
            position: relative;
            z-index: 5;
            padding-bottom: 3rem;
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
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .search-bar input {
            background: transparent;
            border: none;
            color: white;
            outline: none;
            width: 100%;
        }

        .search-bar input::placeholder { color: #cbd5e1; }

        .search-bar button {
            background-color: white;
            color: var(--primary-dark);
            border: none;
            padding: 0.6rem 2rem;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Section Titles */
        .section-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
            color: var(--text-main);
        }

        /* Destinations Horizontal List */
        .destinations-section {
            padding: 2rem 0 4rem;
            position: relative;
        }

        .cards-wrapper {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        .dest-card {
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            background: white;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .dest-card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .heart-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            background: white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            color: var(--text-muted);
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .card-info {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .location {
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-bottom: 0.25rem;
        }

        .dest-title {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }

        .climate {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            font-size: 0.85rem;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 0.2rem;
        }

        .star { color: #1e293b; }
        .reviews { color: var(--text-muted); font-size: 0.75rem; }
        .price { font-weight: bold; }

        .slider-arrow {
            position: absolute;
            right: -20px;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            cursor: pointer;
            z-index: 2;
        }

        /* States Grid */
        .states-section {
            padding: 2rem 0 4rem;
        }

        .states-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            row-gap: 2rem;
        }

        .state-card {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .state-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 12px;
        }

        .state-card h3 {
            font-size: 1.1rem;
            font-weight: 700;
        }

        /* Base Variables - matching your previous designs */
        :root {
            --primary-dark: #1e293b; /* Dark blue/slate for buttons */
            --text-main: #111827;
            --text-muted: #4b5563;
            --text-light: #9ca3af;
            --border-color: #e5e7eb;
            --link-color: #3b82f6;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #ffffff;
            color: var(--text-main);
            padding-bottom: 4rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        /* Section Title */
        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 3rem;
            color: #000;
        }

        /* Reviews Grid */
        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-bottom: 4rem;
        }

        /* Review Card */
        .review-card {
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.5rem;
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
            display: flex;
            flex-direction: column;
        }

        .tour-link {
            font-size: 0.85rem;
            color: var(--primary-dark);
            text-decoration: underline;
            margin-bottom: 0.5rem;
            line-height: 1.4;
            display: inline-block;
        }

        .stars {
            color: var(--primary-dark);
            font-size: 1rem;
            margin-bottom: 1.2rem;
            letter-spacing: 2px;
        }

        /* User Info Section */
        .user-info {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.1rem;
        }
        
        .avatar.bg-orange { background-color: #ff7f50; }
        .avatar.bg-red { background-color: #ff6b6b; }

        .user-details .name {
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text-main);
        }

        .user-details .date {
            font-size: 0.75rem;
            color: var(--text-light);
        }

        /* Review Text */
        .review-text {
            font-size: 0.9rem;
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 0.5rem;
            flex-grow: 1; /* Pushes images to the bottom */
        }

        .show-more {
            font-size: 0.9rem;
            color: var(--primary-dark);
            text-decoration: underline;
            font-weight: 500;
            cursor: pointer;
            margin-bottom: 1.5rem;
            display: inline-block;
        }

        /* Thumbnail Images */
        .review-images {
            display: flex;
            gap: 0.5rem;
        }

        .img-wrapper {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }

        .img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Overlay for '+1' style */
        .img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1rem;
        }

        /* View More Button Section */
        .view-more-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .view-more-container::before,
        .view-more-container::after {
            content: "";
            flex-grow: 1;
            border-top: 3px solid var(--primary-dark); /* The thick horizontal line */
        }

        .btn-view-more {
            background-color: var(--primary-dark);
            color: white;
            font-size: 1.25rem;
            font-weight: bold;
            padding: 1rem 3rem;
            border-radius: 40px;
            border: none;
            cursor: pointer;
            margin: 0 2rem;
            transition: background-color 0.2s;
        }

        .btn-view-more:hover {
            background-color: #0f172a;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .reviews-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .reviews-grid {
                grid-template-columns: 1fr;
            }
            .section-title {
                font-size: 2rem;
            }
            .view-more-container::before,
            .view-more-container::after {
                border-top: 2px solid var(--primary-dark);
            }
            .btn-view-more {
                padding: 0.8rem 2rem;
                font-size: 1.1rem;
                margin: 0 1rem;
            }
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
        <button class="nav-arrow left">&#8592;</button>
        <div class="hero-content">
            <h1>Kuala Lumpur</h1>
            <p>Malaysia's capital city blends modern skyscrapers with cultural heritage. From iconic landmarks to shopping and food experiences, it's perfect for travelers seeking energy and excitement.</p>
            <div class="tags">
                <span class="tag-label">Tag:</span>
                <span class="tag">Urban</span>
                <span class="tag">Vibrant</span>
                <span class="tag">Lifestyle</span>
            </div>
        </div>
        <div class="rating-box">
            <span class="score">5.0</span>
            <span class="text">Rating</span>
        </div>
        <button class="nav-arrow right">&#8594;</button>
    </section>

    <div class="search-container">
        <div class="search-bar">
            <input type="text" placeholder="Find places and things to do">
            <button>Search</button>
        </div>
    </div>

    <div class="container">
        <section class="destinations-section">
            <h2 class="section-title">High Rate of Travel Destination In Malaysia</h2>
            
            <div class="cards-wrapper">
                <div class="dest-card">
                    <div class="heart-icon">&#9825;</div>
                    <img src="https://images.unsplash.com/photo-1518182170546-076616fdcbca?auto=format&fit=crop&q=80&w=400" alt="Blue Tears">
                    <div class="card-info">
                        <span class="location">Kuala Selangor</span>
                        <h3 class="dest-title">Magical Blue Tears Night Boat Tour in Kuala Selangor</h3>
                        <span class="climate">Climate: Summer</span>
                        <div class="card-footer">
                            <div class="rating">
                                <span class="score">5.0</span>
                                <span class="star">&#9733;</span>
                                <span class="reviews">(1,148)</span>
                            </div>
                            <div class="price">From RM 31</div>
                        </div>
                    </div>
                </div>

                <div class="dest-card">
                    <div class="heart-icon">&#9825;</div>
                    <img src="https://images.unsplash.com/photo-1584286595398-a59f21d313f5?auto=format&fit=crop&q=80&w=400" alt="Petronas Towers">
                    <div class="card-info">
                        <span class="location">Kuala Lumpur</span>
                        <h3 class="dest-title">Skip-the-Line Petronas Twin Towers E-Ticket</h3>
                        <span class="climate">Climate: Summer</span>
                        <div class="card-footer">
                            <div class="rating">
                                <span class="score">4.6</span>
                                <span class="star">&#9733;</span>
                                <span class="reviews">(3,148)</span>
                            </div>
                            <div class="price">From RM182</div>
                        </div>
                    </div>
                </div>

                <div class="dest-card">
                    <div class="heart-icon">&#9825;</div>
                    <img src="https://images.unsplash.com/photo-1528181304800-259b08848526?auto=format&fit=crop&q=80&w=400" alt="Sky Mirror">
                    <div class="card-info">
                        <span class="location">Kuala Selangor</span>
                        <h3 class="dest-title">Magical Sky Mirror Experience in Kuala Selangor</h3>
                        <span class="climate">Climate: Summer</span>
                        <div class="card-footer">
                            <div class="rating">
                                <span class="score">4.6</span>
                                <span class="star">&#9733;</span>
                                <span class="reviews">(3,148)</span>
                            </div>
                            <div class="price">From RM182</div>
                        </div>
                    </div>
                </div>

                <div class="dest-card">
                    <div class="heart-icon">&#9825;</div>
                    <img src="https://images.unsplash.com/photo-1550184658-ff6132a71714?auto=format&fit=crop&q=80&w=400" alt="Rafflesia Flower">
                    <div class="card-info">
                        <span class="location">Kuala Lumpur · Lojing Highlands</span>
                        <h3 class="dest-title">Rafflesia Flower Trek at Lojing Highlands</h3>
                        <span class="climate">Climate: Mountain</span>
                        <div class="card-footer">
                            <div class="rating">
                                <span class="score">4.6</span>
                                <span class="star">&#9733;</span>
                                <span class="reviews">(3,148)</span>
                            </div>
                            <div class="price">From RM182</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="slider-arrow">&#8594;</button>
        </section>

        <section class="states-section">
            <h2 class="section-title">State In Malaysia</h2>
            
            <div class="states-grid">
                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1596422846543-75c6fc197f07?auto=format&fit=crop&q=80&w=400" alt="Kuala Lumpur">
                    <h3>Kuala Lumpur</h3>
                </div>
                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1610884631558-86fc35bc61eb?auto=format&fit=crop&q=80&w=400" alt="Melaka">
                    <h3>Melaka</h3>
                </div>
                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1582801642861-12001e74f1ec?auto=format&fit=crop&q=80&w=400" alt="Negeri Sembilan">
                    <h3>Negeri Sembilan</h3>
                </div>
                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1621868357777-6a2c206cfd15?auto=format&fit=crop&q=80&w=400" alt="Johor Bahru">
                    <h3>Johor Bahru</h3>
                </div>
                
                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1587823528410-b96057bbfa74?auto=format&fit=crop&q=80&w=400" alt="Kedah">
                    <h3>Kedah</h3>
                </div>
                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1563200938-230af97f1fbc?auto=format&fit=crop&q=80&w=400" alt="Kelantan">
                    <h3>Kelantan</h3>
                </div>
                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1590050752117-238cb0fb12b1?auto=format&fit=crop&q=80&w=400" alt="Pahang">
                    <h3>Pahang</h3>
                </div>
                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1605333555546-f9479b4890d2?auto=format&fit=crop&q=80&w=400" alt="Perak">
                    <h3>Perak</h3>
                </div>

                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1517436073-3b1b11ce1163?auto=format&fit=crop&q=80&w=400" alt="Perlis">
                    <h3>Perlis</h3>
                </div>
                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1580219616035-188ccbc05b22?auto=format&fit=crop&q=80&w=400" alt="Pulau Pinang">
                    <h3>Pulau Pinang</h3>
                </div>
                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1588693959253-8d655f4581f3?auto=format&fit=crop&q=80&w=400" alt="Selangor">
                    <h3>Selangor</h3>
                </div>
                <div class="state-card">
                    <img src="https://images.unsplash.com/photo-1628174780517-5eeb8e94589c?auto=format&fit=crop&q=80&w=400" alt="Terengganu">
                    <h3>Terengganu</h3>
                </div>
            </div>
        </section>

        ``<h2 class="section-title">What people are saying about Their Tour</h2>

        <div class="reviews-grid">
            
            <div class="review-card">
                <a href="#" class="tour-link">Magical Blue Tears Night Boat Tour in Kuala Selangor</a>
                <div class="stars">★★★★★</div>
                
                <div class="user-info">
                    <div class="avatar bg-orange">B</div>
                    <div class="user-details">
                        <div class="name">Briege</div>
                        <div class="date">March 31, 2026</div>
                    </div>
                </div>
                
                <p class="review-text">Moinya I hope I spelt this right was an amazing guide so knowledgeable fun and passionate about the tour we had the best time and were completely blew away with this tour would definitely...</p>
                <a class="show-more">Show more</a>
                
                <div class="review-images">
                    <div class="img-wrapper"><img src="https://images.unsplash.com/photo-1548625361-ec853c896944?auto=format&fit=crop&w=150&q=80" alt="Tour image"></div>
                    <div class="img-wrapper"><img src="https://images.unsplash.com/photo-1518182170546-076616fdcbca?auto=format&fit=crop&w=150&q=80" alt="Tour image"></div>
                    <div class="img-wrapper">
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=150&q=80" alt="Tour image">
                        <div class="img-overlay">+1</div>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <a href="#" class="tour-link">NYC: Metropolitan Museum: "Secrets of the MET" Experience</a>
                <div class="stars">★★★★★</div>
                
                <div class="user-info">
                    <div class="avatar bg-orange">P</div>
                    <div class="user-details">
                        <div class="name">Pascal</div>
                        <div class="date">March 29, 2026</div>
                    </div>
                </div>
                
                <p class="review-text">Great! Very informative, lovely friendly driver, mountains of food! All very good.</p>
                
                <div class="review-images" style="margin-top: auto;">
                    <div class="img-wrapper"><img src="https://images.unsplash.com/photo-1565121544322-835616b49e25?auto=format&fit=crop&w=150&q=80" alt="Tour image"></div>
                </div>
            </div>

            <div class="review-card">
                <a href="#" class="tour-link">Magical Blue Tears Night Boat Tour in Kuala Selangor</a>
                <div class="stars">★★★★★</div>
                
                <div class="user-info">
                    <div class="avatar bg-red">E</div>
                    <div class="user-details">
                        <div class="name">Elmar</div>
                        <div class="date">March 31, 2026</div>
                    </div>
                </div>
                
                <p class="review-text">An amazing experience! Our guide was highly experienced, incredibly passionate, and made the entire tour truly engaging. You could immediately tell how much he loves his job. The tour was...</p>
                <a class="show-more">Show more</a>
                
                <div class="review-images">
                    <div class="img-wrapper"><img src="https://images.unsplash.com/photo-1542317148-8badecc4eb97?auto=format&fit=crop&w=150&q=80" alt="Tour image"></div>
                    <div class="img-wrapper"><img src="https://images.unsplash.com/photo-1604928141064-207cea6f571f?auto=format&fit=crop&w=150&q=80" alt="Tour image"></div>
                    <div class="img-wrapper">
                        <img src="https://images.unsplash.com/photo-1518182170546-076616fdcbca?auto=format&fit=crop&w=150&q=80" alt="Tour image">
                        <div class="img-overlay">+1</div>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <a href="#" class="tour-link">NYC: Metropolitan Museum: "Secrets of the MET" Experience</a>
                <div class="stars">★★★★★</div>
                
                <div class="user-info">
                    <div class="avatar bg-orange">P</div>
                    <div class="user-details">
                        <div class="name">Pascal</div>
                        <div class="date">March 29, 2026</div>
                    </div>
                </div>
                
                <p class="review-text">Great! Very informative, lovely friendly driver, mountains of food! All very good.</p>
                
                <div class="review-images" style="margin-top: auto;">
                    <div class="img-wrapper"><img src="https://images.unsplash.com/photo-1565121544322-835616b49e25?auto=format&fit=crop&w=150&q=80" alt="Tour image"></div>
                </div>
            </div>

            <div class="review-card">
                <a href="#" class="tour-link">Magical Blue Tears Night Boat Tour in Kuala Selangor</a>
                <div class="stars">★★★★★</div>
                
                <div class="user-info">
                    <div class="avatar bg-red">E</div>
                    <div class="user-details">
                        <div class="name">Elmar</div>
                        <div class="date">March 31, 2026</div>
                    </div>
                </div>
                
                <p class="review-text">An amazing experience! Our guide was highly experienced, incredibly passionate, and made the entire tour truly engaging. You could immediately tell how much he loves his job. The tour was...</p>
                <a class="show-more">Show more</a>
                
                <div class="review-images">
                    <div class="img-wrapper"><img src="https://images.unsplash.com/photo-1542317148-8badecc4eb97?auto=format&fit=crop&w=150&q=80" alt="Tour image"></div>
                    <div class="img-wrapper"><img src="https://images.unsplash.com/photo-1604928141064-207cea6f571f?auto=format&fit=crop&w=150&q=80" alt="Tour image"></div>
                    <div class="img-wrapper">
                        <img src="https://images.unsplash.com/photo-1518182170546-076616fdcbca?auto=format&fit=crop&w=150&q=80" alt="Tour image">
                        <div class="img-overlay">+1</div>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <a href="#" class="tour-link">Magical Blue Tears Night Boat Tour in Kuala Selangor</a>
                <div class="stars">★★★★★</div>
                
                <div class="user-info">
                    <div class="avatar bg-orange">B</div>
                    <div class="user-details">
                        <div class="name">Briege</div>
                        <div class="date">March 31, 2026</div>
                    </div>
                </div>
                
                <p class="review-text">Moinya I hope I spelt this right was an amazing guide so knowledgeable fun and passionate about the tour we had the best time and were completely blew away with this tour would definitely...</p>
                <a class="show-more">Show more</a>
                
                <div class="review-images">
                    <div class="img-wrapper"><img src="https://images.unsplash.com/photo-1548625361-ec853c896944?auto=format&fit=crop&w=150&q=80" alt="Tour image"></div>
                    <div class="img-wrapper"><img src="https://images.unsplash.com/photo-1518182170546-076616fdcbca?auto=format&fit=crop&w=150&q=80" alt="Tour image"></div>
                    <div class="img-wrapper">
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=150&q=80" alt="Tour image">
                        <div class="img-overlay">+1</div>
                    </div>
                </div>
            </div>

        </div>

        <div class="view-more-container">
            <button class="btn-view-more">View More</button>
        </div>
        
    </div>

</body>
</html>