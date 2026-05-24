<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Khansa Nadhif Shafa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cv.css') }}">
</head>
<body>

    <div class="cursor" id="cursor"></div>
    <div class="cursor-follower" id="cursorFollower"></div>

    <nav class="sidebar" id="sidebar">
        <div class="sidebar-logo">KNS</div>
        <ul class="sidebar-nav">
            <li><a href="#hero" class="nav-link active" data-section="hero">
                <span class="nav-icon">◈</span>
                <span class="nav-label">Beranda</span>
            </a></li>
            <li><a href="#tentang" class="nav-link" data-section="tentang">
                <span class="nav-icon">◉</span>
                <span class="nav-label">Tentang</span>
            </a></li>
            <li><a href="#pendidikan" class="nav-link" data-section="pendidikan">
                <span class="nav-icon">◎</span>
                <span class="nav-label">Pendidikan</span>
            </a></li>
            <li><a href="#pengalaman" class="nav-link" data-section="pengalaman">
                <span class="nav-icon">◇</span>
                <span class="nav-label">Pengalaman</span>
            </a></li>
            <li><a href="#keahlian" class="nav-link" data-section="keahlian">
                <span class="nav-icon">◆</span>
                <span class="nav-label">Keahlian</span>
            </a></li>
            <li><a href="#kontak" class="nav-link" data-section="kontak">
                <span class="nav-icon">◐</span>
                <span class="nav-label">Kontak</span>
            </a></li>
        </ul>
        <div class="sidebar-line"></div>
    </nav>

    <main class="main-content">

        <section class="section hero-section" id="hero">
            <div class="hero-bg-text">PORTFOLIO</div>
            <div class="hero-inner">
                <div class="hero-tag">
                    <span class="tag-dot"></span>
                    Tersedia untuk peluang baru
                </div>
                <h1 class="hero-name">
                    <span class="name-line reveal-line">Khansa</span>
                    <span class="name-line reveal-line">Nadhif</span>
                    <span class="name-line reveal-line accent-line">Shafa</span>
                </h1>
                <p class="hero-sub">Mahasiswi Politeknik Elektronika Negeri Surabaya</p>
                <div class="hero-badges">
                    <span class="badge">Public Speaking</span>
                    <span class="badge">Voice Over</span>
                    <span class="badge">Adobe Suite</span>
                    <span class="badge">Barista</span>
                </div>
                <div class="hero-cta">
                    <a href="#kontak" class="btn-primary">Hubungi Saya</a>
                    <a href="#tentang" class="btn-ghost">Lihat CV ↓</a>
                </div>
            </div>
            <div class="hero-photo-wrap">
                <div class="photo-ring"></div>
                <div class="photo-ring ring-2"></div>
                <div class="photo-placeholder">
                    <span>KNS</span>
                </div>
                <div class="photo-card photo-card-1">
                    <span class="pc-icon">🎤</span>
                    <span class="pc-text">Public Speaker</span>
                </div>
                <div class="photo-card photo-card-2">
                    <span class="pc-icon">☕</span>
                    <span class="pc-text">Barista</span>
                </div>
                <div class="photo-card photo-card-3">
                    <span class="pc-icon">🎬</span>
                    <span class="pc-text">Video Editor</span>
                </div>
            </div>
            <div class="hero-scroll-hint">
                <div class="scroll-line"></div>
                <span>Scroll</span>
            </div>
        </section>

        <section class="section about-section" id="tentang">
            <div class="section-label">01 — DATA PRIBADI</div>
            <div class="about-grid">
                <div class="about-intro">
                    <h2 class="section-title">Tentang <em>Saya</em></h2>
                    <p class="about-text">
                        Perempuan muda yang dinamis dan multitalenta, lahir di Desember 2004 di Tulungrejo, Pare, Kediri.
                        Saat ini menempuh pendidikan di Politeknik Elektronika Negeri Surabaya dengan semangat
                        belajar yang tinggi dan pengalaman kerja yang beragam.
                    </p>
                    <p class="about-text">
                        Saya percaya bahwa kombinasi antara kemampuan teknis dan komunikasi adalah kunci keberhasilan
                        di era digital ini. Aktif berorganisasi dan terus mengembangkan diri di bidang kreatif dan teknologi.
                    </p>
                </div>
                <div class="about-details">
                    <div class="detail-card">
                        <div class="detail-items">
                            <div class="detail-item reveal-item">
                                <span class="detail-label">Nama Lengkap</span>
                                <span class="detail-value">Khansa Nadhif Shafa</span>
                            </div>
                            <div class="detail-item reveal-item">
                                <span class="detail-label">Tanggal Lahir</span>
                                <span class="detail-value">20 Desember 2004</span>
                            </div>
                            <div class="detail-item reveal-item">
                                <span class="detail-label">Jenis Kelamin</span>
                                <span class="detail-value">Perempuan</span>
                            </div>
                            <div class="detail-item reveal-item">
                                <span class="detail-label">Agama</span>
                                <span class="detail-value">Islam</span>
                            </div>
                            <div class="detail-item reveal-item">
                                <span class="detail-label">Alamat</span>
                                <span class="detail-value">Tulungrejo, Pare, Kediri</span>
                            </div>
                            <div class="detail-item reveal-item">
                                <span class="detail-label">No. Telepon</span>
                                <span class="detail-value">
                                    <a href="tel:089524964274" class="link-accent">089524964274</a>
                                </span>
                            </div>
                            <div class="detail-item reveal-item">
                                <span class="detail-label">Email</span>
                                <span class="detail-value">
                                    <a href="mailto:nadhifshafa20@gmail.com" class="link-accent">nadhifshafa20@gmail.com</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stats-row">
                <div class="stat-box" data-target="4" data-suffix="+">
                    <div class="stat-num" id="stat1">0</div>
                    <div class="stat-label">Pengalaman Kerja</div>
                </div>
                <div class="stat-box" data-target="10" data-suffix="+">
                    <div class="stat-num" id="stat2">0</div>
                    <div class="stat-label">Keahlian</div>
                </div>
                <div class="stat-box" data-target="21" data-suffix="">
                    <div class="stat-num" id="stat3">0</div>
                    <div class="stat-label">Tahun Usia</div>
                </div>
                <div class="stat-box" data-target="1" data-suffix="">
                    <div class="stat-num" id="stat4">0</div>
                    <div class="stat-label">Org. Aktif</div>
                </div>
            </div>
        </section>

        <section class="section education-section" id="pendidikan">
            <div class="section-label">02 — RIWAYAT PENDIDIKAN</div>
            <h2 class="section-title">Perjalanan <em>Akademik</em></h2>
            <div class="timeline">
                <div class="timeline-item active-edu" data-year="2024-2027">
                    <div class="timeline-dot current-dot">
                        <div class="dot-pulse"></div>
                    </div>
                    <div class="timeline-content">
                        <div class="edu-badge">Sedang Berjalan</div>
                        <h3 class="edu-name">Politeknik Elektronika Negeri Surabaya</h3>
                        <p class="edu-year">2024 – 2027</p>
                        <p class="edu-desc">Program studi di perguruan tinggi teknologi terkemuka di Surabaya.</p>
                    </div>
                </div>
                <div class="timeline-item" data-year="2020-2023">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="edu-badge past">Lulus</div>
                        <h3 class="edu-name">SMA Negeri 2 Pare</h3>
                        <p class="edu-year">2020 – 2023</p>
                        <p class="edu-desc">Menyelesaikan pendidikan menengah atas di Pare, Kediri.</p>
                    </div>
                </div>
                <div class="timeline-item" data-year="2017-2020">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="edu-badge past">Lulus</div>
                        <h3 class="edu-name">SMP Negeri 2 Pare</h3>
                        <p class="edu-year">2017 – 2020</p>
                        <p class="edu-desc">Menyelesaikan pendidikan menengah pertama di Pare, Kediri.</p>
                    </div>
                </div>
                <div class="timeline-item" data-year="2011-2017">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="edu-badge past">Lulus</div>
                        <h3 class="edu-name">SD Negeri Pare 1</h3>
                        <p class="edu-year">2011 – 2017</p>
                        <p class="edu-desc">Menyelesaikan pendidikan dasar di Pare, Kediri.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section experience-section" id="pengalaman">
            <div class="section-label">03 — PENGALAMAN</div>
            <h2 class="section-title">Portofolio <em>Kerja & Organisasi</em></h2>
            <div class="exp-tabs">
                <button class="exp-tab active" data-tab="kerja">Pengalaman Kerja</button>
                <button class="exp-tab" data-tab="organisasi">Organisasi</button>
            </div>
            <div class="exp-content" id="tab-kerja">
                <div class="exp-grid">
                    <div class="exp-card" data-index="1">
                        <div class="exp-number">01</div>
                        <div class="exp-icon-wrap"><span class="exp-icon">📞</span></div>
                        <h3 class="exp-title">Telemarketing</h3>
                        <p class="exp-company">CV Putra Mustika — Pare, Kediri</p>
                        <p class="exp-desc">Melayani pelanggan melalui telepon, menawarkan produk, dan membangun hubungan baik dengan klien.</p>
                        <div class="exp-tags">
                            <span class="exp-tag">Komunikasi</span>
                            <span class="exp-tag">Penjualan</span>
                        </div>
                    </div>
                    <div class="exp-card" data-index="2">
                        <div class="exp-number">02</div>
                        <div class="exp-icon-wrap"><span class="exp-icon">📦</span></div>
                        <h3 class="exp-title">Admin Gudang</h3>
                        <p class="exp-company">Tekad Grup — Tulungagung</p>
                        <p class="exp-desc">Mengelola administrasi gudang, pencatatan stok, koordinasi pengiriman, dan pengarsipan dokumen.</p>
                        <div class="exp-tags">
                            <span class="exp-tag">Administrasi</span>
                            <span class="exp-tag">Manajemen</span>
                        </div>
                    </div>
                    <div class="exp-card" data-index="3">
                        <div class="exp-number">03</div>
                        <div class="exp-icon-wrap"><span class="exp-icon">☕</span></div>
                        <h3 class="exp-title">Barista & Editor</h3>
                        <p class="exp-company">d'Goda — Pare</p>
                        <p class="exp-desc">Meracik kopi dan bertanggung jawab atas konten visual dan pengeditan media promosi kafe.</p>
                        <div class="exp-tags">
                            <span class="exp-tag">Barista</span>
                            <span class="exp-tag">Editing</span>
                            <span class="exp-tag">Kreatif</span>
                        </div>
                    </div>
                    <div class="exp-card" data-index="4">
                        <div class="exp-number">04</div>
                        <div class="exp-icon-wrap"><span class="exp-icon">☕</span></div>
                        <h3 class="exp-title">Barista</h3>
                        <p class="exp-company">Sentana Coffee</p>
                        <p class="exp-desc">Menyajikan kopi specialty dengan standar tinggi dan memberikan pelayanan prima kepada pelanggan.</p>
                        <div class="exp-tags">
                            <span class="exp-tag">Barista</span>
                            <span class="exp-tag">Pelayanan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="exp-content hidden" id="tab-organisasi">
                <div class="org-card">
                    <div class="org-left">
                        <div class="org-year-badge">2024 – 2025</div>
                        <h3 class="org-title">Anggota Sahabat Bahasa</h3>
                        <p class="org-place">Politeknik Elektronika Negeri Surabaya</p>
                        <p class="org-desc">Aktif sebagai anggota komunitas Sahabat Bahasa di PENS, fokus pada pengembangan kemampuan berbahasa, public speaking, dan komunikasi efektif.</p>
                        <div class="org-skills">
                            <span class="exp-tag">Public Speaking</span>
                            <span class="exp-tag">Kepemimpinan</span>
                            <span class="exp-tag">Teamwork</span>
                            <span class="exp-tag">Komunikasi</span>
                        </div>
                    </div>
                    <div class="org-right">
                        <div class="org-icon-big">🗣️</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section skills-section" id="keahlian">
            <div class="section-label">04 — KEMAMPUAN</div>
            <h2 class="section-title">Keahlian & <em>Kompetensi</em></h2>
            <div class="skills-wrapper">
                <div class="skill-category">
                    <h3 class="skill-cat-title">Komunikasi</h3>
                    <div class="skill-list">
                        <div class="skill-item" data-level="90">
                            <div class="skill-header">
                                <span class="skill-name">Public Speaking</span>
                                <span class="skill-percent">90%</span>
                            </div>
                            <div class="skill-bar"><div class="skill-fill" style="--w: 90%"></div></div>
                        </div>
                        <div class="skill-item" data-level="85">
                            <div class="skill-header">
                                <span class="skill-name">Voice Over</span>
                                <span class="skill-percent">85%</span>
                            </div>
                            <div class="skill-bar"><div class="skill-fill" style="--w: 85%"></div></div>
                        </div>
                        <div class="skill-item" data-level="80">
                            <div class="skill-header">
                                <span class="skill-name">Bahasa Inggris Aktif</span>
                                <span class="skill-percent">80%</span>
                            </div>
                            <div class="skill-bar"><div class="skill-fill" style="--w: 80%"></div></div>
                        </div>
                    </div>
                </div>
                <div class="skill-category">
                    <h3 class="skill-cat-title">Adobe Creative Suite</h3>
                    <div class="skill-list">
                        <div class="skill-item" data-level="85">
                            <div class="skill-header">
                                <span class="skill-name">Adobe Lightroom</span>
                                <span class="skill-percent">85%</span>
                            </div>
                            <div class="skill-bar"><div class="skill-fill" style="--w: 85%"></div></div>
                        </div>
                        <div class="skill-item" data-level="80">
                            <div class="skill-header">
                                <span class="skill-name">Adobe Illustrator</span>
                                <span class="skill-percent">80%</span>
                            </div>
                            <div class="skill-bar"><div class="skill-fill" style="--w: 80%"></div></div>
                        </div>
                        <div class="skill-item" data-level="82">
                            <div class="skill-header">
                                <span class="skill-name">Adobe Animate</span>
                                <span class="skill-percent">82%</span>
                            </div>
                            <div class="skill-bar"><div class="skill-fill" style="--w: 82%"></div></div>
                        </div>
                        <div class="skill-item" data-level="88">
                            <div class="skill-header">
                                <span class="skill-name">Adobe Premiere</span>
                                <span class="skill-percent">88%</span>
                            </div>
                            <div class="skill-bar"><div class="skill-fill" style="--w: 88%"></div></div>
                        </div>
                        <div class="skill-item" data-level="75">
                            <div class="skill-header">
                                <span class="skill-name">Adobe Audition</span>
                                <span class="skill-percent">75%</span>
                            </div>
                            <div class="skill-bar"><div class="skill-fill" style="--w: 75%"></div></div>
                        </div>
                    </div>
                </div>
                <div class="skill-category">
                    <h3 class="skill-cat-title">Prod