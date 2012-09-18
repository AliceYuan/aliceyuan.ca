
<?php
$this->pageTitle=Yii::app()->name . ' - Resume';
$this->layout = 'blank';
?>


<head>
  <title>Alice Yuan's Resume</title>


  <meta name="keywords" content="Alice Yuan Resume" >

  <meta name="description" content="Alice Yuan's Resume" >
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

<style type="text/css">
    /* General Styling */
		body {
			max-width: 720px;
      padding: 1em;
			/* width: 96%; */
      /* padding:2%; */
			margin:0px auto;
			background: #FFFFFF;
      font-family: Trebuchet MS, Helvetica, sans-serif;
      font-size: 13px;
      color: #333;
		}
    h1{
      font-size: 2.5em;
      margin: 0;
      font-weight: normal;
    }
    h2{
      font-size: 1.35em;
      margin: 0 0 .5em 0;
    }
    h3{
      margin: 0 0 .5em 0;
    }
    h4{
      margin: 0 0 .5em 0;
    }
    h5{
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
      list-style: none;
      padding-left: 0;
    }

    /* Layout Styling */

    .col-2{
      float: left;
      width: 450px;
    }
    /* Misc Styling */
    .caps-title{
      text-transform: uppercase;
    }
    .no-bullets{
      list-style: none;
    }
    .bullet{
      list-style: circle;
      margin-left: 2em;
    }
    .date-right{
      font-weight: bold;
      font-size: 11px;
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
      .header h5{
        font-weight: normal;
      }
      .header ul.links:nth-child(1){
        margin: 0;
        position: absolute;
          top: 1.25em;
          left: 6em;
      }
      .header ul.links:nth-child(2){
        margin: 0;
        position: absolute;
          top: 1.25em;
          right: 2em;
      }
      .header .links li{
        padding: 0 20px;
        list-style: disc inside url();
        color: #24C5BF;
        font-size: 2em;
        text-align:left;
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

      .title-decoration-wrapper{
        height: 106px;
        width:  106px;
        border: 2px solid #333;
        border-radius: 50%;
        margin:  0 auto;
      }
      .title-decoration{
        height: 90px;
        width:  90px;
        border: 1px solid #333;
        border-radius: 50%;
        margin: 7px;
      }
      .title-decoration h1{
        vertical-align: middle;
        padding-top: 8px;
      }

      .sub-header h3:nth-child(1){
        margin: 0;
      }
      .sub-header h3{
        font-weight: normal;
        text-align: center;
      }
      .sub-header .you{
        color: #7EA5AF;
        font-size: 1.3em;
      }




    /* Col-1 Styling */

    .col-1{
      width: 200px;
      height: 100%;
      margin-right: 25px;
      margin-left: 10px;
      float: left;
    }
    .col-1 .hint{
      font-size: .8em;
      margin-right: 1em;
    }
    .skills ul{
      list-style: none;
    }
    .skills{
      font-size: 12px;
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
    }
    .section li{
      padding: 0.1em 0.3em;
      float: left;
      margin: auto;
      text-align: center;
      vertical-align: middle;
    }
    .section.web li:nth-child(1){ font-size: 1.6em; } /*php*/
    .section.web li:nth-child(2){ font-size: 1.1em; } /*yii*/
    .section.web li:nth-child(3){ font-size: 1.5em; } /*python*/
    .section.web li:nth-child(4){ font-size: 1.0em; }
    .section.web li:nth-child(5){ font-size: 1.2em; }
    .section.web li:nth-child(6){ font-size: 1.3em; }
    .section.web li:nth-child(7){ font-size: 1.7em; }
    .section.web li:nth-child(8){ font-size: 1.9em; }
    .section.web li:nth-child(9){ font-size: 1.4em; }
    .section.web li:nth-child(10){ font-size: 1.5em; }
    .section.web li:nth-child(11){ font-size: 1.2em; }
    .section.web li:nth-child(12){ font-size: 1.1em; }


    .section.applications li:nth-child(1){ font-size: 1.5em; } /*C*/
    .section.applications li:nth-child(2){ font-size: 1.7em; } /*C*/
    .section.applications li:nth-child(3){ font-size: 1.2em; } /*C*/
    .section.applications li:nth-child(4){ font-size: 1.2em; } /*C*/


    .section.tools li:nth-child(1){ font-size: 1.6em; } /*C*/
    .section.tools li:nth-child(2){ font-size: 1.2em; } /*C*/
    .section.tools li:nth-child(3){ font-size: 1.3em; } /*C*/
    .section.tools li:nth-child(4){ font-size: 1.8em; } /*C*/
    .section.tools li:nth-child(5){ font-size: 1.4em; } /*C*/
    .section.tools li:nth-child(6){ font-size: 1.1em; } /*C*/


    .section.soft-skills li:nth-child(1){ font-size: 1.2em; } /*C*/
    .section.soft-skills li:nth-child(2){ font-size: 1.2em; } /*C*/
    .section.soft-skills li:nth-child(3){ font-size: 1.2em; } /*C*/
    .section.soft-skills li:nth-child(4){ font-size: 1.2em; } /*C*/
    .section.soft-skills li:nth-child(5){ font-size: 1.2em; } /*C*/
    .section.soft-skills li:nth-child(5){ font-size: 1.2em; } /*C*/

    .contents h3{
      color: brown;
    }
    .experience h4{
      margin-top: 1em;
    }
    .contents h2{
      font-family: 'Open Sans',Copperplate Gothic Light, Century Gothic, sans-serif;
      font-weight: 300;
      margin: 0 0 .3em 0;
      color: #09A5A5;
    }
    .contents a{
      color: inherit;
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

    /* print styling */
    @media print{
      body{
       padding: 0;
       color: black;
      }
      a{
        border: none;
      }
    }

    -->

</style>
</head>



<body lang="EN-US">
  <div class="header">
    <div>
      <div class="title-decoration-wrapper">
        <div class="title-decoration">
          <h1>Alice Yuan</h1>
        </div>
      </div>
    </div>
    <h5>Software Engineering Student </h5>
    <div>
      <ul class="no-bullets links clearfix">
        <li><span class="label">site</span> <a href="//aliceyuan.ca" class="awhite">http://aliceyuan.ca</a></li>
        <li><span class="label">email</span> <a href="mailto:jobs@aliceyuan.ca">jobs@aliceyuan.ca</a></li>
      </ul>
      <ul class="no-bullets links clearfix">
        <li><span class="label">github</span> <a href="//github.com/AliceYuan">http://github.com/AliceYuan</a></li>
        <li><span class="label">twitter</span> <a href="//twitter.com/Names_Alice">@Names_Alice</a></li>
      </ul>
    </div>
    <div class="sub-header">
      <h3> I love <span>learning</span>. I love <span>challenges</span>. I love <span>programming</span> <span>beautiful</span>, <span>intuitive</span> and <span>functional</span> <span>applications</span>. </h3>
      <h3> I'd love to work for <span class="you">you</span>.</h3>
    </div>
  </div> <!-- end header -->

  <div class="contents">
    <div class="col-1">
      <div class="skills clearfix">
        <h2 class="caps-title">Knowledge</h2>
        <div class="section web">
          <h4> Web Development </h4>
          <ul>
            <li>PHP</li>
            <li>PHP Framework: Yii</li>
            <li>Python</li>
            <li>SQL</li>
            <li>Javascript</li>
            <li>PHP CMS: Drupal</li>
            <li>Jquery</li>
            <li>CSS/CSS3</li>
            <li>SASS</li>
            <li>HTML5</li>
            <li>Responsive Web Design</li>
            <li>Cross Browser Compatibility</li>
          </ul>
        </div> <!-- end web -->

        <div class="section applications">
          <h4> Applications Development </h4>
          <ul>
            <li>C</li>
            <li>C++</li>
            <li>Java</li>
            <li>App Engine SDK for Python</li>
          </ul>
        </div><!-- end applications -->

        <div class="section tools">
          <h4>Tools</h4>
          <ul>
            <li>Git</li>
            <li>Mercurial</li>
            <li>Bash</li>
            <li>Vim</li>
            <li>UNIX OS</li>
            <li>Amazon EC2</li>
          </ul>
        </div> <!-- end tools -->

        <div class="section soft-skills">
          <h4>Soft Skills</h4>
          <ul>
            <li>Creative</li>
            <li>Leadership</li>
            <li>Collaborative</li>
            <li>Fast Learner</li>
            <li>Communication</li>
          </ul>
        </div> <!-- end soft-skills -->

        </div>
        <p class="hint"> *size indicates what I'm more comfortable with </p>
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
                Built semantic and customizable websites for clients Century Link and  <a href="//downsviewpark.ca">Downsview Park</a> using <a href="//drupal.org">Drupal, a PHP content management framework</a>.
              </li>
              <li>
                Improved team efficiency by implementing a better testing work flow.
              </li>
              <li>Regularly contributed to meetings to suggest improvements or resolutions.</li>
            </ul>
          </li>

          <li>
          <h4>Google Computer Science Summer Institute - Student </h4>
          <h5>Mountain View, CA <span class="date-right">Jun. 2011 - Jul. 2011</span></h5>
          <ul>
            <li>Selected out of hundreds of applicants to partake in a three week enrichment program at Google Headquarters.</li>
            <li>Built and deployed web application game which can be found at: <a href="http://tictactoe-cssi.appspot.com">http://tictactoe-cssi.appspot.com</a> and was voted best overall web application.</li>
          </ul>
          </li>
        </ul>
      </div>


      <div class="projects">
        <h2 class="caps-title">Projects</h2>
        <ul>
          <li>
          <h4><a href="//aliceyuan.ca">www.aliceyuan.ca</a><span class="date-right">Aug. 2012 - Sept. 2012 </span></h4>
              Built a responsive micro-blog website built on top of the <a href="//yiiframework.com">PHP framework Yii.</a> The site also features a simplistic content management system.
          </li>
        </ul>
      </div>

      <div class="extracurricular">
        <h2 class="caps-title">Extracurricular</h2>
        <ul>
          <li><a href="http://gracehopper.org/2012/">Grace Hopper Conference Attendant</a><span class="date-right">Oct. 2012</span></li>
          <li>Academic Student Representative<span class="date-right">Sept. 2011 - Present</span></li>
              <li class="bullet">Represented the student body of the 2016 software program.</li>
          <li>Women in Engineering Volunteer<span class="date-right">Sept. 2011 - Present</span></li>
              <li class="bullet">Volunteered as a mentor to first year students.</li>
          <li>Waterloo Events Volunteer<span class="date-right">Sept. 2011 - Present</span></li>
          <li><a href="http://2012.cusec.net/">Canadian University Software Engineering Conference</a> <span class="date-right">Jan. 2012</span></li>
        </ul>
      </div>

      <div class="education">
        <h2 class="caps-title">Education</h2>
        <ul class="no-bullets">
          <li>
          Pursuing Bachelor of Software Engineering<span class="date-right">Sept. 2011 - Present</span> <br>
          Co-operative program, University of Waterloo
          </li>
        </ul>
      </div>
    </div> <!-- end col-2 -->
  </div> <!-- end contents -->
</body>
