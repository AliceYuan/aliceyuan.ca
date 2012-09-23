<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
    <title>Alice Yuan</title>
    <meta name="viewport" content="width=device-width">
    <meta name="Description" content="I'm a girl from the University of Waterloo pursing an undergraduate degree in Software Engineering." />
    <meta name="Keywords" content="" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylesheets/screen.css" media="screen, projection"  type="text/css" />
    <!-- fonts stylesheet -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font/windsong/stylesheet.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font/quicksand/stylesheet.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font/ss-social/stylesheet.css">

    <!-- Plugins stylesheet -->
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
      </style> -->

    <!--[if lt IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }

    <![endif]-->

    <!-- Javscript -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js" ></script>
    <!-- JS Plugins -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugin/bootstrap/js/bootstrap.min.js" ></script>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/font/ss-social/ss-social.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/global.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugin/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugin/fancyBox/source/jquery.fancybox.js"></script>


    <script>
    $(document).ready(function() {
      $(".fancybox a").fancybox({
      });
      $("a.fancybox").fancybox({
      });
      $(".iframe-fancybox a").fancybox({
        'type': 'iframe',
      });
      $("a.iframe-fancybox").fancybox({
        'type': 'iframe',
      });
    });

    </script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34311779-1']);
      _gaq.push(['_setDomainName', 'aliceyuan.ca']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</head>

<body class="">
  <div class="main-menu-wrapper gradient top clearfix">
    <div class="main-menu clearfix">
      <div class="logo">
        <a title="Home" href="/"> <h1> AY </h1> </a>
      </div>
      <div class="nav clearfix">
      <?php $this->widget('application.components.MainMenu',array(
        'items'=>array(
          array('label'=>'About', 'imageSrc'=>Yii::app()->request->baseUrl.'/img/white/book_alt2_32x28.png', 'url'=>array('site/page', 'view'=>'about')),
          array('label'=>'Blog', 'imageSrc'=>Yii::app()->request->baseUrl.'/img/notepencil32.png','url'=>array('post/index')),
          array('label'=>'Artworks', 'imageSrc'=>Yii::app()->request->baseUrl.'/img/white/brush_32x32.png','url'=>array('site/page', 'view'=>'artworks')),
          array('label'=>'Resume', 'imageSrc'=>Yii::app()->request->baseUrl.'/img/white/article_32x32.png','url'=>array('site/page', 'view'=>'resume')),
          array('label'=>'Contact', 'imageSrc'=>Yii::app()->request->baseUrl.'/img/white/chat_alt_fill_32x32.png','url'=>array('site/contact'), 'itemOptions'=>array('class'=>'iframe-fancybox')),
        ),
        'linkLabelWrapper'=>'p',
        'activeCssClass'=>'active',
        'itemTemplate'=>'
            {menu}
            <div class="button-outer">
              <img class="icon small" src="{image}"> </img>
              <div class="button-inner"></div>
            </div>
          ',
      )); ?>

      </div> <!-- end nav -->
    </div>
  </div> <!-- end main-menu-wrapper -->

  <div class="main-wrapper">
    <?php echo $content; ?>

    <div class="footer">
      <p>
        <span class="copyright">
          &copy Copyright 2012 Alice Yuan.
        </span>
        <span class="allrights">
          All rights reserved.
        </span>

      </p>
      <ul class="clearfix">
      <li> <a class="iframe-fancybox" href="<?php echo Yii::app()->createUrl('/site/contact') ?>" title="Contact Me">Contact</a></li>
        <li> <a title="check site out on github" href="//github.com/AliceYuan/aliceyuan.ca">Github me</a></li>
        <!-- <li> <a href="#" title="subscribe to RSS">RSS Feed</a></li> -->
      </ul>

      <!-- <div class="social links ss-icon"> -->
      <!--   <ul> -->
      <!--     <li><a class="facebook" href="//facebook.com" title="facebook me">facebook<span/></a></li> -->
      <!--     <li><a class ="twitter" href="//twitter.com" title="@Names_Alice">twitter<span/></a></li> -->
      <!--     <li><a class="linkedin" href="//linkedin.com" title="LinkedIn">linkedin<span/></a></li> -->
      <!--     <li><a class="googleplus" href="//plus.google.com" title="+1 me">googleplus<span/></a></li> -->
      <!--   </ul> -->
      <!-- </div> -->
    </div> <!-- footer ends -->
  </div> <!-- main-wrapper ends -->





  <!-- fancybox contact box -->

</body>
</html>
