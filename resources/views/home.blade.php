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

        /* Add Recipe Modal Styles */
        .modal-recipe {
            border-radius: 24px;
            overflow: hidden;
        }
        
        .modal-recipe .modal-header {
            background: #f5d6b2;
            border-bottom: none;
            padding: 20px 30px;
        }
        
        .modal-recipe .modal-title {
            color: #7c5a3a;
            font-weight: bold;
            font-size: 1.4rem;
        }
        
        .modal-recipe .modal-body {
            padding: 30px;
        }
        
        .recipe-input {
            border: 2px solid #f5d6b2;
            border-radius: 12px;
            padding: 12px;
            margin-bottom: 20px;
        }
        
        .recipe-input:focus {
            border-color: #7c5a3a;
            box-shadow: 0 0 0 0.2rem rgba(124, 90, 58, 0.25);
        }
        
        .recipe-textarea {
            min-height: 150px;
            resize: none;
        }
        
        .recipe-image-upload {
            border: 2px dashed #f5d6b2;
            border-radius: 12px;
            padding: 40px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .recipe-image-upload:hover {
            border-color: #7c5a3a;
            background: #fff5e6;
        }
        
        .btn-submit-recipe {
            background: #7c5a3a;
            color: #fff;
            border-radius: 12px;
            padding: 12px 30px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-submit-recipe:hover {
            background: #6a4c32;
            color: #fff;
        }

        /* Choice Modal Styles */
        .modal-choice {
            border-radius: 24px;
            overflow: hidden;
            max-width: 320px;
            margin: 1.75rem auto;
        }
        
        .modal-choice .modal-content {
            border: none;
            border-radius: 24px;
        }
        
        .choice-button {
            background: #fff;
            border: 2px solid #f5d6b2;
            border-radius: 16px;
            padding: 20px;
            text-align: center;
            margin-bottom: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .choice-button:hover {
            border-color: #7c5a3a;
            background: #fff5e6;
        }
        
        .choice-button .icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .choice-button .icon.recipe {
            background: #ffe4e4;
        }
        
        .choice-button .icon.article {
            background: #e4f5ff;
        }
        
        .choice-button .text {
            text-align: left;
            flex-grow: 1;
        }
        
        .choice-button .title {
            font-weight: 600;
            color: #333;
            margin-bottom: 4px;
        }
        
        .choice-button .description {
            font-size: 0.85rem;
            color: #666;
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
        <div class="text-center mb-4">
            <div class="populer-badge">Bicara Rasa</div>
            <div class="populer-sub">Dari Search Sampai Favorit, Yuk Tanya YumHeaven!</div>
        </div>
        <div class="row justify-content-center g-4">
            <!-- Card 1 -->
            <div class="col-12 col-lg-4 col-md-6">
                <div style="background:#fff; border-radius:24px; box-shadow:0 4px 16px rgba(0,0,0,0.08); padding:24px; position:relative;">
                    <div class="d-flex align-items-center mb-3">
                        <div style="width:48px; height:48px; border-radius:50%; background:#222; margin-right:12px; flex-shrink:0;"></div>
                        <div>
                            <div style="font-weight:600; font-size:1rem; margin-bottom:2px;">Tentang Resep & Dapur</div>
                            <div style="font-size:0.85rem; color:#666;">14 Juli 2023 Oleh: Dio Putra</div>
                        </div>
                    </div>
                    <div style="font-size:0.95rem; color:#444; margin-bottom:20px;">Bagaimana cara membuat resep bisa masuk...</div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center" style="gap:6px;">
                            <div style="background:#8fd3d6; padding:6px 12px; border-radius:20px; display:flex; align-items:center; gap:4px;">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.75.75 0 0 1 1.06-1.06L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0z" fill="#fff"/>
                                </svg>
                                <span style="color:#fff; font-size:0.85rem;">YumHeaven</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center" style="gap:4px;">
                            <div style="padding:6px; border-radius:50%; background:#f5f5f5; cursor:pointer;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3m7-2V5c0-1.66-1.34-3-3-3h0c-1.66 0-3 1.34-3 3v7h9l-1 2-2 7a2 2 0 01-2 2h0a2 2 0 01-2-2v-7" stroke="#666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <span style="color:#666; font-size:0.9rem;">1</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-12 col-lg-4 col-md-6">
                <div style="background:#fff; border-radius:24px; box-shadow:0 4px 16px rgba(0,0,0,0.08); padding:24px; position:relative;">
                    <div class="d-flex align-items-center mb-3">
                        <div style="width:48px; height:48px; border-radius:50%; background:#222; margin-right:12px; flex-shrink:0;"></div>
                        <div>
                            <div style="font-weight:600; font-size:1rem; margin-bottom:2px;">Interaksi Komunitas</div>
                            <div style="font-size:0.85rem; color:#666;">14 Juli 2023 Oleh: Puggy Almira</div>
                        </div>
                    </div>
                    <div style="font-size:0.95rem; color:#444; margin-bottom:20px;">Bagaimana YumHeaven menjaga kualitas resep dari pengguna?..</div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center" style="gap:6px;">
                            <div style="background:#8fd3d6; padding:6px 12px; border-radius:20px; display:flex; align-items:center; gap:4px;">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.75.75 0 0 1 1.06-1.06L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0z" fill="#fff"/>
                                </svg>
                                <span style="color:#fff; font-size:0.85rem;">YumHeaven</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center" style="gap:4px;">
                            <div style="padding:6px; border-radius:50%; background:#f5f5f5; cursor:pointer;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3m7-2V5c0-1.66-1.34-3-3-3h0c-1.66 0-3 1.34-3 3v7h9l-1 2-2 7a2 2 0 01-2 2h0a2 2 0 01-2-2v-7" stroke="#666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <span style="color:#666; font-size:0.9rem;">1</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-12 col-lg-4 col-md-6">
                <div style="background:#fff; border-radius:24px; box-shadow:0 4px 16px rgba(0,0,0,0.08); padding:24px; position:relative;">
                    <div class="d-flex align-items-center mb-3">
                        <div style="width:48px; height:48px; border-radius:50%; background:#222; margin-right:12px; flex-shrink:0;"></div>
                        <div>
                            <div style="font-weight:600; font-size:1rem; margin-bottom:2px;">Fitur & Teknologi</div>
                            <div style="font-size:0.85rem; color:#666;">14 Juli 2023 Oleh: Arkonita</div>
                        </div>
                    </div>
                    <div style="font-size:0.95rem; color:#444; margin-bottom:20px;">Bagaimana sistem rating bekerja?..</div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center" style="gap:6px;">
                            <div style="background:#8fd3d6; padding:6px 12px; border-radius:20px; display:flex; align-items:center; gap:4px;">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.75.75 0 0 1 1.06-1.06L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0z" fill="#fff"/>
                                </svg>
                                <span style="color:#fff; font-size:0.85rem;">YumHeaven</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center" style="gap:4px;">
                            <div style="padding:6px; border-radius:50%; background:#f5f5f5; cursor:pointer;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3m7-2V5c0-1.66-1.34-3-3-3h0c-1.66 0-3 1.34-3 3v7h9l-1 2-2 7a2 2 0 01-2 2h0a2 2 0 01-2-2v-7" stroke="#666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <span style="color:#666; font-size:0.9rem;">1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Artikel & Tips -->
<section class="container-xl mb-5">
        <div class="text-center mb-4">
            <div class="populer-badge">Artikel & Tips</div>
            <div class="populer-sub">Yuk temukan tips memasak yang seru!</div>
        </div>
        <div class="row position-relative">
            <!-- Kolom Kiri - Gambar Besar Pempek -->
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <div style="background:#fff; border-radius:24px; overflow:hidden; box-shadow:0 4px 16px rgba(0,0,0,0.08); position:relative; height:500px;">
                    <img src="{{ asset('images/pempek.png') }}" alt="Pempek Palembang" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position:absolute; top:20px; left:20px; background:rgba(0,0,0,0.7); color:#fff; padding:8px 16px; border-radius:20px; font-size:0.9rem; font-weight:600;">
                        PEMPEK PALEMBANG
                    </div>
                </div>
            </div>
            
            <!-- Kolom Kanan -->
            <div class="col-12 col-lg-6">
                <!-- Gambar Pukis dan Klepon -->
                <div class="d-flex flex-column gap-3 mb-4">
                    <!-- Pukis -->
                    <div style="background:#fff; border-radius:24px; overflow:hidden; box-shadow:0 4px 16px rgba(0,0,0,0.08); position:relative; height:200px;">
                        <img src="{{ asset('images/pukis.png') }}" alt="Pukis Legit" style="width:100%; height:100%; object-fit:cover;">
                        <div style="position:absolute; top:10px; left:10px; background:rgba(255,255,255,0.9); color:#333; padding:4px 12px; border-radius:15px; font-size:0.8rem; font-weight:600;">
                            PUKIS LEGIT
                        </div>
                        <div style="position:absolute; top:10px; right:10px; background:#ff4757; color:#fff; padding:4px 8px; border-radius:12px; font-size:0.75rem; font-weight:600;">
                            TERLARIS
                        </div>
                    </div>
                    <!-- Klepon -->
                    <div style="background:#fff; border-radius:24px; overflow:hidden; box-shadow:0 4px 16px rgba(0,0,0,0.08); position:relative; height:200px;">
                        <img src="{{ asset('images/klepon.png') }}" alt="Klepon" style="width:100%; height:100%; object-fit:cover;">
                        <div style="position:absolute; top:10px; left:10px; background:rgba(255,255,255,0.9); color:#333; padding:4px 12px; border-radius:15px; font-size:0.8rem; font-weight:600;">
                            KLEPON
                        </div>
                    </div>
                </div>

                <!-- List Artikel dengan Thumbnail -->
                <div class="d-flex flex-column gap-3">
                    <!-- Artikel Row -->
                    <div class="d-flex gap-3">
                        <div style="width:48px; height:48px; border-radius:50%; overflow:hidden; flex-shrink:0; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
                            <img src="{{ asset('images/pempek-thumb.png') }}" alt="Thumbnail" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div style="flex-grow:1;">
                            <h6 class="mb-1 fw-bold" style="color:#333; font-size:0.95rem;">12 Cara Membuat Pempek Palembang</h6>
                            <p class="mb-0 text-muted small">Kami menyediakan..</p>
                        </div>
                    </div>
                    <!-- Artikel Row -->
                    <div class="d-flex gap-3">
                        <div style="width:48px; height:48px; border-radius:50%; overflow:hidden; flex-shrink:0; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
                            <img src="{{ asset('images/pempek-thumb.png') }}" alt="Thumbnail" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div style="flex-grow:1;">
                            <h6 class="mb-1 fw-bold" style="color:#333; font-size:0.95rem;">12 Cara Membuat Pempek Palembang</h6>
                            <p class="mb-0 text-muted small">Kami menyediakan..</p>
                        </div>
                    </div>
                    <!-- Artikel Row -->
                    <div class="d-flex gap-3">
                        <div style="width:48px; height:48px; border-radius:50%; overflow:hidden; flex-shrink:0; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
                            <img src="{{ asset('images/pempek-thumb.png') }}" alt="Thumbnail" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div style="flex-grow:1;">
                            <h6 class="mb-1 fw-bold" style="color:#333; font-size:0.95rem;">12 Cara Membuat Pempek Palembang</h6>
                            <p class="mb-0 text-muted small">Kami menyediakan..</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Plus -->
            <div class="container-xl mb-5">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-light rounded-circle shadow-lg d-flex align-items-center justify-content-center" style="width:56px; height:56px; background:#fff;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4v16m-8-8h16" stroke="#8fd3d6" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer style="background:#f8d0d8; padding:48px 0;">
        <div class="container-xl">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-12 col-md-3 mb-4 mb-md-0">
                    <img src="{{ asset('images/logo.png') }}" alt="YumHeaven Logo" style="width:120px; height:120px; object-fit:contain;">
                </div>
                
                <!-- Menu Links -->
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <div class="d-flex flex-column gap-2">
                        <a href="#" class="text-decoration-none" style="color:#333; font-size:1rem;">Resep</a>
                        <a href="#" class="text-decoration-none" style="color:#333; font-size:1rem;">Resep Populer</a>
                        <a href="#" class="text-decoration-none" style="color:#333; font-size:1rem;">Artikel & Tips</a>
                        <a href="#" class="text-decoration-none" style="color:#333; font-size:1rem;">Bicara Rasa</a>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="col-12 col-md-3 text-md-end">
                    <p class="mb-0" style="color:#333; font-size:0.9rem;">Copyright © 2025 PT YumHeaven Indonesia. All rights reserved.</p>
                </div>
            </div>
        </div>
    
    </footer>

    <!-- Choice Modal -->
    <div class="modal fade" id="choiceModal" tabindex="-1">
        <div class="modal-dialog modal-choice">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="choice-button" onclick="openAddRecipeModal()">
                        <div class="icon recipe">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15 11H9m3-3v6M12 4c4.4183 0 8 3.5817 8 8s-3.5817 8-8 8-8-3.5817-8-8 3.5817-8 8-8z" stroke="#ff8a9b" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="text">
                            <div class="title">Tambah Resep</div>
                            <div class="description">Bagikan resep favoritmu</div>
                        </div>
                    </div>
                    <div class="choice-button">
                        <div class="icon article">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15 11H9m3-3v6M12 4c4.4183 0 8 3.5817 8 8s-3.5817 8-8 8-8-3.5817-8-8 3.5817-8 8-8z" stroke="#5ab0ff" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="text">
                            <div class="title">Tambah Artikel</div>
                            <div class="description">Tulis artikel tentang kuliner</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Recipe Modal -->
    <div class="modal fade" id="addRecipeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-recipe">
                <div class="modal-header">
                    <h5 class="modal-title">Tambahkan Resep</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="recipeForm">
                        <div class="mb-4">
                            <input type="text" class="form-control recipe-input" placeholder="Judul Resep" required>
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control recipe-input recipe-textarea" placeholder="Deskripsi Resep" required></textarea>
                        </div>
                        <div class="mb-4">
                            <div class="recipe-image-upload" onclick="document.getElementById('recipeImage').click()">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" style="margin-bottom: 12px">
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2v-7m4-5l5-5 5 5m-5-5v12" stroke="#7c5a3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div style="color: #7c5a3a; font-weight: 500">Unggah Foto Resep</div>
                                <div style="color: #666; font-size: 0.9rem; margin-top: 4px">Klik atau seret file kesini</div>
                            </div>
                            <input type="file" id="recipeImage" accept="image/*" style="display: none">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-submit-recipe">Tambah Resep</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add click event to the plus button to show choice modal
        document.querySelector('.btn-light').addEventListener('click', function() {
            var modal = new bootstrap.Modal(document.getElementById('choiceModal'));
            modal.show();
        });

        // Function to open add recipe modal
        function openAddRecipeModal() {
            // Hide choice modal
            var choiceModal = bootstrap.Modal.getInstance(document.getElementById('choiceModal'));
            choiceModal.hide();
            
            // Show recipe modal
            setTimeout(() => {
                var recipeModal = new bootstrap.Modal(document.getElementById('addRecipeModal'));
                recipeModal.show();
            }, 400);
        }

        // Handle file input change
        document.getElementById('recipeImage').addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var uploadDiv = document.querySelector('.recipe-image-upload');
                    uploadDiv.innerHTML = `
                        <img src="${e.target.result}" style="max-width: 100%; max-height: 200px; border-radius: 8px;">
                        <div style="color: #666; font-size: 0.9rem; margin-top: 12px">Klik untuk mengganti gambar</div>
                    `;
                }
                reader.readAsDataURL(e.target.files[0]);
            }
        });

        // Handle form submission
        document.getElementById('recipeForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your form submission logic here
            var modal = bootstrap.Modal.getInstance(document.getElementById('addRecipeModal'));
            modal.hide();
        });
    </script>
</body>
</html>