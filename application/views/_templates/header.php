<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Genesis Rebirth</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    CSS
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/reset.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
    -->
    <!-- That's the cool-kids-protocol-free way to load jQuery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/application.js"></script>
</head>
<body>
    <?php if (Session::get('user_logged_in') == true):?>
        <?php echo('CONNECTE')?>        
    <?php endif; ?>

    <?php if (Session::get('user_logged_in') == false):?>
        <?php echo('NON CONNECTE')?>
    <?php endif; ?>
