<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
================================================== -->
	<meta charset="utf-8">
	<title>Constra - Construction Html5 Template</title>

	<!-- Mobile Specific Metas
================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Construction Html5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name=author content="Themefisher">
	<meta name=generator content="Themefisher Constra HTML Template v1.0">

	<!-- Favicon
================================================== -->
	<link rel="icon" type="image/png" href="images/favicon.png">

	<!-- CSS
================================================== -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/fontawesome/css/all.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/animate-css/animate.css">
	<!-- slick Carousel -->
	<link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/slick/slick.css">
	<link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/slick/slick-theme.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>plugins/colorbox/colorbox.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="<?= base_url('aset/constra/theme/') ?>css/style.css">

</head>

<body>
	<div class="body-inner">

		<div id="top-bar" class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<ul class="top-info text-center text-md-left">
							<li><i class="fas fa-map-marker-alt"></i>
								<p class="info-text">
									<?= $konfigurasi->alamat; ?>
								</p>
							</li>
						</ul>
					</div>
					<!--/ Top info end -->

					<div class="col-lg-4 col-md-4 top-social text-center text-md-right">
						<ul class="list-unstyled">
							<li>
								<a title="Facebook" href="https://facebbok.com/themefisher.com">
									<span class="social-icon"><i class="fab fa-facebook-f"></i></span>
								</a>
								<a title="Twitter" href="https://twitter.com/themefisher.com">
									<span class="social-icon"><i class="fab fa-twitter"></i></span>
								</a>
								<a title="Instagram" href="https://<?= $konfigurasi->ig; ?>">
									<span class="social-icon"><i class="fab fa-instagram"></i></span>
								</a>
								<a title="Linkdin" href="https://github.com/themefisher.com">
									<span class="social-icon"><i class="fab fa-github"></i></span>
								</a>
							</li>
						</ul>
					</div>
					<!--/ Top social end -->
				</div>
				<!--/ Content row end -->
			</div>
			<!--/ Container end -->
		</div>
		<!--/ Topbar end -->
		<!-- Header start -->
		<header id="header" class="header-two">
			<div class="site-navigation">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<nav class="navbar navbar-expand-lg navbar-light p-0">

								<div class="logo">
									<a class="d-block" href="<?= base_url('admin/dashboard/') ?>">
										<img loading="lazy" src="<?= base_url('aset/constra/source/') ?>images/logo-atmos.jpg" alt="Constra">
									</a>
								</div><!-- logo end -->

								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<div id="navbar-collapse" class="collapse navbar-collapse">
									<ul class="nav navbar-nav ml-auto align-items-center">
										<li class="nav-item dropdown active">
											<a href="<?= base_url() ?>" class="nav-link">Home</a>
											
										</li>

										<li class="nav-item">
											<a href="#" class="nav-link">About Us</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">Galeri</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">Penjualan</a>
										</li>
										<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
									</ul>
								</div>
							</nav>
						</div>
						<!--/ Col end -->
					</div>
					<!--/ Row end -->
				</div>
				<!--/ Container end -->

			</div>
			<!--/ Navigation end -->
		</header>
		<!--/ Header end -->

		<div class="banner-carousel banner-carousel-2 mb-0">
			<div class="banner-carousel-item" style="background-image:url(<?= base_url('aset/temadmin/img/config/' . $konfigurasi->foto) ?>)">
				<div class="container">
					<div class="box-slider-content">
						<div class="box-slider-text">
							<h2 class="box-slide-title">17 Years Of Excellence In</h2>
							<h3 class="box-slide-sub-title">Construction Industry</h3>
							<p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward
								thinking team looking for talent like.</p>
							<p>
								<a href="services.html" class="slider btn btn-primary">Our Service</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="subscribe no-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="subscribe-call-to-acton">
							<h3>Can We Help?</h3>
							<h4>(+9) 847-291-4353</h4>
						</div>
					</div><!-- Col end -->

					<div class="col-lg-8">
						<div class="ts-newsletter row align-items-center">
							<div class="col-md-5 newsletter-introtext">
								<h4 class="text-white mb-0">Newsletter Sign-up</h4>
								<p class="text-white">Latest updates and news</p>
							</div>

							<div class="col-md-7 newsletter-form">
								<form action="#" method="post">
									<div class="form-group">
										<label for="newsletter-email" class="content-hidden">Newsletter Email</label>
										<input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
									</div>
								</form>
							</div>
						</div><!-- Newsletter end -->
					</div><!-- Col end -->

				</div><!-- Content row end -->
			</div>
			<!--/ Container end -->
		</section>




		<section id="ts-service-area" class="ts-service-area pb-0">
			<div class="container">
				<div class="row text-center">
					<div class="col-12">
						<h2 class="section-title">We Are Specialists In</h2>
						<h3 class="section-sub-title">What We Do</h3>
					</div>
				</div>
				<!--/ Title row end -->

				<div class="row">
					<div class="col-lg-4">
						<div class="ts-service-box d-flex">
							<div class="ts-service-box-img">
								<img loading="lazy" src="<?= base_url('aset/constra/theme/') ?>images/icon-image/service-icon1.png" alt="service-icon">
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="#">Home Construction</a></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
							</div>
						</div><!-- Service 1 end -->

						<div class="ts-service-box d-flex">
							<div class="ts-service-box-img">
								<img loading="lazy" src="<?= base_url('aset/constra/theme/') ?>images/icon-image/service-icon2.png" alt="service-icon">
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="#">Building Remodels</a></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
							</div>
						</div><!-- Service 2 end -->

						<div class="ts-service-box d-flex">
							<div class="ts-service-box-img">
								<img loading="lazy" src="<?= base_url('aset/constra/theme/') ?>images/icon-image/service-icon3.png" alt="service-icon">
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="#">Interior Design</a></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
							</div>
						</div><!-- Service 3 end -->

					</div><!-- Col end -->

					<div class="col-lg-4 text-center">
						<img loading="lazy" class="img-fluid" src="<?= base_url('aset/temadmin/img/about/' . $about->foto) ?>" alt="service-avater-image">
					</div><!-- Col end -->

					<div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
						<div class="ts-service-box d-flex">
							<div class="ts-service-box-img">
								<img loading="lazy" src="<?= base_url('aset/constra/theme/') ?>images/icon-image/service-icon4.png" alt="service-icon">
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="#">Exterior Design</a></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
							</div>
						</div><!-- Service 4 end -->

						<div class="ts-service-box d-flex">
							<div class="ts-service-box-img">
								<img loading="lazy" src="<?= base_url('aset/constra/theme/') ?>images/icon-image/service-icon5.png" alt="service-icon">
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="#">Renovation</a></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
							</div>
						</div><!-- Service 5 end -->

						<div class="ts-service-box d-flex">
							<div class="ts-service-box-img">
								<img loading="lazy" src="<?= base_url('aset/constra/theme/') ?>images/icon-image/service-icon6.png" alt="service-icon">
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="#">Safety Management</a></h3>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
							</div>
						</div><!-- Service 6 end -->
					</div><!-- Col end -->
				</div><!-- Content row end -->

			</div>
			<!--/ Container end -->
		</section><!-- Service end -->

		<section id="project-area" class="project-area solid-bg">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12">
						<h2 class="section-title">Work of Excellence</h2>
						<h3 class="section-sub-title">Recent Projects</h3>
					</div>
				</div>
				<!--/ Title row end -->

				<div class="row">
					<div class="col-12">
						<div class="row shuffle-wrapper">
							<div class="col-1 shuffle-sizer"></div>

							<div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
								<div class="project-img-container">
									<a class="gallery-popup" href="images/projects/project6.jpg" aria-label="project-img">
										<img class="img-fluid" src="<?= base_url('aset/constra/theme/') ?>images/projects/project6.jpg" alt="project-img">
										<span class="gallery-icon"><i class="fa fa-plus"></i></span>
									</a>
									<div class="project-item-info">
										<div class="project-item-info-content">
											<h3 class="project-item-title">
												<a href="projects-single.html">Ancraft Avenue House</a>
											</h3>
											<p class="project-cat">Residential</p>
										</div>
									</div>
								</div>
							</div><!-- shuffle item 6 end -->
						</div><!-- shuffle end -->
					</div>

					<div class="col-12">
						<div class="general-btn text-center">
							<a class="btn btn-primary" href="projects.html">View All Projects</a>
						</div>
					</div>

				</div><!-- Content row end -->
			</div>
			<!--/ Container end -->
		</section><!-- Project area end -->

	

		<section class="subscribe no-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="subscribe-call-to-acton">
							<h3>Can We Help?</h3>
							<h4>(+9) 847-291-4353</h4>
						</div>
					</div><!-- Col end -->

					<div class="col-lg-8">
						<div class="ts-newsletter row align-items-center">
							<div class="col-md-5 newsletter-introtext">
								<h4 class="text-white mb-0">Newsletter Sign-up</h4>
								<p class="text-white">Latest updates and news</p>
							</div>

							<div class="col-md-7 newsletter-form">
								<form action="#" method="post">
									<div class="form-group">
										<label for="newsletter-email" class="content-hidden">Newsletter Email</label>
										<input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
									</div>
								</form>
							</div>
						</div><!-- Newsletter end -->
					</div><!-- Col end -->

				</div><!-- Content row end -->
			</div>
			<!--/ Container end -->
		</section>
		<!--/ subscribe end -->

		<section id="news" class="news">
			<div class="container">
				<div class="row text-center">
					<div class="col-12">
						<h2 class="section-title">Work of Excellence</h2>
						<h3 class="section-sub-title">Recent Projects</h3>
					</div>
				</div>
				<!--/ Title row end -->

				<div class="row">
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="latest-post">
							<div class="latest-post-media">
								<a href="news-single.html" class="latest-post-img">
									<img loading="lazy" class="img-fluid" src="<?= base_url('aset/constra/theme/') ?>images/news/news3.jpg" alt="img">
								</a>
							</div>
							<div class="post-body">
								<h4 class="post-title">
									<a href="news-single.html" class="d-inline-block">Silicon Bench and Cornike Begin Construction Solar Facilities</a>
								</h4>
								<div class="latest-post-meta">
									<span class="post-item-date">
										<i class="fa fa-clock-o"></i> Aug 13, 2017
									</span>
								</div>
							</div>
						</div><!-- Latest post end -->
					</div><!-- 3rd post col end -->
				</div>
				<!--/ Content row end -->

				<div class="general-btn text-center mt-4">
					<a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>
				</div>

			</div>
			<!--/ Container end -->
		</section>
		<!--/ News end -->

		<footer id="footer" class="footer bg-overlay">
			<div class="footer-main">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-4 col-md-6 footer-widget footer-about">
							<h3 class="widget-title">About Us</h3>
							<img loading="lazy" width="200px" class="footer-logo" src="<?= base_url('aset/constra/source/') ?>images/footer-logo.png" alt="Constra">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
								labore et dolore magna aliqua.</p>
							<div class="footer-social">
								<ul>
									<li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
									</li>
									<li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
									<li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li>
								</ul>
							</div><!-- Footer social end -->
						</div><!-- Col end -->

						<div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
							<h3 class="widget-title">Working Hours</h3>
							<div class="working-hours">
								We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
								Hotline and Contact form.
								<br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
								<br> Saturday: <span class="text-right">12:00 - 15:00</span>
								<br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
							</div>
						</div><!-- Col end -->

						<div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
							<h3 class="widget-title">Services</h3>
							<ul class="list-arrow">
								<li><a href="service-single.html">Pre-Construction</a></li>
								<li><a href="service-single.html">General Contracting</a></li>
								<li><a href="service-single.html">Construction Management</a></li>
								<li><a href="service-single.html">Design and Build</a></li>
								<li><a href="service-single.html">Self-Perform Construction</a></li>
							</ul>
						</div><!-- Col end -->
					</div><!-- Row end -->
				</div><!-- Container end -->
			</div><!-- Footer main end -->

			<div class="copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="copyright-info">
								<span>Copyright &copy; <script>
										document.write(new Date().getFullYear())
									</script>, Designed &amp; Developed by <a href="https://themefisher.com">Themefisher</a></span>
							</div>
						</div>

						<div class="col-md-6">
							<div class="footer-menu text-center text-md-right">
								<ul class="list-unstyled">
									<li><a href="about.html">About</a></li>
									<li><a href="team.html">Our people</a></li>
									<li><a href="faq.html">Faq</a></li>
									<li><a href="news-left-sidebar.html">Blog</a></li>
									<li><a href="pricing.html">Pricing</a></li>
								</ul>
							</div>
						</div>
					</div><!-- Row end -->

					<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
						<button class="btn btn-primary" title="Back to Top">
							<i class="fa fa-angle-double-up"></i>
						</button>
					</div>

				</div><!-- Container end -->
			</div><!-- Copyright end -->
		</footer><!-- Footer end -->


		<!-- Javascript Files
  ================================================== -->

		<!-- initialize jQuery Library -->
		<script src="<?= base_url('aset/constra/theme/') ?>plugins/jQuery/jquery.min.js"></script>
		<!-- Bootstrap jQuery -->
		<script src="<?= base_url('aset/constra/theme/') ?>plugins/bootstrap/bootstrap.min.js" defer></script>
		<!-- Slick Carousel -->
		<script src="<?= base_url('aset/constra/theme/') ?>plugins/slick/slick.min.js"></script>
		<script src="<?= base_url('aset/constra/theme/') ?>plugins/slick/slick-animation.min.js"></script>
		<!-- Color box -->
		<script src="<?= base_url('aset/constra/theme/') ?>plugins/colorbox/jquery.colorbox.js"></script>
		<!-- shuffle -->
		<script src="<?= base_url('aset/constra/theme/') ?>plugins/shuffle/shuffle.min.js" defer></script>


		<!-- Google Map API Key-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
		<!-- Google Map Plugin-->
		<script src="<?= base_url('aset/constra/theme/') ?>plugins/google-map/map.js" defer></script>

		<!-- Template custom -->
		<script src="<?= base_url('aset/constra/theme/') ?>js/script.js"></script>

	</div><!-- Body inner end -->
</body>

</html>