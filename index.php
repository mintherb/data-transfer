<!DOCTYPE html>
<html>
<head>
    <title>Ambios - v. a0.2.1 </title>
    <!-- Copyright (C) 2016 Jan M. Groß -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheets/main.css" type="text/css" />
    <link rel="stylesheet" href="stylesheets/noUiSlider/nouislider.min.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <script type="text/javascript" src="js/nouislider.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <?php include "menu.php" ?>
    <div class="content">
        <div id="logo">
            <div id="blurred-logo">Ambios</div>
            <div id="blurred-logo-l2">Ambios</div>
            <div id="sharp-logo">Ambios</div>
        </div>
        <audio><h1>Unsupported browser</h1></audio>
        <div class="audio-tiles">
            <?php include 'sound_tiles.php'; ?>
        </div>
    </div>
</body>
</html>

