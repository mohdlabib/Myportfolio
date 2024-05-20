<?php 
	require_once 'app/ini.php';

	// section greating
	$greating = query("SELECT * FROM greeting")[0];
	
	// section about me
	$about = query("SELECT * FROM about_mes")[0];

	// section EXPERIENCE
	$experiences = query("SELECT * FROM experiences");

	// section EDUCATION
	$educations = query("SELECT * FROM education");

	// section SKILL
	$skills = query("SELECT * FROM skills");

	// section knowledges
	$knowledges = query("SELECT * FROM knowledge");

	// section portfolios
	$portfolios = query("SELECT * FROM portfolios");

	// section contact me
	$contactMe = query("SELECT * FROM contact_mes")[0];

	// iii
	$ages = $about['age'];
	$phones = $contactMe['phone'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?= $greating['name'] ?> - CV</title>
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<html oncontextmenu="return false">

	<!-- Mobile Specific Metas -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Load Fonts -->
	<link
		href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,100,300italic,300,100italic,400italic,500,500italic,700,700italic&amp;subset=latin,cyrillic'
		rel='stylesheet'>

	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/glitche-basic.css" />
	<link rel="stylesheet" href="assets/css/glitche-layout.css" />
	<link rel="stylesheet" href="assets/css/ionicons.css" />
	<link rel="stylesheet" href="assets/css/magnific-popup.css" />
	<link rel="stylesheet" href="assets/css/animate.css" />

	<link rel="stylesheet" href="assets/css/main.min.css">

	<!-- color random -->
	<link rel="stylesheet" href="" id="randomColor" />
	<link rel="stylesheet" href="" id="darkMode" />

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="home">

	<!-- Preloader -->
	<div class="preloader">
		<div class="centrize full-width">
			<div class="vertical-center">
				<div class="pre-inner">
					<div class="load typing-load">
						<p>loading...</p>
					</div>
					<span class="typed-load"></span>
				</div>
			</div>
		</div>
	</div>

	<!-- Container -->
	<div class="container">


		<!-- Wrapper -->
		<div class="wrapper">

			<header>
				<button class="button-dark sun"><i class="fa-regular fa-sun"></i></button>
			</header>

			<!-- Started -->
			<div class="section started">
				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content">
							<div class="h-title glitch-effect" data-text="I'm Mohd Labib">I'm
								<span><?= $greating['name'] ?></span>
							</div>
							<div class="h-subtitle typing-subtitle">
								<p><?= $greating['firstSlogan'] ?>.</p>
								<p><?= $greating['secondSlogan'] ?>.</p>
							</div>
							<span class="typed-subtitle"></span>
						</div>
					</div>
				</div>
				<a href="#" class="mouse_btn"><span class="ion ion-mouse"></span></a>
			</div>

			<!-- About -->
			<div class="section about" id="section-resume">
				<div class="content">
					<div class="title">
						<div class="title_inner">About Me</div>
					</div>
					<div class="image">
						<img src="<?= $about['photo'] ?>" alt="" />
					</div>
					<div class="desc">
						<p><?= $about['desc'] ?></p>
						<div class="info-list">
							<ul>
								<li><strong>Name:</strong> <?= $about['name'] ?></li>
								<li><strong>Age:</strong> <span id="year"></span> Years</li>
								<li><strong>Job:</strong> <?= $about['job'] ?></li>
								<li><strong>Citizenship:</strong> <?= $about['citizenship'] ?></li>
								<li><strong>Residence: </strong> <?= $about['residence'] ?></li>
								<li><strong>E-mail:</strong> dev@labibweb.my.id</li>
							</ul>
						</div>
						<div class="bts"><a href="<?= $about['url'] ?>" class="btn fill"
								data-text="Download CV">Download CV</a></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<!-- Resume -->
			<div class="section resume">
				<div class="content">
					<div class="cols">
						<div class="col col-md">
							<div class="title">
								<div class="title_inner">Experience</div>
							</div>
							<div class="resume-items">
								<?php foreach($experiences as $exp): ?>
								<div class="resume-item">
									<div class="date"><?= deleteTtl($exp['dateStart']) ?> - <?= deleteTtl(nowYear($exp['dateEnd'])) ?></div>
									<div class="name"><?= $exp['experience'] ?></div>
								</div>
								<?php endforeach ?>
							</div>
						</div>
						<div class="col col-md">
							<div class="title">
								<div class="title_inner">Education</div>
							</div>
							<div class="resume-items">
								<?php foreach($educations as $eds): ?>
								<div class="resume-item">
									<div class="date"><?= deleteTtl($eds['dateStart']) ?> - <?= deleteTtl(nowYear($eds['dateEnd'])) ?></div>
									<div class="name"><?= $eds['school'] ?></div>
								</div>
								<?php endforeach ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Skills -->
			<div class="section skills">
				<div class="content">
					<div class="title">
						<div class="title_inner">Skills</div>
					</div>
					<div class="skills circles">
						<?php foreach($skills as $skill): ?>
						<span class="skill-badge"><?= $skill['icon'] ?> <?= $skill['language'] ?></span>
						<?php endforeach ?>
					</div>
				</div>
			</div>

			<!-- Knowledge -->
			<div class="section skills" id="section-skills">
				<div class="content">
					<div class="title">
						<div class="title_inner">Knowledge</div>
					</div>
					<div class="skills list">
						<ul>
							<?php foreach($knowledges as $know): ?>
							<li>
								<div class="name"><?= $know['know'] ?></div>
							</li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>

			<!-- Portfolio -->
			<div class="section works portfolio" id="section-works">
				<div class="content">
					<div class="title">
						<div class="title_inner">portfolio</div>
					</div>
					<div class="filter-menu">
						<div class="filters">
							<div class="btn-group">
								<label data-text="All" class="glitch-effect">
									<input type="radio" name="fl_radio" value=".box-item" />All
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Web">
									<input type="radio" name="fl_radio" value=".f-web" />Web
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Arduino">
									<input type="radio" name="fl_radio" value=".f-arduino" />Arduino
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Desktop">
									<input type="radio" name="fl_radio" value=".f-desktop" />Desktop
								</label>
							</div>
							<div class="btn-group">
								<label data-text="Network">
									<input type="radio" name="fl_radio" value=".f-network" />Network
								</label>
							</div>
							<div class="btn-group">
								<label data-text="mobile">
									<input type="radio" name="fl_radio" value=".f-mobile" />Mobile
								</label>
							</div>
						</div>
					</div>

					<div class="box-items portfolio-items" id="app"></div>

					<div class="clear"></div>
				</div>
			</div>

			<!-- Contacts Info -->
			<div class="section contacts" id="section-contacts">
				<div class="content">
					<div class="title">
						<div class="title_inner">Contacts</div>
					</div>
					<div class="service-items">
						<div class="service-item">
							<div class="icon"><span class="ion ion-android-phone-portrait"></span></div>
							<div class="name">Phone</div>
							<p>
								+(62) <span class="hide censor">ㅤㅤㅤ ㅤ ㅤㅤ</span>
							</p>
						</div>
						<div class="service-item">
							<div class="icon"><span class="ion ion-email"></span></div>
							<div class="name">Email</div>
							<p>
								<a href="mailto:<?= $contactMe['email'] ?>"><?= $contactMe['email'] ?></a>
							</p>
						</div>
						<div class="service-item">
							<div class="icon"><span class="ion ion-ios-location"></span></div>
							<div class="name">Address</div>
							<p>
								<?= $contactMe['Address'] ?>
							</p>
						</div>
					</div>
					<div class="contact_form">
					<form id="contact" name="contact">
						<div class="group-val">
							<input type="text" name="name" id="nameMsg" placeholder="Name" required />
						</div>
						<div class="group-val ct-gr">
							<textarea name="message" placeholder="Message" id="Msg" required></textarea>
						</div>
						<button type="submit" class="btn fill" data-text="Send Message">Send Message</button>
					</form>
				</div>
				</div>
			</div>

		</div>

		<!-- Footer -->
		<footer>
			<div class="soc">
				<a target="_blank" href="https://github.com/mohdlabib"><span class="ion ion-social-github"></span></a>
				<a target="_blank" href="https://www.instagram.com/mohd_labib_"><span class="ion ion-social-instagram-outline"></span></a>
			</div>
			<div class="copy">© <span id="yearCopy"></span> ❤ <?= $greating['name'] ?>.</div>
			<div class="clr"></div>
		</footer>

		<audio id="backgroundMusic" loop>
			<source src="assets/backsound.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
		</audio>
	</div>

	<!-- script -->

	<!-- jQuery Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/typed.js"></script>
	<script src="assets/js/magnific-popup.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/isotope.pkgd.js"></script>

	<script>
		let tanggalLahir = '<?php echo $ages; ?>';
		let nomorNi = '<?php echo $phones; ?>';
		let dataPort = <?php echo json_encode($portfolios); ?>;
	</script>
	
	<!-- Main Scripts -->
	<script src="assets/js/glitche-scripts.js"></script>
	<script src="assets/js/main.js"></script>
	 <script src="assets/js/inspect.js"></script> 
</body>

</html>
