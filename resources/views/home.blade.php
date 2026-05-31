@extends('layouts.app')

@section('content')

{{-- ===== GLOBAL STYLES ===== --}}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Syne:wght@400;600;700;800&family=DM+Mono:wght@300;400;500&display=swap');

    :root {
        --ink:   #0a0a0f;
        --ink2:  #12121a;
        --ink3:  #1c1c28;
        --gold:  #e8c76a;
        --gold2: #f5dfa0;
        --red:   #e84040;
        --cream: #f7f4ee;
        --smoke: #c8c4ba;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
        background: var(--ink);
        color: var(--cream);
        font-family: 'Syne', sans-serif;
        overflow-x: hidden;
    }

    body::before {
        content: '';
        position: fixed; inset: 0;
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
        opacity: .03;
        pointer-events: none;
        z-index: 9999;
    }

    .display { font-family: 'Playfair Display', serif; }
    .mono    { font-family: 'DM Mono', monospace; }

    .eyebrow {
        font-family: 'DM Mono', monospace;
        font-size: 11px;
        letter-spacing: .18em;
        text-transform: uppercase;
        color: var(--gold);
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }
    .eyebrow::before {
        content: '';
        width: 30px; height: 1px;
        background: var(--gold);
    }

    .grad-text {
        background: linear-gradient(135deg, var(--gold) 0%, var(--gold2) 60%, #fff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .btn-primary-custom {
        display: inline-flex; align-items: center; gap: 8px;
        padding: 13px 30px;
        background: var(--gold);
        color: var(--ink);
        font-family: 'Syne', sans-serif;
        font-weight: 700;
        font-size: 13px;
        letter-spacing: .08em;
        text-transform: uppercase;
        text-decoration: none;
        clip-path: polygon(0 0, calc(100% - 10px) 0, 100% 10px, 100% 100%, 10px 100%, 0 calc(100% - 10px));
        transition: background .2s;
    }
    .btn-primary-custom:hover { background: var(--gold2); color: var(--ink); }

    .btn-outline-custom {
        display: inline-flex; align-items: center; gap: 8px;
        padding: 12px 30px;
        border: 1px solid rgba(232,199,106,.4);
        color: var(--gold);
        font-family: 'Syne', sans-serif;
        font-weight: 600;
        font-size: 13px;
        letter-spacing: .08em;
        text-transform: uppercase;
        text-decoration: none;
        transition: border-color .2s, background .2s;
    }
    .btn-outline-custom:hover {
        border-color: var(--gold);
        background: rgba(232,199,106,.07);
        color: var(--gold);
    }

    /* SKILL CARD */
    .skill-card {
        background: var(--ink2);
        border: 1px solid rgba(255,255,255,.06);
        border-top: 2px solid var(--gold);
        padding: 28px 24px;
        transition: transform .25s, box-shadow .25s;
        position: relative;
        overflow: hidden;
    }
    .skill-card::before {
        content: '';
        position: absolute; inset: 0;
        background: linear-gradient(135deg, rgba(232,199,106,.04) 0%, transparent 60%);
        opacity: 0;
        transition: opacity .25s;
    }
    .skill-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,.4); }
    .skill-card:hover::before { opacity: 1; }

    .skill-icon {
        width: 44px; height: 44px;
        border: 1px solid rgba(232,199,106,.3);
        display: flex; align-items: center; justify-content: center;
        font-size: 20px;
        margin-bottom: 18px;
    }
    .skill-bar-wrap { height: 2px; background: rgba(255,255,255,.08); }
    .skill-bar {
        height: 100%;
        background: linear-gradient(90deg, var(--gold), var(--gold2));
        position: relative;
    }
    .skill-bar::after {
        content: '';
        position: absolute; right: 0; top: 50%;
        transform: translateY(-50%);
        width: 5px; height: 5px;
        background: var(--gold2);
        border-radius: 50%;
    }

    /* STAT BOX */
    .stat-box {
        border: 1px solid rgba(255,255,255,.08);
        background: rgba(255,255,255,.03);
        padding: 24px 20px;
        text-align: center;
        transition: border-color .2s;
    }
    .stat-box:hover { border-color: rgba(232,199,106,.4); }

    /* TIMELINE */
    .timeline-wrap { position: relative; padding-left: 24px; }
    .timeline-wrap::before {
        content: '';
        position: absolute; left: 0; top: 8px; bottom: 8px;
        width: 1px;
        background: linear-gradient(to bottom, var(--gold), transparent);
    }
    .timeline-item { position: relative; padding-bottom: 28px; }
    .timeline-item::before {
        content: '';
        position: absolute; left: -28px; top: 6px;
        width: 7px; height: 7px;
        background: var(--gold);
        border-radius: 50%;
        box-shadow: 0 0 0 3px rgba(232,199,106,.15);
    }
    .tl-year {
        font-family: 'DM Mono', monospace;
        font-size: 10px; letter-spacing: .12em;
        text-transform: uppercase; color: var(--gold); margin-bottom: 5px;
    }
    .tl-title { font-weight: 700; font-size: 14px; color: var(--cream); margin-bottom: 3px; }
    .tl-sub   { font-size: 12px; color: var(--smoke); }

    /* TOOL PILL */
    .tool-pill {
        display: inline-flex; align-items: center;
        padding: 5px 12px;
        border: 1px solid rgba(232,199,106,.2);
        font-family: 'DM Mono', monospace;
        font-size: 10.5px;
        color: rgba(232,199,106,.7);
        letter-spacing: .04em;
        margin: 4px 3px;
        transition: border-color .2s, color .2s;
    }
    .tool-pill:hover { border-color: var(--gold); color: var(--gold); }

    /* BROADCAST CARD */
    .broadcast-card {
        background: var(--ink2);
        border: 1px solid rgba(232,199,106,.15);
        padding: 28px;
        display: flex; gap: 20px; align-items: center;
        transition: border-color .25s, box-shadow .25s;
        position: relative; overflow: hidden;
    }
    .broadcast-card::before {
        content: 'ON AIR';
        position: absolute; top: 14px; right: 14px;
        font-family: 'DM Mono', monospace;
        font-size: 9px; letter-spacing: .15em;
        color: var(--red);
        border: 1px solid var(--red);
        padding: 2px 7px;
        animation: blink 1.6s step-end infinite;
    }
    @keyframes blink { 50% { opacity: 0; } }
    .broadcast-card:hover { border-color: var(--gold); box-shadow: 0 12px 40px rgba(0,0,0,.4); }
    .broadcast-thumb { width: 80px; height: 80px; object-fit: cover; flex-shrink: 0; border: 1px solid rgba(232,199,106,.2); }
    .broadcast-link {
        display: inline-flex; align-items: center; gap: 6px;
        margin-top: 10px;
        font-family: 'DM Mono', monospace;
        font-size: 10px; letter-spacing: .08em;
        color: var(--gold); text-decoration: none; text-transform: uppercase;
        border-bottom: 1px solid rgba(232,199,106,.3); padding-bottom: 1px;
        transition: border-color .2s;
    }
    .broadcast-link:hover { border-color: var(--gold); color: var(--gold); }

    /* PORTFOLIO CARD */
    .portfolio-card {
        background: var(--ink2);
        border: 1px solid rgba(255,255,255,.06);
        overflow: hidden;
        transition: transform .25s, box-shadow .25s, border-color .25s;
        position: relative;
    }
    .portfolio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 50px rgba(0,0,0,.5);
        border-color: rgba(232,199,106,.3);
    }
    .portfolio-card-thumb {
        width: 100%; aspect-ratio: 16/10;
        background: var(--ink3);
        display: flex; align-items: center; justify-content: center;
        font-size: 36px;
        position: relative;
        overflow: hidden;
    }
    .portfolio-card-thumb::after {
        content: '';
        position: absolute; inset: 0;
        background: linear-gradient(to bottom, transparent 50%, rgba(10,10,15,.8) 100%);
    }
    .portfolio-card-category {
        position: absolute; top: 12px; left: 12px;
        font-family: 'DM Mono', monospace;
        font-size: 9px; letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--ink);
        background: var(--gold);
        padding: 3px 8px;
        z-index: 1;
    }
    .portfolio-card-body { padding: 20px; }
    .portfolio-card-title {
        font-family: 'Syne', sans-serif;
        font-weight: 700; font-size: 14px;
        color: var(--cream); margin-bottom: 6px;
    }
    .portfolio-card-desc {
        font-size: 12px; color: var(--smoke);
        line-height: 1.7; margin-bottom: 16px;
    }
    .portfolio-card-link {
        display: inline-flex; align-items: center; gap: 6px;
        font-family: 'DM Mono', monospace;
        font-size: 10px; letter-spacing: .1em;
        text-transform: uppercase;
        color: var(--gold);
        text-decoration: none;
        border-bottom: 1px solid rgba(232,199,106,.3);
        padding-bottom: 2px;
        transition: border-color .2s;
    }
    .portfolio-card-link:hover { border-color: var(--gold); }

    /* KONTAK */
    .contact-input {
        width: 100%;
        background: rgba(255,255,255,.04);
        border: 1px solid rgba(255,255,255,.1);
        color: var(--cream);
        font-family: 'Syne', sans-serif;
        font-size: 13px;
        padding: 12px 16px;
        outline: none;
        transition: border-color .2s;
    }
    .contact-input:focus { border-color: rgba(232,199,106,.5); }
    .contact-input::placeholder { color: var(--smoke); }
    .contact-label {
        font-family: 'DM Mono', monospace;
        font-size: 10px; letter-spacing: .1em;
        text-transform: uppercase; color: var(--smoke);
        display: block; margin-bottom: 6px;
    }

    /* DIVIDER */
    .section-divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(232,199,106,.2), transparent);
    }

    /* TICKER */
    .ticker-wrap { background: var(--gold); overflow: hidden; padding: 10px 0; }
    .ticker-inner {
        display: flex; white-space: nowrap;
        animation: ticker-scroll 28s linear infinite;
    }
    .ticker-inner span {
        font-family: 'DM Mono', monospace;
        font-size: 11px; letter-spacing: .1em;
        text-transform: uppercase; color: var(--ink);
        padding: 0 32px;
    }
    .ticker-inner span::after { content: '◆'; margin-left: 32px; opacity: .4; }
    @keyframes ticker-scroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

    /* REVEAL */
    .reveal { opacity: 0; transform: translateY(24px); transition: opacity .7s ease, transform .7s ease; }
    .reveal.visible { opacity: 1; transform: none; }
