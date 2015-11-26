<?php include '_lib/functions.php'; ?>
<!doctype html lang="<?=$lang?>">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?=$lang?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?=$lang?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?=$lang?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?=$lang?>"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Carnia Design &middot; We create experiences!</title>
        <meta name="description" content="Carnia Design is digital agency focused on delivering amazing user experiences and creating business value through knowledge, innovation and cutting-edge technology.">
        <meta name="keywords" content="web design, web development, php, laravel, interactive agency, marketing agency, creative agency, digital agency, internet marketing, маркетинг агенција, интернет маркетинг, branding, brands, user experience, social media, e-commerce, e-business">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="Carnia Design &middot; We create experiences!">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://carniadesign.com/">
        <meta property="og:image" content="http://carniadesign.com/img/logo.jpg">
        <meta property="og:description" content="Carnia Design is digital agency focused on delivering amazing user experiences and creating business value through knowledge, innovation and cutting-edge technology.">
        <meta property="og:site_name" content="Carnia Design">
        <meta property="fb:admins" content="100000414319538">

        <link rel="stylesheet" href="/css/screen.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="languageSelector"><a href="/">en</a><a href="/?lang=mk">mk</a></div>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigaion">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <strong>CARNIA</strong>DESIGN
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right" id="navigation">
                        <li><a href="/#our-process"><?=$navLabels[$lang]['process']?></a></li>
                        <li><a href="/#our-services"><?=$navLabels[$lang]['services']?></a></li>
                        <li><a href="/#contact"><?=$navLabels[$lang]['contact']?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
