<!DOCTYPE html>
<html>
<head>
    <title>YumHeaven - Beranda</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5d6b2;
        }
        .bg-brown {
            background: #7c5a3a !important;
            color: #fff !important;
        }
        .btn-brown {
            background: #7c5a3a;
            color: #fff;
            border-radius: 16px;
        }
        .search-bar {
            background: #7c5a3a;
            color: #fff;
            border-radius: 12px;
        }
        .search-bar input {
            background: #7c5a3a;
            color: #fff;
            border: none;
        }
        .search-bar input::placeholder {
            color: #fff;
            opacity: 0.7;
        }
        .populer-badge {
            background: #8fd3d6;
            color: #fff;
            border-radius: 24px;
            font-size: 1.3rem;
            font-weight: 600;
            padding: 12px 32px 4px 32px;
            margin: 0 auto 8px auto;
            display: inline-block;
        }
        .populer-sub {
            color: #b2b2b2;
            font-size: 0.9rem;
            margin-bottom: 32px;
        }
        
        /* New card design matching the image */
        .resep-card {
            background: #fff;
            border-radius: 50px;
            padding: 80px 24px 40px 24px;
            margin: 40px 10px 20px 10px;
            text-align: center;
            position: relative;
            min-height: 380px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            border: 6px solid;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .resep-card.border-blue {
            border-color: #6ed6e7;
        }
        .resep-card.border-pink {
            border-color: #e7b6c7;
        }
        .resep-card.border-yellow {
            border-color: #ffe066;
        }
        
        .resep-card .food-image {
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 8px solid #fff;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }
        
        .resep-card h3 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 16px;
            color: #333;
        }
        
        .resep-card .description {
            font-size: 0.95rem;
            line-height: 1.5;
            color: #666;
            margin-bottom: 20px;
            padding: 0 8px;
        }
        
        .star-rating {
            display: flex;
            justify-content: center;
            gap: 4px;
        }
        
        .star {
            color: #ffe066;
            font-size: 1.4rem;
        }
        
        .star:hover {
            color: #ffd700;
        }
        
        /* Resep Hari Ini Styles - New Design */
        .resep-hari-card {
            background: #fff;
            border-radius: 25px;
            padding: 0;
            position: relative;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
            max-width: 320px;
            margin: 0 auto;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .resep-hari-card:hover {
            transform: translateY(-5px);
        }
        
        .card-content {
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .food-image-hari {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            flex-shrink: 0;
        }
        
        .card-text-content {
            flex: 1;
            text-align: left;
        }
        
        .time-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
        }
        
        .time-icon.morning {
            background: #ff8a9b;
        }
        
        .time-icon.afternoon {
            background: #ff8a9b;
        }
        
        .time-icon.evening {
            background: #d4a5a5;
        }
        
        .menu-label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }
        
        .food-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }
        
        .btn-selengkapnya {
            background: #8fd3d6;
            color: #fff;
            border: none;
            padding: 8px 20px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        
        .btn-selengkapnya:hover {
            background: #7bc5c9;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="w-100 py-3 mb-4" style="background: #f5d6b2;">
        <div class="container-xl">
            <div class="row align-items-center">
                <div class="col-12 col-md-3 d-flex align-items-center mb-3 mb-md-0">
                    <img src="{{ asset('images/logo.png') }}" alt="YumHeaven Logo" style="height:48px; width:auto;" class="me-3" />
                    <form class="d-none d-md-flex flex-grow-1 ms-2" role="search">
                        <div class="input-group search-bar">
                            <span class="input-group-text bg-transparent border-0" style="color:#fff;"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'><path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/></svg></span>
                            <input class="form-control" type="search" placeholder="" aria-label="Search">
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center mb-3 mb-md-0">
                    <nav class="nav gap-4">
                        <a class="nav-link fw-bold text-dark" href="#">RESEP</a>
                        <a class="nav-link fw-bold text-dark" href="#">ARTIKEL & TIPS</a>
                        <a class="nav-link fw-bold text-dark" href="#">BICARA RASA</a>
                    </nav>
                </div>
                <div class="col-12 col-md-3 d-flex justify-content-md-end justify-content-center">
                    <a href="#" class="btn btn-brown px-4 py-2 fw-bold">LOGIN</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Gambar Hero -->
    <section class="container-xl mb-4">
        <div class="rounded-4 shadow" style="overflow:hidden;">
            <img src="{{ asset('images/hero.png') }}" alt="Gambar Hero" style="width:100%; object-fit:cover; min-height:260px; max-height:340px;">
        </div>
    </section>

    <!-- Resep Populer -->
    <section class="container-xl mb-5">
        <div class="text-center mb-4">
            <div class="populer-badge">Resep Populer</div>
            <div class="populer-sub">Hits Banget Minggu Ini</div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="resep-card border-blue">
                    <img src="{{ asset('images/bakso.png') }}" alt="Bakso" class="food-image">
                    <h3>Bakso</h3>
                    <p class="description">Bakso sapi kenyal dalam kuah kaldu gurih, dilengkapi mie, tahu, dan pangsit. Hidangan favorit sejuta umat.</p>
                    <div class="star-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="resep-card border-pink">
                    <img src="{{ asset('images/rendang.png') }}" alt="Rendang" class="food-image">
                    <h3>Rendang</h3>
                    <p class="description">Daging sapi dimasak lama dengan santan dan rempah khas Minang, menghasilkan rasa gurih dan pedas yang kaya.</p>
                    <div class="star-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="resep-card border-yellow">
                    <img src="{{ asset('images/papeda.png') }}" alt="Papeda" class="food-image">
                    <h3>Papeda</h3>
                    <p class="description">Papeda khas Papua disajikan dengan ikan kuah kuning berbumbu segar dari kunyit dan daun mint, menyajikan rasa eksotis nan lembut.</p>
                    <div class="star-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resep Hari Ini -->
    <section class="container-xl mb-5">
        <div class="text-center mb-4">
            <div class="populer-badge">Resep Hari Ini</div>
            <div class="populer-sub">Inspirasi Hari Ini</div>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-12 col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="resep-hari-card">
                    <div class="time-icon morning">
                        <svg width="24" height="24" fill="white" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8" fill="#ff8a9b"/>
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" fill="white"/>
                        </svg>
                    </div>
                    <div class="card-content">
                        <img src="{{ asset('images/bubur.png') }}" alt="Bubur Ayam" class="food-image-hari">
                        <div class="card-text-content">
                            <div class="menu-label">Menu Pagi</div>
                            <h4 class="food-title">Bubur Ayam</h4>
                            <button class="btn-selengkapnya">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="resep-hari-card">
                    <div class="time-icon afternoon">
                        <svg width="24" height="24" fill="white" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="3" fill="white"/>
                            <g stroke="white" stroke-width="1.5">
                                <path d="M8 1v2M8 13v2M15 8h-2M3 8H1M12.071 12.071l-1.414-1.414M5.343 5.343L3.929 3.929M12.071 3.929l-1.414 1.414M5.343 10.657L3.929 12.071"/>
                            </g>
                        </svg>
                    </div>
                    <div class="card-content">
                        <img src="{{ asset('images/soto.png') }}" alt="Soto Ayam" class="food-image-hari">
                        <div class="card-text-content">
                            <div class="menu-label">Menu Siang</div>
                            <h4 class="food-title">Soto Ayam</h4>
                            <button class="btn-selengkapnya">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="resep-hari-card">
                    <div class="time-icon evening">
                        <svg width="24" height="24" fill="white" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" fill="white"/>
                        </svg>
                    </div>
                    <div class="card-content">
                        <img src="{{ asset('images/nasi.png') }}" alt="Nasi Goreng" class="food-image-hari">
                        <div class="card-text-content">
                            <div class="menu-label">Menu Malam</div>
                            <h4 class="food-title">Nasi Goreng</h4>
                            <button class="btn-selengkapnya">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bicara Rasa -->
    <section class="container-xl mb-5">
        <h2 class="fw-bold mb-4">Bicara Rasa</h2>
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm p-3">
                    <p><strong>Tentang Resep & Dapur</strong><br>Bagaimana cara membuat resep bisa masuk...</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm p-3">
                    <p><strong>Interaksi Komunitas</strong><br>Bagaimana YumHeaven menjaga kualitas resep...</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm p-3">
                    <p><strong>Fitur & Teknologi</strong><br>Bagaimana sistem rating bekerja?..</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel & Tips -->
    <section class="container-xl mb-5">
        <h2 class="fw-bold mb-2">Artikel & Tips</h2>
        <p class="mb-4">Yuk temukan tips memasak yang seru!</p>
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/pempek.jpg') }}" alt="Pempek" class="card-img-top" style="object-fit:cover; height:180px;">
                    <div class="card-body">
                        <p class="card-text">12 Cara Membuat Pempek Palembang</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/pukis.jpg') }}" alt="Pukis" class="card-img-top" style="object-fit:cover; height:180px;">
                    <div class="card-body">
                        <p class="card-text">Pukis Legit</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/klepon.jpg') }}" alt="Klepon" class="card-img-top" style="object-fit:cover; height:180px;">
                    <div class="card-body">
                        <p class="card-text">Klepon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-4 mt-5 border-top">
        <div class="container-xl d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
                <span class="fw-bold" style="color:#7c5a3a; font-size:1.2rem;">YumHeaven</span>
                <ul class="list-inline ms-3 mb-0">
                    <li class="list-inline-item"><a href="#" class="text-decoration-none text-dark">Resep</a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none text-dark">Artikel & Tips</a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none text-dark">Bicara Rasa</a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none text-dark">Resep Populer</a></li>
                </ul>
            </div>
            <div class="text-muted small">Copyright © 2025 PT YumHeaven Indonesia. All rights reserved.</div>
        </div>
    </footer>

    
</body>
</html>