</style>


{{-- ===== TICKER ===== --}}
<div class="ticker-wrap">
    <div class="ticker-inner">
        <span>Video Editing</span><span>Motion Graphics</span><span>Voice Over</span>
        <span>Graphic Design</span><span>Audio Production</span><span>Public Speaking</span>
        <span>Content Creator</span><span>Multimedia PENS</span>
        <span>Video Editing</span><span>Motion Graphics</span><span>Voice Over</span>
        <span>Graphic Design</span><span>Audio Production</span><span>Public Speaking</span>
        <span>Content Creator</span><span>Multimedia PENS</span>
    </div>
</div>


{{-- ===== HERO ===== --}}
<section style="padding: 100px 0 80px; position: relative; overflow: hidden;">

    <div style="position:absolute;inset:0;pointer-events:none;
                background-image:linear-gradient(rgba(232,199,106,.04) 1px,transparent 1px),
                linear-gradient(90deg,rgba(232,199,106,.04) 1px,transparent 1px);
                background-size:60px 60px;"></div>

    <div style="position:absolute;top:-80px;right:-100px;width:500px;height:500px;
                background:radial-gradient(circle,rgba(123,92,255,.12) 0%,transparent 70%);
                pointer-events:none;"></div>

    <div class="container" style="position:relative;">
        <div class="row align-items-center g-5">

            <div class="col-lg-7 reveal">
                <div class="eyebrow">Multimedia Creative & Content Producer</div>
                <h1 class="display" style="font-size:clamp(44px,7vw,72px);line-height:1.08;font-weight:900;margin-bottom:24px;">
                    Khansa<br>
                    <em class="grad-text">Nadhif Shafa</em>
                </h1>
                <p style="font-size:15px;color:var(--smoke);line-height:1.9;max-width:480px;margin-bottom:36px;">
                    Mahasiswi PENS yang menggabungkan keahlian visual, audio,
                    dan komunikasi untuk menciptakan konten yang berkesan
                    dan berdampak nyata di dunia multimedia &amp; broadcasting.
                </p>
                <div class="d-flex gap-3 flex-wrap align-items-center">
                    <a href="#kontak" class="btn-primary-custom">
                        Hubungi Saya
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a href="#karya" class="btn-outline-custom">Lihat Karya</a>
                </div>
                <div style="display:flex;gap:32px;margin-top:48px;padding-top:32px;border-top:1px solid rgba(255,255,255,.07);">
                    <div>
                        <div class="display" style="font-size:28px;color:var(--gold);font-weight:700;">6+</div>
                        <div class="mono" style="font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke);margin-top:4px;">Software</div>
                    </div>
                    <div>
                        <div class="display" style="font-size:28px;color:var(--gold);font-weight:700;">4+</div>
                        <div class="mono" style="font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke);margin-top:4px;">Pengalaman</div>
                    </div>
                    <div>
                        <div class="display" style="font-size:28px;color:var(--gold);font-weight:700;">5+</div>
                        <div class="mono" style="font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke);margin-top:4px;">Bidang Keahlian</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 text-center reveal" style="transition-delay:.15s;">
                <div style="position:relative;display:inline-block;">
                    <div style="position:absolute;top:-16px;right:-16px;width:100%;height:100%;
                                 border:1px solid rgba(232,199,106,.25);z-index:0;"></div>
                    <div style="position:absolute;bottom:-10px;left:-10px;width:40px;height:40px;
                                 border-left:2px solid var(--gold);border-bottom:2px solid var(--gold);z-index:2;"></div>
                    <div style="position:absolute;top:-10px;right:-10px;width:40px;height:40px;
                                 border-right:2px solid var(--gold);border-top:2px solid var(--gold);z-index:2;"></div>
                    <div style="width:280px;height:360px;overflow:hidden;position:relative;z-index:1;filter:grayscale(20%) contrast(1.05);">
                        <img src="{{ asset('images/foto.jpeg') }}" alt="Khansa Nadhif Shafa"
                             style="width:100%;height:100%;object-fit:cover;display:block;">
                    </div>
                    <div style="position:absolute;bottom:-20px;left:50%;transform:translateX(-50%);
                                 background:var(--ink);border:1px solid rgba(232,199,106,.3);
                                 padding:8px 20px;white-space:nowrap;z-index:3;">
                        <span class="mono" style="font-size:10px;letter-spacing:.15em;text-transform:uppercase;color:var(--gold);">
                            PENS · Multimedia
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="section-divider"></div>


