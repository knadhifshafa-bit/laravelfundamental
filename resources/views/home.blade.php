@extends('layouts.app')

@section('content')

<!-- ===== HERO ===== -->
<section style="padding: 80px 0 60px;">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- Teks sebelah kiri -->
            <div class="col-lg-7">

                <span class="section-tag">✦ Multimedia Creative & Content Producer</span>

                <h1 style="font-size: 52px;
                            line-height: 1.15;
                            color: #1a1a2e;
                            margin-top: 10px;">
                    Khansa<br>
                    <span style="font-style: italic;
                                 background: linear-gradient(135deg, #7c3aed, #0ea5e9);
                                 -webkit-background-clip: text;
                                 -webkit-text-fill-color: transparent;">
                        Nadhif Shafa
                    </span>
                </h1>

                <p style="font-size: 16px;
                           color: #5a5a7a;
                           line-height: 1.8;
                           margin: 20px 0 32px;
                           max-width: 500px;">
                    Mahasiswi PENS yang menggabungkan keahlian visual, audio,
                    dan komunikasi untuk menciptakan konten yang berkesan
                    dan berdampak nyata.
                </p>

                <div class="d-flex gap-3 flex-wrap">
                    <a href="#kontak" class="btn-gradient">Hubungi Saya</a>
                    <a href="#keahlian"
                       style="padding: 10px 28px;
                              border: 1.5px solid #7c3aed;
                              border-radius: 50px;
                              color: #7c3aed;
                              text-decoration: none;
                              font-weight: 500;">
                        Lihat Keahlian
                    </a>
                </div>

            </div>

            <!-- Foto sebelah kanan -->
            <div class="col-lg-5 text-center">
                <div style="width: 280px;
                             height: 350px;
                             margin: 0 auto;
                             background: linear-gradient(135deg, #ede9fe, #dbeafe);
                             border-radius: 40px 8px 40px 8px;
                             border: 2px solid rgba(124,58,237,0.2);
                             overflow: hidden;
                             display: flex;
                             align-items: center;
                             justify-content: center;">

                    <!-- Sementara pakai emoji dulu -->
                    <!-- Nanti ganti foto asli dengan cara: -->
                    <!-- 1. Simpan foto di folder public/images/foto.jpg -->
                    <!-- 2. Hapus baris <div> emoji di bawah -->
                    <!-- 3. Hapus tanda <!-- dan -- > di baris img bawah -->

                    <div style="font-size: 80px;">📸</div>

                    <!-- <img src="{{ asset('images/foto.jpg') }}"
                         style="width:100%; height:100%; object-fit:cover;"> -->

                </div>
            </div>

        </div>
    </div>
</section>


<!-- ===== TENTANG SAYA ===== -->
<section id="tentang"
         style="background: linear-gradient(135deg, #7c3aed, #0ea5e9);
                padding: 60px 0;
                color: white;">
    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Teks kiri -->
            <div class="col-lg-6">
                <h2 style="font-family: 'DM Serif Display', serif;
                            font-size: 32px;
                            margin-bottom: 16px;">
                    Siapa Saya?
                </h2>
                <p style="font-size: 15px; line-height: 1.9; opacity: 0.9;">
                    Saya adalah seorang creative multitasker yang terampil
                    dalam bidang multimedia — dari mengedit video, mendesain
                    grafis, merekam suara, hingga berbicara di depan publik.
                    Dengan pengalaman nyata di berbagai bidang kerja, saya
                    memahami dunia komunikasi dari berbagai sudut pandang.
                    Saya percaya kreativitas yang kuat harus didukung oleh
                    kemampuan teknis yang mumpuni.
                </p>
            </div>

            <!-- Kotak angka kanan -->
            <div class="col-lg-6">
                <div class="row g-3">

                    <div class="col-6">
                        <div class="stat-box">
                            <div style="font-family: 'DM Serif Display', serif;
                                        font-size: 32px;">6+</div>
                            <div style="font-size: 12px; opacity: 0.8;">
                                Software Kreatif
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="stat-box">
                            <div style="font-family: 'DM Serif Display', serif;
                                        font-size: 32px;">4+</div>
                            <div style="font-size: 12px; opacity: 0.8;">
                                Pengalaman Kerja
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="stat-box">
                            <div style="font-family: 'DM Serif Display', serif;
                                        font-size: 32px;">2</div>
                            <div style="font-size: 12px; opacity: 0.8;">
                                Bahasa Aktif
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="stat-box">
                            <div style="font-family: 'DM Serif Display', serif;
                                        font-size: 32px;">5+</div>
                            <div style="font-size: 12px; opacity: 0.8;">
                                Bidang Keahlian
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- ===== KEAHLIAN ===== -->
<section id="keahlian" style="padding: 80px 0;">
    <div class="container">

        <span class="section-tag">Keahlian Utama</span>
        <h2 style="font-family: 'DM Serif Display', serif;
                    font-size: 36px;
                    margin-bottom: 40px;
                    color: #1a1a2e;">
            Multimedia & Creative Skills
        </h2>

        <div class="row g-4">

            <!-- CARD 1 — Desain Grafis -->
            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div style="font-size: 32px; margin-bottom: 12px;">🎨</div>
                    <h5 style="font-weight: 600; margin-bottom: 8px;">
                        Desain Grafis & Ilustrasi
                    </h5>
                    <p style="font-size: 13px; color: #8888aa;
                               line-height: 1.7; margin-bottom: 16px;">
                        Menciptakan visual yang memukau dengan Adobe Illustrator
                        & Lightroom untuk branding, konten sosial media,
                        dan materi promosi.
                    </p>
                    <div class="skill-bar-wrap">
                        <div class="skill-bar" style="width: 85%;"></div>
                    </div>
                    <div style="font-size: 11px; color: #aaa;
                                text-align: right; margin-top: 4px;">
                        Adobe Illustrator · Lightroom
                    </div>
                </div>
            </div>

            <!-- CARD 2 — Video Editing -->
            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div style="font-size: 32px; margin-bottom: 12px;">🎬</div>
                    <h5 style="font-weight: 600; margin-bottom: 8px;">
                        Video Editing & Motion
                    </h5>
                    <p style="font-size: 13px; color: #8888aa;
                               line-height: 1.7; margin-bottom: 16px;">
                        Memproduksi konten video berkualitas tinggi dengan
                        Adobe Premiere dan Adobe Animate — dari konsep
                        hingga publish-ready.
                    </p>
                    <div class="skill-bar-wrap">
                        <div class="skill-bar" style="width: 80%;"></div>
                    </div>
                    <div style="font-size: 11px; color: #aaa;
                                text-align: right; margin-top: 4px;">
                        Premiere Pro · Adobe Animate
                    </div>
                </div>
            </div>

            <!-- CARD 3 — Voice Over -->
            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div style="font-size: 32px; margin-bottom: 12px;">🎙️</div>
                    <h5 style="font-weight: 600; margin-bottom: 8px;">
                        Voice Over & Audio Production
                    </h5>
                    <p style="font-size: 13px; color: #8888aa;
                               line-height: 1.7; margin-bottom: 16px;">
                        Suara profesional dengan teknik rekam dan edit audio
                        menggunakan Adobe Audition — narasi, dubbing,
                        dan podcast.
                    </p>
                    <div class="skill-bar-wrap">
                        <div class="skill-bar" style="width: 88%;"></div>
                    </div>
                    <div style="font-size: 11px; color: #aaa;
                                text-align: right; margin-top: 4px;">
                        Adobe Audition · Voice Over
                    </div>
                </div>
            </div>

            <!-- CARD 4 — Public Speaking -->
            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div style="font-size: 32px; margin-bottom: 12px;">🎤</div>
                    <h5 style="font-weight: 600; margin-bottom: 8px;">
                        Public Speaking
                    </h5>
                    <p style="font-size: 13px; color: #8888aa;
                               line-height: 1.7; margin-bottom: 16px;">
                        Kemampuan berbicara di depan umum yang percaya diri —
                        presentasi, MC, dan komunikasi publik dalam Bahasa
                        Indonesia & Inggris aktif.
                    </p>
                    <div class="skill-bar-wrap">
                        <div class="skill-bar" style="width: 90%;"></div>
                    </div>
                    <div style="font-size: 11px; color: #aaa;
                                text-align: right; margin-top: 4px;">
                        Presentasi · Bilingual
                    </div>
                </div>
            </div>

            <!-- CARD 5 — Microsoft Office -->
            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div style="font-size: 32px; margin-bottom: 12px;">💼</div>
                    <h5 style="font-weight: 600; margin-bottom: 8px;">
                        Microsoft Office Suite
                    </h5>
                    <p style="font-size: 13px; color: #8888aa;
                               line-height: 1.7; margin-bottom: 16px;">
                        Menyusun laporan profesional dan data administratif
                        menggunakan Word & Excel dengan presisi
                        dan efisiensi tinggi.
                    </p>
                    <div class="skill-bar-wrap">
                        <div class="skill-bar" style="width: 85%;"></div>
                    </div>
                    <div style="font-size: 11px; color: #aaa;
                                text-align: right; margin-top: 4px;">
                        Word · Excel
                    </div>
                </div>
            </div>

            <!-- CARD 6 — Bahasa Inggris -->
            <div class="col-lg-4 col-md-6">
                <div class="skill-card">
                    <div style="font-size: 32px; margin-bottom: 12px;">🌐</div>
                    <h5 style="font-weight: 600; margin-bottom: 8px;">
                        Komunikasi Bahasa Inggris
                    </h5>
                    <p style="font-size: 13px; color: #8888aa;
                               line-height: 1.7; margin-bottom: 16px;">
                        Inggris Aktif — mampu berkomunikasi, menulis konten,
                        dan berkorespondensi profesional secara lancar.
                    </p>
                    <div class="skill-bar-wrap">
                        <div class="skill-bar" style="width: 82%;"></div>
                    </div>
                    <div style="font-size: 11px; color: #aaa;
                                text-align: right; margin-top: 4px;">
                        Speaking · Writing · Reading
                    </div>
                </div>
            </div>

        </div>

        <!-- Baris tool pills -->
        <div style="margin-top: 40px;">
            <p style="font-size: 13px; font-weight: 600;
                       color: #555; margin-bottom: 10px;">
                Tools yang Dikuasai:
            </p>
            <span class="tool-pill">Adobe Illustrator</span>
            <span class="tool-pill">Adobe Lightroom</span>
            <span class="tool-pill">Adobe Premiere Pro</span>
            <span class="tool-pill">Adobe Animate</span>
            <span class="tool-pill">Adobe Audition</span>
            <span class="tool-pill">Public Speaking</span>
            <span class="tool-pill">Voice Over</span>
            <span class="tool-pill">Microsoft Word</span>
            <span class="tool-pill">Microsoft Excel</span>
        </div>

    </div>
</section>
<!-- ===== PENDIDIKAN & PENGALAMAN ===== -->
<section style="padding: 80px 0; background: #faf8ff;">
    <div class="container">
        <div class="row g-5">

            <!-- Kolom kiri — Pendidikan -->
            <div class="col-lg-6" id="pendidikan">

                <span class="section-tag">Riwayat</span>
                <h2 style="font-family: 'DM Serif Display', serif;
                            font-size: 28px;
                            margin-bottom: 32px;
                            color: #1a1a2e;">
                    Pendidikan
                </h2>

                <!-- Item 1 -->
                <div class="timeline-item">
                    <div style="font-size: 11px; font-weight: 600;
                                color: #7c3aed; margin-bottom: 4px;">
                        2024 – Sekarang
                    </div>
                    <div style="font-size: 15px; font-weight: 600;
                                margin-bottom: 2px; color: #1a1a2e;">
                        Politeknik Elektronika Negeri Surabaya
                    </div>
                    <div style="font-size: 13px; color: #888;">
                        Program Aktif
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="timeline-item">
                    <div style="font-size: 11px; font-weight: 600;
                                color: #7c3aed; margin-bottom: 4px;">
                        2020 – 2023
                    </div>
                    <div style="font-size: 15px; font-weight: 600;
                                margin-bottom: 2px; color: #1a1a2e;">
                        SMA Negeri 2 Pare
                    </div>
                    <div style="font-size: 13px; color: #888;">
                        Sekolah Menengah Atas
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="timeline-item">
                    <div style="font-size: 11px; font-weight: 600;
                                color: #7c3aed; margin-bottom: 4px;">
                        2017 – 2020
                    </div>
                    <div style="font-size: 15px; font-weight: 600;
                                margin-bottom: 2px; color: #1a1a2e;">
                        SMP Negeri 2 Pare
                    </div>
                    <div style="font-size: 13px; color: #888;">
                        Sekolah Menengah Pertama
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="timeline-item">
                    <div style="font-size: 11px; font-weight: 600;
                                color: #7c3aed; margin-bottom: 4px;">
                        2011 – 2017
                    </div>
                    <div style="font-size: 15px; font-weight: 600;
                                margin-bottom: 2px; color: #1a1a2e;">
                        SD Negeri Pare 1
                    </div>
                    <div style="font-size: 13px; color: #888;">
                        Sekolah Dasar
                    </div>
                </div>

            </div>

            <!-- Kolom kanan — Pengalaman -->
            <div class="col-lg-6" id="pengalaman">

                <span class="section-tag">Organisasi & Kerja</span>
                <h2 style="font-family: 'DM Serif Display', serif;
                            font-size: 28px;
                            margin-bottom: 32px;
                            color: #1a1a2e;">
                    Pengalaman
                </h2>

                <!-- Item 1 -->
                <div class="timeline-item">
                    <div style="font-size: 11px; font-weight: 600;
                                color: #7c3aed; margin-bottom: 4px;">
                        2024 – 2025
                    </div>
                    <div style="font-size: 15px; font-weight: 600;
                                margin-bottom: 2px; color: #1a1a2e;">
                        Anggota Sahabat Bahasa
                    </div>
                    <div style="font-size: 13px; color: #888;">
                        Politeknik Elektronika Negeri Surabaya
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="timeline-item">
                    <div style="font-size: 11px; font-weight: 600;
                                color: #7c3aed; margin-bottom: 4px;">
                        Pengalaman Kerja
                    </div>
                    <div style="font-size: 15px; font-weight: 600;
                                margin-bottom: 2px; color: #1a1a2e;">
                        Barista & Editor — d'Goda Pare
                    </div>
                    <div style="font-size: 13px; color: #888;">
                        Barista · Konten Visual · Editing
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="timeline-item">
                    <div style="font-size: 11px; font-weight: 600;
                                color: #7c3aed; margin-bottom: 4px;">
                        Pengalaman Kerja
                    </div>
                    <div style="font-size: 15px; font-weight: 600;
                                margin-bottom: 2px; color: #1a1a2e;">
                        Telemarketing — CV Putra Mustika
                    </div>
                    <div style="font-size: 13px; color: #888;">
                        Komunikasi & Sales
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="timeline-item">
                    <div style="font-size: 11px; font-weight: 600;
                                color: #7c3aed; margin-bottom: 4px;">
                        Pengalaman Kerja
                    </div>
                    <div style="font-size: 15px; font-weight: 600;
                                margin-bottom: 2px; color: #1a1a2e;">
                        Admin Gudang — Tekad Grup
                    </div>
                    <div style="font-size: 13px; color: #888;">
                        Administrasi & Manajemen Data
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="timeline-item">
                    <div style="font-size: 11px; font-weight: 600;
                                color: #7c3aed; margin-bottom: 4px;">
                        Pengalaman Kerja
                    </div>
                    <div style="font-size: 15px; font-weight: 600;
                                margin-bottom: 2px; color: #1a1a2e;">
                        Barista — Sentana Coffee
                    </div>
                    <div style="font-size: 13px; color: #888;">
                        Pelayanan & Operasional Kafe
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- ===== KONTAK ===== -->
<section id="kontak"
         style="padding: 80px 0;
                background: white;
                text-align: center;">
    <div class="container">

        <span class="section-tag" style="justify-content: center; display: block;">
            Hubungi Saya
        </span>

        <h2 style="font-family: 'DM Serif Display', serif;
                    font-size: 36px;
                    color: #1a1a2e;
                    margin-bottom: 16px;">
            Mari Berkolaborasi!
        </h2>

        <p style="font-size: 15px;
                   color: #5a5a7a;
                   max-width: 480px;
                   margin: 0 auto 40px;
                   line-height: 1.8;">
            Saya terbuka untuk kolaborasi kreatif, project multimedia,
            maupun peluang kerja baru. Jangan ragu untuk menghubungi saya!
        </p>

        <!-- Kotak info kontak -->
        <div class="row justify-content-center g-4 mb-5">

            <!-- Email -->
            <div class="col-lg-3 col-md-6">
                <div style="background: #f8f6ff;
                             border-radius: 20px;
                             padding: 28px 20px;
                             border: 1px solid rgba(124,58,237,0.1);">
                    <div style="font-size: 32px; margin-bottom: 12px;">✉️</div>
                    <div style="font-size: 12px; color: #7c3aed;
                                font-weight: 600; margin-bottom: 6px;
                                letter-spacing: 0.08em; text-transform: uppercase;">
                        Email
                    </div>
                    <div style="font-size: 14px; color: #1a1a2e; font-weight: 500;">
                        nadhifshafa20@gmail.com
                    </div>
                </div>
            </div>

            <!-- Nomor HP -->
            <div class="col-lg-3 col-md-6">
                <div style="background: #f0fdf9;
                             border-radius: 20px;
                             padding: 28px 20px;
                             border: 1px solid rgba(13,148,136,0.1);">
                    <div style="font-size: 32px; margin-bottom: 12px;">📱</div>
                    <div style="font-size: 12px; color: #0d9488;
                                font-weight: 600; margin-bottom: 6px;
                                letter-spacing: 0.08em; text-transform: uppercase;">
                        WhatsApp
                    </div>
                    <div style="font-size: 14px; color: #1a1a2e; font-weight: 500;">
                        089524964274
                    </div>
                </div>
            </div>

            <!-- Lokasi -->
            <div class="col-lg-3 col-md-6">
                <div style="background: #fef9ee;
                             border-radius: 20px;
                             padding: 28px 20px;
                             border: 1px solid rgba(245,158,11,0.1);">
                    <div style="font-size: 32px; margin-bottom: 12px;">📍</div>
                    <div style="font-size: 12px; color: #f59e0b;
                                font-weight: 600; margin-bottom: 6px;
                                letter-spacing: 0.08em; text-transform: uppercase;">
                        Lokasi
                    </div>
                    <div style="font-size: 14px; color: #1a1a2e; font-weight: 500;">
                        Tulungrejo, Pare Kediri
                    </div>
                </div>
            </div>

        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="mailto:nadhifshafa20@gmail.com" class="btn-gradient">
                ✉️ &nbsp; Kirim Email
            </a>
            <a href="https://wa.me/6289524964274"
               target="_blank"
               style="padding: 10px 28px;
                      border: 1.5px solid #0d9488;
                      border-radius: 50px;
                      color: #0d9488;
                      text-decoration: none;
                      font-weight: 500;">
                💬 &nbsp; Chat WhatsApp
            </a>
        </div>

    </div>
</section>

@endsection