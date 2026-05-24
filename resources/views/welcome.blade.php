<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Modern</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

    <div class="left">

        <div class="profile">
            <img src="https://i.pinimg.com/564x/6f/47/5b/6f475b8c39f728d0c6c5bdb0d62c8f95.jpg" alt="">
        </div>

        <div class="section">
            <h2>CONTACT</h2>

            <p>📞 08123456789</p>
            <p>📧 email@gmail.com</p>
            <p>📍 Surabaya</p>
        </div>

        <div class="section">
            <h2>SKILLS</h2>

            <ul>
                <li>Laravel</li>
                <li>UI/UX</li>
                <li>HTML CSS</li>
                <li>JavaScript</li>
            </ul>
        </div>

        <div class="section">
            <h2>EDUCATION</h2>

            <p>Politeknik Elektronika Negeri Surabaya</p>
            <span>2024 - Sekarang</span>
        </div>

    </div>

    <div class="right">

        <div class="header">
            <h1>KHANSA NADHIF SHAFA</h1>
            <h3>Frontend Developer</h3>
        </div>

        <div class="content">
            <h2>PROFILE</h2>

            <p>
                Saya adalah mahasiswa Multimedia Broadcasting
                yang memiliki minat di bidang desain dan web development.
            </p>

            <h2>EXPERIENCE</h2>

            <div class="job">
                <h3>Frontend Developer</h3>
                <span>2025 - Sekarang</span>

                <p>
                    Membuat tampilan website menggunakan Laravel,
                    HTML, CSS, dan JavaScript.
                </p>
            </div>

            <div class="job">
                <h3>UI Designer</h3>
                <span>2024 - 2025</span>

                <p>
                    Mendesain interface modern untuk aplikasi dan website.
                </p>
            </div>

        </div>

    </div>

</div>

</body>
</html> <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV — Khansa Nadhif Shafa</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- CSS buatan kita sendiri --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

{{-- ===== NAVBAR ===== --}}
<nav class="navbar navbar-expand-lg sticky-top"
     style="background: rgba(255,255,255,0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(124,58,237,0.1);">
    <div class="container">

        {{-- Logo / Nama --}}
        <a class="navbar-brand" href="/">Khansa.N</a>

        {{-- Tombol hamburger untuk layar kecil --}}
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu link --}}
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#keahlian">Keahlian</a></li>
                <li class="nav-item"><a class="nav-link" href="#pendidikan">Pendidikan</a></li>
                <li class="nav-item"><a class="nav-link" href="#pengalaman">Pengalaman</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
            </ul>
        </div>

    </div>
</nav>

{{-- ===== ISI HALAMAN (diisi oleh setiap halaman masing-masing) ===== --}}
@yield('content')

{{-- ===== FOOTER ===== --}}
<footer style="background: #0f0f1a; color: white; padding: 40px; text-align: center;">
    <div style="font-family: 'DM Serif Display', serif;
                font-size: 22px;
                background: linear-gradient(135deg, #c084fc, #38bdf8);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;">
        Khansa Nadhif Shafa
    </div>
    <p style="opacity: 0.5; font-size: 13px; margin-top: 8px;">
        nadhifshafa20@gmail.com &nbsp;·&nbsp; 089524964274 &nbsp;·&nbsp; Tulungrejo, Pare Kediri
    </p>
    <p style="opacity: 0.25; font-size: 11px; margin-top: 12px;">
        © 2025 — CV Website
    </p>
</footer>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>