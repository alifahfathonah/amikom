<link rel="stylesheet" href="style.css">

<?php
if(!session_id())session_start();
include "../librari/koneksi.php";

$txtUser	= $_POST['txtUser'];
$txtPass	= $_POST['txtPass'];

if(trim($txtUser) == "") {
	echo "<b align=center>Username</b> belum diisi";
	include "login.php";
}

else if (strlen(trim($txtPass)) <= 5) {
	echo "<b>Password </b> minimal 6 digit";
	include "login.php";
}
   
else {
    $sqlPeriksa = "SELECT * FROM admin WHERE userID='$txtUser'
                   AND passID=PASSWORD('$txtPass')";
    $qryPeriksa = mysql_query($sqlPeriksa, $koneksi);
    $hslPeriksa = mysql_num_rows($qryPeriksa);
    
    if($hslPeriksa >= 1) {
        # Jika sukses
        
        $_SESSION['SES_ADMIN']= '$txtUser';
        echo "Login Sukses";
        
        #Redireksi menuju index.php
        echo "<meta http-equiv='refresh' content='0; url=adminpanel.php'>";
        exit;
    }
    
    else {
        # Jika gagal
        echo "<b>Login dan Password</b> Tidak Cocok";
        include "login.php";
    }
    
}