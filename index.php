<?
$_GET['page'] = isset($_GET['page']) ? $_GET['page'] : 'home';
session_start();
if (isset($_SESSION['user_id'])) {
    $logged_in = true;
} else {
    if (isset($_POST['login'])) {
        echo "Oled sisse logitud";

    } else {
        require 'login.php';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        var map;
        function initialize() {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(58.349062, 26.713939)
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>

<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right">
            <li <?= $_GET['page'] == 'home' ? 'class="active"' : '' ?>><a href="?page=home">Avaleht</a></li>
            <li <?= $_GET['page'] == 'contact' ? 'class="active"' : '' ?>><a href="?page=contact">Kontakt</a></li>
            <li <?= $_GET['page'] == 'about' ? 'class="active"' : '' ?>><a href="?page=about">Meist</a></li>

        </ul>
        <h3 class="text-muted"><a href="?">Atomic OÜ</a></h3>
    </div>
    <? require $_GET['page'] . '.php' ?>
    <div class="footer">
        <p>&copy; Atomic OÜ 2014</p>
    </div>

</div>
<!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
