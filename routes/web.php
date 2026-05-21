<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - {{ $nama }}</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:#f4f4f4;
            padding:30px;
        }

        .cv-container{
            max-width:900px;
            margin:auto;
            background:white;
            display:grid;
            grid-template-columns:300px 1fr;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        /* SIDEBAR */
        .sidebar{
            background:#2c3e50;
            color:white;
            padding:30px;
        }

        .profile{
            text-align:center;
            margin-bottom:30px;
        }

        .profile img{
            width:120px;
            height:120px;
            border-radius:50%;
            border:4px solid white;
            margin-bottom:15px;
        }

        .box{
            border:2px solid rgba(255,255,255,0.3);
            padding:15px;
            margin-bottom:20px;
            border-radius:10px;
        }

        .box h3{
            margin-bottom:10px;
            border-bottom:1px solid white;
            padding-bottom:5px;
        }

        .box p{
            margin:8px 0;
            font-size:14px;
        }

        /* CONTENT */
        .content{
            padding:30px;
        }

        .section{
            border:2px solid #ddd;
            padding:20px;
            margin-bottom:20px;
            border-radius:10px;
        }

        .section h2{
            color:#2c3e50;
            margin-bottom:15px;
        }

        .item{
            margin-bottom:15px;
        }

        .item h4{
            color:#34495e;
        }

        .item p{
            margin-top:5px;
            color:#555;
        }

        ul{
            padding-left:20px;
        }

        li{
            margin-bottom:8px;
        }
    </style>
</head>
<body>

<div class="cv-container">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="profile">
            <img src="{{ asset('images/profile.jpg') }}" alt="Foto">
            <h2> Khansa Nadhif Shafa</h2>
            <p>Mahasiswa Teknologi Multimedia & Broadcasting</p>
        </div>

        <div class="box">
            <h3>Kontak</h3>
            <p>📧 nadhifshafa20@gmail.com</p>
            <p>📱 089524964274</p>
            <p>📍 Surabaya Indonesia</p>
        </div>

        <div class="box">
            <h3>Skill</h3>
            <p>✔ HTML & CSS</p>
            <p>✔ Laravel</p>
            <p>✔ Desain Grafis</p>
            <p>✔ Editing Video</p>
        </div>

        <div class="box">
            <h3>Bahasa</h3>
            <p>Indonesia</p>
            <p>English</p>
        </div>

    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="section">
            <h2>Tentang Saya</h2>
            <p>
                Saya adalah mahasiswa Multimedia dan Broadcasting yang
                memiliki minat pada desain, web development, dan editing video.
            </p>
        </div>

        <div class="section">
            <h2>Pendidikan</h2>

            <div class="item">
                <h4>Politeknik Elektronika Negeri Surabaya</h4>
                <p>D4 Multimedia Broadcasting (2024 - Sekarang)</p>
            </div>

        </div>

        <div class="section">
            <h2>Pengalaman</h2>

            <div class="item">
                <h4>Freelance Design</h4>
                <p>Membuat desain poster, banner, dan konten media sosial.</p>
            </div>

            <div class="item">
                <h4>Video Editing</h4>
                <p>Mengedit video cinematic dan konten TikTok/Instagram.</p>
            </div>

        </div>

        <div class="section">
            <h2>Hobi</h2>

            <ul>
                <li>Photography</li>
                <li>Traveling</li>
                <li>Editing Video</li>
                <li>Music</li>
            </ul>

        </div>

    </div>

</div>

</body>
</html>