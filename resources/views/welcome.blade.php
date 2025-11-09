<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Cuti - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #000000 100%);
            --secondary-gradient: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
            --accent-gradient: linear-gradient(135deg, #134e5e 0%, #71b280 100%);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #000000 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .welcome-container {
            max-width: 1200px;
            margin: 20px;
        }

        .welcome-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header-section {
            background: var(--primary-gradient);
            padding: 60px 40px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .header-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: pulse 15s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        .header-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        .header-section p {
            font-size: 1.2rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .feature-card {
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            transition: transform 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: rotate(360deg);
        }

        .btn-primary-custom {
            background: var(--primary-gradient);
            border: none;
            padding: 15px 50px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .btn-outline-custom {
            border: 2px solid #667eea;
            color: #667eea;
            padding: 15px 50px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            background: transparent;
            transition: all 0.3s ease;
        }

        .btn-outline-custom:hover {
            background: var(--primary-gradient);
            border-color: transparent;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .stats-section {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            padding: 40px;
            margin: 30px 0;
            border-radius: 15px;
            color: white;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #71b280;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"
        style="background: rgba(30, 60, 114, 0.95); backdrop-filter: blur(10px); box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#" style="font-size: 1.5rem;">
                <i class="bi bi-calendar2-check-fill me-2" style="color: #71b280;"></i>SIMASCUT
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    {{-- <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="bi bi-house-fill me-1"></i>Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-info-circle-fill me-1"></i>Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-stars me-1"></i>Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-headset me-1"></i>Kontak</a>
                    </li> --}}

                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item ms-lg-3">
                                <a href="{{ url('/dashboard') }}" class="btn btn-outline-light btn-sm px-4"
                                    style="border-radius:25px;border:2px solid rgba(255,255,255,0.5);">
                                    <i class="bi bi-speedometer2 me-1"></i> Dashboard
                                </a>
                            </li>
                        @endauth

                        @guest
                            <li class="nav-item ms-lg-3">
                                <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm px-4"
                                    style="border-radius:25px;border:2px solid transparent;transition:all 0.3s;"
                                    onmouseover="this.style.borderColor='rgba(255,255,255,0.5)'"
                                    onmouseout="this.style.borderColor='transparent'">
                                    <i class="bi bi-box-arrow-in-right me-1"></i> Log in
                                </a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item ms-2">
                                    <a href="{{ route('register') }}" class="btn btn-sm px-4"
                                        style="background:rgba(255,255,255,0.2);color:white;border:2px solid rgba(255,255,255,0.3);border-radius:25px;transition:all 0.3s;"
                                        onmouseover="this.style.borderColor='rgba(255,255,255,0.5)';this.style.background='rgba(255,255,255,0.3)'"
                                        onmouseout="this.style.borderColor='rgba(255,255,255,0.3)';this.style.background='rgba(255,255,255,0.2)'">
                                        <i class="bi bi-person-plus-fill me-1"></i> Register
                                    </a>
                                </li>
                            @endif
                        @endguest
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="welcome-container" style="margin-top: 80px;">
        <div class="welcome-card">
            <!-- Header Section -->
            <div class="header-section">
                <h1><i class="bi bi-calendar2-event-fill" style="color: #71b280;"></i> Sistem Informasi Cuti</h1>
                <p>Kelola cuti karyawan dengan mudah, cepat, dan efisien</p>
            </div>

            <!-- Main Content -->
            <div class="container py-5">
                <!-- Welcome Message -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold mb-3">Selamat Datang!</h2>
                    <p class="text-muted fs-5">Platform terpadu untuk manajemen cuti karyawan yang modern dan
                        terintegrasi</p>
                </div>

                <!-- Stats Section -->
                <div class="stats-section">
                    <div class="row">
                        <div class="col-md-4 stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Karyawan Aktif</div>
                        </div>
                        <div class="col-md-4 stat-item">
                            <div class="stat-number">1,200+</div>
                            <div class="stat-label">Pengajuan Cuti</div>
                        </div>
                        <div class="col-md-4 stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Tingkat Kepuasan</div>
                        </div>
                    </div>
                </div>

                <!-- Features -->
                <div class="row g-4 my-5">
                    <div class="col-md-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-rocket-takeoff-fill"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Cepat & Mudah</h4>
                            <p class="text-muted">Proses pengajuan cuti yang simpel dan dapat disetujui dalam hitungan
                                menit</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Aman & Terpercaya</h4>
                            <p class="text-muted">Data karyawan terlindungi dengan sistem keamanan berlapis</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-bar-chart-fill"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Laporan Real-time</h4>
                            <p class="text-muted">Monitor status cuti dan generate laporan secara otomatis</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="text-center text-light mt-5 mb-4">
                    <a href="{{ route('login') }}" class="btn btn-primary-custom me-3 mb-3 text-light">
                        <i class="bi bi-box-arrow-in-right me-2"></i>
                        Login Sekarang
                    </a>
                    <button class="btn btn-outline-custom mb-3">
                        <i class="bi bi-play-circle-fill me-2"></i>Demo Gratis
                    </button>
                </div>

                <!-- Footer -->
                <div class="text-center text-muted mt-5 pt-4 border-top">
                    <p class="mb-0">&copy; 2025 Sistem Informasi Cuti. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px; overflow: hidden; border: none;">
                <div class="modal-header" style="background: var(--primary-gradient); color: white; border: none;">
                    <h5 class="modal-title fw-bold"><i class="bi bi-shield-lock-fill me-2"></i>Login ke Akun</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label class="form-label fw-semibold"><i class="bi bi-envelope-fill me-2"
                                style="color: #1e3c72;"></i>Email</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background: #f8f9fa;"><i
                                    class="bi bi-at"></i></span>
                            <input type="email" class="form-control" placeholder="nama@email.com">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold"><i class="bi bi-key-fill me-2"
                                style="color: #1e3c72;"></i>Password</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background: #f8f9fa;"><i
                                    class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe"><i
                                class="bi bi-bookmark-check-fill me-1"></i>Ingat saya</label>
                    </div>
                    <button class="btn btn-primary-custom w-100 mb-3"><i
                            class="bi bi-box-arrow-in-right me-2"></i>Login</button>
                    <div class="text-center">
                        <a href="#" class="text-decoration-none"><i
                                class="bi bi-question-circle-fill me-1"></i>Lupa password?</a>
                        <p class="mt-3 mb-0">Belum punya akun? <a href="#" data-bs-dismiss="modal"
                                data-bs-toggle="modal" data-bs-target="#registerModal"><i
                                    class="bi bi-person-plus-fill me-1"></i>Daftar sekarang</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px; overflow: hidden; border: none;">
                <div class="modal-header" style="background: var(--primary-gradient); color: white; border: none;">
                    <h5 class="modal-title fw-bold"><i class="bi bi-person-badge-fill me-2"></i>Buat Akun Baru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label class="form-label fw-semibold"><i class="bi bi-person-fill me-2"
                                style="color: #1e3c72;"></i>Nama Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background: #f8f9fa;"><i
                                    class="bi bi-person-circle"></i></span>
                            <input type="text" class="form-control" placeholder="Nama lengkap">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold"><i class="bi bi-envelope-fill me-2"
                                style="color: #1e3c72;"></i>Email</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background: #f8f9fa;"><i
                                    class="bi bi-at"></i></span>
                            <input type="email" class="form-control" placeholder="nama@email.com">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold"><i class="bi bi-credit-card-2-front-fill me-2"
                                style="color: #1e3c72;"></i>NIP/NIK</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background: #f8f9fa;"><i
                                    class="bi bi-card-heading"></i></span>
                            <input type="text" class="form-control" placeholder="Nomor Induk Pegawai">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold"><i class="bi bi-key-fill me-2"
                                style="color: #1e3c72;"></i>Password</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background: #f8f9fa;"><i
                                    class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control" placeholder="Minimal 8 karakter">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold"><i class="bi bi-shield-check me-2"
                                style="color: #1e3c72;"></i>Konfirmasi Password</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background: #f8f9fa;"><i
                                    class="bi bi-shield-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Ulangi password">
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="agreeTerms">
                        <label class="form-check-label" for="agreeTerms"><i
                                class="bi bi-file-earmark-check-fill me-1"></i>Saya setuju dengan syarat dan
                            ketentuan</label>
                    </div>
                    <button class="btn btn-primary-custom w-100 mb-3"><i
                            class="bi bi-person-plus-fill me-2"></i>Daftar</button>
                    <div class="text-center">
                        <p class="mb-0">Sudah punya akun? <a href="#" data-bs-dismiss="modal"
                                data-bs-toggle="modal" data-bs-target="#loginModal"><i
                                    class="bi bi-box-arrow-in-right me-1"></i>Login di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
