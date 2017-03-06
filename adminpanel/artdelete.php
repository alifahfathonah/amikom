<?php
include "session.php";
include "../librari/koneksi.php";
?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../img/amikom.png">
        <title>Hapus Artikel</title>
        <style>
            .notifikasi {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: auto;
                font-size: 20px;
                font-family: 'Source Sans Pro', sans-serif;
                line-height: 170%;
                text-align: center;
                color: #fff;
                z-index: 9;
            }
            
            span.gagal-notifikasi {
                background-color: #d82323;
                border-radius: 8px;
                padding: 10px 15px;
            }
            
            span.berhasil-notifikasi {
                background-color: #2b9343;
                border-radius: 8px;
                padding: 10px 15px;
            }
            
            .background-wrapper {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background: -webkit-linear-gradient(83deg, #c99650, #894f9f);
                background: linear-gradient(83deg, #c99650, #894f9f);
            }
            
            .top-bar {
                position: absolute;
                left: 0px;
                top: 0px;
                width: auto;
                padding: 20px;
                color: #fff;
                z-index: 9;
            }
            
            .top-bar a {
                color: #fff;
                text-decoration: none;
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 22px;
            }
            
            .top-bar a svg {
                width: 25px;
                background-color: #111;
                padding: 10px 14px;
                border-radius: 100%;
                margin-right: 10px;
                vertical-align: -20px;
            }
        </style>
    </head>

    <body>
        <div class="background-wrapper"></div>
        <div class="top-bar">
            <a href="adminpanel.php">
                <svg id="i-chevron-left" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                    <path d="M20 30 L8 16 20 2" /> </svg> Kembali ke Admin Panel</a>
        </div>
        <div class="notifikasi">
            <?php
$txtIDH = $_GET['id'];

if (trim($txtIDH) == "") {
	echo "<span class='gagal-notifikasi'>Artikel gagal dihapus, coba lagi.</span>";
}

else {
	$sqlHapus = "DELETE FROM artikel WHERE id='$txtIDH'";
	mysql_query($sqlHapus, $koneksi)
	or die ("Gagal Perintah SQL". mysql_error());
	# Jika sukses
	echo "<span class='berhasil-notifikasi'>Artikelnya berhasil dihapus</span>";
}
?> </div>
    </body>

    </html>