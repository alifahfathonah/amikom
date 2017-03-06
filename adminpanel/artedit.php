<?php
include "session.php";
include "../librari/koneksi.php";

$editID	=	$_GET['id'];
$sqlTampil = "SELECT * FROM artikel WHERE id='$editID'";
$qryTampil = mysql_query($sqlTampil, $koneksi)
			 or die ("Gagal query".mysql_error());
$dataTampil = mysql_fetch_array($qryTampil);
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
            
            input[type="text"], textarea {
                width:500px;
                padding: 13px 15px;
                border-radius: 6px;
                outline: inherit;
                border:1px solid #fff;
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 15px;
            }
            
            input[type="submit"] {
                border:none;
                cursor: pointer;
                padding:13px 18px;
                background-color:#111;
                color:#fff;
                font-family: 'Source Sans Pro', sans-serif;
                border-radius: 6px;
                font-size: 18px;
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
            <form action="arteditsave.php" method="post" name="form1" target="_self">
                        <h3>Edit Artikel</h3>
                        <table style="border-color:white;border-collapse:collapse;" width="100%" border="0" cellpadding="20" cellspacing="2">
                            <tr>
                                <td style="font-size:22px;font-weight:bold;color:white;" width="150" align="right">Judul</td>
                                <td width="400">
                                    <input type="text" name="txtjudul" value="<?php echo $dataTampil[ 'judul'];?>" size="59" maxlength="100"/></td>
                            </tr>
                            <tr>
                                <td style="font-size:22px;font-weight:bold;color:white;" align="right">Headline</td>
                                <td>
                                    <textarea name="txtheadline" cols="45" rows="2">
                                        <?php echo $dataTampil['headline']; ?>
                                            </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:22px;font-weight:bold;color:white;" align="right">Isi Artikel</td>
                                <td>
                                    <textarea name="txtisiartikel" cols="45" rows="4">
                                        <?php echo $dataTampil['isiartikel']; ?>
                                    </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:22px;font-weight:bold;color:white;" align="right">Pengirim</td>
                                <td>
                                    <input name="txtpengirim" type="text" value="<?php echo $dataTampil['pengirim']; ?>" size="15" maxlength="25" />
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="submit" name="Submit" value="Simpan" />
                                    <input name="txtIDH" type="hidden" value=<?php echo $editID; ?>
                                </td>
                            </tr>
                        </table>
            </form>
        </div>
    </body>

    </html>