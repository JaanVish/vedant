<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Vedant Games - Play Fantasy Sports Online & Win Big</title>

	<link rel="shortcut icon" href="assets/backend/images/fav.png" type="image/x-icon">
	<link rel="stylesheet" href="assets/backend/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/backend/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/backend/css/jquery-ui.css">
	<link rel="stylesheet" href="assets/backend/css/plugin/nice-select.css">
	<link rel="stylesheet" href="assets/backend/css/plugin/magnific-popup.css">
	<link rel="stylesheet" href="assets/backend/css/plugin/slick.css">
	<link rel="stylesheet" href="assets/backend/css/arafat-font.css">
	<link rel="stylesheet" href="assets/backend/css/plugin/animate.css">
	<link rel="stylesheet" href="assets/backend/css/style.css">
</head>

<body>
	<!-- start preloader -->
	<div class="preloader" id="preloader"></div>
	<!-- end preloader -->

	<!-- Scroll To Top Start-->
	<a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
	<!-- Scroll To Top End -->


	<!-- header-section start -->
	<header class="header-section user-dashboard">
		<div class="overlay">
			<div class="container">
				<div class="row d-flex header-area">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="home">
							<img src="assets/backend/images/logo.png" class="logo" alt="logo">
						</a>
						<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
							<i class="fas fa-bars"></i>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbar-content">
							<ul class="navbar-nav mr-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="home">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="games">Games</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="challenges">Challenges</a>
								</li>
								<li class="nav-item dropdown main-navbar">
									<a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-auto-close="outside">Pages</a>
									<ul class="dropdown-menu main-menu shadow">
										<li><a class="nav-link" href="privacy-policy">Privacy Policy</a></li>
										<li><a class="nav-link" href="terms-conditions">Terms Conditions</a></li>
										<li><a class="nav-link" href="faqs">Faqs</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact">Contact</a>
								</li>
							</ul>
							<div class="right-area header-action d-flex align-items-center max-un">


								<?php if (1 == 1) : ?>
									<button type="button" class="login" data-bs-toggle="modal" data-bs-target="#loginMod">
										Login
									</button>
									<button type="button" class="cmn-btn reg" data-bs-toggle="modal" data-bs-target="#loginMod">
										Sign Up
									</button>
								<?php else : ?>

									<div class="single-item user-area">
										<div class="user-btn d-flex align-items-center">
											<span class="user-profile">
												<img src="assets/backend/images/dashboard-profile-1.png" alt="icon">
											</span>
											<span class="name-area">Jonh</span>
											<i class="icon-c-down-arrow"></i>
										</div>
										<div class="main-area user-content">
											<div class="head-area d-flex">
												<div class="img-area">
													<img src="assets/backend/images/dashboard-profile-2.png" alt="icon">
												</div>
												<div class="text-area">
													<h5>John Doe</h5>
													<div class="d-flex align-items-center">
														<img src="assets/backend/images/icon/calendar-icon-2.png" alt="icon">
														<span>Joined Oct, 2021</span>
													</div>
												</div>
											</div>
											<ul>
												<li class="border-area">
													<a href="javascript:void(0)" class="active">
														<img src="assets/backend/images/icon/dashboard-icon.png" alt="icon">
														<p class="mdr">Dashboard</p>
													</a>
												</li>
												<li>
													<a href="javascript:void(0)">
														<img src="assets/backend/images/icon/subscriptions-icon.png" alt="icon">
														<p class="mdr">My Subscriptions</p>
													</a>
												</li>
												<li class="border-area">
													<a href="javascript:void(0)">
														<img src="assets/backend/images/icon/settings-icon.png" alt="icon">
														<p class="mdr">Accountring Settings</p>
													</a>
												</li>
												<li>
													<a href="javascript:void(0)">
														<img src="assets/backend/images/icon/memberships-icon.png" alt="icon">
														<p class="mdr">Manage Memberships</p>
													</a>
												</li>
												<li class="border-area">
													<a href="javascript:void(0)">
														<img src="assets/backend/images/icon/history-icon.png" alt="icon">
														<p class="mdr">Transaction History</p>
													</a>
												</li>
											</ul>
										</div>
									</div>
								<?php endif; ?>


							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- header-section end -->


	<!-- Login Registration start -->
	<div class="log-reg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="modal fade" id="loginMod">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header justify-content-center">
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<ul class="nav log-reg-btn justify-content-around">
									<li class="bottom-area" role="presentation">
										<button class="nav-link" id="regArea-tab" data-bs-toggle="tab" data-bs-target="#regArea" type="button" role="tab" aria-controls="regArea" aria-selected="false">
											SIGN UP
										</button>
									</li>
									<li class="bottom-area" role="presentation">
										<button class="nav-link active" id="loginArea-tab" data-bs-toggle="tab" data-bs-target="#loginArea" type="button" role="tab" aria-controls="loginArea" aria-selected="true">
											LOGIN
										</button>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="loginArea" role="tabpanel" aria-labelledby="loginArea-tab">
										<div class="login-reg-content">
											<div class="modal-body">
												<div class="head-area">
													<h6 class="title">Login Direetly With</h6>
													<div class="social-link d-flex align-items-center">
														<a href="javascript:void(0)" class="active"><i class="fab fa-facebook-f"></i></a>
														<a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
														<a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
														<a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
													</div>
												</div>
												<div class="form-area">
													<form action="login_check" method="post">
														<div class="row">
															<div class="col-12">
																<div class="single-input">
																	<label for="logemail">Email</label>
																	<input type="email" id="logemail" placeholder="Email Address">
																</div>
																<div class="single-input">
																	<label for="logpassword">Password</label>
																	<input type="password" id="logpassword" placeholder="Email Password">
																</div>
															</div>
															<div class="col-12">
																<div class="remember-me">
																	<a href="javascript:void(0)">Forgot Password ?</a>
																</div>
															</div>
															<span class="btn-border w-100">
																<button type="submit" class="cmn-btn w-100">LOGIN</button>
															</span>
														</div>
													</form>
													<div class="bottom-area text-center">
														<p>Not a member ? <a href="javascript:void(0)" class="reg-btn">Register</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="regArea" role="tabpanel" aria-labelledby="regArea-tab">
										<div class="login-reg-content regMode">
											<div class="modal-body">
												<div class="head-area">
													<h6 class="title">Register On Vedant Games</h6>
													<div class="social-link d-flex align-items-center">
														<a href="javascript:void(0)" class="active"><i class="fab fa-facebook-f"></i></a>
														<a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
														<a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
														<a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
													</div>
												</div>
												<div class="form-area">
													<form action="register" method="post">
														<div class="row">
															<div class="col-12">
																<div class="single-input">
																	<label for="name">Name</label>
																	<input type="text" name="name" id="name" placeholder="Name">
																</div>
																<div class="single-input">
																	<label for="regemail">Email</label>
																	<input type="email" name="email" id="regemail" placeholder="Email Address">
																</div>
																<div class="single-input">
																	<label for="regpassword">Password</label>
																	<input type="password" name="password" id="regpassword" placeholder="Email Password">
																</div>
																<div class="single-input">
																	<label for="phone">Phone</label>
																	<input type="tel" name="phone" id="phone" placeholder="Phone">
																</div>
															</div>
															<span class="btn-border w-100">
																<button type="submit" class="cmn-btn w-100">SIGN UP</button>
															</span>
														</div>
													</form>
													<div class="bottom-area text-center">
														<p>Already have an member ? <a href="javascript:void(0)" class="log-btn">Login</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Login Registration end -->

	<?= $this->renderSection('content') ?>

	<!-- Footer Area Start -->
	<footer class="footer-section">
		<div class="container pt-120">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="newsletter">
						<div class="section-header text-center">
							<h3 class="title">Don't miss out on Fantastic News</h3>
							<p>Subscribe to our newsletter and be the first to receive news</p>
						</div>
						<form action="#">
							<div class="form-group d-flex align-items-center">
								<input type="text" placeholder="Enter Your Email">
								<button><img src="assets/backend/images/icon/send-icon.png" alt="icon"></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom-area pt-120">
				<div class="row">
					<div class="col-xl-12">
						<div class="menu-item">
							<a href="home" class="logo">
								<img src="assets/backend/images/logo.png" alt="logo">
							</a>
							<ul class="footer-link">
								<li><a href="home">Home</a></li>
								<li><a href="about">About</a></li>
								<li><a href="support-help">Support</a></li>
								<li><a href="contact">Contact</a></li>
								<li><a href="terms-conditions">Terms of Services</a></li>
								<li><a href="privacy-policy">Privacy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-12">
						<div class="copyright">
							<div class="copy-area">
								<p> Copyright ?? <a href="home">Vedant Games</a> | Designed with
									<a href="#" class="auth">??????</a>
								</p>
							</div>
							<div class="social-link d-flex align-items-center">
								<a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
								<a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
								<a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
								<a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Area End -->

	<!--==================================================================-->
	<script src="assets/backend/js/jquery.min.js"></script>
	<script src="assets/backend/js/jquery-ui.js"></script>
	<script src="assets/backend/js/bootstrap.min.js"></script>
	<script src="assets/backend/js/fontawesome.js"></script>
	<script src="assets/backend/js/plugin/slick.js"></script>
	<script src="assets/backend/js/plugin/jquery.nice-select.min.js"></script>
	<script src="assets/backend/js/plugin/counter.js"></script>
	<script src="assets/backend/js/plugin/waypoint.min.js"></script>
	<script src="assets/backend/js/plugin/jquery.magnific-popup.min.js"></script>
	<script src="assets/backend/js/plugin/wow.min.js"></script>
	<script src="assets/backend/js/plugin/plugin.js"></script>
	<script src="assets/backend/js/main.js"></script>
</body>

</html>