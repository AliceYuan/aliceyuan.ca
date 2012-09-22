
<?php
$this->pageTitle=Yii::app()->name . ' - Resume';
$this->layout = 'blank';
?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<style type="text/css">
    /* http://meyerweb.com/eric/tools/css/reset/
       v2.0 | 20110126
       License: none (public domain)
    */

    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
      display: block;
    }
    body {
      line-height: 1;
    }
    ol, ul {
      list-style: none;
    }
    blockquote, q {
      quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
      content: '';
      content: none;
    }
    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    /* clearfix */
    .clear {
      clear: both;
    }

    .clearfix:after {
      content: ".";
      display: block;
      clear: both;
      visibility: hidden;
      line-height: 0;
      height: 0;
    }

    .clearfix {
      display: inline-block;
    }

    * html .clearfix {
      height: 1%;
    }

    /* General Styling */
		body {
			margin:0px auto;
			background: #FFFFFF;
      font-family: Trebuchet MS, Helvetica, sans-serif;
      font-size: 14px;
      color: #333;
      line-height: 1.3em;
		}
    h1{
      font-size: 2.5em;
      margin: 0;
      font-weight: normal;
    }
    h2{
      font-size: 1.4em;
      margin: 0 0 1em 0;
    }
    h3{
      font-size: 1.25em;
      font-weight: bold;
      margin: 0 0 .5em 0;
    }
    h4{
      font-size: 1.1em;
      font-weight: bold;
      margin: 0 0 .5em 0;
    }
    h5{
      font-size: .9em;
      font-weight: bold;
      margin: 0 0 .5em 0;
    }
    h6{
      margin: 0 0 .5em 0;
    }
    a{
      color: #429696;
      border-bottom: 1px dashed #BBB;
      text-decoration: none;
    }
    a:hover, a:focus{
      color: #5A9B9B;
    }
    ul{
      padding-left: 0;
    }

    /* Layout Styling */

    /* Misc Styling */
    .caps-title{
      text-transform: uppercase;
    }
    .no-bullets{
      list-style: none;
    }
    .col-2 .bullet{
      list-style: circle;
      margin-left: 3em;
    }
    .date-right{
      font-weight: bold;
      font-size: 13px;
      float: right;
    }
    .no-margin{
      margin: 0;
    }

    /* Header Styling */

    .header{
      text-align: center;
      font-family: 'Open Sans',Copperplate Gothic Light, Century Gothic, sans-serif;
      /* border-top: 1em solid blue; */
      position: relative;
      margin-bottom: 1em;
    }
      .header h1{
        font-size: 2em;
      }
      .header p{
        margin: 0;
      }
      .header ul.links{
        margin: 0.5em 0 0.5em 0;

      }
      .header .links li{
        padding: 0 1.3em;
        list-style: disc inside;
        color: #24C5BF;
        font-size: 2em;
        text-align:left;
        float: left;
      }
      .header .links li a{
        text-decoration: none;
        font-size: 13px;
        vertical-align: middle;
      }
      .header .links .label{
        width: 5em;
        display: block;
        float: left;
        display: none;
      }
      .header ul{
        margin: 0;
      }

      .wrapper{
      }

      .title-decoration-wrapper{
        height: 10em;
        width:  10em;
        border: 2px solid #333;
        border-radius: 50%;
          -webkit-border-radius: 50%;
          -moz-border-radius: 50%;
        margin:  0 auto;
      }

      .title-decoration{
        height: 8.88em;
        width:  8.88em;
        border: 1px solid #333;
        border-radius: 50%;
          -webkit-border-radius: 50%;
          -moz-border-radius: 50%;
        margin: .5em;
      }

      h1.title{
        vertical-align: middle;
        padding-top: 12px;
        font-size: 2.75em;
        line-height: 1.2em;
        font-weight: 300;
      }

      .sub-header h3{
        font-weight: normal;
        text-align: center;
        margin-bottom: 2em;
      }
      .sub-header .you{
        color: #7EA5AF;
        font-size: 1.3em;
      }




    /* Col-1 Styling */

    .col-1{
      width: 27%;
      height: 100%;
      margin-right: 25px;
      margin-left: 10px;
      float: left;
    }
    .col-1 .hint{
      color: #666;
      font-size: .8em;
      margin-right: 1em;
      margin-top: 1.5em;
    }
    .col-1 .skills h2{
      margin-bottom: 0.5em;
    }
    .col-2{
      height: 100%;
      float: left;
      width: 69%;
    }
    .col-2 li{
      margin: 0 0 .5em 0;
    }
    .col-2 li ul li{
      margin: 0 0 .5em 1em;
    }
    .skills ul{
      list-style: none;
    }
    .skills{
      clear: both;
    }
    .section h4{
      font-size: 1.1em;
      width: 95%;
      border-bottom: 2px solid #568FAF;
      margin-top: 1em;
    }

    .section{
      float: left;
      width: 95%;
      margin-bottom: 1em;
      font-size: .9em;
    }
    .section li{
      padding: 0.2em 0.6em;
      color: #666;
      float: left;
      margin: auto;
      text-align: center;
      vertical-align: middle;
    }
    .col-2 .experience h2.caps-title{
      margin: 0 0 1em 0;
    }
    .col-2 h2.caps-title{
      margin: 1em 0 .7em 0;
    }
    .section.web li.n1{ font-size: 1.7em; margin-bottom: -.7em;} /*php*/
    .section.web li.n2{ font-size: 1.1em; } /*yii*/
    .section.web li.n3{ font-size: 1.6em; margin-top: .5em;} /*python*/
    .section.web li.n4{ font-size: 1.0em; } /*Mysql*/
    .section.web li.n5{ font-size: 1.2em; } /*Apache*/
    .section.web li.n6{ font-size: 1.4em; } /*js*/
    .section.web li.n7{ font-size: 1.3em; } /*drupal*/
    .section.web li.n8{ font-size: 1.7em; } /*jquery*/
    .section.web li.n9{ font-size: 1.9em; } /*css*/
    .section.web li.n10{ font-size: 1.4em; } /*sass*/
    .section.web li.n11{ font-size: 1.5em; } /*html5*/
    .section.web li.n12{ font-size: 1.2em; } /*respon*/
    .section.web li.n13{ font-size: 1.1em; } /*Xbrowser*/


    .section.applications li.n1{ font-size: 1.7em; margin-left: 1em;} /*C*/
    .section.applications li.n2{ font-size: 1.8em; } /*C++*/
    .section.applications li.n3{ font-size: 1.2em; margin-right: 1em;} /*Java*/
    .section.applications li.n4{ font-size: 1.2em; } /*app eng*/


    .section.tools li.n1{ font-size: 1.8em; margin-bottom: -.5em;} /*Git*/
    .section.tools li.n2{ font-size: 1.2em; } /*Mercurial*/
    .section.tools li.n3{ font-size: 1.3em; } /*Bash*/
    .section.tools li.n4{ font-size: 1.6em; margin-top: .5em;} /*Vim*/
    .section.tools li.n5{ font-size: 1.4em; } /*UNIX*/
    .section.tools li.n6{ font-size: 1.2em; } /*Amazon Ec2*/
    .section.tools li.n7{ font-size: 1.3em; } /*PS5*/
    .section.tools li.n8{ font-size: 1.4em; } /*GIMP*/


    .section.soft-skills li.n1{ font-size: 1.2em; } /*C*/
    .section.soft-skills li.n2{ font-size: 1.2em; } /*C*/
    .section.soft-skills li.n3{ font-size: 1.2em; } /*C*/
    .section.soft-skills li.n4{ font-size: 1.2em; } /*C*/
    .section.soft-skills li.n5{ font-size: 1.2em; } /*C*/
    .section.soft-skills li.n6{ font-size: 1.2em; } /*C*/
    .section.soft-skills li.n7{ font-size: 1.2em; } /*C*/
    .contents{
    }
    .contents h3{
      color: brown;
    }
    .experience h4{
      margin-top: 1em;
    }
    .contents h2{
      font-family: 'Open Sans',Copperplate Gothic Light, Century Gothic, sans-serif;
      font-weight: 300;
      font-size: 1.5em;
      color: #09A5A5;
    }
    .center{
      margin: 0 auto;
    }
    .contents a{
      color: inherit;
    }
    #non-print{
      width: 100%;
      background: #429696;
      min-height: 50px;
    }
    #non-print a{
      color: white;
      border: none;
      font-weight: bold;
    }
    #non-print a:hover, #non-print a:focus {
      color: #ECECEC;
      border-bottom: 1px dashed white;
    }
    #non-print .inner{
      width: 900px;
      margin: 0 auto;
      padding: 1em;
      position: relative;
    }
    #non-print a.back{
      position: absolute;
    }
    #non-print a.dl-resume{
      text-align: center;
    }
    #non-print a.close{
      position: absolute;
        right: 0;
        top: 1em;
    }
    #resume{
      display: block;
      margin: 0 auto;
			width: 900px;
      padding: 1em 1em 10em 1em;
    }

    /* print styling */
    @media print{
      body{
       padding: 0;
       color: black;
       height: 100%;
      }
      a{
        color: #333;
        border: none;
      }
      #non-print{
        display: none;
      }

    }




