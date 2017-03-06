<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/amikom.png">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/mobile.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Electrolize|Source+Sans+Pro:400,700" rel="stylesheet">
    <script src="jquery-2.2.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.1/SmoothScroll.min.js"></script>
    <title>Login Student</title>
</head>

<body>
    <div class="background-wrapper"></div>
    <div class="wrapper">
        <h2><img src="../img/amikom.png"> STMIK AMIKOM PURWOKERTO</h2>
        <div class="body_text">
            <form action="logincheck.php" method="POST" name="form1" target="_self"> <span>Username <i class="fa fa-user-o" aria-hidden="true"></i></span>
                <input type="text" name="txtUser" placeholder="your username"> <span>Password <i class="fa fa-lock" aria-hidden="true"></i></span>
                <input type="password" name="txtPass" placeholder="password">
                <input type="submit" name="submit" value="Submit"> </form>
        </div>
    </div>
</body>
</html>