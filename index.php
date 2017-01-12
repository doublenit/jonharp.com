<?php
	$items = array(
		'WEB'=>array(
			array("title"=>"Creative Inquiry (CI)","img"=>"img/ci_site.png","info"=>"I developed a project management web application for the Creative Inquiry program at Clemson University. With this app our program has been able to track enrollment, funding, and accomplishments (publications, awards, etc.) over the life of the projects.","highlights"=>array("Utilized iROAR (Banner) for student and faculty data","Connected with Clemson University financial information systems for up-to-date funding information", "Created recruiting feature to allow projects seeking students to automatically add their project information to a student recruiting web app"),"link"=>"","link_txt"=>""),
			array("title"=>"Research+Innovation Month","img"=>"img/rim_site.png","info"=>"April is Research+Innovation Month at Clemson University. I created this site as the Creative Inquiry office managed the campus-wide effort during the first year. The Division of Research has taken over management of the month's activities, but I continue to maintain the site.","highlights"=>array("Event submission form for any Clemson-affiliated group", "Excel reporting of approved events"),"link"=>"http://clemson.edu/rim","link_txt"=>"View Page"),
			array("title"=>"Watt Center","img"=>"img/watt_ex_2.png","info"=>"I created Tour, Course, and Event request web applications for the Watt Center. Beyond that, I have done a lot of ad-hoc web work for the Watt Center including surveys, reporting, sign-in forms, event information pages, and provided consulting on the public homepage.","highlights"=>array("Multi-layered approval process","Utilized iROAR (Banner) for class data"),"link"=>"http://ci.clemson.edu/watt/request/tour","link_txt"=>"View Tour Request"),
			array("title"=>"Event Sign Ins","img"=>"img/sign_in.png","info"=>"I do custom sign-in pages for Creative Inquiry and other organizations' events. With just a laptop and a printer, this page can serve as the interface of a sign-in kiosk. The page records the attendee's information in our database, then automatically prints a nametag.","highlights"=>array("Created as nametag printer kiosk for events", "Integration with University database for user major/department info"),"link"=>"","link_txt"=>""),
			array("title"=>"Reporting","img"=>"img/accounts_site.png","info"=>"Utilizing project information and admin input, I created a dynamic accounting page for departmental business/accounting employees. This page allows the user to view info on each active CI project in their department, including project leaders, amount allocated, account numbers, and current balance.","highlights"=>array("Allows users to monitor project fund balances", "Connects with Clemson University financial information systems"),"link"=>"","link_txt"=>""),
			array("title"=>"Other CI Work","img"=>"img/annual_site.png","info"=>"I provide web forms to enhance the Creative Inquiry experience for our project managers and students. Some examples include semester/annual reports, travel grant requests, poster board rental, faculty and graduate team leader award nominations, and surveys.","highlights"=>false,"link"=>"","link_txt"=>""),
		),
		'PRINT'=>array(
			array("title"=>"CI Annual Report","img"=>"img/annual_report.png","info"=>"I designed the 2015-2016 Creative Inquiry annual report.","highlights"=>array("Produced with Adobe Creative Suite", "Ensured strong adherence to University brand guidelines"),"link"=>"docs/annual_report.pdf","link_txt"=>"View PDF"),
			array("title"=>"FoCI Program","img"=>"img/foci_program.png","info"=>"I designed the 2015-2016 Focus on Creative Inquiry event program.","highlights"=>array("Produced with Adobe Creative Suite"),"link"=>"docs/foci_2016.pdf","link_txt"=>"View PDF"),
			array("title"=>"Decipher","img"=>"img/decipher.png","info"=>"I consulted with Creative Inquiry students on the production of our magazine <em>Decipher</em>. For the latest issue I edited photos, edited and created layouts, and assisted in proofreading.","highlights"=>false,"link"=>"docs/decipher_2016.pdf","link_txt"=>"View PDF"),
		),
		'GRAPHICS'=>array(
			array("title"=>"CI Logo","img"=>"img/ci_burst.gif","info"=>"I created this header for the \"CI News\" email newsletter. I also repurposed it as the background of a call to action on Twitter.","highlights"=>false,"link"=>"https://twitter.com/ciclemson/status/773155338354847744","link_txt"=>"View tweet"),
			array("title"=>"Social Media","img"=>"img/welcome.gif","info"=>"I created this gif for the CI Twitter account to welcome students back to Clemson for the 2016-2017 academic year.","highlights"=>false,"link"=>"https://twitter.com/ciclemson/status/769194590742147072","link_txt"=>"View tweet"),
			array("title"=>"Advertisments","img"=>"img/soc.jpg","info"=>"I produced many graphics for use on the digital signage in the Watt Center.","highlights"=>false,"link"=>"","link_txt"=>""),
		),
		'PERSONAL'=>array(
			array("title"=>"Tiger Press","img"=>"img/tiger_press.png","info"=>"Though now abandoned by CCIT, there was plan of putting together a university-wide app for Clemson called, \"Tiger Press\", of which the Decipher app would be a part. This was a logo I worked up for it while in the development phase.","highlights"=>false,"link"=>"","link_txt"=>""),
			array("title"=>"T-shirt Design","img"=>"img/shirt.png","info"=>"I designed a shirt for one of my favorite bands, BABY BABY. I did the crying baby logo and sent it to them on Twitter. They decided to print some on tie-dye to help promote their new album, <em>Semifamous</em>.","highlights"=>false,"link"=>"http://babybabyblows.bigcartel.com/","link_txt"=>"See the shirt"),
			array("title"=>"ACC Academic Consortium","img"=>"img/acciac_site.png","info"=>"I redesigned the acciac.org site. The old site had been hacked and the design was outdated. I used WordPress for the content management so that ACCAC staff can easily update and maintain the site.","highlights"=>array("Worked directly with ACCAC Coordinator", "Utilized existing content management system to allow easy administration"),"link"=>"http://acciac.org/","link_txt"=>"View site"),
			// array("title"=>"","img"=>"img/.png","info"=>"","highlights"=>false,"link"=>"","link_txt"=>""),
		),
	);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Jon Harp</title>
	<meta name="description" content="Jon Harp's resume and examples of work.">
	<meta name="author" content="Jon Harp">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="/favicon.ico">
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- unveil -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/unveil/1.3.0/jquery.unveil.min.js"></script>
	<!-- stylesheet -->
	<link rel="stylesheet" href="styles.css">
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-12417179-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>
<body>

	<nav class="navbar navbar-default" id="top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="./">JON HARP</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a id="web_link" href="#web">Web</a></li>
					<li><a href="#print">Print</a></li>
					<li><a href="#graphics">Graphics</a></li>
					<li><a href="#personal">Personal</a></li>
					<li><a href="#resume">Resume</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<?php foreach($items AS $k=>$v) : ?>

			<?php if($k=='WEB') : ?>

				<?php echo '<h2 id="'.strtolower($k).'">'.$k.'</h2>'; ?>
				<?php foreach($v AS $x) : ?>
					<div class="row panel panel-default">
						<div class="panel-body">
							<div class="col-sm-12"><h4><?php echo $x['title']; ?></h4></div>
							<div class="col-sm-8">
								<img src="img/bg.png" data-src="<?php echo $x['img']; ?>" alt="example of <?php echo $x['title']; ?> work">
							</div>
							<div class="col-sm-4">
								<p><?php echo $x['info']; ?></p>
								<?php if(is_array($x['highlights'])) : ?>
									<p>PROJECT HIGHLIGHTS</p>
									<ul>
										<?php 
											foreach($x['highlights'] AS $h) {
												echo '<li>'.$h.'</li>';
											}
										?>
									</ul>
								<?php endif; ?>
								<?php 
									if($x['link'] != '') {
										echo '<a href="'.$x['link'].'">'.$x['link_txt'].'</a>';
									}
								?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>

			<?php else : ?>

				<?php echo '<h2 id="'.strtolower($k).'">'.$k.'</h2>'; ?>
				<div class="row panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="row">
									<?php foreach($v AS $x) : ?>
										<div class="col-sm-<?php echo ceil(12/count($v)); ?>">
											<h4><?php echo $x['title']; ?></h4>
											<img src="img/bg.png" data-src="<?php echo $x['img']; ?>" alt="example of <?php echo $x['title']; ?> work">
											<p><?php echo $x['info']; ?></p>
											<?php if(is_array($x['highlights'])) : ?>
												<p>PROJECT HIGHLIGHTS</p>
												<ul>
													<?php 
														foreach($x['highlights'] AS $h) {
															echo '<li>'.$h.'</li>';
														}
													?>
												</ul>
											<?php endif; ?>
											<?php 
												if($x['link'] != '') {
													echo '<a href="'.$x['link'].'">'.$x['link_txt'].'</a>';
												}
											?>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php endif; ?>


		<?php endforeach; ?>

		<h2 id="resume">RESUME</h2>
		<div class="row panel panel-default">
			<div class="panel-body">
				<h4>ABOUT</h4>
				<p>I have eight years of full-stack web programming experience in a university setting. I love working with creative people, and I keep a clean workspace.</p>
				<h4>EXPERIENCE</h4>
				<h5>Web Developer  - Clemson University Creative Inquiry program: Clemson, SC - 2012–Present</h5>
				<p>Maintaining a project management web application for all Creative Inquiry projects. Maintaining all forms, websites, and applications associated with Creative Inquiry and related programs. Designing Creative Inquiry print and digital communications.</p>
				<h5>Programmer/Analyst II-III - Texas Tech University School of Nursing: Lubbock, TX - 2009–2011</h5>
				<p>Designing and maintaining original and existing web applications and sites including web forms, web-based tutorials, and databases. Prioritizing projects and maintaining School of Nursing public website with adherence to Texas Tech University Health Sciences Center Identity Guidelines. Producing video and graphics content for School of Nursing courses. PC setup and support for students, faculty, and staff. Supporting customers with internet-based applications on computers and mobile devices.</p>
				<h5>Designer - Texas Tech University School of Art: Lubbock, TX - 2008-2009</h5>
				<p>Produced video, print, and web communications projects aimed at recruiting new students, attracting and retaining donors, and gaining awareness for community outreach programs. Supported faculty with Mac hardware and software issues.</p>
				<h5>Graphic Designer/Installer  - Bowen Technovation: Indianapolis, IN - 2007-2008</h5>
				<p>Performed website maintenance, designed print and web content. Installed industry specific lighting and audio-visual equipment in planetariums and exhibit spaces.</p>
				<h4>EDUCATION</h4>
				<p>Ball State University - Bachelor of Arts Telecommunications - 2004</p>
				<h4>SKILLS</h4>
				<p>HTML, CSS, PHP, MySQL, jQuery, Adobe Creative Suite, Bootstrap and Foundation frameworks</p>
				<h4>REFERENCES</h4>
				<p>Available on request</p>
			</div>
		</div>
	</div>

	<div id="scroller"><a class="btn btn-default" href="#top"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a></div>

</body>
</html>
<script>
	// Thanks to Chris at css-tricks.com for this!
	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
	$.fn.isOnScreen = function(){
	    var win = $(window);
	    var viewport = {
	        top : win.scrollTop(),
	        left : win.scrollLeft()
	    };
	    viewport.right = viewport.left + win.width();
	    viewport.bottom = viewport.top + win.height();
	    var bounds = this.offset();
	    bounds.right = bounds.left + this.outerWidth();
	    bounds.bottom = bounds.top + this.outerHeight();
	    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
	};
	$(window).scroll(function() {
		$('#top').isOnScreen() == true ? $('#scroller').fadeOut() :  $('#scroller').fadeIn();
	});
	$(document).ready(function() {
		$("img").unveil(250);
	});
</script>