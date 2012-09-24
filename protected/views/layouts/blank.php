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
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js" ></script>

</head>

<body class="<?php echo Yii::app()->name ?>">
  <div id="main" class="main">
    <?php echo $content; ?>
  </div>
</body>
</html>
