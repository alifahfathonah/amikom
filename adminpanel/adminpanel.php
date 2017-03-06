<?php
include "session.php";
include "../librari/koneksi.php";
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../img/amikom.png">
        <link rel="stylesheet" href="../css/adminpanel.css">
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="stylesheet" href="../css/mobile.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Electrolize|Source+Sans+Pro:400,700" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.1/SmoothScroll.min.js"></script>
        <title>Admin Panel</title>
    </head>

    <body>
        <div class="background-wrapper"></div>
        <div class="top-bar">
            <svg id="i-export" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M28 22 L28 30 4 30 4 22 M16 4 L16 24 M8 12 L16 4 24 12" /> </svg> <a href="logout.php">LOGOUT</a> </div>
        <aside class="left-side">
            <center> <img src="../img/amikom.png"></center>
            <h1>Admin Panel</h1>
            <ul id="admin-nav">
                <li>
                    <a id="tab1" href="#">
                        <svg id="i-home" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#c99650" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M12 20 L12 30 4 30 4 12 16 2 28 12 28 30 20 30 20 20 Z" /> </svg> Home</a>
                </li>
                <li>
                    <a id="tab2" href="#">
                        <svg id="i-compose" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#c99650" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M27 15 L27 30 2 30 2 5 17 5 M30 6 L26 2 9 19 7 25 13 23 Z M22 6 L26 10 Z M9 19 L13 23 Z" /> </svg> Buat Artikel</a>
                </li>
                <li>
                    <a id="tab3" href="#">
                        <svg id="i-edit" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#c99650" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M30 7 L25 2 5 22 3 29 10 27 Z M21 6 L26 11 Z M5 22 L10 27 Z" /> </svg> Edit Artikel</a>
                </li>
                <li>
                    <a id="tab4" href="#">
                        <svg id="i-lock" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#c99650" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M5 15 L5 30 27 30 27 15 Z M9 15 C9 9 9 5 16 5 23 5 23 9 23 15 M16 20 L16 23" />
                            <circle cx="16" cy="24" r="1" /> </svg> Edit Password</a>
                </li>
            </ul>
            <br>
             <a style="padding:20px;text-decoration:none;color:#000;
                    font-size:20px;font-weight:bold;" href="lihatdata.php" target="_blank">
                        <svg id="i-eye" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#c99650" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <circle cx="17" cy="15" r="1" />
                            <circle cx="16" cy="16" r="6" />
                            <path d="M2 16 C2 16 7 6 16 6 25 6 30 16 30 16 30 16 25 26 16 26 7 26 2 16 2 16 Z" /> </svg> Lihat Data
            </a>
        </aside>
        <main class="wrapper">
            <div class="container" id="tab1C">
                <h1>Selamat Datang</h1>
                <p>Selamat datang di Admin Panel! Disini Anda bisa mengubah, mengedit, menghapus data yang terdapat pada halaman ini. Menu disamping akan secara otomatis menampilkan halaman yang dituju berdasarkan kategori.</p>
            </div>
            <div class="container" id="tab2C">
                <h1>Buat Artikel</h1>
                <form action="artnewsave.php" method="post" name="form1" target="_self">
                    <table cellpadding="2" cellspacing="20" border="0">
                        <tr>
                            <td class="kiri-art">Judul</td>
                            <td>
                                <input name="txtjudul" type="text" size="59" maxlength="100" /> </td>
                        </tr>
                        <tr>
                            <td class="kiri-art">Headline</td>
                            <td>
                                <textarea name="txtheadline" cols="45" rows="2" maxlength="100"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="kiri-art">Isi Artikel</td>
                            <td>
                                <textarea name="txtisiartikel" cols="45" rows="4"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="kiri-art">Pengirim</td>
                            <td>
                                <input name="txtpengirim" type="text" size="15" maxlength="25" /> </td>
                        </tr>
                        <tr>
                            <td class="kiri-art">&nbsp;</td>
                            <td>
                                <input type="submit" name="submit" value="SIMPAN" /> </tr>
                    </table>
                </form>
            </div>
            <div class="container" id="tab3C">
                <h1>List Data Artikel</h1>
                <table style="color:#fff;border-collapse:collapse; border-color:white;" width="100%" border="2" cellpadding="20" cellspacing="3">
                    <tr>
                        <td style="padding:20px;" width="24">No</td>
                        <td style="padding:20px;" width="303">Judul Artikel</td>
                        <td style="padding:20px;" width="112">Pengirim</td>
                        <td style="padding:20px;" width="150" align="center">Menu</td>
                    </tr>
                    <?php
	include "../librari/koneksi.php";
	$no="";
	$sqlTampil = "SELECT * FROM artikel ORDER BY id";
	$qryTampil = mysql_query($sqlTampil, $koneksi) 
				 or die ("Gagal query".mysql_error());
				 
	while($dataTampil=mysql_fetch_array($qryTampil)) {
	$no++;
	?>
                        <tr>
                            <td style="padding:20px;">
                                <?php echo $no ?>
                            </td>
                            <td style="padding:20px;">
                                <?php echo $dataTampil['judul']; ?>
                            </td>
                            <td style="padding:20px;">
                                <?php echo $dataTampil['pengirim']; ?>
                            </td>
                            <td align="center"> <a class="btn-edit" href="artedit.php?id=<?php echo $dataTampil['id']; ?>" target="_self">Ubah</a> <a class="btn-edit" href="artdelete.php?id=<?php echo $dataTampil['id']; ?>" target="_self">Hapus</a> </td>
                        </tr>
                        <?php } ?>
                </table>
            </div>
            <div class="container" id="tab4C">
                <h1>Edit Password</h1>
                <form action="admteditsave.php" method="post" name="form1" target="_self">
                    <table width="800" border="0" cellpadding="20" cellspacing="3">
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="kiri-art">Password Lama</td>
                            <td>
                                <input name="txtPassLama" type="password" size="30" maxlength="30"> </td>
                        </tr>
                        <tr>
                            <td class="kiri-art">Password Baru</td>
                            <td>
                                <input name="txtPassBaru" type="password" size="30" maxlength="30"> </td>
                        </tr>
                        <tr>
                            <td class="kiri-art">Ketik Ulang</td>
                            <td>
                                <input name="txtPassBaru2" type="password" size="30" maxlength="30"> </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <input type="submit" name="Submit" value="SUBMIT"> </td>
                        </tr>
                    </table>
                </form>
            </div>
        </main>
        <script src="../jquery-2.2.0.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#admin-nav li a:not(:first)').addClass('inactive');
                $('.container').hide();
                $('.container:first').show();
                $('#admin-nav a').click(function () {
                    var t = $(this).attr('id');
                    if ($(this).hasClass('inactive')) {
                        $('#admin-nav li a').addClass('inactive');
                        $(this).removeClass('inactive');
                        $('.container').hide();
                        $('#' + t + 'C').fadeIn('slow');
                    }
                    return false;
                });
            });
        </script>
    </body>

    </html>