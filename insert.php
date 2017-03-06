
<html>

<head>
    <title>Input Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/amikom.png">
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
        <a href="pendaftaran.php">
            <svg id="i-chevron-left" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M20 30 L8 16 20 2" /> </svg> Kembali ke PMB</a>
    </div>
    <div class="notifikasi">
    <span class="berhasil-notifikasi">Data Mahasiswa berhasil di-input.</span>
    
    <table width="610" border="0" cellpadding="1" cellspacing="2">
                        <?php include "librari/koneksi.php";
                            
                        $tanggal_daftar = date("Y-m-d");
                        $nama = $_POST['nama'];
                        $jenis_kelamin = $_POST['jenis_kelamin'];
                        $pilihan1 = $_POST['pilihan1'];
                        $pilihan2 = $_POST['pilihan2'];
                        $tahun_ajaran = $_POST['tahun_ajaran'];
                        $alamat = $_POST['alamat'];
                        $kota = $_POST['kota'];
                        $provinsi = $_POST['provinsi'];
                        $telepon = $_POST['telepon'];
                        
                        $query_insert = "insert into tbl_daftar_mahasiswa(tanggal_daftar, nama_pendaftar, jns_kelamin, pilihan1, pilihan2, tahun_ajaran, alamat, kota, provinsi, telp)
                        
                        values('$tanggal_daftar', '$nama', '$jenis_kelamin', '$pilihan1', '$pilihan2', '$tahun_ajaran', '$alamat', '$kota', '$provinsi', '$telepon');";
                        
                        $insert = mysql_query($query_insert);
                        ?>
                        
                        </table>
    </div>
</body>
</html>