{{-- ===== HASIL KARYA ===== --}}
<section id="karya" style="padding: 80px 0; background: var(--ink2);">
    <div class="container">

        <div class="eyebrow reveal">Hasil Karya</div>
        <div class="row align-items-end mb-5 reveal">
            <div class="col-lg-7">
                <h2 class="display" style="font-size:40px;font-weight:700;color:var(--cream);">
                    Portfolio &amp; <span class="grad-text">Creative Works</span>
                </h2>
            </div>
            <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                <a href="https://drive.google.com/drive/folders/12AxYpTLApXftxRW4LDYkHSQwJfw2sEyS"
                   target="_blank" rel="noopener"
                   class="btn-outline-custom">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                    Lihat Semua di Drive
                </a>
            </div>
        </div>

        <div class="row g-4">

            {{-- KARYA 1: Video Editing --}}
            <div class="col-lg-4 col-md-6 reveal">
                <div class="portfolio-card">
                    <div class="portfolio-card-thumb" style="background:linear-gradient(135deg,#1a1028,#0d1a2e);">
                        <span style="position:relative;z-index:1;">🎬</span>
                        <div class="portfolio-card-category">Video</div>
                    </div>
                    <div class="portfolio-card-body">
                        <div class="portfolio-card-title">Video Editing & Motion</div>
                        <p class="portfolio-card-desc">
                            Koleksi hasil editing video — from raw footage to
                            publish-ready dengan Adobe Premiere &amp; Animate.
                        </p>
                        <a href="https://drive.google.com/drive/folders/12AxYpTLApXftxRW4LDYkHSQwJfw2sEyS"
                           target="_blank" rel="noopener"
                           class="portfolio-card-link">
                            Lihat Karya
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- KARYA 2: Desain Grafis --}}
            <div class="col-lg-4 col-md-6 reveal" style="transition-delay:.06s;">
                <div class="portfolio-card">
                    <div class="portfolio-card-thumb" style="background:linear-gradient(135deg,#1a1a10,#2a1a0a);">
                        <span style="position:relative;z-index:1;">🎨</span>
                        <div class="portfolio-card-category">Desain</div>
                    </div>
                    <div class="portfolio-card-body">
                        <div class="portfolio-card-title">Desain Grafis & Ilustrasi</div>
                        <p class="portfolio-card-desc">
                            Karya desain grafis — branding, poster, konten sosial
                            media, dan materi promosi dengan Adobe Illustrator.
                        </p>
                        <a href="https://drive.google.com/drive/folders/12AxYpTLApXftxRW4LDYkHSQwJfw2sEyS"
                           target="_blank" rel="noopener"
                           class="portfolio-card-link">
                            Lihat Karya
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- KARYA 3: Audio / Voice Over --}}
            <div class="col-lg-4 col-md-6 reveal" style="transition-delay:.12s;">
                <div class="portfolio-card">
                    <div class="portfolio-card-thumb" style="background:linear-gradient(135deg,#0a1a1a,#101028);">
                        <span style="position:relative;z-index:1;">🎙️</span>
                        <div class="portfolio-card-category">Audio</div>
                    </div>
                    <div class="portfolio-card-body">
                        <div class="portfolio-card-title">Voice Over & Audio Production</div>
                        <p class="portfolio-card-desc">
                            Rekaman voice over dan produksi audio — narasi, dubbing,
                            dan podcast dengan Adobe Audition.
                        </p>
                        <a href="https://drive.google.com/drive/folders/12AxYpTLApXftxRW4LDYkHSQwJfw2sEyS"
                           target="_blank" rel="noopener"
                           class="portfolio-card-link">
                            Lihat Karya
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- KARYA 4: Broadcasting / Hear Me Out FM --}}
            <div class="col-lg-4 col-md-6 reveal" style="transition-delay:.06s;">
                <div class="portfolio-card">
                    <div class="portfolio-card-thumb" style="background:linear-gradient(135deg,#1a0a0a,#2a0a0a);">
                        <span style="position:relative;z-index:1;">📻</span>
                        <div class="portfolio-card-category" style="background:var(--red);color:#fff;">Live</div>
                    </div>
                    <div class="portfolio-card-body">
                        <div class="portfolio-card-title">Hear Me Out FM — Afterhour Talk</div>
                        <p class="portfolio-card-desc">
                            Live broadcast talk show di channel mmbeyond —
                            pengalaman nyata di dunia broadcasting &amp; on-air production.
                        </p>
                        <a href="https://www.youtube.com/live/kxiiZJQWmYg?si=2rzWYU7YyTg5-N4Y"
                           target="_blank" rel="noopener"
                           class="portfolio-card-link">
                            Tonton di YouTube
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- KARYA 5: Foto / Lightroom --}}
            <div class="col-lg-4 col-md-6 reveal" style="transition-delay:.12s;">
                <div class="portfolio-card">
                    <div class="portfolio-card-thumb" style="background:linear-gradient(135deg,#0a1228,#1a1028);">
                        <span style="position:relative;z-index:1;">📷</span>
                        <div class="portfolio-card-category">Foto</div>
                    </div>
                    <div class="portfolio-card-body">
                        <div class="portfolio-card-title">Foto Editing & Lightroom</div>
                        <p class="portfolio-card-desc">
                            Hasil editing foto dengan Adobe Lightroom — colour grading,
                            retouching, dan visual storytelling.
                        </p>
                        <a href="https://drive.google.com/drive/folders/12AxYpTLApXftxRW4LDYkHSQwJfw2sEyS"
                           target="_blank" rel="noopener"
                           class="portfolio-card-link">
                            Lihat Karya
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- KARYA 6: CV / Dokumen --}}
            <div class="col-lg-4 col-md-6 reveal" style="transition-delay:.18s;">
                <div class="portfolio-card">
                    <div class="portfolio-card-thumb" style="background:linear-gradient(135deg,#101a10,#0a1a0a);">
                        <span style="position:relative;z-index:1;">📄</span>
                        <div class="portfolio-card-category">Dokumen</div>
                    </div>
                    <div class="portfolio-card-body">
                        <div class="portfolio-card-title">CV &amp; Portofolio Lengkap</div>
                        <p class="portfolio-card-desc">
                            Download CV dan portofolio lengkap Khansa Nadhif Shafa
                            dalam format dokumen profesional.
                        </p>
                        <a href="https://drive.google.com/drive/folders/12AxYpTLApXftxRW4LDYkHSQwJfw2sEyS"
                           target="_blank" rel="noopener"
                           class="portfolio-card-link">
                            Download CV
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="8 17 12 21 16 17"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"/></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        {{-- CTA bawah --}}
        <div class="text-center mt-5 reveal">
            <p class="mono" style="font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--smoke);margin-bottom:16px;">
                Semua file tersedia di Google Drive
            </p>
            <a href="https://drive.google.com/drive/folders/12AxYpTLApXftxRW4LDYkHSQwJfw2sEyS"
               target="_blank" rel="noopener"
               class="btn-primary-custom">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                Buka Google Drive Portfolio
            </a>
        </div>

    </div>
