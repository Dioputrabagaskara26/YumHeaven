<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubur Ayam - YumHeaven</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #F2D0A9 0%, #F1E3D3 100%);
            min-height: 100vh;
        }

        /* Header */
        .header {
            background: #642E0A;
            padding: 12px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: #F2D0A9;
            font-size: 28px;
            font-weight: bold;
            font-family: cursive;
        }

        .search-container {
            flex: 1;
            max-width: 400px;
            margin: 0 30px;
            position: relative;
        }

        .search-bar {
            width: 100%;
            padding: 8px 40px 8px 15px;
            border: none;
            border-radius: 20px;
            background: #9A7252;
            color: white;
            outline: none;
            font-size: 14px;
        }

        .search-bar::placeholder {
            color: #F1E3D3;
        }

        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #F1E3D3;
            font-size: 16px;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .nav-links a {
            color: #F2D0A9;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: opacity 0.3s;
        }

        .nav-links a:hover {
            opacity: 0.8;
        }

        .login-btn {
            background: #9A7252;
            color: #F1E3D3;
            padding: 8px 18px;
            border: none;
            border-radius: 20px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .login-btn:hover {
            background: #F2D0A9;
            color: #642E0A;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(154, 114, 82, 0.9), rgba(100, 46, 10, 0.8));
            border-radius: 20px;
            padding: 40px;
            color: white;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            min-height: 300px;
        }

        .hero-content {
            flex: 1;
            max-width: 500px;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #F1E3D3;
        }

        .hero-section p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #F2D0A9;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .stars {
            color: #FFD700;
            font-size: 16px;
        }

        .rating-text {
            font-size: 12px;
            color: #F2D0A9;
        }

        .hero-image {
            position: absolute;
            right: 40px;
            top: 50%;
            transform: translateY(-50%);
            width: 300px;
            height: 200px;
            background: radial-gradient(circle, #F1E3D3, #F2D0A9);
            border-radius: 50%;
            opacity: 0.8;
            z-index: 1;
        }

        .hero-image::before {
            content: '';
            position: absolute;
            top: 20%;
            left: 20%;
            width: 60%;
            height: 60%;
            background: radial-gradient(circle, #99C1B9, #9A7252);
            border-radius: 50%;
        }

        /* Floating vegetables */
        .floating-vegetables {
            position: fixed;
            pointer-events: none;
            z-index: 0;
        }

        .floating-lettuce {
            position: absolute;
            opacity: 0.15;
            animation: float 8s ease-in-out infinite;
        }

        .lettuce-shape {
            background: radial-gradient(circle, #99C1B9, #642E0A);
            border-radius: 50% 40% 60% 30%;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(15deg); }
        }

        .floating-lettuce:nth-child(1) {
            top: 15%;
            right: 8%;
            width: 80px;
            height: 80px;
            animation-delay: -1s;
        }

        .floating-lettuce:nth-child(2) {
            top: 65%;
            right: 3%;
            width: 120px;
            height: 120px;
            animation-delay: -3s;
        }

        .floating-lettuce:nth-child(3) {
            top: 45%;
            left: 3%;
            width: 100px;
            height: 100px;
            animation-delay: -5s;
        }

        /* Ingredients Section */
        .section-title {
            background: #99C1B9;
            color: white;
            text-align: center;
            padding: 15px 0;
            border-radius: 25px;
            margin-bottom: 30px;
            font-size: 18px;
            font-weight: bold;
            position: relative;
        }

        .section-title::after {
            content: '🍴';
            position: absolute;
            right: 25px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .ingredients-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
            position: relative;
        }

        .ingredient-card {
            background: #9A7252;
            color: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .ingredient-card h3 {
            font-size: 16px;
            margin-bottom: 15px;
            color: #F1E3D3;
            font-weight: bold;
        }

        .ingredient-card ol {
            list-style: none;
            counter-reset: item;
        }

        .ingredient-card li {
            margin-bottom: 8px;
            font-size: 13px;
            line-height: 1.4;
            color: #F2D0A9;
            counter-increment: item;
            position: relative;
            padding-left: 20px;
        }

        .ingredient-card li::before {
            content: counter(item) ". ";
            position: absolute;
            left: 0;
            color: #F1E3D3;
            font-weight: bold;
        }

        /* Decorative vegetables around ingredients */
        .ingredients-decoration {
            position: absolute;
            pointer-events: none;
        }

        .avocado-slice {
            top: -20px;
            left: -30px;
            width: 60px;
            height: 80px;
            background: linear-gradient(135deg, #99C1B9, #642E0A);
            border-radius: 50% 50% 50% 80%;
            opacity: 0.7;
        }

        .cucumber-slice {
            bottom: -25px;
            right: -25px;
            width: 70px;
            height: 70px;
            background: radial-gradient(circle, #99C1B9, #9A7252);
            border-radius: 50%;
            opacity: 0.6;
        }

        .cucumber-slice::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 15px;
            width: 40px;
            height: 40px;
            background: #F1E3D3;
            border-radius: 50%;
            opacity: 0.5;
        }

        /* Steps Section */
        .steps-title {
            background: #99C1B9;
            color: white;
            text-align: center;
            padding: 15px 0;
            border-radius: 25px;
            margin-bottom: 30px;
            font-size: 18px;
            font-weight: bold;
            position: relative;
        }

        .steps-title::after {
            content: '👨‍🍳';
            position: absolute;
            right: 25px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-bottom: 60px;
        }

        .step-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .step-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .step-image {
            height: 180px;
            position: relative;
            overflow: hidden;
        }

        .step-number {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #D88C9A;
            color: white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(216, 140, 154, 0.4);
        }

        .step-content {
            padding: 20px;
        }

        .step-description {
            font-size: 13px;
            line-height: 1.6;
            color: #642E0A;
        }

        /* Step specific backgrounds */
        .step-1 .step-image { 
            background: linear-gradient(135deg, #F1E3D3, #F2D0A9);
        }
        .step-2 .step-image { 
            background: linear-gradient(135deg, #99C1B9, #F1E3D3);
        }
        .step-3 .step-image { 
            background: linear-gradient(135deg, #D88C9A, #F2D0A9);
        }
        .step-4 .step-image { 
            background: linear-gradient(135deg, #9A7252, #F1E3D3);
        }
        .step-5 .step-image { 
            background: linear-gradient(135deg, #F2D0A9, #99C1B9);
        }
        .step-6 .step-image { 
            background: linear-gradient(135deg, #642E0A, #9A7252);
        }
        .step-7 .step-image { 
            background: linear-gradient(135deg, #99C1B9, #D88C9A);
        }
        .step-8 .step-image { 
            background: linear-gradient(135deg, #F1E3D3, #D88C9A);
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #D88C9A, #9A7252);
            color: white;
            padding: 40px 0 20px;
            margin-top: 60px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            gap: 40px;
            align-items: start;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .footer-logo-circle {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: #D88C9A;
            font-weight: bold;
            font-family: cursive;
        }

        .footer-logo h3 {
            font-size: 20px;
            color: #F1E3D3;
            font-family: cursive;
        }

        .footer-links {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .footer-section h4 {
            margin-bottom: 15px;
            font-size: 16px;
            color: #F1E3D3;
            font-weight: bold;
        }

        .footer-section a {
            color: #F2D0A9;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #F1E3D3;
        }

        .footer-copyright {
            text-align: right;
            font-size: 11px;
            color: #F2D0A9;
            opacity: 0.8;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(241, 227, 211, 0.3);
            font-size: 12px;
            color: #F2D0A9;
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .ingredients-section,
            .steps-grid {
                grid-template-columns: 1fr;
            }
            
            .navbar {
                flex-direction: column;
                gap: 15px;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero-section {
                flex-direction: column;
                text-align: center;
            }
            
            .hero-section h1 {
                font-size: 36px;
            }
            
            .hero-image {
                position: relative;
                right: auto;
                top: auto;
                transform: none;
                margin-top: 20px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .footer-links {
                grid-template-columns: 1fr;
            }
            
            .footer-copyright {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Floating vegetables decoration -->
    <div class="floating-vegetables">
        <div class="floating-lettuce">
            <div class="lettuce-shape" style="width: 100%; height: 100%;"></div>
        </div>
        <div class="floating-lettuce">
            <div class="lettuce-shape" style="width: 100%; height: 100%;"></div>
        </div>
        <div class="floating-lettuce">
            <div class="lettuce-shape" style="width: 100%; height: 100%;"></div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="logo">YumHeaven</div>
            <div class="search-container">
                <input type="text" class="search-bar" placeholder="Search">
                <span class="search-icon">🔍</span>
            </div>
            <div class="nav-links">
                <a href="#resep">RESEP</a>
                <a href="#artikel">ARTIKEL & TIPS</a>
                <a href="#bicara">BICARA RASA</a>
                <a href="#login" class="login-btn">LOGIN</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-content">
                <h1>Bubur Ayam</h1>
                <p>Bubur Ayam adalah hidangan sarapan khas Indonesia yang terbuat dari beras putih yang dimasak hingga menjadi bubur lembut, disajikan dengan suwiran ayam rebus, kerupuk, dan berbagai pelengkap lezat lainnya seperti kacang tanah goreng dan bawang goreng di atas laut.</p>
                <div class="rating">
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <span class="rating-text">5.0 (35 Rates)</span>
                </div>
            </div>
            <div class="hero-image"></div>
        </section>

        <!-- Ingredients Section -->
        <div class="section-title">Bahan-Bahan</div>
        <div class="ingredients-section">
            <div class="ingredients-decoration avocado-slice"></div>
            <div class="ingredient-card">
                <h3>Bahan Bubur:</h3>
                <ol>
                    <li>1 piring nasi</li>
                    <li>2 lembar daun salam</li>
                    <li>1 sdm garam</li>
                    <li>Secukupnya air</li>
                </ol>
                
                <h3 style="margin-top: 25px;">Bahan kuah kuning:</h3>
                <ol>
                    <li>1/2 ekor ayam</li>
                    <li>1 buah</li>
                    <li>2 lembar daun salam</li>
                    <li>2 lembar daun jeruk</li>
                    <li>1 sdt garam</li>
                    <li>1/4 sdt penyedap</li>
                    <li>1/4 sdt merica bubuk</li>
                    <li>1 sdt gula</li>
                    <li>1 batang daun bawang</li>
                    <li>1200 ml air</li>
                </ol>
            </div>
            
            <div class="ingredient-card">
                <h3>Bumbu kuah kuning:</h3>
                <ol>
                    <li>3 siung bawang merah</li>
                    <li>2 siung bawang putih</li>
                    <li>1 ruas kunyit</li>
                    <li>1 ruas jahe</li>
                    <li>2 buah kemiri</li>
                </ol>
                
                <h3 style="margin-top: 25px;">Pelengkap:</h3>
                <ol>
                    <li>Ayam suwir</li>
                    <li>Kerupuk</li>
                    <li>Seledri</li>
                    <li>Bawang goreng</li>
                </ol>
            </div>
            <div class="ingredients-decoration cucumber-slice"></div>
        </div>

        <!-- Steps Section -->
        <div class="steps-title">Cara Membuat</div>
        <div class="steps-grid">
            <div class="step-card step-1">
                <div class="step-image">
                    <div class="step-number">1</div>
                </div>
                <div class="step-content">
                    <p class="step-description">Siapkan bahan-bahan yang akan digunakan.</p>
                </div>
            </div>

            <div class="step-card step-2">
                <div class="step-image">
                    <div class="step-number">2</div>
                </div>
                <div class="step-content">
                    <p class="step-description">Masukkan nasi dalam panci dan lengkapi, tambahkan air cukup banyak, daun salam, dan garam, masak hingga menjadi bubur.</p>
                </div>
            </div>

            <div class="step-card step-3">
                <div class="step-image">
                    <div class="step-number">3</div>
                </div>
                <div class="step-content">
                    <p class="step-description">Siapkan bahan-bahan bumbu kuah kuning, lalu haluskan dengan ulekan atau blender.</p>
                </div>
            </div>

            <div class="step-card step-4">
                <div class="step-image">
                    <div class="step-number">4</div>
                </div>
                <div class="step-content">
                    <p class="step-description">Panaskan minyak goreng, tumis bumbu, tambahkan daun salam, daun jeruk dan serai, tumis hingga matang dan harum lalu tambahkan air.</p>
                </div>
            </div>

            <div class="step-card step-5">
                <div class="step-image">
                    <div class="step-number">5</div>
                </div>
                <div class="step-content">
                    <p class="step-description">Masukkan ayam, tambahkan garam dan penyedap, lalu masuk hingga ayam matang.</p>
                </div>
            </div>

            <div class="step-card step-6">
                <div class="step-image">
                    <div class="step-number">6</div>
                </div>
                <div class="step-content">
                    <p class="step-description">Setelah ayam hingga kecokelatan, lalu suwir-suwir ayam.</p>
                </div>
            </div>

            <div class="step-card step-7">
                <div class="step-image">
                    <div class="step-number">7</div>
                </div>
                <div class="step-content">
                    <p class="step-description">Rebus kuah kuning, tambahkan gula dan merica bubuk, koreksi rasa. Bila telah mendidih tambahkan potongan daun bawang.</p>
                </div>
            </div>

            <div class="step-card step-8">
                <div class="step-image">
                    <div class="step-number">8</div>
                </div>
                <div class="step-content">
                    <p class="step-description">Sajikan bubur dengan bahan pelengkap dan kuah kuning.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <div class="footer-logo-circle">YH</div>
                <div>
                    <h3>YumHeaven</h3>
                </div>
            </div>
            
            <div class="footer-links">
                <div class="footer-section">
                    <h4>Resep</h4>
                    <a href="#">Resep Populer</a>
                </div>
                <div class="footer-section">
                    <h4>Artikel & Tips</h4>
                    <a href="#">Tips Memasak</a>
                </div>
                <div class="footer-section">
                    <h4>Bicara Rasa</h4>
                    <a href="#">Forum Diskusi</a>
                </div>
            </div>
            
            <div class="footer-copyright">
                <p>Copyright © 2025 PT YumHeaven Indonesia. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>