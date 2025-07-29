<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yum Heaven - Resep Masakan Indonesia</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #F8F0E5;
            color: #4F372F;
            line-height: 1.6;
        }

        /* Header Styles */
        .header {
            background-color: #F8F0E5;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #4F372F;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo-icon {
            width: 30px;
            height: 30px;
            background-color: #FF8C00;
            border-radius: 50%;
            position: relative;
        }

        .logo-icon::before {
            content: '';
            position: absolute;
            top: 8px;
            left: 10px;
            width: 10px;
            height: 6px;
            background-color: #4F372F;
            border-radius: 50% 50% 0 0;
        }

        .logo-text {
            font-size: 24px;
            font-weight: bold;
        }

        .logo-text .yum {
            color: #FF8C00;
        }

        .logo-text .heaven {
            color: #4F372F;
        }

        .search-bar {
            background-color: #4F372F;
            border-radius: 25px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
        }

        .search-icon {
            width: 16px;
            height: 16px;
            border: 2px solid white;
            border-radius: 50%;
            position: relative;
        }

        .search-icon::after {
            content: '';
            position: absolute;
            bottom: -4px;
            right: -4px;
            width: 8px;
            height: 2px;
            background-color: white;
            transform: rotate(45deg);
        }

        .nav-links {
            display: flex;
            gap: 30px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .nav-links a {
            color: #4F372F;
            text-decoration: none;
            font-size: 14px;
        }

        .login-btn {
            background-color: #4F372F;
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        /* Banner Section */
        .banner {
            text-align: center;
            padding: 60px 20px;
        }

        .banner-btn {
            background: linear-gradient(135deg, #A8DADC, #7FB3B5);
            color: white;
            padding: 30px 60px;
            border-radius: 20px;
            display: inline-block;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .banner-title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .banner-subtitle {
            font-size: 18px;
            opacity: 0.9;
        }

        /* Main Content */
        .main-content {
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .recipe-cards {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .recipe-card {
            background: linear-gradient(90deg, #F8F0E5 0%, #E0C9B8 100%);
            border-radius: 20px;
            padding: 30px;
            display: flex;
            gap: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .recipe-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            flex-shrink: 0;
        }

        .recipe-content {
            flex: 1;
        }

        .recipe-title {
            font-size: 28px;
            font-weight: bold;
            color: #4F372F;
            margin-bottom: 15px;
        }

        .recipe-description {
            color: #4F372F;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .read-more {
            color: #6A5ACD;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .arrow-icon {
            width: 12px;
            height: 12px;
            border-right: 2px solid #6A5ACD;
            border-top: 2px solid #6A5ACD;
            transform: rotate(45deg);
        }

        .recipe-footer {
            display: flex;
            gap: 30px;
            margin-top: 20px;
            color: #4F372F;
            font-size: 14px;
        }

        .recipe-info {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .star-icon {
            color: #FFD700;
            font-size: 16px;
        }

        .people-icon {
            width: 16px;
            height: 16px;
            background-color: #4F372F;
            border-radius: 50%;
            position: relative;
        }

        .people-icon::before,
        .people-icon::after {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: #4F372F;
            border-radius: 50%;
            top: 2px;
        }

        .people-icon::before {
            left: 2px;
        }

        .people-icon::after {
            right: 2px;
        }

        .clock-icon {
            width: 16px;
            height: 16px;
            border: 2px solid #4F372F;
            border-radius: 50%;
            position: relative;
        }

        .clock-icon::before {
            content: '';
            position: absolute;
            top: 2px;
            left: 6px;
            width: 2px;
            height: 6px;
            background-color: #4F372F;
        }

        .clock-icon::after {
            content: '';
            position: absolute;
            top: 6px;
            left: 6px;
            width: 4px;
            height: 2px;
            background-color: #4F372F;
        }

        /* Footer */
        .footer {
            background-color: #F5E8DD;
            padding: 40px;
            margin-top: 60px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .footer-logo .logo-icon {
            width: 25px;
            height: 25px;
        }

        .footer-logo .logo-text {
            font-size: 20px;
        }

        .footer-links {
            display: flex;
            gap: 40px;
        }

        .footer-links a {
            color: #4F372F;
            text-decoration: none;
            font-weight: 600;
        }

        .favorite-btn {
            background-color: #A8DADC;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 12px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 10px;
        }

        .heart-icon {
            width: 12px;
            height: 12px;
            background-color: #FF6B6B;
            border-radius: 50% 50% 0 0;
            position: relative;
        }

        .heart-icon::before {
            content: '';
            position: absolute;
            top: 6px;
            left: 6px;
            width: 12px;
            height: 12px;
            background-color: #FF6B6B;
            border-radius: 50% 50% 0 0;
            transform: rotate(45deg);
        }

        .copyright {
            font-size: 12px;
            color: #4F372F;
            text-align: right;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 20px;
                padding: 20px;
            }

            .nav-links {
                gap: 15px;
            }

            .recipe-card {
                flex-direction: column;
                text-align: center;
            }

            .recipe-image {
                width: 150px;
                height: 150px;
                margin: 0 auto;
            }

            .footer-content {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <div class="logo-icon"></div>
            <div class="logo-text">
                <span class="yum">Yum</span><span class="heaven">Heaven</span>
            </div>
        </div>
        
        <div class="search-bar">
            <div class="search-icon"></div>
            <span>Search...</span>
        </div>
        
        <nav class="nav-links">
            <a href="#">Resep</a>
            <a href="#">Artikel & Tips</a>
            <a href="#">Bicara Rasa</a>
        </nav>
        
        <a href="#" class="login-btn">Login</a>
    </header>

    <!-- Banner Section -->
    <section class="banner">
        <a href="#" class="banner-btn">
            <div class="banner-title">Resep</div>
            <div class="banner-subtitle">Telusuri resep resep yang menarik</div>
        </a>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="recipe-cards">
            <!-- Recipe Card 1 -->
            <div class="recipe-card">
                <img src="{{ asset('images/bakso.png') }}" alt="BBQ Chicken Wings" class="recipe-image">
                <div class="recipe-content">
                    <h2 class="recipe-title">BBQ Chicken Wings</h2>
                    <p class="recipe-description">
                        Disajikan dengan balutan saus BBQ yang kaya rasa—manis, gurih, dan sedikit pedas—sayap ayam ini dipanggang hingga sempurna dengan kilauan saus yang menggoda selera. Dihiasi dengan daun parsley segar di atas piring putih bersih, tampilannya tidak hanya mengundang, tapi juga siap memanjakan lidah Anda. Cocok untuk teman kumpul atau camilan spesial di akhir pekan!
                    </p>
                    <a href="#" class="read-more">
                        Selengkapnya <span class="arrow-icon"></span>
                    </a>
                    <div class="recipe-footer">
                        <div class="recipe-info">
                            <span class="star-icon">★</span>
                            <span>5.0/5.0</span>
                        </div>
                        <div class="recipe-info">
                            <div class="people-icon"></div>
                            <span>Disajikan - 4</span>
                        </div>
                        <div class="recipe-info">
                            <div class="clock-icon"></div>
                            <span>Waktu memasak 2 jam 30 menit</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 2 -->
            <div class="recipe-card">
                <img src="{{ asset('images/rendang.png') }}" alt="Grilled Steak" class="recipe-image">
                <div class="recipe-content">
                    <h2 class="recipe-title">Grilled Steak with Potatoes</h2>
                    <p class="recipe-description">
                        Steak daging sapi premium yang dipanggang dengan sempurna, disajikan dengan kentang panggang yang renyah dan rosemary segar. Daging yang juicy dengan tekstur yang lembut dan rasa yang kaya akan membuat pengalaman makan Anda menjadi tak terlupakan. Cocok untuk makan malam spesial bersama keluarga atau teman-teman.
                    </p>
                    <a href="#" class="read-more">
                        Selengkapnya <span class="arrow-icon"></span>
                    </a>
                    <div class="recipe-footer">
                        <div class="recipe-info">
                            <span class="star-icon">★</span>
                            <span>4.8/5.0</span>
                        </div>
                        <div class="recipe-info">
                            <div class="people-icon"></div>
                            <span>Disajikan - 2</span>
                        </div>
                        <div class="recipe-info">
                            <div class="clock-icon"></div>
                            <span>Waktu memasak 1 jam 45 menit</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 3 -->
            <div class="recipe-card">
                <img src="{{ asset('images/soto.png') }}" alt="Spaghetti" class="recipe-image">
                <div class="recipe-content">
                    <h2 class="recipe-title">Spaghetti Bolognese</h2>
                    <p class="recipe-description">
                        Pasta spaghetti yang dimasak al dente dengan saus bolognese yang kaya rasa, dibuat dari daging sapi cincang, tomat segar, dan bumbu-bumbu pilihan. Dihiasi dengan daun basil segar yang memberikan aroma dan rasa yang menyegarkan. Hidangan klasik Italia yang selalu disukai oleh semua kalangan.
                    </p>
                    <a href="#" class="read-more">
                        Selengkapnya <span class="arrow-icon"></span>
                    </a>
                    <div class="recipe-footer">
                        <div class="recipe-info">
                            <span class="star-icon">★</span>
                            <span>4.9/5.0</span>
                        </div>
                        <div class="recipe-info">
                            <div class="people-icon"></div>
                            <span>Disajikan - 3</span>
                        </div>
                        <div class="recipe-info">
                            <div class="clock-icon"></div>
                            <span>Waktu memasak 1 jam 15 menit</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 4 -->
            <div class="recipe-card">
                <img src="{{ asset('images/papeda.png') }}" alt="Grilled Salmon" class="recipe-image">
                <div class="recipe-content">
                    <h2 class="recipe-title">Grilled Salmon with Greens</h2>
                    <p class="recipe-description">
                        Ikan salmon segar yang dipanggang dengan sempurna, disajikan di atas bed of mixed greens yang segar dan sehat. Salmon yang lembut dengan kulit yang renyah, dipadukan dengan sayuran hijau yang memberikan nutrisi lengkap. Hidangan sehat yang cocok untuk gaya hidup modern.
                    </p>
                    <a href="#" class="read-more">
                        Selengkapnya <span class="arrow-icon"></span>
                    </a>
                    <div class="recipe-footer">
                        <div class="recipe-info">
                            <span class="star-icon">★</span>
                            <span>4.7/5.0</span>
                        </div>
                        <div class="recipe-info">
                            <div class="people-icon"></div>
                            <span>Disajikan - 2</span>
                        </div>
                        <div class="recipe-info">
                            <div class="clock-icon"></div>
                            <span>Waktu memasak 45 menit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <div class="logo-icon"></div>
                <div class="logo-text">
                    <span class="yum">Yum</span><span class="heaven">Heaven</span>
                </div>
            </div>
            
            <div class="footer-links">
                <a href="#">Resep</a>
                <a href="#">Artikel & Tips</a>
                <a href="#">Bicara Rasa</a>
                <a href="#">Resep Populer</a>
            </div>
            
            <div style="text-align: right;">
                <a href="#" class="favorite-btn">
                    <div class="heart-icon"></div>
                    Favorite
                </a>
                <div class="copyright">
                    Copyright © 2025 PT YumHeaven Indonesia. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
</body>
</html>