</section>

<div class="section-divider"></div>


{{-- ===== HEAR ME OUT FM EMBED ===== --}}
<section style="padding: 80px 0;" id="broadcast">
    <div class="container">
        <div class="row g-4 align-items-start">

            <div class="col-lg-5 reveal">
                <div class="eyebrow">Featured Broadcast</div>
                <h2 class="display" style="font-size:36px;font-weight:700;margin-bottom:16px;color:var(--cream);">
                    On Air &amp; <span class="grad-text">Behind the Mic</span>
                </h2>
                <p style="font-size:14px;color:var(--smoke);line-height:1.85;max-width:380px;">
                    Terlibat dalam produksi konten broadcast dan talk show —
                    menggabungkan kemampuan audio production, voice over,
                    dan komunikasi publik dalam satu platform nyata.
                </p>
            </div>

            <div class="col-lg-7 reveal" style="transition-delay:.1s;">
                <div class="broadcast-card mb-3">
                    <img src="https://img.youtube.com/vi/kxiiZJQWmYg/mqdefault.jpg"
                         class="broadcast-thumb" alt="Hear Me Out FM">
                    <div>
                        <div style="font-family:'DM Mono',monospace;font-size:9px;letter-spacing:.15em;text-transform:uppercase;color:var(--red);margin-bottom:6px;">● Live Broadcast · Talk Show</div>
                        <div style="font-family:'Syne',sans-serif;font-weight:700;font-size:15px;color:var(--cream);margin-bottom:4px;">Hear Me Out FM — Afterhour Talk</div>
                        <div style="font-size:12px;color:var(--smoke);">Channel: mmbeyond &nbsp;·&nbsp; Live Oct 13, 2025<br>PD: Pradipta Adicandra W.</div>
                        <a href="https://www.youtube.com/live/kxiiZJQWmYg?si=2rzWYU7YyTg5-N4Y"
                           target="_blank" rel="noopener" class="broadcast-link">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                            Tonton di YouTube
                        </a>
                    </div>
                </div>
                <div style="border:1px solid rgba(232,199,106,.12);overflow:hidden;aspect-ratio:16/9;position:relative;">
                    <iframe src="https://www.youtube.com/embed/kxiiZJQWmYg"
                            title="Hear Me Out FM" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            style="position:absolute;inset:0;width:100%;height:100%;"></iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="section-divider"></div>


