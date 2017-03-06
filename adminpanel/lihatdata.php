<?php
include "session.php";
include "../librari/koneksi.php";
?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../img/amikom.png">
        <title>Daftar Mahasiswa</title>
        <style>
            .notifikasi {
                position: absolute;
                top: 100px;
                left: 50%;
                transform: translateX(-50%);
                width: 90%;
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
            
            .btn-edit {
                display: inline-block;
                width: 50px;
                margin-right: 2px;
                padding: 5px 10px;
                background-color: #c99650;
                color: #fff!important;
                border-radius: 5px;
                transition: 0.5s;
                text-decoration: none;
            }
            
            .btn-edit:hover {
                background-color: #111;
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
            <h1>Tabel Pendaftaran Mahasiswa</h1>
            <table width="100%" border="0" cellpadding="1">
                <?php
                        $query = "SELECT * FROM tbl_daftar_mahasiswa";
                        $hasil = mysql_query($query) or die(mysql_error());
                        
                        echo "<tr><td></td></tr>";
                        echo "<table style='font-family:Source Sans Pro;color: #000;color:#fff;font-size: calc(13px + 0.22vw);border-color:#fff;border-collapse:collapse;' width='100%' border='2' align='left' cellpadding='10' cellspacing='3'>";
                        echo "<tr><td><div align='center'>No.</div></td><td>Nama</td><td>Jenis Kelamin</td><td>Pilihan Jurusan</td>
                        <td>Tahun Ajaran</td><td>Alamat</td><td>Kota</td><td>Provinsi</td><td>Telp</td></tr>";
                        while ($data = mysql_fetch_array($hasil))
                        {
                            echo "<tr>
                            <td>".$data['id_daftar']."</td>
                            <td>".$data['nama_pendaftar']."</td>
                            <td>".$data['jns_kelamin']."</td>
                            <td>".$data['pilihan1']."<br>".$data['pilihan2']."</td>
                            <td>".$data['tahun_ajaran']."</td>
                            <td>".$data['alamat']."</td>
                            <td>".$data['kota']."</td>
                            <td>".$data['provinsi']."</td>
                            <td>".$data['telp']."</td>
                            </tr>";
                        }
                        
                        echo "</table>";
                        ?>
            </table>
        </div>
    </body>

    </html>