<?php
require './connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="" content="">
	<title>Admin PBA</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="asset/plugin/font-icon/css/fontawesome-all.min.css">
    <style>
        #hiasan {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 135px; /* Adjust as needed */
            height: auto;
        }
        #logo-header {
            width: 370px; /* Adjust as needed */
        }
    </style>
</head>
<body>
<header>
    <img src="asset/image/logo5.png" id="logo-header">
    <img src="asset/image/top-image.svg" id="hiasan">
</header>
<nav>
    <?php include "navpba.php"; ?>
</nav>
<main>
    <div id="bg-green"></div>
    <div id="main-body">
        <?php include "page.php"; ?>
    </div>
</main>
<script src="asset/js/jquery.js" type="text/javascript"></script>
<script src="asset/js/main.js" type="text/javascript"></script>
</body>
</html>