{{-- ===== TENTANG SAYA ===== --}}
<section id="tentang" style="padding: 80px 0; background: var(--ink2);">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-lg-6 reveal">
                <div class="eyebrow">Tentang Saya</div>
                <h2 class="display" style="font-size:40px;font-weight:700;margin-bottom:24px;color:var(--cream);">
                    Siapa <span class="grad-text">Saya?</span>
                </h2>
                <p style="font-size:14.5px;color:var(--smoke);line-height:1.9;margin-bottom:20px;">
                    Saya adalah seorang <strong style="color:var(--cream);">creative multitasker</strong>
                    yang terampil dalam bidang multimedia — dari mengedit video,
                    mendesain grafis, merekam suara, hingga berbicara di depan publik.
                </p>
                <p style="font-size:14.5px;color:var(--smoke);line-height:1.9;">
                    Dengan pengalaman nyata di berbagai bidang kerja, saya memahami
                    dunia komunikasi dari berbagai sudut pandang. Saya percaya
                    kreativitas yang kuat harus didukung oleh kemampuan teknis
                    yang mumpuni.
                </p>
            </div>

            <div class="col-lg-6 reveal" style="transition-delay:.1s;">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="display" style="font-size:40px;font-weight:700;color:var(--gold);line-height:1;">6+</div>
                            <div class="mono" style="font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke);margin-top:8px;">Software Kreatif</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="display" style="font-size:40px;font-weight:700;color:var(--gold);line-height:1;">4+</div>
                            <div class="mono" style="font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke);margin-top:8px;">Pengalaman Kerja</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="display" style="font-size:40px;font-weight:700;color:var(--gold);line-height:1;">2</div>
                            <div class="mono" style="font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke);margin-top:8px;">Bahasa Aktif</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="display" style="font-size:40px;font-weight:700;color:var(--gold);line-height:1;">5+</div>
                            <div class="mono" style="font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke);margin-top:8px;">Bidang Keahlian</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="section-divider"></div>


