<html>
<head>
<title>Logowanie Administratora</title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>

<div id="header">
<img src="img/php-fusion-logo.png" />
<div id="navi">
    <?php include('navi.html'); ?>
</div>
</div>
<div id="main">
<div id="container">
<h1>
    Panel Administratora
</h1>
    <?php
    if(isset($_SESSION['msg']))
    {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
<table>
<form action="login.php" method="post" >
<tr><td>Login:</td><td><input type="text" name="login"/></td></tr>
<tr><td>Hasło:</td><td><input type="password" name="password"/></td></tr>
<tr><td></td><td><input type="submit" value="Zaloguj"/></td></tr>
</form>
</table>
</div>
</div>
</body>
</html>