</style>
<!--[if lt IE 9]>
	<style>
      #non-print{
        display: none;
      }
      .title-decoration-wrapper{
        height: auto;
        width:  auto;
        border: none;
        border-radius: 100%;
          -webkit-border-radius: 100%;
          -moz-border-radius: 100%;
        margin:  0 auto;
      }

      .title-decoration{
        height: auto;
        width:  auto;
        border: none;
        border-radius: 100%;
          -webkit-border-radius: 100%;
          -moz-border-radius: 100%;
        margin: .5em;
      }

      h1.title{
        vertical-align: middle;
        padding-top: 12px;
        font-size: 4em;
        line-height: 1.2em;
      }

	</style>
<![endif]-->
<!--[if lt IE 8]>
  <style>
    ul.links{
      padding-left: 9em;
    }

  </style>
<![endif]-->


<script >
  $(document).ready(function(){
    // $('#non-print').hide();
    $('#non-print a.close').click(function(){
      $('#non-print').slideUp();
    });
    $(window).load( function() {
      // $('#non-print').slideDown(1000);
    });
  });

</script>

</head>


<div id="non-print">
  <div class="inner">
    <ul>
      <li> <a href="/" class="back"> <p><-- Back to www.aliceyuan.ca </p></a> </li>
      <li><a href="/files/resume.pdf" class="dl-resume"><p> Download PDF</p> </a></li>
      <li><a href="#" class="close"><p>Close</p> </a></li>
  </div>