{{-- ===== KEAHLIAN ===== --}}
<section id="keahlian" style="padding: 80px 0;">
    <div class="container">

        <div class="eyebrow reveal">Keahlian Utama</div>
        <h2 class="display reveal" style="font-size:40px;font-weight:700;margin-bottom:48px;color:var(--cream);">
            Multimedia &amp; <span class="grad-text">Creative Skills</span>
        </h2>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6 reveal">
                <div class="skill-card">
                    <div class="skill-icon">🎨</div>
                    <div style="font-weight:700;font-size:15px;color:var(--cream);margin-bottom:10px;">Desain Grafis &amp; Ilustrasi</div>
                    <p style="font-size:12.5px;color:var(--smoke);line-height:1.75;margin-bottom:18px;">
                        Menciptakan visual yang memukau dengan Adobe Illustrator
                        &amp; Lightroom untuk branding, konten sosial media, dan materi promosi.
                    </p>
                    <div class="skill-bar-wrap"><div class="skill-bar" style="width:85%"></div></div>
                    <div class="mono" style="font-size:10px;color:rgba(232,199,106,.6);text-align:right;margin-top:8px;">Adobe Illustrator · Lightroom</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 reveal" style="transition-delay:.05s;">
                <div class="skill-card">
                    <div class="skill-icon">🎬</div>
                    <div style="font-weight:700;font-size:15px;color:var(--cream);margin-bottom:10px;">Video Editing &amp; Motion</div>
                    <p style="font-size:12.5px;color:var(--smoke);line-height:1.75;margin-bottom:18px;">
                        Memproduksi konten video berkualitas tinggi dengan
                        Adobe Premiere dan Adobe Animate — dari konsep hingga publish-ready.
                    </p>
                    <div class="skill-bar-wrap"><div class="skill-bar" style="width:80%"></div></div>
                    <div class="mono" style="font-size:10px;color:rgba(232,199,106,.6);text-align:right;margin-top:8px;">Premiere Pro · Adobe Animate</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 reveal" style="transition-delay:.1s;">
                <div class="skill-card">
                    <div class="skill-icon">🎙️</div>
                    <div style="font-weight:700;font-size:15px;color:var(--cream);margin-bottom:10px;">Voice Over &amp; Audio Production</div>
                    <p style="font-size:12.5px;color:var(--smoke);line-height:1.75;margin-bottom:18px;">
                        Suara profesional dengan teknik rekam dan edit audio
                        menggunakan Adobe Audition — narasi, dubbing, dan podcast.
                    </p>
                    <div class="skill-bar-wrap"><div class="skill-bar" style="width:88%"></div></div>
                    <div class="mono" style="font-size:10px;color:rgba(232,199,106,.6);text-align:right;margin-top:8px;">Adobe Audition · Voice Over</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 reveal" style="transition-delay:.05s;">
                <div class="skill-card">
                    <div class="skill-icon">🎤</div>
                    <div style="font-weight:700;font-size:15px;color:var(--cream);margin-bottom:10px;">Public Speaking</div>
                    <p style="font-size:12.5px;color:var(--smoke);line-height:1.75;margin-bottom:18px;">
                        Kemampuan berbicara di depan umum yang percaya diri —
                        presentasi, MC, dan komunikasi publik dalam Bahasa Indonesia &amp; Inggris aktif.
                    </p>
                    <div class="skill-bar-wrap"><div class="skill-bar" style="width:90%"></div></div>
                    <div class="mono" style="font-size:10px;color:rgba(232,199,106,.6);text-align:right;margin-top:8px;">Presentasi · Bilingual</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 reveal" style="transition-delay:.1s;">
                <div class="skill-card">
                    <div class="skill-icon">💼</div>
                    <div style="font-weight:700;font-size:15px;color:var(--cream);margin-bottom:10px;">Microsoft Office Suite</div>
                    <p style="font-size:12.5px;color:var(--smoke);line-height:1.75;margin-bottom:18px;">
                        Menyusun laporan profesional dan data administratif
                        menggunakan Word &amp; Excel dengan presisi dan efisiensi tinggi.
                    </p>
                    <div class="skill-bar-wrap"><div class="skill-bar" style="width:85%"></div></div>
                    <div class="mono" style="font-size:10px;color:rgba(232,199,106,.6);text-align:right;margin-top:8px;">Word · Excel</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 reveal" style="transition-delay:.15s;">
                <div class="skill-card">
                    <div class="skill-icon">🌐</div>
                    <div style="font-weight:700;font-size:15px;color:var(--cream);margin-bottom:10px;">Komunikasi Bahasa Inggris</div>
                    <p style="font-size:12.5px;color:var(--smoke);line-height:1.75;margin-bottom:18px;">
                        Inggris Aktif — mampu berkomunikasi, menulis konten,
                        dan berkorespondensi profesional secara lancar.
                    </p>
                    <div class="skill-bar-wrap"><div class="skill-bar" style="width:82%"></div></div>
                    <div class="mono" style="font-size:10px;color:rgba(232,199,106,.6);text-align:right;margin-top:8px;">Speaking · Writing · Reading</div>
                </div>
            </div>

        </div>

        <div style="margin-top:48px;padding-top:32px;border-top:1px solid rgba(255,255,255,.06);" class="reveal">
            <div class="mono" style="font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--smoke);margin-bottom:14px;">Tools yang Dikuasai:</div>
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

