<?php $pwd = pwd(); ?>
<?php $get_hd = get_hd(); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="<?php echo $pwd ?>img/favicon.png"/>
    <link rel="apple-touch-icon" href="<?php echo $pwd ?>img/favicon-apple.png"/>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <!--title-->
    <title>Yobko | Zdrowe podejscie do kreacji</title>

    <!--CSS-->
    <link href="<?php echo $pwd ?>css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo $pwd ?>css/reset.css" rel="stylesheet">
    <link href="<?php echo $pwd ?>libs/slick/1.5.7/slick.css" rel="stylesheet">
    <link href="<?php echo $pwd ?>libs/slick/1.5.7/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <?php wp_head(); ?>

    <link href="<?php echo $pwd ?>style.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <!-- JS -->
    <script src="<?php echo $pwd ?>js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo $pwd ?>js/bootstrap.min.js" type="text/javascript"></script>
    
</head>
<body>

<header id="main-header">
    <div class="container-fluid header">
            <a id="logo" href="<?php echo $get_hd; ?>" class="pull-left">
                <img src="<?php echo $pwd ?>img/logo.png" alt="logo">
                <img src="<?php echo $pwd ?>img/logo-text.png" alt="logo text">
            </a>

            <div id="nav-menu-btn" class="pull-right nav-menu-btn"><i></i></div>
            <div class= "pull-right" id="lang-switch"><?php echo qtranxf_generateLanguageSelectCode('text'); ?></div>
        </div>
    </div>

    <nav id="popup-box">
        <ul id="pop-up-list">
            <li class="robimy" data-slide-id="1">
                <a href="javascript:void(0)"></a>
            </li>
            <li class="myslimy" data-slide-id="2">
                <a href="javascript:void(0)"></a>
            </li>
            <li class="dzialamy" data-slide-id="3">
                <a href="javascript:void(0)"></a>
            </li>
            <li class="jestesmy" data-slide-id="5">
                <a href="javascript:void(0)"></a>
            </li>
            <li class="kontakt" data-slide-id="4">
                <a href="javascript:void(0)"></a>
            </li>
        </ul>
    </nav>
</header>