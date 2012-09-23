<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->

    <meta name="viewport" content="width=device-width">
    <title>Alice Yuan</title>
    <meta name="Description" content="I'm a girl from the University of Waterloo pursuing an undergraduate degree in Software Engineering." />
    <meta name="Keywords" content="" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheets/screen.css" media="screen, projection"  type="text/css" />
    <!-- fonts stylesheet -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font/windsong/stylesheet.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font/quicksand/stylesheet.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font/ss-social/stylesheet.css">

    <!-- Plugins stylesheet -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/plugin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/plugin/fancyBox/source/jquery.fancybox.css" media="screen" />

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheets/screen.css" media="screen, projection"  type="text/css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheets/global.style.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheets/global.nav.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheets/global.responsive.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheets/pages.css">

    <!-- Print stylesheet -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheets/print.css" media="print"  type="text/css" />



    <!-- IE conditional stylesheet -->
    <!--[if IE]>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->


    <!-- Javscript -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js" ></script>
    <!-- JS Plugins -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugin/bootstrap/js/bootstrap.min.js" ></script>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.transit.js" ></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.fittext.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/font/ss-social/ss-social.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/global.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugin/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugin/fancyBox/source/jquery.fancybox.js"></script>


    <script>
    $(document).ready(function() {
      $(".fancybox a").fancybox({
        'type': 'iframe',
      });
      $("a.fancybox").fancybox({
        'type': 'iframe',
      });
    });
    </script>
</head>

<body class="<?php echo Yii::app()->name ?>">
  <?php echo $content; ?>
</body>
</html>