<div class="section-divider"></div>


{{-- ===== PENDIDIKAN & PENGALAMAN ===== --}}
<section style="padding: 80px 0; background: var(--ink2);">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-6 reveal" id="pendidikan">
                <div class="eyebrow">Riwayat</div>
                <h2 class="display" style="font-size:32px;font-weight:700;margin-bottom:40px;color:var(--cream);">
                    Pendidikan
                </h2>
                <div class="timeline-wrap">
                    <div class="timeline-item">
                        <div class="tl-year">2024 – Sekarang</div>
                        <div class="tl-title">Politeknik Elektronika Negeri Surabaya</div>
                        <div class="tl-sub">Program Aktif · Multimedia Broadcasting</div>
                    </div>
                    <div class="timeline-item">
                        <div class="tl-year">2020 – 2023</div>
                        <div class="tl-title">SMA Negeri 2 Pare</div>
                        <div class="tl-sub">Sekolah Menengah Atas</div>
                    </div>
                    <div class="timeline-item">
                        <div class="tl-year">2017 – 2020</div>
                        <div class="tl-title">SMP Negeri 2 Pare</div>
                        <div class="tl-sub">Sekolah Menengah Pertama</div>
                    </div>
                    <div class="timeline-item">
                        <div class="tl-year">2011 – 2017</div>
                        <div class="tl-title">SD Negeri Pare 1</div>
                        <div class="tl-sub">Sekolah Dasar</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 reveal" id="pengalaman" style="transition-delay:.1s;">
                <div class="eyebrow">Organisasi &amp; Kerja</div>
                <h2 class="display" style="font-size:32px;font-weight:700;margin-bottom:40px;color:var(--cream);">
                    Pengalaman
                </h2>
                <div class="timeline-wrap">
                    <div class="timeline-item">
                        <div class="tl-year">2024 – 2025</div>
                        <div class="tl-title">Anggota Sahabat Bahasa</div>
                        <div class="tl-sub">Politeknik Elektronika Negeri Surabaya</div>
                    </div>
                    <div class="timeline-item">
                        <div class="tl-year">Pengalaman Kerja</div>
                        <div class="tl-title">Barista &amp; Editor — d'Goda Pare</div>
                        <div class="tl-sub">Barista · Konten Visual · Video Editing</div>
                    </div>
                    <div class="timeline-item">
                        <div class="tl-year">Pengalaman Kerja</div>
                        <div class="tl-title">Telemarketing — CV Putra Mustika</div>
                        <div class="tl-sub">Komunikasi &amp; Sales</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="section-divider"></div>


