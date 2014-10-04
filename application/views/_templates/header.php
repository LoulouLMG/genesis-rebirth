<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Genesis Rebirth</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/style.css"/>
    
    <!-- That's the cool-kids-protocol-free way to load jQuery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="<?php echo URL;?>public/js/application.js"></script>
</head>
<body>
    <div class="debug-helper-box">
        DEBUG HELPER: you are in the view: <?php echo $filename; ?>
    </div>

    <div id="wrap">
        <div class='title-box'>
            <a href="<?php echo URL; ?>">Genesis Rebirth</a>
        </div>
    <ul id="nav">
        <li>
            <a href="<?php echo URL; ?>index/index">Accueil</a>
        </li>
      <li><a href="#">Lien 1</a></li>
      <li><a href="#">Lien 2</a></li>
        <li>
            <a href="<?php echo URL; ?>error/index">Error</a>
        </li>
   </ul>

