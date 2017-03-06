<?php 
include "librari/koneksi.php"; 
?>
    <!DOCTYPE html>
    <html>
    <!-------

         _______  __    __   __  ___  ___   __    _____  
        |   ____||  |  |  | |  |/  / |  |  |  |  /  __  \  
        |  |__   |  |  |  | |  '  /  |  |  |  | |  |  |  |
        |   __|  |  |  |  | |    <   |  |  |  | |  |  |  |
        |  |     |  `--'  | |  .  \  |  `--'  | |  `--'  |
        |__|      \______/  |__|\__\  \______/   \______/  


                    STMIK AMIKOM PURWOKERTO


-------->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>STMIK AMIKOM Purwokerto</title>
        <link rel="icon" href="img/amikom.png">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/mobile.css">
        <link rel="stylesheet" href="normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Electrolize|Source+Sans+Pro:400,700" rel="stylesheet">
        <script src="jquery-2.2.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.1/SmoothScroll.min.js"></script>
        <script>
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('jam').innerHTML = h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i
                }; // add zero in front of numbers < 10
                return i;
            }
        </script>
    </head>

    <body onload="startTime()">
        <nav class="main-nav">
            <div class="second-nav">
                <div class="language-option">
                    <svg xmlns="http://www.w3.org/2000/svg" height="480" width="640" viewBox="0 0 640 480">
                        <g fill-rule="evenodd" stroke-width="5pt" stroke="#222">
                            <path fill="#e70011" d="M0 0h639.958v248.947H0z" />
                            <path fill="#fff" d="M0 240h639.958v240H0z" /> </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="480" width="640" viewBox="0 0 640 480">
                        <g fill-rule="evenodd" transform="scale(.9375)">
                            <g stroke-width="1pt">
                                <path d="M0 0h972.81v39.385H0zm0 78.77h972.81v39.385H0zm0 78.77h972.81v39.385H0zm0 78.77h972.81v39.385H0zm0 78.77h972.81v39.385H0zm0 78.77h972.81v39.385H0zm0 78.77h972.81v39.385H0z" fill="#bd3d44" />
                                <path d="M0 39.385h972.81V78.77H0zm0 78.77h972.81v39.385H0zm0 78.77h972.81v39.385H0zm0 78.77h972.81v39.385H0zm0 78.77h972.81v39.385H0zm0 78.77h972.81v39.385H0z" fill="#fff" /> </g>
                            <path fill="#192f5d" d="M0 0h389.12v275.69H0z" />
                            <g fill="#fff">
                                <path d="M32.427 11.8l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735h11.457zm64.853 0l3.541 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735H93.74zm64.856 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.269-6.734-9.269 6.734 3.54-10.896-9.269-6.735h11.458zm64.852 0l3.54 10.896h11.457l-9.269 6.735 3.54 10.896-9.268-6.734-9.27 6.734 3.541-10.896-9.27-6.735h11.458zm64.855 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735h11.457zm64.855 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.269-6.734-9.27 6.734 3.542-10.896-9.27-6.735h11.458zM64.855 39.37l3.54 10.896h11.458L70.583 57l3.542 10.897-9.27-6.734-9.269 6.734L59.126 57l-9.269-6.734h11.458zm64.852 0l3.54 10.896h11.457L135.435 57l3.54 10.897-9.268-6.734-9.27 6.734L123.978 57l-9.27-6.734h11.458zm64.855 0l3.54 10.896h11.458L200.29 57l3.541 10.897-9.27-6.734-9.268 6.734L188.833 57l-9.269-6.734h11.457zm64.855 0l3.54 10.896h11.458L265.145 57l3.541 10.897-9.269-6.734-9.27 6.734L253.69 57l-9.27-6.734h11.458zm64.852 0l3.54 10.896h11.457L329.997 57l3.54 10.897-9.268-6.734-9.27 6.734L318.54 57l-9.27-6.734h11.458zM32.427 66.939l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735h11.457zm64.853 0l3.541 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735H93.74zm64.856 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.269-6.734-9.269 6.734 3.54-10.896-9.269-6.735h11.458zm64.852 0l3.54 10.896h11.457l-9.269 6.735 3.54 10.896-9.268-6.734-9.27 6.734 3.541-10.896-9.27-6.735h11.458zm64.855 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735h11.457zm64.855 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.269-6.734-9.27 6.734 3.542-10.896-9.27-6.735h11.458zM64.855 94.508l3.54 10.897h11.458l-9.27 6.734 3.542 10.897-9.27-6.734-9.269 6.734 3.54-10.897-9.269-6.734h11.458zm64.852 0l3.54 10.897h11.457l-9.269 6.734 3.54 10.897-9.268-6.734-9.27 6.734 3.541-10.897-9.27-6.734h11.458zm64.855 0l3.54 10.897h11.458l-9.27 6.734 3.541 10.897-9.27-6.734-9.268 6.734 3.54-10.897-9.269-6.734h11.457zm64.855 0l3.54 10.897h11.458l-9.27 6.734 3.541 10.897-9.269-6.734-9.27 6.734 3.542-10.897-9.27-6.734h11.458zm64.852 0l3.54 10.897h11.457l-9.269 6.734 3.54 10.897-9.268-6.734-9.27 6.734 3.541-10.897-9.27-6.734h11.458zM32.427 122.078l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735h11.457zm64.853 0l3.541 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735H93.74zm64.856 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.269-6.734-9.269 6.734 3.54-10.896-9.269-6.735h11.458zm64.852 0l3.54 10.896h11.457l-9.269 6.735 3.54 10.896-9.268-6.734-9.27 6.734 3.541-10.896-9.27-6.735h11.458zm64.855 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735h11.457zm64.855 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.269-6.734-9.27 6.734 3.542-10.896-9.27-6.735h11.458zM64.855 149.647l3.54 10.897h11.458l-9.27 6.734 3.542 10.897-9.27-6.734-9.269 6.734 3.54-10.897-9.269-6.734h11.458zm64.852 0l3.54 10.897h11.457l-9.269 6.734 3.54 10.897-9.268-6.734-9.27 6.734 3.541-10.897-9.27-6.734h11.458zm64.855 0l3.54 10.897h11.458l-9.27 6.734 3.541 10.897-9.27-6.734-9.268 6.734 3.54-10.897-9.269-6.734h11.457zm64.855 0l3.54 10.897h11.458l-9.27 6.734 3.541 10.897-9.269-6.734-9.27 6.734 3.542-10.897-9.27-6.734h11.458zm64.852 0l3.54 10.897h11.457l-9.269 6.734 3.54 10.897-9.268-6.734-9.27 6.734 3.541-10.897-9.27-6.734h11.458z" />
                                <g>
                                    <path d="M32.427 177.217l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735h11.457zm64.853 0l3.541 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735H93.74zm64.856 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.269-6.734-9.269 6.734 3.54-10.896-9.269-6.735h11.458zm64.852 0l3.54 10.896h11.457l-9.269 6.735 3.54 10.896-9.268-6.734-9.27 6.734 3.541-10.896-9.27-6.735h11.458zm64.855 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735h11.457zm64.855 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.269-6.734-9.27 6.734 3.542-10.896-9.27-6.735h11.458zM64.855 204.786l3.54 10.897h11.458l-9.27 6.734 3.542 10.897-9.27-6.734-9.269 6.734 3.54-10.897-9.269-6.734h11.458zm64.852 0l3.54 10.897h11.457l-9.269 6.734 3.54 10.897-9.268-6.734-9.27 6.734 3.541-10.897-9.27-6.734h11.458zm64.855 0l3.54 10.897h11.458l-9.27 6.734 3.541 10.897-9.27-6.734-9.268 6.734 3.54-10.897-9.269-6.734h11.457zm64.855 0l3.54 10.897h11.458l-9.27 6.734 3.541 10.897-9.269-6.734-9.27 6.734 3.542-10.897-9.27-6.734h11.458zm64.852 0l3.54 10.897h11.457l-9.269 6.734 3.54 10.897-9.268-6.734-9.27 6.734 3.541-10.897-9.27-6.734h11.458z" /> </g>
                                <g>
                                    <path d="M32.427 232.356l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735h11.457zm64.853 0l3.541 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735H93.74zm64.856 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.269-6.734-9.269 6.734 3.54-10.896-9.269-6.735h11.458zm64.852 0l3.54 10.896h11.457l-9.269 6.735 3.54 10.896-9.268-6.734-9.27 6.734 3.541-10.896-9.27-6.735h11.458zm64.855 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.27-6.734-9.268 6.734 3.54-10.896-9.269-6.735h11.457zm64.855 0l3.54 10.896h11.458l-9.27 6.735 3.541 10.896-9.269-6.734-9.27 6.734 3.542-10.896-9.27-6.735h11.458z" /> </g>
                            </g>
                        </g>
                    </svg>
                </div> <img src="img/amikom.jpg">
                <h2>STMIK AMIKOM PURWOKERTO</h2> </div>
            <ul>
                <li>
                    <a href="index.php">
                        <svg id="i-home" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#c99650" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M12 20 L12 30 4 30 4 12 16 2 28 12 28 30 20 30 20 20 Z" /> </svg> HOME</a>
                </li>
                <li class="profile-more">
                    <a>
                        <svg id="i-user" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#c99650" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" /> </svg> PROFILE
                        <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M30 12 L16 24 2 12" /> </svg>
                    </a>
                    <ul class="profile-nav">
                        <li><a href="http://www.amikompurwokerto.ac.id/page/id/menu/sambutan_ketua">Sambutan Ketua</a></li>
                        <li><a href="http://www.amikompurwokerto.ac.id/page/id/menu/sejarah">Sejarah</a></li>
                        <li><a href="http://www.amikompurwokerto.ac.id/page/id/menu/visi_misi">Visi dan Misi</a></li>
                        <li><a href="http://www.amikompurwokerto.ac.id/page/id/menu/makna_lambang">Makna Lambang</a></li>
                        <li><a href="http://www.amikompurwokerto.ac.id/page/id/menu/peta_kampus">Peta Kampus</a></li>
                        <li><a href="http://www.amikompurwokerto.ac.id/page/id/menu/himne_amikom">Himne</a></li>
                    </ul>
                </li>
                <li class="akademik-more">
                    <a>
                        <svg id="i-info" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#c99650" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M16 14 L16 23 M16 8 L16 10" />
                            <circle cx="16" cy="16" r="14" /> </svg> AKADEMIK
                        <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M30 12 L16 24 2 12" /> </svg>
                    </a>
                    <ul class="akademik-nav">
                        <li><a href="http://www.amikompurwokerto.ac.id/page/id/program_sarjana/55201/TEKNIK-INFORMATIKA">Teknik Informatika</a></li>
                        <li><a href="http://www.amikompurwokerto.ac.id/page/id/program_sarjana/55701/SISTEM-INFORMASI">Sistem Informasi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="pendaftaran.php">
                        <svg id="i-book" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#c99650" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M16 7 C16 7 9 1 2 6 L2 28 C9 23 16 28 16 28 16 28 23 23 30 28 L30 6 C23 1 16 7 16 7 Z M16 7 L16 28" /> </svg> PMB</a>
                </li>
                <li>
                    <a href="kontak.php">
                        <svg id="i-mail" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#c99650" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M2 26 L30 26 30 6 2 6 Z M2 6 L16 16 30 6" /> </svg> KONTAK KAMI</a>
                </li>
            </ul>
            <input class="search-b" type="search" name="search" placeholder="Search..">
            <a class="login-btn" href="adminpanel/login.php">
                <svg id="i-import" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                    <path d="M28 22 L28 30 4 30 4 22 M16 4 L16 24 M8 16 L16 24 24 16" /> </svg> Login</a>
        </nav>
        <main id="wrapper" role="main">
            <header class="main-header">
                <div id="slider">
                    <div class="slide">
                        <div class="slide-copy">
                            <h2>STMIK AMIKOM Purwokerto</h2> </div> <img src="img/amikom2.jpg"> </div>
                    <div class="slide">
                        <div class="slide-copy">
                            <h2>Pepe — Peyang Penjol</h2> </div> <img src="img/pepe.png"> </div>
                    <div class="slide">
                        <div class="slide-copy">
                            <h2>ABC — Aku Bukan Copet</h2> </div> <img src="img/abc.jpg"> </div>
                    <div class="slide">
                        <div class="slide-copy">
                            <h2>Bawor Adventure</h2> </div> <img src="img/bawor.png"> </div>
                </div>
                <a class="prevSlide">
                    <svg id="i-chevron-left" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                        <path d="M20 30 L8 16 20 2" /> </svg>
                </a>
                <a class="nextSlide">
                    <svg id="i-chevron-right" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                        <path d="M12 30 L24 16 12 2" /> </svg>
                </a>
            </header>
            <section class="division-sect-top">
                <div class="box-larger">
                    <ul>
                        <li><a href="http://dosen.amikompurwokerto.ac.id">Dosen</a></li>
                        <li><a href="http://elearning.amikompurwokerto.ac.id">E-learning</a></li>
                        <li><a href="http://student.amikompurwokerto.ac.id">Student</a></li>
                        <li><a href="#">Alumni</a></li>
                        <li><a href="krs.amikompurwokerto.ac.id">KRS</a></li>
                        <li><a href="#">Mitra</a></li>
                        <li><a href="#">Pusat Karir</a></li>
                        <li><a href="#">Online Publication</a></li>
                    </ul>
                </div>
            </section>
            <section class="division-article">
                <aside class="news">
                    <svg id="i-clock" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                        <circle cx="16" cy="16" r="14" />
                        <path d="M16 8 L16 16 20 20" /> </svg>
                    <div id="jam"></div>
                    <div class="body_aside">
                        <h2>Info Kampus</h2>
                        <ul>
                            <li><a style="color:#000;" href="http://www.amikompurwokerto.ac.id/page/id/detailpengumuman/661">Pengumuman Hasil Seleksi Tahap I Calon Karyawan STMIK AMIKOM Purwokerto Tahun 2017</a></li>
                            <li><a style="color:#000;" href="http://www.amikompurwokerto.ac.id/page/id/detailpengumuman/660">Pelatihan Sertifikasi Bahasa Inggris</a></li>
                            <li>DAFTAR TAGIHAN PEMBAYARAN SPP SEMESTER GENAP TAHUN 2016/2017 PRODI SISTEM INFORMASI</li>
                            <li>DAFTAR TAGIHAN PEMBAYARAN SPP SEMESTER GENAP TAHUN 2016/2017 PRODI TEKNIK INFORMATIKA</li>
                        </ul>
                    </div> <a href="#" class="more-button">
                    Lihat berita sebelumnya <svg id="i-chevron-right" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
                </a> </aside>
                <article class="post">
                    <h1>Arsip info kampus</h1>
                    <ul type="square" style="padding-left:20px;">
                        <li> <a href="http://elearning.amikompurwokerto.ac.id/index.php/materi/0615128401-SI040-1/Fandy Setyo Utomo/Agile Development" target="_blank()">
     Agile Development(<b>1562</b>)</a> <span> [Rekayasa Perangkat Lunak] (13/04/2013)</span> </li>
                        <li> <a href="http://elearning.amikompurwokerto.ac.id/index.php/materi/20.202.003-SI054-6/Giat Karyono/Arsitektur Bisnis dan Teknologi dalam pengembangan E-Commerce" target="_blank()">
     Arsitektur Bisnis dan Teknologi dalam pengembangan E-Commerce(<b>934</b>)</a> <span> [E-Commerce] (09/04/2013)</span> </li>
                        <li> <a href="http://elearning.amikompurwokerto.ac.id/index.php/materi/20.202.003-SI054-5/Giat Karyono/Transisi dan Siklus Pengembangan E-Commerce di Perusahaan" target="_blank()">
     Transisi dan Siklus Pengembangan E-Commerce di Perusahaan(<b>1349</b>)</a> <span> [E-Commerce] (05/04/2013)</span> </li>
                        <li> <a href="http://elearning.amikompurwokerto.ac.id/index.php/materi/20.202.003-SI054-4/Giat Karyono/Proses Bisnis Dalam Kerangka E-Commerce" target="_blank()">
     Proses Bisnis Dalam Kerangka E-Commerce(<b>789</b>)</a> <span> [E-Commerce] (05/04/2013)</span> </li>
                        <li> <a href="http://elearning.amikompurwokerto.ac.id/index.php/materi/20.202.003-SI054-3/Giat Karyono/Tipe Aplikasi E-Commerce" target="_blank()">
     Tipe Aplikasi E-Commerce(<b>890</b>)</a> <span> [E-Commerce] (04/04/2013)</span> </li>
                    </ul>
                    <br>
                    <h1>Arsip info berita</h1><i class="fa fa-download"></i>&nbsp; <a href="http://www.amikompurwokerto.ac.id/page/download/document_center/panduan-akademik.pdf">Panduan Akademik</a>
                    <br> <i class="fa fa-download"></i>&nbsp; <a href="http://www.amikompurwokerto.ac.id/page/download/document_center/kalendar-akademik.jpg">Kalendar Akademik 2016/2017-1</a>
                    <br> <i class="fa fa-download"></i>&nbsp; <a href="http://www.amikompurwokerto.ac.id/page/download/document_center/panduan_tugas_praktek.doc">Panduan Kerja Praktek</a>
                    <br> <i class="fa fa-download"></i>&nbsp; <a href="http://www.amikompurwokerto.ac.id/page/download/document_center/tata_cara_kp.docx">Tata Cara Pendaftaran Kerja Praktek</a>
                    <br> <i class="fa fa-download"></i>&nbsp; <a href="http://www.amikompurwokerto.ac.id/page/download/document_center/template_skripsi.docx">Template Skripsi</a>
                    <br> <i class="fa fa-download"></i>&nbsp; <a href="http://www.amikompurwokerto.ac.id/page/download/document_center/pedoman_penyusunan_skripsi.doc">Pedoman Penyusunan Skripsi</a> </article>
            </section>
            <section class="division-article-real">
                <?php     
                        $no ="";
                        $sqlTampil = "SELECT * FROM artikel ORDER BY id";
                        $qryTampil = mysql_query($sqlTampil, $koneksi)
                        or die ("Gagal query".mysql_error());
            
                        while($dataTampil = mysql_fetch_array($qryTampil)) {
                          $no++;
                        
                        ?>
                    
                    <div class="box--article">
                       <h1><?php echo "$dataTampil[judul]"; ?></h1>
                        <div class="body--article">
                            <?php @$isiartikel = mysql_real_escape_string($_POST['isiartikel']);
                            $kalimat = strtok(nl2br($dataTampil['isiartikel']), " ");
                            for ($i=1; $i<=3; $i++) {
                                echo ($kalimat);
                                echo (" "); // spasi antar kalimat
                                $kalimat = strtok(" "); // potong per kalimat
                            }
                            
                            echo "$dataTampil[headline] [....]";
                            echo "<p>";
                            echo "<a class='read-more' href='artfull.php?id=".$dataTampil['id']."'>Selengkapnya</a>";
                            ?>
                        </div>
                    </div>
                    <?php } ?>
            </section>
            <section class="division-sect">
                <div class="box">
                    <h1>5 Top Papers</h1>
                    <ul type="square" style="padding-left:20px;">
                        <li> <a href="http://elearning.amikompurwokerto.ac.id/index.php/karya/722/Giat Karyono/TEMU BALIK INFORMASI PADA DOKUMEN TEKS BERBAHASA INDONESIA METODE VECTOR SPACE RETRIEVAL MODEL" target="_blank()">
     TEMU BALIK INFORMASI PADA DOKUMEN TEKS BERBAHASA INDONESIA METODE VECTOR SPACE RETRIEVAL MODEL(<b>4211</b>)</a> </li>
                        <li> <a href="http://elearning.amikompurwokerto.ac.id/index.php/karya/721/Giat Karyono/RANCANG BANGUN SISTEM TRACER STUDY ONLINE&#10;PADA STMIK AMIKOM PURWOKERTO&#10;" target="_blank()">
     RANCANG BANGUN SISTEM TRACER STUDY ONLINE