{{-- ===== KONTAK ===== --}}
<section id="kontak" style="padding: 80px 0;">
    <div class="container">
        <div class="row g-5 align-items-start">

            <div class="col-lg-5 reveal">
                <div class="eyebrow">Get In Touch</div>
                <h2 class="display" style="font-size:40px;font-weight:700;margin-bottom:20px;color:var(--cream);">
                    Hubungi <span class="grad-text">Saya</span>
                </h2>
                <p style="font-size:14px;color:var(--smoke);line-height:1.85;margin-bottom:32px;">
                    Tertarik berkolaborasi atau memiliki project multimedia?
                    Saya terbuka untuk kesempatan kerja sama, freelance, maupun diskusi kreatif.
                </p>
                <div style="display:flex;flex-direction:column;gap:14px;">
                    <div style="display:flex;align-items:center;gap:14px;padding:14px 18px;
                                 border:1px solid rgba(255,255,255,.07);background:rgba(255,255,255,.02);">
                        <span style="font-size:18px;">✉️</span>
                        <div>
                            <div class="mono" style="font-size:9px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke);">Email</div>
                            <div style="font-size:13px;color:var(--cream);margin-top:2px;">khansa.nadhif@student.pens.ac.id</div>
                        </div>
                    </div>
                    <div style="display:flex;align-items:center;gap:14px;padding:14px 18px;
                                 border:1px solid rgba(255,255,255,.07);background:rgba(255,255,255,.02);">
                        <span style="font-size:18px;">📍</span>
                        <div>
                            <div class="mono" style="font-size:9px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke);">Lokasi</div>
                            <div style="font-size:13px;color:var(--cream);margin-top:2px;">Surabaya, Jawa Timur</div>
                        </div>
                    </div>
                    <div style="display:flex;align-items:center;gap:14px;padding:14px 18px;
                                 border:1px solid rgba(255,255,255,.07);background:rgba(255,255,255,.02);">
                        <span style="font-size:18px;">📁</span>
                        <div>
                            <div class="mono" style="font-size:9px;letter-spacing:.1em;text-transform:uppercase;color:var(--smoke);">Portfolio Drive</div>
                            <a href="https://drive.google.com/drive/folders/12AxYpTLApXftxRW4LDYkHSQwJfw2sEyS"
                               target="_blank" rel="noopener"
                               style="font-size:13px;color:var(--gold);margin-top:2px;display:block;text-decoration:none;">
                               CV &amp; Portofolio Lengkap →
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 reveal" style="transition-delay:.1s;">
                <form style="display:flex;flex-direction:column;gap:20px;" action="#" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="contact-label">Nama</label>
                            <input type="text" name="nama" class="contact-input" placeholder="Nama Anda">
                        </div>
                        <div class="col-md-6">
                            <label class="contact-label">Email</label>
                            <input type="email" name="email" class="contact-input" placeholder="email@example.com">
                        </div>
                    </div>
                    <div>
                        <label class="contact-label">Subjek</label>
                        <input type="text" name="subjek" class="contact-input" placeholder="Perihal pesan Anda">
                    </div>
                    <div>
                        <label class="contact-label">Pesan</label>
                        <textarea name="pesan" rows="5" class="contact-input" placeholder="Ceritakan project atau ide Anda..."></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn-primary-custom">
                            Kirim Pesan
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


{{-- ===== FOOTER ===== --}}
<footer style="background:var(--ink);padding:28px 0;border-top:1px solid rgba(232,199,106,.1);">
    <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
        <div class="mono" style="font-size:10px;letter-spacing:.08em;text-transform:uppercase;color:var(--smoke);">
            © 2026 Khansa Nadhif Shafa · Multimedia Creative
        </div>
        <a href="https://drive.google.com/drive/folders/12AxYpTLApXftxRW4LDYkHSQwJfw2sEyS"
           target="_blank" rel="noopener"
           class="mono" style="font-size:10px;letter-spacing:.08em;text-transform:uppercase;
                                color:var(--gold);text-decoration:none;opacity:.7;transition:opacity .2s;"
           onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=.7">
            Portfolio Drive →
        </a>
    </div>
</footer>


{{-- ===== SCROLL REVEAL ===== --}}
<script>
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
        });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
</script>

@endsection