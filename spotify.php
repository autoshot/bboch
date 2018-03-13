<html>

<head>

    <title>Spotify Rozlicznie</title>
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
            <div id="left">

                <?php
if(isset($_GET['id'])){
require_once("connect.php");
$conn = new mysqli($host,$db_user,$db_pass,$db_name);
$id = $_GET['id'];
$wynik = $conn -> query("select * from spotify where id=$id");
$wynik = $wynik -> fetch_assoc();
$imie = $wynik['imie'];
$nazwisko = $wynik['nazwisko'];
$rok = $wynik['prok'];
$msc = $wynik['pmiesiac'];
$ost = $wynik['ostatnia'];
$data = $wynik['data'];
}
?>

            <br><br><br><br><center>Wybierz subskrybenta z listy po prawej</center>

            </div>
            <div id="menu">

                <h1>
                    <center>Subskrybenci</center>
                </h1>
                <hr>
                <ul>
                    <li><a href="spotify.php?id=1">Anna Krukowska</a></li>
                    <li><a href="spotify.php?id=2">Kasia Krukowska</a></li>
                    <li><a href="spotify.php?id=3">Przemek Geryk</a></li>
                    <li><a href="spotify.php?id=5">Michał Gleba</a></li>
                    <li><a href="spotify.php?id=4">Mateusz Klimkowski</a></li>
                </ul>
            </div>
            <div id="clear"></div>
        </div>
    </div>
</body>

</html>
