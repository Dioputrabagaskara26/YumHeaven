<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumHeaven - Resep BBQ Chicken Wings</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5e6d3 0%, #e8d5c4 100%);
            min-height: 100vh;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 100%);
            padding: 15px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            color: #f5e6d3;
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .search-bar {
            flex: 1;
            max-width: 400px;
            margin: 0 30px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 12px 45px 12px 20px;
            border: none;
            border-radius: 25px;
            background: rgba(245, 230, 211, 0.15);
            color: white;
            font-size: 14px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(245, 230, 211, 0.2);
        }

        .search-input::placeholder {
            color: rgba(245, 230, 211, 0.8);
        }

        .search-btn {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #f5e6d3;
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            transition: background 0.3s ease;
        }

        .search-btn:hover {
            background: rgba(245, 230, 211, 0.2);
        }

        .nav-menu {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-link {
            color: #f5e6d3;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: #FFD700;
            transform: translateY(-2px);
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            right: 0;
            height: 2px;
            background: #FFD700;
            border-radius: 1px;
        }

        .login-btn {
            background: rgba(245, 230, 211, 0.15);
            color: #f5e6d3;
            padding: 10px 25px;
            border: 1px solid rgba(245, 230, 211, 0.3);
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .login-btn:hover {
            background: rgba(245, 230, 211, 0.25);
            border-color: rgba(245, 230, 211, 0.5);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
        }

        /* Page Title */
        .page-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .title-badge {
            background: linear-gradient(135deg, #4FC3F7 0%, #29B6F6 100%);
            color: white;
            padding: 18px 45px;
            border-radius: 35px;
            font-size: 20px;
            font-weight: 600;
            display: inline-block;
            box-shadow: 0 6px 20px rgba(79, 195, 247, 0.4);
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
            transform: perspective(1000px) rotateX(5deg);
            transition: transform 0.3s ease;
        }

        .title-badge:hover {
            transform: perspective(1000px) rotateX(0deg) translateY(-3px);
            box-shadow: 0 8px 25px rgba(79, 195, 247, 0.5);
        }

        .title-subtitle {
            color: #8B4513;
            font-size: 15px;
            margin-top: 12px;
            opacity: 0.8;
            font-style: italic;
        }

        /* Recipe Cards */
        .recipe-grid {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .recipe-card {
            background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.8) 100%);
            border-radius: 25px;
            padding: 35px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            display: flex;
            align-items: center;
            gap: 35px;
            transition: all 0.4s ease;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.3);
            position: relative;
            overflow: hidden;
        }

        .recipe-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.5s ease;
        }

        .recipe-card:hover::before {
            left: 100%;
        }

        .recipe-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .recipe-card:nth-child(even) {
            flex-direction: row-reverse;
            background: linear-gradient(135deg, rgba(139, 69, 19, 0.15) 0%, rgba(160, 82, 45, 0.08) 100%);
        }

        .recipe-image {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            flex-shrink: 0;
            transition: transform 0.4s ease;
            border: 4px solid rgba(255,255,255,0.5);
        }

        .recipe-card:hover .recipe-image {
            transform: scale(1.05) rotate(5deg);
        }

        .recipe-content {
            flex: 1;
            position: relative;
        }

        .recipe-title {
            font-size: 32px;
            font-weight: bold;
            color: #8B4513;
            margin-bottom: 18px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .recipe-description {
            color: #5D4E37;
            line-height: 1.7;
            margin-bottom: 25px;
            font-size: 16px;
            text-align: justify;
        }

        .recipe-link {
            color: #4FC3F7;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .recipe-link:hover {
            color: #29B6F6;
            transform: translateX(5px);
        }

        .recipe-link i {
            transition: transform 0.3s ease;
        }

        .recipe-link:hover i {
            transform: translateX(3px);
        }

        .recipe-meta {
            display: flex;
            align-items: center;
            gap: 25px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #8B4513;
            font-size: 15px;
            font-weight: 500;
        }

        .rating-stars {
            color: #FFD700;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        .rating-number {
            font-weight: 700;
            color: #8B4513;
        }

        .difficulty-bars {
            display: flex;
            gap: 3px;
        }

        .difficulty-bar {
            width: 18px;
            height: 5px;
            background: #ddd;
            border-radius: 3px;
            transition: background 0.3s ease;
        }

        .difficulty-bar.filled {
            background: linear-gradient(135deg, #FF6B6B 0%, #FF5252 100%);
            box-shadow: 0 2px 4px rgba(255, 107, 107, 0.3);
        }

        .time-icon {
            color: #4FC3F7;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #E1BEE7 0%, #D1C4E9 100%);
            padding: 50px 0 25px;
            margin-top: 80px;
            box-shadow: 0 -4px 15px rgba(0,0,0,0.1);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 40px;
        }

        .footer-logo {
            color: #8B4513;
            font-size: 28px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .footer-links {
            display: flex;
            gap: 35px;
            flex-wrap: wrap;
        }

        .footer-link {
            color: #8B4513;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
            position: relative;
        }

        .footer-link:hover {
            color: #A0522D;
            transform: translateY(-2px);
        }

        .footer-link::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: #A0522D;
            transition: width 0.3s ease;
        }

        .footer-link:hover::after {
            width: 100%;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 25px;
            border-top: 1px solid rgba(139, 69, 19, 0.2);
            margin-top: 30px;
            color: #8B4513;
            font-size: 13px;
            opacity: 0.8;
        }

        /* Animations */
        .recipe-card {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .recipe-card:nth-child(1) { animation-delay: 0.1s; }
        .recipe-card:nth-child(2) { animation-delay: 0.2s; }
        .recipe-card:nth-child(3) { animation-delay: 0.3s; }
        .recipe-card:nth-child(4) { animation-delay: 0.4s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
                gap: 20px;
                padding: 15px;
            }

            .search-bar {
                max-width: 100%;
                margin: 0;
            }

            .nav-menu {
                gap: 20px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .main-content {
                padding: 30px 15px;
            }

            .recipe-card {
                flex-direction: column !important;
                text-align: center;
                padding: 25px;
                gap: 25px;
            }

            .recipe-card:nth-child(even) {
                flex-direction: column !important;
            }

            .recipe-image {
                width: 180px;
                height: 180px;
            }

            .recipe-title {
                font-size: 26px;
            }

            .recipe-meta {
                justify-content: center;
                gap: 15px;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
                gap: 25px;
            }

            .footer-links {
                justify-content: center;
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .logo {
                font-size: 24px;
            }

            .title-badge {
                font-size: 18px;
                padding: 15px 35px;
            }

            .recipe-image {
                width: 150px;
                height: 150px;
            }

            .recipe-title {
                font-size: 22px;
            }

            .recipe-description {
                font-size: 14px;
            }

            .nav-menu {
                gap: 15px;
            }

            .nav-link {
                font-size: 13px;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <a href="#" class="logo">
                YumHeaven
            </a>
            
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Cari resep favorit..." id="searchInput">
                <button class="search-btn" id="searchBtn">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <nav class="nav-menu">
                <a href="#" class="nav-link active">RESEP</a>
                <a href="#" class="nav-link">ARTIKEL & TIPS</a>
                <a href="#" class="nav-link">BICARA RASA</a>
                <a href="#" class="login-btn">LOGIN</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Page Title -->
        <div class="page-title">
            <div class="title-badge">
                Resep
            </div>
            <div class="title-subtitle">
                Koleksi resep masakan yang menggugah selera
            </div>
        </div>

        <!-- Recipe Grid -->
        <div class="recipe-grid" id="recipeGrid">
            <!-- Recipe Card 1 -->
            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1567620832903-9fc6debc209f?w=400&h=400&fit=crop&crop=center" 
                     alt="BBQ Chicken Wings" 
                     class="recipe-image">
                
                <div class="recipe-content">
                    <h2 class="recipe-title">BBQ Chicken Wings</h2>
                    <p class="recipe-description">
                        Disajikan dengan balutan saus BBQ yang kaya rasa—manis, gurih, dan sedikit pedas—sayap ayam ini dipanggang hingga sempurna dengan kikisan saus yang menggoda selera. Dilisesi dengan daun parsley segar di atas piring putih bersih, tampilannya tidak hanya mengundang, tapi juga siap memanjakan lidah Anda. Cocok untuk teman kumpul atau camilan spesial di akhir pekanmu
                    </p>
                    <a href="#" class="recipe-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                    
                    <div class="recipe-meta">
                        <div class="meta-item">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-number">5.0</span>
                        </div>
                        
                        <div class="meta-item">
                            <span>Tingkat:</span>
                            <div class="difficulty-bars">
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar"></div>
                            </div>
                            <span>4</span>
                        </div>
                        
                        <div class="meta-item">
                            <i class="fas fa-clock time-icon"></i>
                            <span>Waktu memasak 2 jam 30 menit</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 2 -->
            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=400&h=400&fit=crop&crop=center" 
                     alt="BBQ Chicken Wings" 
                     class="recipe-image">
                
                <div class="recipe-content">
                    <h2 class="recipe-title">BBQ Chicken Wings</h2>
                    <p class="recipe-description">
                        Disajikan dengan balutan saus BBQ yang kaya rasa—manis, gurih, dan sedikit pedas—sayap ayam ini dipanggang hingga sempurna dengan kikisan saus yang menggoda selera. Dilisesi dengan daun parsley segar di atas piring putih bersih, tampilannya tidak hanya mengundang, tapi juga siap memanjakan lidah Anda. Cocok untuk teman kumpul atau camilan spesial di akhir pekanmu
                    </p>
                    <a href="#" class="recipe-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                    
                    <div class="recipe-meta">
                        <div class="meta-item">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-number">5.0</span>
                        </div>
                        
                        <div class="meta-item">
                            <span>Tingkat:</span>
                            <div class="difficulty-bars">
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar"></div>
                            </div>
                            <span>4</span>
                        </div>
                        
                        <div class="meta-item">
                            <i class="fas fa-clock time-icon"></i>
                            <span>Waktu memasak 2 jam 30 menit</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 3 -->
            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1527477396-e21e8b74dd1a?w=400&h=400&fit=crop&crop=center" 
                     alt="BBQ Chicken Wings" 
                     class="recipe-image">
                
                <div class="recipe-content">
                    <h2 class="recipe-title">BBQ Chicken Wings</h2>
                    <p class="recipe-description">
                        Disajikan dengan balutan saus BBQ yang kaya rasa—manis, gurih, dan sedikit pedas—sayap ayam ini dipanggang hingga sempurna dengan kikisan saus yang menggoda selera. Dilisesi dengan daun parsley segar di atas piring putih bersih, tampilannya tidak hanya mengundang, tapi juga siap memanjakan lidah Anda. Cocok untuk teman kumpul atau camilan spesial di akhir pekanmu
                    </p>
                    <a href="#" class="recipe-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                    
                    <div class="recipe-meta">
                        <div class="meta-item">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-number">5.0</span>
                        </div>
                        
                        <div class="meta-item">
                            <span>Tingkat:</span>
                            <div class="difficulty-bars">
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar"></div>
                            </div>
                            <span>4</span>
                        </div>
                        
                        <div class="meta-item">
                            <i class="fas fa-clock time-icon"></i>
                            <span>Waktu memasak 2 jam 30 menit</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 4 -->
            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1588166524941-3bf61a9c41db?w=400&h=400&fit=crop&crop=center" 
                     alt="BBQ Chicken Wings" 
                     class="recipe-image">
                
                <div class="recipe-content">
                    <h2 class="recipe-title">BBQ Chicken Wings</h2>
                    <p class="recipe-description">
                        Disajikan dengan balutan saus BBQ yang kaya rasa—manis, gurih, dan sedikit pedas—sayap ayam ini dipanggang hingga sempurna dengan kikisan saus yang menggoda selera. Dilisesi dengan daun parsley segar di atas piring putih bersih, tampilannya tidak hanya mengundang, tapi juga siap memanjakan lidah Anda. Cocok untuk teman kumpul atau camilan spesial di akhir pekanmu
                    </p>
                    <a href="#" class="recipe-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                    
                    <div class="recipe-meta">
                        <div class="meta-item">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-number">5.0</span>
                        </div>
                        
                        <div class="meta-item">
                            <span>Tingkat:</span>
                            <div class="difficulty-bars">
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar"></div>
                            </div>
                            <span>4</span>
                        </div>
                        
                        <div class="meta-item">
                            <i class="fas fa-clock time-icon"></i>
                            <span>Waktu memasak 2 jam 30 menit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">YumHeaven</div>
            <div class="footer-links">
                <a href="#" class="footer-link">Resep</a>
                <a href="#" class="footer-link">Resep Populer</a>
                <a href="#" class="footer-link">Artikel & Tips</a>
                <a href="#" class="footer-link">Bicara Rasa</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2025 PT YumHeaven Indonesia. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Enhanced interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Enhanced card hover effects
            const cards = document.querySelectorAll('.recipe-card');
            
            cards.forEach((card, index) => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-12px) scale(1.03)';
                    this.style.boxShadow = '0 20px 50px rgba(0,0,0,0.25)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                    this.style.boxShadow = '0 10px 30px rgba(0,0,0,0.15)';
                });

                // Click effect
                card.addEventListener('click', function(e) {
                    if (!e.target.closest('.recipe-link')) {
                        this.style.transform = 'scale(0.98)';
                        setTimeout(() => {
                            this.style.transform = 'translateY(-12px) scale(1.03)';
                        }, 100);
                    }
                });
            });

            // Enhanced search functionality
            const searchInput = document.getElementById('searchInput');
            const searchBtn = document.getElementById('searchBtn');
            
            function performSearch() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                const cards = document.querySelectorAll('.recipe-card');
                let visibleCount = 0;
                
                // Show loading
                searchBtn.innerHTML = '<div class="loading"></div>';
                
                setTimeout(() => {
                    cards.forEach(card => {
                        const title = card.querySelector('.recipe-title').textContent.toLowerCase();
                        const description = card.querySelector('.recipe-description').textContent.toLowerCase();
                        
                        if (searchTerm === '' || title.includes(searchTerm) || description.includes(searchTerm)) {
                            card.style.display = 'flex';
                            card.style.animation = 'fadeInUp 0.5s ease-out forwards';
                            visibleCount++;
                        } else {
                            card.style.display = 'none';
                        }
                    });
                    
                    // Reset search button
                    searchBtn.innerHTML = '<i class="fas fa-search"></i>';
                    
                    // Show no results message if needed
                    if (visibleCount === 0 && searchTerm !== '') {
                        showNoResults();
                    } else {
                        hideNoResults();
                    }
                }, 800);
            }

            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });

            searchBtn.addEventListener('click', performSearch);

            // Real-time search
            let searchTimeout;
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(performSearch, 300);
            });

            function showNoResults() {
                let noResultsDiv = document.getElementById('noResults');
                if (!noResultsDiv) {
                    noResultsDiv = document.createElement('div');
                    noResultsDiv.id = 'noResults';
                    noResultsDiv.innerHTML = `
                        <div style="text-align: center; padding: 60px 20px; color: #8B4513;">
                            <i class="fas fa-search" style="font-size: 48px; opacity: 0.3; margin-bottom: 20px;"></i>
                            <h3 style="font-size: 24px; margin-bottom: 10px;">Resep tidak ditemukan</h3>
                            <p style="opacity: 0.7;">Coba gunakan kata kunci yang berbeda</p>
                        </div>
                    `;
                    document.getElementById('recipeGrid').appendChild(noResultsDiv);
                }
                noResultsDiv.style.display = 'block';
            }

            function hideNoResults() {
                const noResultsDiv = document.getElementById('noResults');
                if (noResultsDiv) {
                    noResultsDiv.style.display = 'none';
                }
            }

            // Smooth scrolling for internal links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Enhanced recipe link interactions
            document.querySelectorAll('.recipe-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Add ripple effect
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
                    ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
                    ripple.style.position = 'absolute';
                    ripple.style.borderRadius = '50%';
                    ripple.style.background = 'rgba(79, 195, 247, 0.3)';
                    ripple.style.transform = 'scale(0)';
                    ripple.style.animation = 'ripple 0.6s linear';
                    ripple.style.pointerEvents = 'none';
                    
                    this.style.position = 'relative';
                    this.style.overflow = 'hidden';
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                    
                    // Simulate navigation
                    setTimeout(() => {
                        alert('Navigasi ke halaman detail resep');
                    }, 300);
                });
            });

            // Parallax effect on scroll
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.5;
                
                document.querySelector('.header').style.transform = `translateY(${rate}px)`;
                
                // Reveal animation for cards
                cards.forEach((card, index) => {
                    const cardTop = card.offsetTop;
                    const cardHeight = card.offsetHeight;
                    const windowHeight = window.innerHeight;
                    
                    if (scrolled + windowHeight > cardTop + cardHeight / 4) {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }
                });
            });

            // Loading animation
            function showLoading() {
                const loadingOverlay = document.createElement('div');
                loadingOverlay.id = 'loadingOverlay';
                loadingOverlay.innerHTML = `
                    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
                                background: rgba(245, 230, 211, 0.9); display: flex; 
                                justify-content: center; align-items: center; z-index: 9999;">
                        <div style="text-align: center; color: #8B4513;">
                            <div class="loading" style="width: 40px; height: 40px; margin-bottom: 20px;"></div>
                            <p style="font-size: 18px; font-weight: 600;">Memuat resep...</p>
                        </div>
                    </div>
                `;
                document.body.appendChild(loadingOverlay);
                
                setTimeout(() => {
                    loadingOverlay.remove();
                }, 1500);
            }

            // Navigation effects
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from other links
                    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    showLoading();
                });
            });

            // Easter egg - konami code
            let konamiCode = [];
            const konamiSequence = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'KeyB', 'KeyA'];
            
            document.addEventListener('keydown', function(e) {
                konamiCode.push(e.code);
                if (konamiCode.length > konamiSequence.length) {
                    konamiCode.shift();
                }
                
                if (konamiCode.join(',') === konamiSequence.join(',')) {
                    // Easter egg activated
                    document.body.style.animation = 'rainbow 2s infinite';
                    setTimeout(() => {
                        document.body.style.animation = '';
                    }, 10000);
                }
            });

            // Mobile menu toggle (for future enhancement)
            let mobileMenuOpen = false;
            
            // Touch gestures for mobile
            let startY, startX;
            
            document.addEventListener('touchstart', function(e) {
                startY = e.touches[0].clientY;
                startX = e.touches[0].clientX;
            });
            
            document.addEventListener('touchend', function(e) {
                if (!startY || !startX) return;
                
                const endY = e.changedTouches[0].clientY;
                const endX = e.changedTouches[0].clientX;
                const diffY = startY - endY;
                const diffX = startX - endX;
                
                // Swipe down to refresh (simulate)
                if (diffY < -100 && Math.abs(diffX) < 50) {
                    if (window.scrollY === 0) {
                        showLoading();
                    }
                }
                
                startY = null;
                startX = null;
            });
        });

        // Additional CSS for animations
        const additionalStyles = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            
            @keyframes rainbow {
                0% { filter: hue-rotate(0deg); }
                100% { filter: hue-rotate(360deg); }
            }
            
            .recipe-card {
                will-change: transform, opacity;
            }
            
            .recipe-link {
                will-change: transform;
            }
            
            /* Custom scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
            }
            
            ::-webkit-scrollbar-track {
                background: rgba(245, 230, 211, 0.3);
            }
            
            ::-webkit-scrollbar-thumb {
                background: linear-gradient(135deg, #8B4513, #A0522D);
                border-radius: 4px;
            }
            
            ::-webkit-scrollbar-thumb:hover {
                background: linear-gradient(135deg, #A0522D, #CD853F);
            }
            
            /* Selection styles */
            ::selection {
                background: rgba(79, 195, 247, 0.3);
                color: #8B4513;
            }
            
            /* Focus styles for accessibility */
            .search-input:focus,
            .nav-link:focus,
            .login-btn:focus,
            .recipe-link:focus {
                outline: 2px solid #4FC3F7;
                outline-offset: 2px;
            }
            
            /* Print styles */
            @media print {
                .header, .footer {
                    display: none;
                }
                
                .recipe-card {
                    break-inside: avoid;
                    box-shadow: none;
                    border: 1px solid #ccc;
                }
            }
        `;
        
        const styleSheet = document.createElement('style');
        styleSheet.textContent = additionalStyles;
        document.head.appendChild(styleSheet);
    </script>
</body>
</html><!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumHeaven - Resep BBQ Chicken Wings</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5e6d3 0%, #e8d5c4 100%);
            min-height: 100vh;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 100%);
            padding: 15px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            color: #f5e6d3;
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .search-bar {
            flex: 1;
            max-width: 400px;
            margin: 0 30px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 12px 45px 12px 20px;
            border: none;
            border-radius: 25px;
            background: rgba(245, 230, 211, 0.15);
            color: white;
            font-size: 14px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(245, 230, 211, 0.2);
        }

        .search-input::placeholder {
            color: rgba(245, 230, 211, 0.8);
        }

        .search-btn {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #f5e6d3;
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            transition: background 0.3s ease;
        }

        .search-btn:hover {
            background: rgba(245, 230, 211, 0.2);
        }

        .nav-menu {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-link {
            color: #f5e6d3;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: #FFD700;
            transform: translateY(-2px);
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            right: 0;
            height: 2px;
            background: #FFD700;
            border-radius: 1px;
        }

        .login-btn {
            background: rgba(245, 230, 211, 0.15);
            color: #f5e6d3;
            padding: 10px 25px;
            border: 1px solid rgba(245, 230, 211, 0.3);
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .login-btn:hover {
            background: rgba(245, 230, 211, 0.25);
            border-color: rgba(245, 230, 211, 0.5);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
        }

        /* Page Title */
        .page-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .title-badge {
            background: linear-gradient(135deg, #4FC3F7 0%, #29B6F6 100%);
            color: white;
            padding: 18px 45px;
            border-radius: 35px;
            font-size: 20px;
            font-weight: 600;
            display: inline-block;
            box-shadow: 0 6px 20px rgba(79, 195, 247, 0.4);
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
            transform: perspective(1000px) rotateX(5deg);
            transition: transform 0.3s ease;
        }

        .title-badge:hover {
            transform: perspective(1000px) rotateX(0deg) translateY(-3px);
            box-shadow: 0 8px 25px rgba(79, 195, 247, 0.5);
        }

        .title-subtitle {
            color: #8B4513;
            font-size: 15px;
            margin-top: 12px;
            opacity: 0.8;
            font-style: italic;
        }

        /* Recipe Cards */
        .recipe-grid {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .recipe-card {
            background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.8) 100%);
            border-radius: 25px;
            padding: 35px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            display: flex;
            align-items: center;
            gap: 35px;
            transition: all 0.4s ease;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.3);
            position: relative;
            overflow: hidden;
        }

        .recipe-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.5s ease;
        }

        .recipe-card:hover::before {
            left: 100%;
        }

        .recipe-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .recipe-card:nth-child(even) {
            flex-direction: row-reverse;
            background: linear-gradient(135deg, rgba(139, 69, 19, 0.15) 0%, rgba(160, 82, 45, 0.08) 100%);
        }

        .recipe-image {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            flex-shrink: 0;
            transition: transform 0.4s ease;
            border: 4px solid rgba(255,255,255,0.5);
        }

        .recipe-card:hover .recipe-image {
            transform: scale(1.05) rotate(5deg);
        }

        .recipe-content {
            flex: 1;
            position: relative;
        }

        .recipe-title {
            font-size: 32px;
            font-weight: bold;
            color: #8B4513;
            margin-bottom: 18px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .recipe-description {
            color: #5D4E37;
            line-height: 1.7;
            margin-bottom: 25px;
            font-size: 16px;
            text-align: justify;
        }

        .recipe-link {
            color: #4FC3F7;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .recipe-link:hover {
            color: #29B6F6;
            transform: translateX(5px);
        }

        .recipe-link i {
            transition: transform 0.3s ease;
        }

        .recipe-link:hover i {
            transform: translateX(3px);
        }

        .recipe-meta {
            display: flex;
            align-items: center;
            gap: 25px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #8B4513;
            font-size: 15px;
            font-weight: 500;
        }

        .rating-stars {
            color: #FFD700;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        .rating-number {
            font-weight: 700;
            color: #8B4513;
        }

        .difficulty-bars {
            display: flex;
            gap: 3px;
        }

        .difficulty-bar {
            width: 18px;
            height: 5px;
            background: #ddd;
            border-radius: 3px;
            transition: background 0.3s ease;
        }

        .difficulty-bar.filled {
            background: linear-gradient(135deg, #FF6B6B 0%, #FF5252 100%);
            box-shadow: 0 2px 4px rgba(255, 107, 107, 0.3);
        }

        .time-icon {
            color: #4FC3F7;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #E1BEE7 0%, #D1C4E9 100%);
            padding: 50px 0 25px;
            margin-top: 80px;
            box-shadow: 0 -4px 15px rgba(0,0,0,0.1);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 40px;
        }

        .footer-logo {
            color: #8B4513;
            font-size: 28px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .footer-links {
            display: flex;
            gap: 35px;
            flex-wrap: wrap;
        }

        .footer-link {
            color: #8B4513;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
            position: relative;
        }

        .footer-link:hover {
            color: #A0522D;
            transform: translateY(-2px);
        }

        .footer-link::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: #A0522D;
            transition: width 0.3s ease;
        }

        .footer-link:hover::after {
            width: 100%;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 25px;
            border-top: 1px solid rgba(139, 69, 19, 0.2);
            margin-top: 30px;
            color: #8B4513;
            font-size: 13px;
            opacity: 0.8;
        }

        /* Animations */
        .recipe-card {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .recipe-card:nth-child(1) { animation-delay: 0.1s; }
        .recipe-card:nth-child(2) { animation-delay: 0.2s; }
        .recipe-card:nth-child(3) { animation-delay: 0.3s; }
        .recipe-card:nth-child(4) { animation-delay: 0.4s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
                gap: 20px;
                padding: 15px;
            }

            .search-bar {
                max-width: 100%;
                margin: 0;
            }

            .nav-menu {
                gap: 20px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .main-content {
                padding: 30px 15px;
            }

            .recipe-card {
                flex-direction: column !important;
                text-align: center;
                padding: 25px;
                gap: 25px;
            }

            .recipe-card:nth-child(even) {
                flex-direction: column !important;
            }

            .recipe-image {
                width: 180px;
                height: 180px;
            }

            .recipe-title {
                font-size: 26px;
            }

            .recipe-meta {
                justify-content: center;
                gap: 15px;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
                gap: 25px;
            }

            .footer-links {
                justify-content: center;
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .logo {
                font-size: 24px;
            }

            .title-badge {
                font-size: 18px;
                padding: 15px 35px;
            }

            .recipe-image {
                width: 150px;
                height: 150px;
            }

            .recipe-title {
                font-size: 22px;
            }

            .recipe-description {
                font-size: 14px;
            }

            .nav-menu {
                gap: 15px;
            }

            .nav-link {
                font-size: 13px;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <a href="#" class="logo">
                YumHeaven
            </a>
            
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Cari resep favorit..." id="searchInput">
                <button class="search-btn" id="searchBtn">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <nav class="nav-menu">
                <a href="#" class="nav-link active">RESEP</a>
                <a href="#" class="nav-link">ARTIKEL & TIPS</a>
                <a href="#" class="nav-link">BICARA RASA</a>
                <a href="#" class="login-btn">LOGIN</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Page Title -->
        <div class="page-title">
            <div class="title-badge">
                Resep
            </div>
            <div class="title-subtitle">
                Koleksi resep masakan yang menggugah selera
            </div>
        </div>

        <!-- Recipe Grid -->
        <div class="recipe-grid" id="recipeGrid">
            <!-- Recipe Card 1 -->
            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1567620832903-9fc6debc209f?w=400&h=400&fit=crop&crop=center" 
                     alt="BBQ Chicken Wings" 
                     class="recipe-image">
                
                <div class="recipe-content">
                    <h2 class="recipe-title">BBQ Chicken Wings</h2>
                    <p class="recipe-description">
                        Disajikan dengan balutan saus BBQ yang kaya rasa—manis, gurih, dan sedikit pedas—sayap ayam ini dipanggang hingga sempurna dengan kikisan saus yang menggoda selera. Dilisesi dengan daun parsley segar di atas piring putih bersih, tampilannya tidak hanya mengundang, tapi juga siap memanjakan lidah Anda. Cocok untuk teman kumpul atau camilan spesial di akhir pekanmu
                    </p>
                    <a href="#" class="recipe-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                    
                    <div class="recipe-meta">
                        <div class="meta-item">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-number">5.0</span>
                        </div>
                        
                        <div class="meta-item">
                            <span>Tingkat:</span>
                            <div class="difficulty-bars">
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar"></div>
                            </div>
                            <span>4</span>
                        </div>
                        
                        <div class="meta-item">
                            <i class="fas fa-clock time-icon"></i>
                            <span>Waktu memasak 2 jam 30 menit</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 2 -->
            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=400&h=400&fit=crop&crop=center" 
                     alt="BBQ Chicken Wings" 
                     class="recipe-image">
                
                <div class="recipe-content">
                    <h2 class="recipe-title">BBQ Chicken Wings</h2>
                    <p class="recipe-description">
                        Disajikan dengan balutan saus BBQ yang kaya rasa—manis, gurih, dan sedikit pedas—sayap ayam ini dipanggang hingga sempurna dengan kikisan saus yang menggoda selera. Dilisesi dengan daun parsley segar di atas piring putih bersih, tampilannya tidak hanya mengundang, tapi juga siap memanjakan lidah Anda. Cocok untuk teman kumpul atau camilan spesial di akhir pekanmu
                    </p>
                    <a href="#" class="recipe-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                    
                    <div class="recipe-meta">
                        <div class="meta-item">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-number">5.0</span>
                        </div>
                        
                        <div class="meta-item">
                            <span>Tingkat:</span>
                            <div class="difficulty-bars">
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar"></div>
                            </div>
                            <span>4</span>
                        </div>
                        
                        <div class="meta-item">
                            <i class="fas fa-clock time-icon"></i>
                            <span>Waktu memasak 2 jam 30 menit</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 3 -->
            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1527477396-e21e8b74dd1a?w=400&h=400&fit=crop&crop=center" 
                     alt="BBQ Chicken Wings" 
                     class="recipe-image">
                
                <div class="recipe-content">
                    <h2 class="recipe-title">BBQ Chicken Wings</h2>
                    <p class="recipe-description">
                        Disajikan dengan balutan saus BBQ yang kaya rasa—manis, gurih, dan sedikit pedas—sayap ayam ini dipanggang hingga sempurna dengan kikisan saus yang menggoda selera. Dilisesi dengan daun parsley segar di atas piring putih bersih, tampilannya tidak hanya mengundang, tapi juga siap memanjakan lidah Anda. Cocok untuk teman kumpul atau camilan spesial di akhir pekanmu
                    </p>
                    <a href="#" class="recipe-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                    
                    <div class="recipe-meta">
                        <div class="meta-item">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-number">5.0</span>
                        </div>
                        
                        <div class="meta-item">
                            <span>Tingkat:</span>
                            <div class="difficulty-bars">
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar"></div>
                            </div>
                            <span>4</span>
                        </div>
                        
                        <div class="meta-item">
                            <i class="fas fa-clock time-icon"></i>
                            <span>Waktu memasak 2 jam 30 menit</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 4 -->
            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1588166524941-3bf61a9c41db?w=400&h=400&fit=crop&crop=center" 
                     alt="BBQ Chicken Wings" 
                     class="recipe-image">
                
                <div class="recipe-content">
                    <h2 class="recipe-title">BBQ Chicken Wings</h2>
                    <p class="recipe-description">
                        Disajikan dengan balutan saus BBQ yang kaya rasa—manis, gurih, dan sedikit pedas—sayap ayam ini dipanggang hingga sempurna dengan kikisan saus yang menggoda selera. Dilisesi dengan daun parsley segar di atas piring putih bersih, tampilannya tidak hanya mengundang, tapi juga siap memanjakan lidah Anda. Cocok untuk teman kumpul atau camilan spesial di akhir pekanmu
                    </p>
                    <a href="#" class="recipe-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                    
                    <div class="recipe-meta">
                        <div class="meta-item">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-number">5.0</span>
                        </div>
                        
                        <div class="meta-item">
                            <span>Tingkat:</span>
                            <div class="difficulty-bars">
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar filled"></div>
                                <div class="difficulty-bar"></div>
                            </div>
                            <span>4</span>
                        </div>
                        
                        <div class="meta-item">
                            <i class="fas fa-clock time-icon"></i>
                            <span>Waktu memasak 2 jam 30 menit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">YumHeaven</div>
            <div class="footer-links">
                <a href="#" class="footer-link">Resep</a>
                <a href="#" class="footer-link">Resep Populer</a>
                <a href="#" class="footer-link">Artikel & Tips</a>
                <a href="#" class="footer-link">Bicara Rasa</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2025 PT YumHeaven Indonesia. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Enhanced interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Enhanced card hover effects
            const cards = document.querySelectorAll('.recipe-card');
            
            cards.forEach((card, index) => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-12px) scale(1.03)';
                    this.style.boxShadow = '0 20px 50px rgba(0,0,0,0.25)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                    this.style.boxShadow = '0 10px 30px rgba(0,0,0,0.15)';
                });

                // Click effect
                card.addEventListener('click', function(e) {
                    if (!e.target.closest('.recipe-link')) {
                        this.style.transform = 'scale(0.98)';
                        setTimeout(() => {
                            this.style.transform = 'translateY(-12px) scale(1.03)';
                        }, 100);
                    }
                });
            });

            // Enhanced search functionality
            const searchInput = document.getElementById('searchInput');
            const searchBtn = document.getElementById('searchBtn');
            
            function performSearch() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                const cards = document.querySelectorAll('.recipe-card');
                let visibleCount = 0;
                
                // Show loading
                searchBtn.innerHTML = '<div class="loading"></div>';
                
                setTimeout(() => {
                    cards.forEach(card => {
                        const title = card.querySelector('.recipe-title').textContent.toLowerCase();
                        const description = card.querySelector('.recipe-description').textContent.toLowerCase();
                        
                        if (searchTerm === '' || title.includes(searchTerm) || description.includes(searchTerm)) {
                            card.style.display = 'flex';
                            card.style.animation = 'fadeInUp 0.5s ease-out forwards';
                            visibleCount++;
                        } else {
                            card.style.display = 'none';
                        }
                    });
                    
                    // Reset search button
                    searchBtn.innerHTML = '<i class="fas fa-search"></i>';
                    
                    // Show no results message if needed
                    if (visibleCount === 0 && searchTerm !== '') {
                        showNoResults();
                    } else {
                        hideNoResults();
                    }
                }, 800);
            }

            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });

            searchBtn.addEventListener('click', performSearch);

            // Real-time search
            let searchTimeout;
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(performSearch, 300);
            });

            function showNoResults() {
                let noResultsDiv = document.getElementById('noResults');
                if (!noResultsDiv) {
                    noResultsDiv = document.createElement('div');
                    noResultsDiv.id = 'noResults';
                    noResultsDiv.innerHTML = `
                        <div style="text-align: center; padding: 60px 20px; color: #8B4513;">
                            <i class="fas fa-search" style="font-size: 48px; opacity: 0.3; margin-bottom: 20px;"></i>
                            <h3 style="font-size: 24px; margin-bottom: 10px;">Resep tidak ditemukan</h3>
                            <p style="opacity: 0.7;">Coba gunakan kata kunci yang berbeda</p>
                        </div>
                    `;
                    document.getElementById('recipeGrid').appendChild(noResultsDiv);
                }
                noResultsDiv.style.display = 'block';
            }

            function hideNoResults() {
                const noResultsDiv = document.getElementById('noResults');
                if (noResultsDiv) {
                    noResultsDiv.style.display = 'none';
                }
            }

            // Smooth scrolling for internal links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Enhanced recipe link interactions
            document.querySelectorAll('.recipe-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Add ripple effect
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
                    ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
                    ripple.style.position = 'absolute';
                    ripple.style.borderRadius = '50%';
                    ripple.style.background = 'rgba(79, 195, 247, 0.3)';
                    ripple.style.transform = 'scale(0)';
                    ripple.style.animation = 'ripple 0.6s linear';
                    ripple.style.pointerEvents = 'none';
                    
                    this.style.position = 'relative';
                    this.style.overflow = 'hidden';
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                    
                    // Simulate navigation
                    setTimeout(() => {
                        alert('Navigasi ke halaman detail resep');
                    }, 300);
                });
            });

            // Parallax effect on scroll
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.5;
                
                document.querySelector('.header').style.transform = `translateY(${rate}px)`;
                
                // Reveal animation for cards
                cards.forEach((card, index) => {
                    const cardTop = card.offsetTop;
                    const cardHeight = card.offsetHeight;
                    const windowHeight = window.innerHeight;
                    
                    if (scrolled + windowHeight > cardTop + cardHeight / 4) {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }
                });
            });

            // Loading animation
            function showLoading() {
                const loadingOverlay = document.createElement('div');
                loadingOverlay.id = 'loadingOverlay';
                loadingOverlay.innerHTML = `
                    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
                                background: rgba(245, 230, 211, 0.9); display: flex; 
                                justify-content: center; align-items: center; z-index: 9999;">
                        <div style="text-align: center; color: #8B4513;">
                            <div class="loading" style="width: 40px; height: 40px; margin-bottom: 20px;"></div>
                            <p style="font-size: 18px; font-weight: 600;">Memuat resep...</p>
                        </div>
                    </div>
                `;
                document.body.appendChild(loadingOverlay);
                
                setTimeout(() => {
                    loadingOverlay.remove();
                }, 1500);
            }

            // Navigation effects
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from other links
                    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    showLoading();
                });
            });

            // Easter egg - konami code
            let konamiCode = [];
            const konamiSequence = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'KeyB', 'KeyA'];
            
            document.addEventListener('keydown', function(e) {
                konamiCode.push(e.code);
                if (konamiCode.length > konamiSequence.length) {
                    konamiCode.shift();
                }
                
                if (konamiCode.join(',') === konamiSequence.join(',')) {
                    // Easter egg activated
                    document.body.style.animation = 'rainbow 2s infinite';
                    setTimeout(() => {
                        document.body.style.animation = '';
                    }, 10000);
                }
            });

            // Mobile menu toggle (for future enhancement)
            let mobileMenuOpen = false;
            
            // Touch gestures for mobile
            let startY, startX;
            
            document.addEventListener('touchstart', function(e) {
                startY = e.touches[0].clientY;
                startX = e.touches[0].clientX;
            });
            
            document.addEventListener('touchend', function(e) {
                if (!startY || !startX) return;
                
                const endY = e.changedTouches[0].clientY;
                const endX = e.changedTouches[0].clientX;
                const diffY = startY - endY;
                const diffX = startX - endX;
                
                // Swipe down to refresh (simulate)
                if (diffY < -100 && Math.abs(diffX) < 50) {
                    if (window.scrollY === 0) {
                        showLoading();
                    }
                }
                
                startY = null;
                startX = null;
            });
        });

        // Additional CSS for animations
        const additionalStyles = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            
            @keyframes rainbow {
                0% { filter: hue-rotate(0deg); }
                100% { filter: hue-rotate(360deg); }
            }
            
            .recipe-card {
                will-change: transform, opacity;
            }
            
            .recipe-link {
                will-change: transform;
            }
            
            /* Custom scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
            }
            
            ::-webkit-scrollbar-track {
                background: rgba(245, 230, 211, 0.3);
            }
            
            ::-webkit-scrollbar-thumb {
                background: linear-gradient(135deg, #8B4513, #A0522D);
                border-radius: 4px;
            }
            
            ::-webkit-scrollbar-thumb:hover {
                background: linear-gradient(135deg, #A0522D, #CD853F);
            }
            
            /* Selection styles */
            ::selection {
                background: rgba(79, 195, 247, 0.3);
                color: #8B4513;
            }
            
            /* Focus styles for accessibility */
            .search-input:focus,
            .nav-link:focus,
            .login-btn:focus,
            .recipe-link:focus {
                outline: 2px solid #4FC3F7;
                outline-offset: 2px;
            }
            
            /* Print styles */
            @media print {
                .header, .footer {
                    display: none;
                }
                
                .recipe-card {
                    break-inside: avoid;
                    box-shadow: none;
                    border: 1px solid #ccc;
                }
            }
        `;
        
        const styleSheet = document.createElement('style');
        styleSheet.textContent = additionalStyles;
        document.head.appendChild(styleSheet);
    </script>
</body>
</html>