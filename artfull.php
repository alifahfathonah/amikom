<?php
include "librari/koneksi.php";
include "librari/librari.php";
?>
   
    <html>

    <head>
        <title>Artikel Full</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../img/amikom.png">
        <style>
            #wrapperfull {
                position: absolute;
                width: 900px;
                left: 50%;
                top: 100px;
                transform: translate(-50%, 0%);
                z-index: 999;
            }
            
            ::-moz-selection,
            ::-webkit-selection,
            ::selection {
                background: #222;
                color: #FFF
            }
            
            ::-webkit-scrollbar {
                width: 8px
            }
            
            ::-webkit-scrollbar-track-piece {
                background-color: transparent
            }
            
            ::-webkit-scrollbar-thumb:vertical {
                width: 8px;
                background-color: #777
            }
            
            .permalink-pg {
                color: #fff;
                font-family: 'Source Sans Pro', sans-serif;
                font-size: calc(15px + 0.25vw);
            }
            
            .permalink-pg svg {
                width: 30px;
                vertical-align: -25px;
                margin-right: 20px;
                padding: 15px;
            }
            
            #wrapperfull article .body_text {
                border: 2px solid #fff;
                margin-bottom: 70px;
                padding: 30px;
                color: #fff;
                line-height: 170%;
                font-family: 'Source Sans Pro', sans-serif;
                font-size: calc(15px + 0.25vw);
            }
            
            #wrapperfull article h3 {
                color: #fff;
                margin-bottom: 0px;
                line-height: 170%;
                font-family: 'Source Sans Pro', sans-serif;
                font-size: calc(25px + 0.25vw);
            }
            
            .background-wrapper {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 200%;
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
        <div id="wrapperfull">
            <article>
                <?php     
                        $no ="";
                        $idartikel = $_GET['id'];
                        $sqlTampil = "SELECT * FROM artikel WHERE id='$idartikel'";
                        $qryTampil = mysql_query($sqlTampil, $koneksi)
                        or die ("Gagal query".mysql_error());
            
                        while($dataTampil = mysql_fetch_array($qryTampil)) {
                          $no++;
                        
                        ?>
                    <h3><?php echo "$dataTampil[judul]"; ?></h3>
                    <div class="permalink-pg">
                        <svg id="i-compose" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                            <path d="M27 15 L27 30 2 30 2 5 17 5 M30 6 L26 2 9 19 7 25 13 23 Z M22 6 L26 10 Z M9 19 L13 23 Z" /> </svg> Diposting pada tanggal
                        <?php echo tgl_eng_to_ind($dataTampil['tanggal']); ?>
                    </div>
                    <div class="body_text">
                        <?php echo "$dataTampil[isiartikel]"; ?>
                    </div>
                    <?php } ?>
            </article>
        </div>
        <!-- end #wrapper-->
    </body>

    </html>