</div>
<div id="resume" class="clearfix">
  <div class="header">
    <div>
     <div class="wrapper">
        <div class="title-decoration-wrapper">
          <div class="title-decoration">
            <h1 class="title">Alice Yuan</h1>
          </div>
        </div>
        <div class="hide"></div>
      </div>
    </div>
    <!-- <p>Software Engineering</p> -->
    <div class="center">
      <ul class="no-bullets links clearfix">
        <li><span class="label">site</span> <a href="//aliceyuan.ca" class="awhite">http://aliceyuan.ca</a></li>
        <li><span class="label">email</span> <a href="mailto:jobs@aliceyuan.ca">jobs@aliceyuan.ca</a></li>
        <li><span class="label">github</span> <a href="//github.com/AliceYuan">http://github.com/AliceYuan</a></li>
        <!-- <li><span class="label">twitter</span> <a href="//twitter.com/Names_Alice">@Names_Alice</a></li> -->
      </ul>
    </div>
    <div class="sub-header">
      <h3> I love <span>learning</span>. I love <span>challenges</span>. I love <span>programming</span> <span>beautiful</span>, <span>intuitive</span> and <span>functional</span> <span>applications</span>. </h3>
      <!-- <h3> I'd love to work for <span class="you">you</span>.</h3> -->
    </div>
  </div> <!-- end header -->

  <div class="contents">
    <div class="col-1">
      <div class="skills clearfix">
        <h2 class="caps-title">Skills</h2>
        <div class="section web">
          <h4> Web Development </h4>
          <ul>
            <li class="n1">PHP</li>
            <li class="n2">PHP Framework: Yii</li>
            <li class="n3">Python</li>
            <li class="n4">MySQL</li>
            <li class="n5">Apache</li>
            <li class="n6">Javascript</li>
            <li class="n7">PHP CMS: Drupal</li>
            <li class="n8">Jquery</li>
            <li class="n9">CSS/CSS3</li>
            <li class="n10">SASS</li>
            <li class="n11">HTML5</li>
            <li class="n12">Responsive Web Design</li>
            <li class="n13">Cross Browser Compatibility</li>
          </ul>
        </div> <!-- end web -->

        <div class="section applications">
          <h4> Applications Development </h4>
          <ul>
            <li class="n1">C</li>
            <li class="n2">C++</li>
            <li class="n3">Java</li>
            <li class="n4">App Engine SDK for Python</li>
          </ul>
        </div><!-- end applications -->

        <div class="section tools">
          <h4>Tools</h4>
          <ul>
            <li class="n1">Git</li>
            <li class="n2">Mercurial</li>
            <li class="n3">Bash</li>
            <li class="n4">Vim</li>
            <li class="n5">UNIX OS</li>
            <li class="n6">Amazon EC2</li>
            <li class="n7">Photoshop CS5</li>
            <li class="n8">GIMP</li>
          </ul>
        </div> <!-- end tools -->

        <div class="section soft-skills">
          <h4>Soft Skills</h4>
          <ul>
            <li class="n1">Creative</li>
            <li class="n2">Detail-Orientated</li>
            <li class="n3">Leadership</li>
            <li class="n4">Collaborative</li>
            <li class="n5">Fast Learner</li>
            <li class="n6">Communicative</li>
            <li class="n7">Ambitious</li>
          </ul>
        </div> <!-- end soft-skills -->

        </div>
        <p class="hint">*size indicates my comfort level</p>
    </div> <!-- end col-1 -->

    <div class="col-2">


      <div class="experience">
        <h2 class="caps-title">Experience</h2>
        <ul>
          <li>
            <h4><span><a href="//myplanetdigital.com">Myplanet Digital</a></span> - Web Developer </h4>
            <h5>Markham, ON <span class="date-right">May 2012 - Aug. 2012</span></h5>
            <ul>
              <li>
                Developed features for an accessible and semantically sound website (<a href="//downsviewpark.ca">downsviewpark.ca</a>) using CSS3, Jquery and <a href="//drupal.org">Drupal, a PHP content management framework</a>.
              </li>
              <li>
                Contributed to the production of a customizable, e-commerce cloud platform website with a focus on excellent user interface and experience.
              </li>
              <li>
                Redefined testing work flow that emphasized better communication and documentation, significantly improving team efficiency.
              </li>
            </ul>
          </li>

        <li class="no-margin">
          <h4>Google Computer Science Summer Institute - Student </h4>
          <h5>Mountain View, CA <span class="date-right">Jun. 2011 - Jul. 2011</span></h5>
          <ul>
            <li>Built and deployed a web application game (<a href="http://tictactoe-cssi.appspot.com">http://tictactoe-cssi.appspot.com</a>) using App Engine SDK for Python and Javascript within the constraint of 4 days.</li>
            <li>Overtook responsibility as project manager who prioritized and motivated team toward project completion. </li>
            <li>Presented application to students and employees of Google and was voted best overall web application.</li>
          </ul>
          </li>
        </ul>
      </div>


      <div class="projects">
        <h2 class="caps-title">Projects</h2>
        <ul>
          <li>
          <h4><a href="//aliceyuan.ca">www.aliceyuan.ca</a><span class="date-right">Aug. 2012 - Sep. 2012 </span></h4>
              <ul>
                <li>Programmed and designed a responsive HTML5 micro-blog built on top of the <a href="//yiiframework.com">PHP Model View Controller framework, Yii.</a> </li>
                <li>Features a simplistic content management system using MySQL as the database.</li>
              </ul>
          </li>
        </ul>
      </div>

      <div class="extracurricular">
        <h2 class="caps-title">Extracurricular</h2>
        <ul>
          <li><a href="http://gracehopper.org/2012/">Grace Hopper Conference Attendant</a><span class="date-right">Oct. 2012</span></li>
          <li>Academic Student Representative<span class="date-right">Sep. 2011 - Present</span></li>
              <li class="bullet">Attended meetings and represented the student body of the 2016 software program.</li>
          <li>Women in Engineering Volunteer<span class="date-right">Sep. 2011 - Present</span></li>
              <li class="bullet">Volunteered to be a mentor to first year students.</li>
          <li>Waterloo Events Volunteer<span class="date-right">Sep. 2011 - Present</span></li>
          <li><a href="http://2012.cusec.net/">Canadian University Software Engineering Conference</a> <span class="date-right">Jan. 2012</span></li>
        </ul>
      </div>

      <div class="education">
        <h2 class="caps-title">Education</h2>
        <ul class="no-bullets">
          <li>
          Pursuing Bachelor of Software Engineering<span class="date-right">Sep. 2011 - Present</span> <br>
          Co-operative program, University of Waterloo
          </li>
          <li>
          Regional Arts Program: Visual Arts Major Graduate<span class="date-right">Oct. 2011</span> <br>
          Cawthra Park Secondary School

          </li>
        </ul>
      </div>
    </div> <!-- end col-2 -->
  </div> <!-- end contents -->
</div>
