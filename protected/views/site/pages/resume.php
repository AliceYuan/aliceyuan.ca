<?php
$this->pageTitle=Yii::app()->name . ' - Resume';
$this->layout = 'blank';
?>

<style type="text/css">
        <!--
		
		/* WHOLE CONTENT ---start*/
		body {
			width: 850px;
			padding:0px;
			margin:0px auto;
			background: #FFFFFF;
      color: black;
		}
		.resume
		{
			font-family: "Palatino Linotype", Book Antiqua, Palatino, serif;
            width: 850px;
			font-size: 16px;
			padding:0px;
			margin:0px auto;
			background: #FFFFFF;
		}
		
		.resume.page {
				line-height: 150%;
		}
		.resume a {
				margin: 0px;
				padding: 0px;
				text-decoration: none
		}
		.resume table *{
				border-spacing:0px;
				margin: 0px;
				padding: 0px;
		}
		/* WHOLE CONTENT ---end*/
		
		
		
		
		/* HEADER CONTENT ---start*/
		
        .resume h1 {
				padding-left:35px;
				text-transform: uppercase;
                font-size: 60px;
				font-weight: 900;
                text-align:left;
				line-height: 95%;
        }
		.resume h1#Alice {
			color: #333;
			margin: 0px;
			padding: 0px;
			padding-top:15px;
			padding-bottom:3px;
			padding-left: 35px;
			border-bottom: 3px solid #555;
			
		}
		.resume h1#Yuan{
				color: #666;
				padding-left:85px;
		}
		
		.rightcol{
				vertical-align:bottom;
                text-align:right;
                width:75%;
				line-spacing:110%;
        }

		.resume h2 {
                font-size: 18px;
                color:#333;
                margin-top: 30px;
                margin-bottom: 10px;
                border-bottom: 2px solid #555;
                text-transform: uppercase;
        }
		.resume h3{
				border-bottom: 3px solid #555;
		}
		.indent{
				margin-left:22px;
		}
		
        .header {
                border: 0px;
				margin-bottom: 40px;
                
        }
		
		
		/* HEADER CONTENT ---end*/
		
		/* BODY CONTENT -start */
        .resume table{
                width: 100%;
				border-spacing:0px;
        }
        table.format1{
                margin-bottom: 5px;
        }
        table.format2{
                margin-bottom: 3px;
        }
        ul.cbul{
				list-style-type: circle;
                margin-left: 50px;
                margin-bottom: 10px;
        }
        .resume ul,li p{
				margin:0px;
				padding: 0px;
				margin-left: 25px;
		}
		.resume ul {
                margin-left: 20px;
                margin-bottom: 15px;            
        }
        .resume li {
                margin-left: 25px;
                padding-top: 4px;
                padding-left: 10px;
                margin-bottom: 0px;
        }
        .aleft{
                text-align:left;
				margin:0px;
				padding: 0px;
        }
        .aright{
                text-align:right;
				margin:0px;
				padding: 0px;
        }
		/*.awhite{
				color:white;
		}*/
		
		.resume i{
				margin:0px;
				padding: 0px;
		}
		.resume strong{
				margin:0px;
				padding: 0px;
		}
		/*BODY CONTENT ---end*/
		
		/*PRINT RULES*/
        @media print
        {
        .break 
		{
			page-break-after:always;
			
		}
		a 
		{
			color:#000;
			text-decoration:none;
		}
		body{
			margin:0px;
			padding:0px;
		}
        }
        -->
</style>



</head>