PADA STMIK AMIKOM PURWOKERTO
(<b>1704</b>)</a> </li>
                        <li> <a href="http://elearning.amikompurwokerto.ac.id/index.php/karya/720/Fandy Setyo Utomo/Implementation Of Information Retrieval Indonesian Text Documents Using The Vector Space Model" target="_blank()">
     Implementation Of Information Retrieval Indonesian Text Documents Using The Vector Space Model(<b>788</b>)</a> </li>
                        <li> <a href="http://elearning.amikompurwokerto.ac.id/index.php/karya/719/Fandy Setyo Utomo/Technique for Order Preference by Similarity to Ideal Solution sebagai Metode Multi Attribute Decisi" target="_blank()">
     Technique for Order Preference by Similarity to Ideal Solution sebagai Metode Multi Attribute Decisi(<b>2710</b>)</a> </li>
                        <li> <a href="http://elearning.amikompurwokerto.ac.id/index.php/karya/718/Fandy Setyo Utomo/SISTEM PENDUKUNG KEPUTUSAN UNTUK PENILAIAN KINERJA KARYAWAN DENGAN METODE SIMPLE ADDITIVE WEIGHTING" target="_blank()">
     SISTEM PENDUKUNG KEPUTUSAN UNTUK PENILAIAN KINERJA KARYAWAN DENGAN METODE SIMPLE ADDITIVE WEIGHTING(<b>6314</b>)</a> </li>
                    </ul>
                </div>
                <div class="box">
                    <h1>E-learning Updates</h1>
                    <ul>
                        <li> <img src="img/faiz.jpg"><a href="#">Algoritma dan Pemrograman</a></li>
                        <li><img src="img/faiz2.jpg"><a href="#">Pemrograman Web</a></li>
                        <li><img src="img/faiz.jpg"><a href="#">Machine Learning</a></li>
                        <li><img src="img/faiz2.jpg"><a href="#">Sistem Operasi</a></li>
                        <li><img src="img/faiz.jpg"><a href="#">Jaringan Komputer</a></li>
                    </ul>
                </div>
                <div class="box">
                    <h1>Berita Terkini</h1>
                    <ul>
                        <li> <img src="img/201701100855.JPG"><a href="#">AMIKOM RAIH 1 KEJUARAAN</a></li>
                        <li><img src="img/201612231631.jpg"><a href="#">STMIK AMIKOM RAIH JUARA 3</a></li>
                        <li><img src="img/201612221557.JPG"><a href="#">PELANTIKAN SEMA DAN BEM</a></li>
                        <li><img src="img/201612191448.JPG"><a href="#">One Day Fun Day</a></li>
                    </ul>
                </div>
            </section>
            <div id="map"></div>
            <script>
                function initMap() {
                    var uluru = {
                        lat: -7.400644
                        , lng: 109.231161
                    };
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 16
                        , center: uluru
                    , });
                    var marker = new google.maps.Marker({
                        position: uluru
                        , map: map
                    });
                }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDsL0Ui1KSfAKqr9aKyLa0bPEEuKK5akY&callback=initMap">
            </script>
            <footer>
                <div class="section-footer">
                    <div class="inner-footer"> Copyright © 2017
                        <br> STMIK AMIKOM PURWOKERTO
                        <br> All Right Reserved </div>
                    <div class="inner-footer">
                        <h3>MENU</h3>
                        <ul>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">English Version</a></li>
                        </ul>
                    </div>
                    <div class="inner-footer">
                        <h3>LINKS</h3>
                        <ul>
                            <li><a href="#">University links</a></li>
                            <li><a href="#">AMPU STUDIO</a></li>
                            <li><a href="#">INTERMEDIA</a></li>
                        </ul>
                    </div>
                    <div class="inner-footer"> Jl. Letjen Pol Sumarto Watumas Purwanegara Purwokerto, Banyumas 53123
                        <br><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp; amikom@amikompurwokerto.ac.id
                        <br> <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; (0281) 623321 </div>
                </div>
                <div class="second-footer">
                    <div class="copyright-amikom"> <img src="img/amikom.png"> STMIK AMIKOM PURWOKERTO </div>
                    <div class="social-media"> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" class="backtotop">
                            <svg id="i-chevron-top" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                <path d="M30 20 L16 8 2 20" /> </svg>
                        </a>
                    </div>
                </div>
            </footer>
        </main>
        <!-- slideshow -->
        <script src="jquery-2.2.0.min.js"></script>
        <script>
            $(document).ready(function () {
                // Set Options
                var speed = 500; // Kecepatan
                var autoswitch = true; // Pergantian gambar: true
                var autoswitch_speed = 15000 // Kecepatan pergantian gambar
                $('.slide').first().addClass('active'); // Pada slider yang pertama, tambahin class '.active'
                $('.slide').hide(); // Sembunyikan semua slider terlebih dahulu
                $('.active').show(); // Nunjukkin slider yang pertama dulu
                $('.nextSlide').on('click', nextSlide);
                $('.prevSlide').on('click', prevSlide);
                if (autoswitch == true) {
                    setInterval(nextSlide, autoswitch_speed);
                }

                function nextSlide() {
                    $('.active').removeClass('active').addClass('oldActive');
                    if ($('.oldActive').is(':last-child')) {
                        $('.slide').first().addClass('active');
                    }
                    else {
                        $('.oldActive').next().addClass('active');
                    }
                    $('.oldActive').removeClass('oldActive');
                    $('.slide').fadeOut(speed);
                    $('.active').fadeIn(speed);
                }

                function prevSlide() {
                    $('.active').removeClass('active').addClass('oldActive');
                    if ($('.oldActive').is(':first-child')) {
                        $('.slide').last().addClass('active');
                    }
                    else {
                        $('.oldActive').prev().addClass('active');
                    }
                    $('.oldActive').removeClass('oldActive');
                    $('.slide').fadeOut(speed);
                    $('.active').fadeIn(speed);
                }
                return false;
                // fungsi tombol kembali ke atas halaman
                $('.backtotop').on('click', function (e) {
                    e.preventDefault();
                    $('html,body').animate({
                        scrollTop: 0
                    }, 700);
                });
            });
        </script>
    </body>

    </html>