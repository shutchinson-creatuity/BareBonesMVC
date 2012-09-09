<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dev</title>
    <meta name="description" content="Development Environment">
    <meta name="author" content="Scott Hutchinson">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo $this->baseUrl; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo $this->baseUrl; ?>css/main.css">
    <script src="<?php echo $this->baseUrl; ?>js/vendor/modernizr-2.6.1.min.js"></script>
</head>
<body>
<!--[if lt IE 7]><p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p><![endif]-->
<div class="main_wrapper">
    <header>
        <nav class="grid_wrapper clearfix">
            <div class="grid_12">

            </div>
        </nav>
    </header>
    <div role="main">
        <div role="main" class="main clearfix">
            <div class="content">
                <?php echo $this->main; ?>
            </div>
        </div>
    </div>
    <footer>
        <div class="grid_wrapper clearfix">
            <div class="footer_content grid_12">

            </div>
        </div>
    </footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $this->baseUrl; ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
<script src="<?php echo $this->baseUrl; ?>js/plugins.js"></script>
</body>
</html>