<body lang="EN-US">
	<div class="resume">
	<div class="page">
		<div class="header">

		<table>
		
		
		
			
			<tr class="line" >
			<td>
							<h1 id= "Alice">Alice</h1>
			</td>
			<td class="contactinfo rightcol">
						<strong>1B Software Engineering</strong><br>
						<a href="yuan.alice93@gmail.com" class="awhite">yuan.alice93@gmail.com</a><br>
						<a href="https://github.com/AliceYuan">https://github.com/AliceYuan</a><br>
						<h3></h3>
						
			</td>

			
			</tr>
			<tr>
				<td>
							<h1 id= "Yuan">Yuan</h1>
				</td>
				<td class="address rightcol">
					(519) 577-4068<br>
					3488 Southwick Street,
					Mississauga, ON, L5M 7L4<br>
				</td>

			</tr>
			
		</table>

		</div>

		<!--

		<h2>OBJECTIVE</h2>
		<div class="indent">
			this sentence will change depending on the job position, job requirements and company. 
		</div>
		-->
		
		<h2>SUMMARY OF QUALIFICATIONS</h2>
			<ul>
					<li>Attended and gained valuable programming skills through Google Computer Science Summer Institute</li>
					
					<!--<li>Strong creative background obtained through attending a Regional Arts Secondary School as a visual arts major</li>-->
					
					<li>Leadership ability demonstrated by unifying group towards common goals in team projects and volunteering events</li>
					
					<li>Enthusiastic and proficient learner who voluntarily learns unfamiliar material and assimilates them to tasks </li>
					
					<li>Innovative problem-solver who generates workable solutions and resolves complaints under pressure</li>
					
					<li>Strong verbal and written communication skills with a final English mark of 95% </li>
			</ul>
		

		<h2>TECHNICAL PROFICIENCY</h2>
			<ul>
					<li>Programming Languages: Proficient in C and Python. Familiar with C++, Java and Actionscript.</li> 
					
					<li>Web Development Languages: HTML, CSS, Javascript</li>
					
					<li>Tools/Platforms: Mercurial, Git, Bash, App Engine SDK for Python </li>
					
					<li>Skills: Working in UNIX environment, deploying websites using App Engine</li>
					
					<li>Operating Systems: Ubuntu, Windows XP/Vista/7, Macintosh OSX</li>
					
					<li>Application Software: Microsoft Office, Open Office, Adobe CS5 Creative Suite</li>
			</ul>


	


		<h2>TECHNICAL EXPERIENCE</h2>

			<table class="format1">
				<tr>
					<td class="aleft"> <strong>Google Computer Science Summer Institute</strong></td>
					<td class="aright">Mountain View, CA</td>
				</tr>
				<tr>
					<td class="aleft"> <i>Educational Summer Enrichment Program, Google Headquarters</i></td>
					<td class="aright"> <i>June 2011 - July 2011</i></td>
				</tr>
			</table>
			<ul>
					<li>Selected out of hundreds of applicants to partake in a three week enrichment program at Google Headquarters</li>
					
					<li>Gained valuable knowledge about version control, deploying websites, time management and presentational skills</li>
					
					<li>Built and deployed web application game which can be found at: <a href="http://tictactoe-cssi.appspot.com">http://tictactoe-cssi.appspot.com</a></li>
					
					<li>Overtook responsibility as project manager who prioritized and motivated team towards completion of the application</li>
					
					<li>Presented application to employees and students and was voted best overall web application</li>


			</ul>
			
			
		<h2>VOLUNTEER EXPERIENCE</h2>
		
		
		
			<table class="format1">
				<tr>
						<td class="aleft"> <strong>Academic Student Representative</strong></td>
						<td class="aright">Waterloo, ON</td>
				</tr>
				<tr>
						<td class="aleft"> <i>University of Waterloo</i></td>
						<td class="aright"> <i>Sept. 2011 - Present</i></td>
				</tr>
			</table>
			<ul>
					<li>Represented as the voice of the student body of the 2016 Undergraduate Software Engineering Program</li>
					
					<li>Took initiative by talking to and emailing professors before the regular divisional meetings</li>
					
					<li>Created surveys to effectively gain feedback from the student body and relayed them in meetings</li>
			</ul>
			
	
			<!-- PAGE BREAK-->
			<div class="break"></div>		
			
			
			
			
			
			
			
			
			
			<table class="format1">
				<tr>
						<td class="aleft"> <strong>Waterloo Events Assistant</strong></td>
						<td class="aright">Waterloo, ON</td>
				</tr>
				<tr>
						<td class="aleft"> <i>University of Waterloo</i></td>
						<td class="aright"> <i>Sept. 2011 - Present</i></td>
				</tr>
			</table>
			
			<ul>
					<li>Actively volunteered in numerous University Waterloo events including the events: Fall Open House, Shadow Day and "Go Eng Girl" an event for 7th to 9th grade girls which introduced them to engineering</li>
					<li>Generated interest amongst prospective students about attending the University of Waterloo</li>
			</ul>
			
			
			<table class="format1">
				<tr>
						<td class="aleft"> <strong>Graphics Designer</strong></td>
						<td class="aright">Mississauga, ON</td>
				</tr>
				<tr>
						<td class="aleft"> <i>Peel Board Trustee Campaign</i></td>
						<td class="aright"> <i>Apr. 2010 - Sept. 2010</i></td>
				</tr>
			</table>
			<ul>
					<li>Cooperated with a Peel Board Trustee Candidate to design business cards, flyers and a website</li>
					<li>Applied knowledge of self-taught HTML in the creation of the website</li>
			</ul>

		
		
		
		<h2>EDUCATION</h2>

		<table class="format1">
			<tr>
					<td class="aleft"> <strong>Pursuing for Bachelor of Software Engineering</strong></td>
					<td class="aright">Waterloo, ON</td>
			</tr>
			<tr>
					<td class="aleft"> <i>Co-operative Program, University of Waterloo</i></td>
					<td class="aright"> <i>Sept. 2011 - Present</i></td>
			</tr>
		</table>
		
		
		<div class="indent">
				<strong>Relevant Assignment:</strong><br>
				<table class="format2">
					<tr>
							<td class="aleft"> <i>LEGO Robotics Project, Introduction to Software Engineering</i></td>
							<td class="aright"> <i>Sept. 2011 - Nov. 2011</i></td>
					</tr>
				</table>
		
		
		</div>
		<ul class="cbul">
				<li>Programmed an autonomous robot to navigate an obstacle course using the built-in colour detection sensors</li>
				<li>Fully tested, documented, and compiled a comprehensive report on the robotics project</li>
				<li>Actively discussed with team members and shared solutions to effectively solve issues with the robot</li>
		</ul>


		<table class="format1">
			<tr>
					<td class="aleft"> <strong>Ontario Secondary School Diploma</strong></td>
					<td class="aright">Mississauga, ON</td>
			</tr>
			<tr>
					<td class="aleft"> <i>Cawthra Park Secondary School</i></td>
					<td class="aright"> <i>Oct. 2011</i></td>
			</tr>
		</table>
		
		<ul>
		<li>Regional Arts Program: Visual Arts Major</li>
		</ul>
		<div class="indent">	
			<strong>Relevant Assignment:</strong><br>


			<table class="format2">
			<tr>
						<td class="aleft"> <i>Cribbage Project, Introduction to Computer Science</i></td>
						<td class="aright"> <i>Nov. 2009 - Jan. 2010</i></td>
			</tr>
			</table>
		</div>
			<ul class="cbul">
					<li>Created a fully functional ASCII version of the card game, cribbage in collaboration with teammates</li>

					<li>Exceeded expectations by further incorporating self-taught material, and takes advantage of the cross-platform module, Pygame to create a more user friendly graphical user interface</li>

					<li>Received a final grade of 100%</li>
			</ul>
		

		<h2>AWARDS AND CERTIFICATES</h2>
			<ul>
					<li><strong>Citizenship Award</strong> , Cawthra Park Secondary School, Mississauga, ON, <i>2011</i></li>
					<li><strong>Mississauga Youth Achievement Award for 'Most Dedicated'</strong>, Peel Volunteering, Mississauga, ON, <i>2010</i></li>
			</ul>


		<h2>EXTRACURRICULARS ACTIVITIES AND INTERESTS</h2>
			<table class="format3">
				<tr>
					<td class="aleft"><strong>Humanoid Robotics Team</strong>, University of Waterloo, Waterloo, ON</td>
					<td class="aright"> <i>Nov. 2011 - Present</i></td>
				</tr>
				<tr>
					<td class="aleft"><strong>Women in Engineering</strong>, University of Waterloo, Waterloo, ON</td>
					<td class="aright"> <i>Sept. 2011 - Present</i></td>
				</tr>
				<tr>
					<td class="aleft"><strong>Canadian University Software Engineering Conference</strong>, Montreal, QC</td>
					<td class="aright"> <i>Jan. 2012</i></td>
				</tr>
				<tr>
					<td class="aleft"><strong>Ontario Women in Computing Conference</strong>, University of Toronto, Toronto, ON</td>
					<td class="aright"> <i>Oct. 2011</i></td>
				</tr>
				<tr>
					<td class="aleft"><strong>Environmental Club</strong>, Cawthra Park Secondary School, Mississauga, ON</td>
					<td class="aright"> <i>Sept. 2010 - June 2011</i></td>
				</tr>
				<tr>
					<td class="aleft"><strong>Yearbook Layout Editor</strong>, Cawthra Park Secondary School, Mississauga, ON</td>
					<td class="aright"> <i>Oct. 2010 - May 2011</i></td>
				</tr>
			</table>
			
			
			
	</div>
	</div>
