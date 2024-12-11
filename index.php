<?php
include './dnl_dashboard/PHP/config/db_conn.php';

// Set default language
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

// Query to fetch services
$sql = "SELECT * FROM service";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>KCT-Homepage</title>
	<meta name="description" content="KCT - KC Transtics ">
	<meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, page builder, shipment, transport, transportation, truck, trucking">
	<meta name="author" content="Themexriver">
	<link rel="shortcut icon" href="assets/img/logo/Logo KCT -No BG-01.png" type="image/x-icon">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/video.min.css">
	<link rel="stylesheet" href="assets/css/animated-slider.css">
	<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/rs6.css">
	<link rel="stylesheet" href="assets/css/slick-theme.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
		.ft-banner-text-content .cd-words-wrapper b,
		.ft-banner-text-content p {
			text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
			/* Adjust for desired effect */
			color: white;
			/* This is the text fill color */
		}

		.ft-banner-text-content h1 {
			text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
			/* Adjust for desired effect */
			color: white;
		}

		.ft-banner-text-content .cd-words-wrapper b {
			text-shadow: -1px -1px 0 #ffffff, 1px -1px 0 #ffffff, -1px 1px 0 #ffffff, 1px 1px 0 #ffffff;
			/* Adjust for desired effect */
			color: #864ce0;
			/* This is the text fill color */
		}

		.ft-banner-btn a {
			text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
			color: white;
		}

		.ft-about-feature-list-item {
			border: 2px solid #4D148C;

			/* Optional: Add padding for better appearance */
			border-radius: 8px;
			/* Optional: Add border-radius for rounded corners */
			background-color: white;
			/* Optional: Add background color for better contrast */
		}

		.ft-why-choose-feature-list-item-2 {
			border: 1px solid #4D148C;

			/* Optional: Add padding for better appearance */
			border-radius: 8px;
			/* Optional: Add border-radius for rounded corners */
			background-color: white;
			/* Optional: Add background color for better contrast */
		}

		.ft-banner-text-content .ft-banner-btn-wrapper .ft-banner-btn a {
			height: 55px;
			width: 170px;
			font-weight: 600;
			font-family: "Poppins";
			border-radius: 30px;
			border: 4px solid #fff;
			box-shadow: 3px 4px 10px #4D148C;
			background-color: #864ce0;
			/* Keeps the background color */
			color: #fff;
			/* Text color to contrast with the background */
			transition: all 0.3s ease-in-out;
		}

		.ft-banner-text-content .ft-banner-btn-wrapper .ft-banner-btn a:hover {
			/* Ensures background color stays the same on hover */
			box-shadow: 0px 8px 20px #4D148C;
			transform: translateY(-5px);
			border: 4px solid #fff;
			background-color: transparent !important;
		}
	</style>
</head>

<body>
	<?php include "./hearder.php" ?>


	<!-- End of header section
	============================================= -->

	<!-- Start of banner section
	============================================= -->
	<section id="ft-banner" class="ft-banner-section" data-background="assets/Cover01.jpg">
		<div class="ft-banner-content">
			<div class="container">
				<div class="ft-banner-text-content headline pera-content text-center">
					<h1 class="cd-headline letters scale">Shipping Products
						<span class="cd-words-wrapper">
							<b class="is-visible">WorldWide</b>
							<b>Safely</b>
							<b>Everywhere</b>
						</span>
					</h1>
					<p>KC Transtics is a professional logistics and transportation company that has been providing services in Cambodia for over 20 years.</p>
					<div class="ft-banner-btn-wrapper d-flex justify-content-center align-items-center">
						<div class="ft-banner-btn" style="display: flex;">
							<a class="d-flex justify-content-center align-items-center" href="service.html">Our Services</a>
							<a class="d-flex justify-content-center align-items-center" href="service.html" style="margin-left: 10px;">About Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of banner section
	============================================= -->

	<!-- Start of featured section
	============================================= -->
	<section id="ft-featured" class="ft-featured-section">
		<div class="container">
			<div class="ft-section-title-2 headline pera-content text-center">
				<span class="sub-title">Featured</span>
				<h2>The unique qualities that make
					<span>KCT Logistics</span> special.
				</h2>
			</div>
			<div class="ft-featured-content">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="ft-featured-innerbox position-relative">
							<div class="ft-featured-icon">
								<i class="flaticon-pricing"></i>
							</div>
							<div class="ft-featured-text headline pera-content">
								<h3><a href="service-single.html" class="lang-en">Transparent Pricing</a>
									<a href="service-single.html" class="lang-km" style="display:none;">តម្លៃយ៉ាងច្បាស់លាស់</a>
								</h3>
								<p class="lang-en">We are committed to providing our customers with the highest quality of service and good price.</p>
								<p class="lang-km" style="display:none;">យើងផ្តល់នូវសេវាកម្មដែលមានគុណភាពខ្ពស់បំផុត មានភាពច្បាស់លាល់ ទំនុកចិត្ត និងតម្លៃល្អទៅអតិថិជនរបស់យើង។</p>
								<div class="ft-btn-2"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="ft-featured-innerbox position-relative">
							<div class="ft-featured-icon">
								<i class="flaticon-deadline"></i>
							</div>
							<div class="ft-featured-text headline pera-content">
								<h3><a href="service-single.html" class="lang-en">Real Time Tracking</a>
									<a href="service-single.html" class="lang-km" style="display:none;">ការតាមដានបន្តផ្ទាល់</a>
								</h3>
								<p class="lang-en">We can get your goods to you quickly and efficiently, even if you need them on short notice.</p>
								<p class="lang-km" style="display:none;">យើងអាចផ្តល់ទំនិញរបស់អ្នកបានយ៉ាងឆាប់រហ័សនិងមានប្រសិទ្ធភាព ទោះបីជាអ្នកត្រូវការទំនិញនៅពេលបន្ទាន់ក៏ដោយ។</p>
								<div class="ft-btn-2"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="ft-featured-innerbox position-relative">
							<div class="ft-featured-icon">
								<i class="flaticon-warehouse"></i>
							</div>
							<div class="ft-featured-text headline pera-content">
								<h3><a href="service-single.html" class="lang-en">Warehouse Storage</a>
									<a href="service-single.html" class="lang-km" style="display:none;">ស្តុកឃ្លាំង</a>
								</h3>
								<p class="lang-en">We offer a variety of warehousing services, including storage, picking and packing.</p>
								<p class="lang-km" style="display:none;">យើងផ្តល់ជូននូវសេវាកម្មស្តុកឃ្លាំងជាច្រើនប្រភេទ រួមទាំងផ្ទុក ការជ្រើសរើស និងការវេចខ្ចប់ ជាមួយនឹងសេវាកម្មបន្ថែមជាមូលដ្ឋាន។</p>
								<div class="ft-btn-2"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End of featured section
	============================================= -->

	<!-- Start of Product mesurment section
	============================================= -->
	<section id="ft-product-mesurment" class="ft-product-mesurment-section">
		<div class="container">
			<div class="ft-product-mesurment-content position-relative">
				<span class="ft-pm-bg-img position-absolute"><img src="https://html.themexriver.com/fastrans/assets/img/bg/pm-bg.png" alt=""></span>
				<div class="row">
					<div class="col-lg-8">
						<div class="ft-product-mesurment-form">
							<div class="ft-product-mesurment-tab-btn">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Request A Quote</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Track & Trace</button>
									</li>
								</ul>
							</div>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<div class="ft-product-mesurment-form-input">
										<form action="./Quotation/kc_quotation.php" method="POST">
											<div class="ft-product-mesurment-form-input-area">
												<label class="ft-pm-title">Personal Data</label>
												<div class="row">
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="text" name="name" id="name" placeholder="Your Name Here">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="text" name="company" id="company" placeholder="Company">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="email" name="email" id="email" placeholder="Your Email">
														</div>
													</div>
												</div>
											</div>
											<div class="ft-product-mesurment-form-input-area">
												<label class="ft-pm-title">Shipment Date</label>
												<div class="row">
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="text" name="phone" id="phone" placeholder="Phone">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="text" name="type_of_goods" id="type_of_goods" placeholder="Type of goods">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="text" name="quantity" id="quantity" placeholder="Quantity">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="Text" name="city" id="city" placeholder="City">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="Text" name="country" id="country" placeholder="Country">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="date" name="shipping_date" id="shipping_date" placeholder="Shipping date">
														</div>
													</div>
												</div>
											</div>

											<button type="submit">Request For A Quote</button>
										</form>
									</div>
								</div>
								<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<div class="ft-product-mesurment-form-input">
										<form action="" method="POST">
											<div class="ft-product-mesurment-form-input-area">
												<label class="ft-pm-title">Personal Data</label>
												<div class="row">
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="text" placeholder="First Name">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="text" placeholder="Last Name">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="ft-pm-input">
															<input type="email" placeholder="Your Email">
														</div>
													</div>
													<div class="col-lg-12">
														<div class="ft-pm-input">
															<input type="text" placeholder="Your Tracking Id">
														</div>
													</div>
												</div>
											</div>
											<button>Track & Trace</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of Product mesurment section
	============================================= -->

	<!-- Start of Service section
	============================================= -->
	<section id="ft-service-3" class="ft-service-section-3">
		<div class="container" style="padding-top: 20px;">
			<div class="ft-section-title-3 headline text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" >
				<span class="text-uppercase" style="margin-top:50px;"></span>
				<h2>Specialist Logistics Services</h2>
			</div>
			<div class="ft-service-content-3">
				<div class="ft-service-content-items-3">
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="ft-service-innerbox-3 position-relative">
								<div class="ft-service-img position-relative">
									<img src="https://html.themexriver.com/fastrans/assets/img/service/ser4.jpg" alt="">
								</div>
								<div class="ft-service-text-icon position-relative">
									<div class="ft-service-icon d-flex align-items-center justify-content-center position-absolute">
										<i class="flaticon-plane"></i>
									</div>
									<div class="ft-service-text position-relative headline pera-content">
										<h3><a href="service-single.php?id=17">Air Freight Service</a></h3>
										<p> We offer a variety of freight options, including full container load, less than container load, and air freight and help you find the best freight option for your needs. </p>
									</div>
								</div>
								<div class="more-btn position-absolute">
									<a class="d-flex align-items-center justify-content-center text-uppercase" href="service-single.php?id=17">Read more <i class="far fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
							<div class="ft-service-innerbox-3 position-relative">
								<div class="ft-service-img position-relative">
									<img src="https://html.themexriver.com/fastrans/assets/img/service/ser6.jpg" alt="">
								</div>
								<div class="ft-service-text-icon position-relative">
									<div class="ft-service-icon d-flex align-items-center justify-content-center position-absolute">
										<i class="flaticon-boat"></i>
									</div>
									<div class="ft-service-text position-relative headline pera-content">
										<h3><a href="service-single.php?id=19">Sea Transportation</a></h3>
										<p>We have a team of experienced professionals who are dedicated to providing our customers with the best possible service.</p>
									</div>
								</div>
								<div class="more-btn position-absolute">
									<a class="d-flex align-items-center justify-content-center text-uppercase" href="service-single.php?id=19">Read more <i class="far fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
							<div class="ft-service-innerbox-3 position-relative">
								<div class="ft-service-img position-relative">
									<img src="https://html.themexriver.com/fastrans/assets/img/service/ser8.jpg" alt="">
								</div>
								<div class="ft-service-text-icon position-relative">
									<div class="ft-service-icon d-flex align-items-center justify-content-center position-absolute">
										<i class="flaticon-free-shipping"></i>
									</div>
									<div class="ft-service-text position-relative headline pera-content">
										<h3><a href="service-single.php?id=22">Road Transportation</a></h3>
										<p>Our company understand that sometimes things don't go according to plan, and that's why we offer last-minute delivery services even if you need them on short notice.</p>
									</div>
								</div>
								<div class="more-btn position-absolute">
									<a class="d-flex align-items-center justify-content-center text-uppercase" href="service-single.php?id=22">Read more <i class="far fa-arrow-right"></i></a>
								</div>
							</div> 
						</div>
					</div>
				</div>
				<div class="ft-service-more-btn d-flex flex-wrap justify-content-center align-items-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
					<span>Our list of services does not end here. Find out how we can help you and your business.
					</span> <a class="text-uppercase align-items-center justify-content-center d-flex" href="service.php" >More Services</a>
				</div>
			</div>
		</div>
	</section>

	<!-- End of Service section
	============================================= -->

	<section class="ft2-investment-section">
		<div class="auto-container">
			<div class="sec-title-two">
				<div class="title lang-en">We are KC Transtics</div>
				<div class="title lang-km" style="display: none;">We are KC Transtics</div><br>
				<h2 class="lang-en">Our investment in a <br> modern fleet</h2>
				<h3 class="lang-km" style="display: none;">ការវិនិយោគរបស់យើងក្នុងជើងហោះហើរទំនើប</h3>
			</div>

			<div class="row clearfix">

				<!-- Feature Block Three -->
				<div class="ft2-feature-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="hover-layer"></div>
						<h5 class="lang-en">Our Vision</h5>
						<h5 class="lang-km" style="display: none;">ចក្ខុវិស័យរបស់យើង</h5>
						<div class="text">
							<span class="lang-en">To be the leading logistics and transportation company in Cambodia. We want to be known for our reliability, efficiency, and customer service and be the company that businesses and individuals can rely on to get their goods where they need to go, on time and within budget.</span>
							<span class="lang-km" style="display: none;">ដើម្បីក្លាយជាក្រុមហ៊ុនដឹកជញ្ជូន និងលូតលាស់ឈានមុខគេនៅកម្ពុជា។ យើងចង់ឱ្យគេស្គាល់យើងតាមភាពជឿជាក់ ប្រសិទ្ធភាព និងសេវាកម្មអតិថិជន រួមទាំងក្រុមហ៊ុនដែលអាជីវកម្ម និងបុគ្គលអាចពឹងផ្អែកទៅលើការដឹកជញ្ជូនទំនិញរបស់ពួកគេជាមួយគ្រោងពេលវេលាដែលត្រឹមត្រូវ និងថវិកាដែលសមស្រប។</span>
						</div>
					</div>
				</div>

				<!-- Feature Block Three -->
				<div class="ft2-feature-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="hover-layer"></div>
						<h5 class="lang-en">Our Mission</h5>
						<h5 class="lang-km" style="display: none;">បេសកកម្មរបស់យើង</h5>
						<div class="text">
							<span class="lang-en">Provide our customers with the best possible logistics and transportation services. We want to make it easy for our customers to ship their goods, and we want to do it in a way that is both reliable and efficient. Providing customer service and build long-term relationships with our customers.</span>
							<span class="lang-km" style="display: none;">ផ្ដល់សេវាដឹកជញ្ជូន និងដឹកជញ្ជូនល្អបំផុតដល់អតិថិជនរបស់យើង។ យើងចង់ធ្វើឱ្យការដឹកជញ្ជូនទំនិញរបស់អតិថិជនយើងកាន់តែងាយស្រួល ហើយយើងចង់ធ្វើវាជា វិធីសាស្រ្តមួយដែលទាំងអាចទុកចិត្ត និងមានប្រសិទ្ធភាព។ ផ្តល់សេវាកម្មអតិថិជន និងសាងសង់ទំនាក់ទំនងអាណិតអាស្រ័យយ៉ាងវែងជាមួយអតិថិជនរបស់យើង។</span>
						</div>
					</div>
				</div>

				<!-- Feature Block Three -->
				<div class="ft2-feature-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="hover-layer"></div>
						<h5 class="lang-en">Our Value</h5>
						<h5 class="lang-km" style="display: none;">តម្លៃរបស់យើង</h5>
						<div class="text">
							<span class="lang-en">We prioritize integrity and excellence in every aspect of our work. Our commitment to customer satisfaction drives us to deliver reliable and tailored logistics solutions. We believe in fostering a collaborative and supportive environment where innovation thrives and our team can excel.</span>
							<span class="lang-km" style="display: none;">យើងដាក់សំខាន់លើភាពស្មោះត្រង់ និងភាពល្អឥតខ្ចោះក្នុងគ្រប់ផ្នែកនៃការងាររបស់យើង។ ការប្តេជ្ញាចិត្តរបស់យើងដើម្បីការមកចេញសេវាកម្មល្អដល់អតិថិជន បានជំរុញឱ្យយើងនាំយកដំណោះស្រាយដឹកជញ្ជូនដែលអាចទុកចិត្ត និងផ្តល់សេវាដែលផ្ដោតលើតម្រូវការជាក់ស្តែងរបស់អតិថិជន។</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End of About section
	============================================= -->

	<!-- Start of Experience section
	============================================= -->
	<section id="ft-experience" class="ft-experience-section">
		<div class="container">
			<div class="ft-experience-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ft-experience-text">
							<div class="ft-section-title-2 headline pera-content">
								<span class="sub-title">Experience</span>
								<h2>Global Shipping Partner
									To World’s Famous Companies
								</h2>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ft-experience-circle-progress">
							<div class="row">
								<div class="col-lg-4">
									<div class="counter-boxed text-center headline position-relative">
										<div class="graph-outer">
											<input type="text" class="dial" data-fgColor="#4D148C" data-bgColor="#fff" data-width="80" data-height="80" data-linecap="round" value="95">
											<div class="inner-text count-box"><span class="count-text" data-stop="95" data-speed="3500"></span>%</div>
										</div>
										<h3 class="lang-en">Warehousing</h3>
										<h3 class="lang-km" style="display:none;">ឃ្លាំង</h3>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="counter-boxed text-center headline position-relative">
										<div class="graph-outer">
											<input type="text" class="dial" data-fgColor="#4D148C" data-bgColor="#fff" data-width="80" data-height="80" data-linecap="round" value="85">
											<div class="inner-text count-box"><span class="count-text" data-stop="85" data-speed="3500"></span>%</div>
										</div>
										<h3 class="lang-en">Ocean Freight</h3>
										<h3 class="lang-km" style="display:none;">តាមសមុទ្រ</h3>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="counter-boxed text-center headline position-relative">
										<div class="graph-outer">
											<input type="text" class="dial" data-fgColor="#4D148C" data-bgColor="#fff" data-width="80" data-height="80" data-linecap="round" value="90">
											<div class="inner-text count-box"><span class="count-text" data-stop="90" data-speed="3500"></span>%</div>
										</div>
										<h3 class="lang-en">Air Freight</h3>
										<h3 class="lang-km" style="display:none;">ដឹកជញ្ជូនតាមអាកាស</h3>
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
	</section>
	<!-- End of Experience section
	============================================= -->

	<!-- Start of Project section
	============================================= -->
	<section id="ft-portfolio-2" class="ft-portfolio-section-2 position-relative">
		<div class="ft-section-title-2 headline pera-content text-center">
			<span class="sub-title">Project</span>
			<h2>Let's Checkout our All
				Latest Project
			</h2>
		</div>
		<div class="ft-portfolio-content-2">
			<div class="ft-portfolio-slider-2">
				<div class="ft-portfolio-slider-item">
					<div class="ft-portfolio-slider-innerbox position-relative">
						<div class="ft-portfolio-img">
							<img src="assets/img/project/port18.jpg" alt="">
						</div>
						<div class="ft-portfolio-text headline headline pera-content">
							<h3><a href="project-single.html"></a></h3>
							<p class="lang-en">Our service of prepare your product with the safety places</p>
							<p class="lang-km" style="display:none;">សេវាកម្មរបស់យើងត្រៀមផលិតផលរបស់អ្នកជាមួយនឹងកន្លែងសុវត្ថិភាព</p>
						</div>
					</div>
				</div>

				<div class="ft-portfolio-slider-item">
					<div class="ft-portfolio-slider-innerbox position-relative">
						<div class="ft-portfolio-img">
							<img src="assets/img/project/GTVProject.jpg" alt="">
						</div>
						<div class="ft-portfolio-text headline headline pera-content">
							<p class="lang-en">Imports of components for the assembly of GTV vehicles in Cambodia</p>
							<p class="lang-km" style="display:none;">ការនាំចូលផ្នែកផ្សេងៗសម្រាប់ការរចនាតាមរថយន្ត GTV នៅកម្ពុជា</p>
						</div>
					</div>
				</div>

				<div class="ft-portfolio-slider-item">
					<div class="ft-portfolio-slider-innerbox position-relative">
						<div class="ft-portfolio-img">
							<img src="assets/img/project/port15.jpg" alt="">
						</div>
						<div class="ft-portfolio-text headline headline pera-content">
							<p class="lang-en">Import Laying cable under water</p>
							<p class="lang-km" style="display:none;">ការនាំចូលដាក់ខ្សែការចូលក្រោមទឹក</p>
						</div>
					</div>
				</div>

				<div class="ft-portfolio-slider-item">
					<div class="ft-portfolio-slider-innerbox position-relative">
						<div class="ft-portfolio-img">
							<img src="assets/img/project/port10.jpg" alt="">
						</div>
						<div class="ft-portfolio-text headline headline pera-content">
							<p class="lang-en">Import Fixed Column for LIEBHERR CARGO CRANE</p>
							<p class="lang-km" style="display:none;">ការនាំចូលបង្គោលថេរសម្រាប់យន្តហោះផ្ទុក LIEBHERR</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End of Project section
	============================================= -->

	<!-- Start of Testimonial section
	============================================= -->

	<!-- End of Testimonial section
	============================================= -->

	<!-- Start of FAQ why choose  section
	============================================= -->
	<section id="ft-faq-why-choose-us" class="ft-faq-why-choose-us-section">
		<div class="container">
			<div class="ft-faq-why-choose-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ft-faq-content">
							<div class="ft-section-title-2 headline pera-content">
								<h2>
									<span class="lang-en">Discover Frequently Asked Questions from <span>Our Support</span></span>
									<span class="lang-km" style="display:none;">សំណួរដែលសួរញឹកញាប់ពី <span>អតិថិជនដែលបានទទួលសេវាកម្មរបស់យើង</span></span>
								</h2>
							</div>
							<div class="accordion" id="accordionExample">
								<div class="accordion-item headline pera-content">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<span class="lang-en">Can I specify a delivery date when ordering?</span>
											<span class="lang-km" style="display:none;">តើខ្ញុំអាចបញ្ជាក់កាលបរិច្ឆេទដឹកជញ្ជូននៅពេលបញ្ជាទិញបានទេ?</span>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<span class="lang-en">We will show you the delivery dates based on your location and shipping method. You can also check the estimated delivery time, which is the expected time when the shipped order will be delivered to the final destination.</span>
											<span class="lang-km" style="display:none;">យើងនឹងបង្ហាញកាលបរិច្ឆេទដឹកជញ្ជូនដោយផ្អែកលើទីតាំងនិងវិធីសាស្ត្រដឹកជញ្ជូនរបស់អ្នក។ អ្នកក៏អាចពិនិត្យមើលពេលវេលាដឹកជញ្ជូនប៉ាន់ស្មានដែលជាពេលវេលាកាលបរិច្ឆេទដែលការបញ្ជាទិញនឹងត្រូវបានដឹកជញ្ជូនដល់ទីតាំងចុងក្រោយ។</span>
										</div>
									</div>
								</div>
								<div class="accordion-item headline pera-content">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<span class="lang-en">What payment methods are supported?</span>
											<span class="lang-km" style="display:none;">តើវិធីសាស្ត្រទូទាត់ណាខ្លះត្រូវបានគាំទ្រ?</span>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<span class="lang-en">There are many payment methods that you can use for payment, such as credit and debit cards, bank transfers, virtual wallets, and buy now, pay later services. Each has its own advantages and disadvantages, such as security, convenience, and fees.</span>
											<span class="lang-km" style="display:none;">មានវិធីសាស្ត្រទូទាត់ជាច្រើនដែលអ្នកអាចប្រើប្រាស់សម្រាប់ការទូទាត់ដូចជាកាតឥណទាននិងកាតឥណទានការផ្ទេរប្រាក់តាមធនាគារកាប៉ូតង់និងសេវាកម្មទិញឥឡូវនេះសងក្រោយ។ វិធីសាស្ត្រទូទាត់ទាំងនេះមានអត្ថប្រយោជន៍និងគុណវិបត្តិរបស់ខ្លួនដូចជាការពារ, ភាពងាយស្រួលនិងតម្លៃសេវា។</span>
										</div>
									</div>
								</div>
								<div class="accordion-item headline pera-content">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<span class="lang-en">What is Federation of International Trade Association?</span>
											<span class="lang-km" style="display:none;">តើអង្គការសហព័ន្ធពាណិជ្ជកម្មអន្តរជាតិនេះជាអ្វី?</span>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<span class="lang-en">The Federation of International Trade Associations (FITA) is an organization that fosters international trade by strengthening the role of local, regional, and national associations that have an international mission. It is located in Reston, Virginia, and New York, New York, USA, and was founded in 1984.</span>
											<span class="lang-km" style="display:none;">សហព័ន្ធសមាគមពាណិជ្ជកម្មអន្តរជាតិ (FITA) គឺជាអង្គការដែលជំរុញពាណិជ្ជកម្មអន្តរជាតិនិងការរីកចម្រើននៃសមាគមនានាដែលមានបេសកកម្មអន្តរជាតិ។ វាត្រូវបានបង្កើតឡើងនៅ Reston រដ្ឋ Virginia និង New York រដ្ឋ New York សហរដ្ឋអាមេរិកហើយត្រូវបានបង្កើតឡើងនៅឆ្នាំ 1984។</span>
										</div>
									</div>
								</div>
								<div class="accordion-item headline pera-content">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<span class="lang-en">How can I track my shipments?</span>
											<span class="lang-km" style="display:none;">តើខ្ញុំអាចតាមដានការដឹកជញ្ជូនរបស់ខ្ញុំបានយ៉ាងដូចម្តេច?</span>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<span class="lang-en">For tracking your shipment, please visit TRACK SHIPMENT and enter your tracking ID (Order ID/Mobile No.). Then, click on the 'Track Order Now' button to retrieve the shipment information.</span>
											<span class="lang-km" style="display:none;">សម្រាប់ការតាមដានការដឹកជញ្ជូនរបស់អ្នកសូមចូលទៅកាន់ TRACK SHIPMENT ហើយបញ្ចូលលេខសម្គាល់ការតាមដានរបស់អ្នក (លេខបញ្ជាទិញ / លេខទូរស័ព្ទ)។ បន្ទាប់មកចុចប៊ូតុង 'Track Order Now' ដើម្បីទទួលបានព័ត៌មានការដឹកជញ្ជូន។</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ft-why-choose-content-2">
							<div class="ft-section-title-2 headline pera-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
								<span class="sub-title"><span class="lang-en">Why Choose Us</span><span class="lang-km" style="display:none;">ហេតុអ្វីត្រូវជ្រើសរើសសេវាកម្មរបស់យើង</span></span>
								<h2><span class="lang-en">Why You Like KC Logistics?</span><span class="lang-km" style="display:none;">ហេតុអ្វីបានជាអ្នកចូលចិត្ត KCT?</span></h2>
							</div>
							<div class="ft-why-choose-feature-wrapper-2">
								<div class="row">
									<div class="col-lg-6">
										<div class="ft-why-choose-feature-list-item-2">
											<div class="ft-why-choose-feature-icon">
												<i class="fal fa-clipboard-list-check"></i>
											</div>
											<div class="ft-why-choose-feature-text headline pera-content">
												<h3><span class="lang-en">Experiences</span><span class="lang-km" style="display:none;">បទពិសោធន៍</span></h3>
												<p><span class="lang-en">Years of experience (Since 2005), Special HR and Strong trucking partners</span><span class="lang-km" style="display:none;">មានបទពិសោធជាច្រើនឆ្នាំ (ចាប់តាំងពីឆ្នាំ 2005) មានបុគ្គលិកផ្នែកធនធានមនុស្ស និងប្រព័ន្ធដឹកជញ្ជូនទំនើប</span></p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="ft-why-choose-feature-list-item-2">
											<div class="ft-why-choose-feature-icon">
												<i class="flaticon-shield-1"></i>
											</div>
											<div class="ft-why-choose-feature-text headline pera-content">
												<h3><span class="lang-en">Good Management</span><span class="lang-km" style="display:none;">ការគ្រប់គ្រងល្អ</span></h3>
												<p><span class="lang-en">Proper shipment tracking, Reasonable price, Friendly but dynamically handling service</span><span class="lang-km" style="display:none;">មានប្រព័ន្ធតាមដានការដឹកជញ្ជូន តម្លៃសមរម្យ សេវាកម្មដោះស្រាយឆាប់រហ័ស ប្រកបដោយភាពរួសរាយរាក់ទាក់</span></p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="ft-why-choose-feature-list-item-2">
											<div class="ft-why-choose-feature-icon">
												<i class="flaticon-logistics"></i>
											</div>
											<div class="ft-why-choose-feature-text headline pera-content">
												<h3><span class="lang-en">Safe Packing</span><span class="lang-km" style="display:none;">ការវេចខ្ចប់ប្រកបដោយសុវត្ថិភាព</span></h3>
												<p><span class="lang-en">Wrapping and securing your items in boxes or bags to prevent damage during transportation.</span><span class="lang-km" style="display:none;">ការវេចខ្ចប់មានស្តង់ដារត្រឹមត្រូវ និងធានាទំនិញរបស់អ្នកនៅក្នុងប្រអប់ ឬថង់ដើម្បីការពារការខូចខាតអំឡុងពេលដឹកជញ្ជូន។</span></p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="ft-why-choose-feature-list-item-2">
											<div class="ft-why-choose-feature-icon">
												<i class="flaticon-delivery-truck"></i>
											</div>
											<div class="ft-why-choose-feature-text headline pera-content">
												<h3><span class="lang-en">Right Time Delivery</span><span class="lang-km" style="display:none;">ការផ្តល់ពេលវេលាច្បាស់លាស់</span></h3>
												<p><span class="lang-en">We can get your goods to you quickly and efficiently, even if you need them on short notice.</span><span class="lang-km" style="display:none;">យើង​អាច​យក​ទំនិញ​ទៅកាន់​អ្នក​បាន​យ៉ាង​រហ័ស និង​មាន​ប្រសិទ្ធ​ភាព ធានាជូនគុណភាពទំនិញ និងមានរយៈពេលខ្លី</span></p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="ft-why-choose-feature-list-item-2">
											<div class="ft-why-choose-feature-icon">
												<i class="flaticon-boat"></i>
											</div>
											<div class="ft-why-choose-feature-text headline pera-content">
												<h3><span class="lang-en">Ship Everywhere</span><span class="lang-km" style="display:none;">ដឹកជញ្ជូនគ្រប់ទីកន្លែង</span></h3>
												<p><span class="lang-en">We can get your goods where they need to go quickly and easily.</span><span class="lang-km" style="display:none;">យើង​អាច​ដឹកជញ្ជូនទំនិញទៅបានគ្រប់កន្លែងតាមតម្រូវការរបស់អតិថិជន​​បាន​យ៉ាងឆាប់​រហ័ស និងភាព​ងាយ​ស្រួល។</span></p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="ft-why-choose-feature-list-item-2">
											<div class="ft-why-choose-feature-icon">
												<i class="flaticon-free-shipping"></i>
											</div>
											<div class="ft-why-choose-feature-text headline pera-content">
												<h3><span class="lang-en">Fastest Shipping</span><span class="lang-km" style="display:none;">ការដឹកជញ្ជូនលឿនបំផុត</span></h3>
												<p><span class="lang-en">We can delivering products to the customer in the shortest possible.</span><span class="lang-km" style="display:none;">ដោះស្រាយបញ្ហាទំនិញជាប់គាំងត្រឹមរយៈពេលខ្លី និងផ្ដល់ជូនអតិថិជននូវទំនុកចិត្តខ្ពស់ ជាមួយសេវាកម្មរបស់យើង</span></p>
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
	</section>
	<!-- End of FAQ why choose  section
	============================================= -->

	<!-- Start of blog  section
	============================================= -->
	<?php include './dnl_dashboard/PHP/config/db_conn.php';
	$sql = "SELECT id,title, content, date, tag, image FROM posts ORDER BY date DESC LIMIT 6"; // Modify the query as needed
	$result = $conn->query($sql);
	?>
	<section id="ft-blog-2" class="ft-blog-section-2 position-relative">
		<div class="container">
			<div class="ft-section-title-2 headline pera-content text-center">

				<h2 class="lang-en">Our Latest Post & News</h2>
				<h2 class="lang-km" style="display:none;">ពត៌មានថ្មីបន្ថែម</h2>
			</div>

			<div class="ft-blog-content-2">
				<div class="ft-blog-slider-2">
					<?php if ($result->num_rows > 0): ?>
						<?php while ($row = $result->fetch_assoc()): ?>
							<?php
							$title = $row["title"];
							$title = (mb_strlen($title, 'UTF-8') > 50) ? mb_substr($title, 0, 50, 'UTF-8') . '...' : $title;
							$content = strip_tags($row["content"]); // Remove HTML tags including <p></p>
							$content = (mb_strlen($content, 'UTF-8') > 150) ? mb_substr($content, 0, 150, 'UTF-8') . '...' : $content;
							?>
							<div class="ft-item-innerbox">
								<div class="ft-blog-innerbox-2">
									<div class="ft-blog-img-2 position-relative">
										<img class="zoom-effect" src="./dnl_dashboard/<?php echo htmlspecialchars($row['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>" />
										<div class="ft-blog-meta text-center d-flex align-items-center justify-content-center position-absolute">
											<?php echo date("d M", strtotime($row['date'])); ?>
										</div>
									</div>
									<div class="ft-blog-text-2 headline pera-content">
										<h3>
											<a href="preview.php?id=<?php echo urlencode($row['id']); ?>">
												<?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>
											</a>
										</h3>
										<p><?php echo htmlspecialchars($content, ENT_QUOTES, 'UTF-8'); ?></p>
										<div class="ft-btn-2">
											<a href="preview.php?id=<?php echo urlencode($row['id']); ?>">
												<i class="icon-first flaticon-right-arrow"></i>
												<span>Read More</span>
											</a>
										</div>
									</div>

								</div>
							</div>
						<?php endwhile; ?>
					<?php else: ?>
						<p>No posts available.</p>
					<?php endif; ?>
				</div>
				<div class="carousel_nav clearfix">
					<button type="button" class="blg-left_arrow"><i class="far fa-arrow-left"></i></button>
					<button type="button" class="blg-right_arrow"><i class="far fa-arrow-right"></i></button>
				</div>
			</div>

			<?php
			$conn->close(); // Close the database connection
			?>
		</div>
		</div>
	</section>
	<!-- End of blog  section
	============================================= -->

	<!-- Start of Footer   section
	============================================= -->
	<footer id="ft-footer" class="ft-footer-section-2">
		<div class="ft-footer-widget-wrapper-2 p-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="ft-footer-widget ul-li-block headline pera-content">
							<div class="logo-widget">
								<div class="site-logo">
									<a href="#"><img src="assets/img/logo/Logo KCT -No BG-01.png" alt="" style="width: 150px; margin-left:30px"></a>
								</div>
								<p>
									<span class="lang-en">KC Transtics is a professional logistics and transportation company that has been providing services in Cambodia for over 20 years.</span>
									<span class="lang-km" style="display:none;">KC Transtics គឺជាក្រុមហ៊ុនដឹកជញ្ជូនប្រកបដោយវិជ្ជាជីវៈ ដែលបាននិងកំពុងផ្តល់សេវាកម្មនៅក្នុងប្រទេសកម្ពុជាអស់រយៈពេលជាង 20 ឆ្នាំមកហើយ។</span>
								</p>
								<div class="ft-btn">
									<a class="d-flex justify-content-center align-items-center" href="contact.php" style="background: #864ce0;">
										<span class="lang-en">Get In Touch</span>
										<span class="lang-km" style="display:none;">ទាក់ទង​មក​យើង</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="ft-footer-widget ul-li-block headline pera-content">
							<div class="menu-widget">
								<h3 class="widget-title" style="color:#fff;">
									<span class="lang-en">Our Service</span>
									<span class="lang-km" style="display:none;">សេវាកម្មរបស់យើងខ្ញុំ</span>
								</h3>
								<ul>
									<li><a href="#" style="color:#fff;">
											<span class="lang-en">Potential dry port and SEZ investment partner</span>
											<span class="lang-km" style="display:none;">កំពង់ផែស្ងួតសក្តានុពល និងដៃគូវិនិយោគតំបន់សេដ្ឋកិច្ចពិសេស</span>
										</a></li>
									<li><a href="#" style="color:#fff;">
											<span class="lang-en">Domestic Transportation</span>
											<span class="lang-km" style="display:none;">ការដឹកជញ្ជូនក្នុងស្រុក</span>
										</a></li>
									<li><a href="#" style="color:#fff;">
											<span class="lang-en">International Freight Sea, Land, Air</span>
											<span class="lang-km" style="display:none;">ទំនិញអន្តរជាតិ សមុទ្រ ផ្លូវគោក ផ្លូវអាកាស</span>
										</a></li>
									<li><a href="#" style="color:#fff;">
											<span class="lang-en">Application of C/O, form D & E</span>
											<span class="lang-km" style="display:none;">ពាក្យស្នើសុំ C/O ទម្រង់ D & E</span>
										</a></li>
									<li><a href="#" style="color:#fff;">
											<span class="lang-en">Application of QIP (Application CDC)</span>
											<span class="lang-km" style="display:none;">កម្មវិធី QIP (កម្មវិធី CDC)</span>
										</a></li>
									<li><a href="#" style="color:#fff;">
											<span class="lang-en">Import & Export Customs formalities</span>
											<span class="lang-km" style="display:none;">របៀប​នាំចូល​និងនាំចេញ</span>
										</a></li>
									<li><a href="#" style="color:#fff;">
											<span class="lang-en">Project Working</span>
											<span class="lang-km" style="display:none;">បែបបទគយនាំចូល និងនាំចេញ</span>
										</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="ft-footer-widget ul-li-block headline pera-content">
							<div class="menu-widget">
								<h3 class="widget-title" style="color:#fff;">
									<span class="lang-en">Quick Links</span>
									<span class="lang-km" style="display:none;">តំណ​ភ្ជាប់​រហ័ស</span>
								</h3>
								<ul>
									<li><a href="index.php" style="color:#fff;">
											<span class="lang-en">Home</span>
											<span class="lang-km" style="display:none;">ទំព័រ​ដើម</span>
										</a></li>
									<li><a href="about.php" style="color:#fff;">
											<span class="lang-en">About us</span>
											<span class="lang-km" style="display:none;">អំពីក្រុមហ៊ុន</span>
										</a></li>
									<li><a href="#" style="color:#fff;">
											<span class="lang-en">Company History</span>
											<span class="lang-km" style="display:none;">ប្រវត្តិ​ក្រុមហ៊ុន</span>
										</a></li>
									<li><a href="#" style="color:#fff;">
											<span class="lang-en">Company Events</span>
											<span class="lang-km" style="display:none;">ព្រឹត្តិការណ៍​ក្រុមហ៊ុន</span>
										</a></li>
									<li><a href="activities.php" style="color:#fff;">
											<span class="lang-en">Supply Chain Management</span>
											<span class="lang-km" style="display:none;">ការគ្រប់គ្រងខ្សែផ្គត់ផ្គង់</span>
										</a></li>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="ft-footer-widget ul-li-block headline pera-content">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https://web.facebook.com/KCTranstics/&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=false&appId=697689201745453" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="ft-footer-copywrite-2 text-center">
				<span>
					<span class="lang-en">Copyright @ 2024 KCT - Transtics. All Rights Reserved</span>
					<span class="lang-km" style="display:none;">រក្សាសិទ្ធិ @ 2024 KCT - Transtics. សិទ្ធិ​ទាំងអស់​ត្រូវ​បានរក្សា</span>
				</span>
			</div>
		</div>
	</footer>
	<!-- End of FAQ why choose  section
	============================================= -->


	<!-- For Js Library -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/slick.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/jquery.filterizr.js"></script>
	<script src="assets/js/rbtools.min.js"></script>
	<script src="assets/js/jquery.cssslider.min.js"></script>
	<script src="assets/js/rs6.min.js"></script>
	<script src="assets/js/knob.js"></script>
	<script src="assets/js/typer.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>
<style>
	.ft-header-section.header-style-one .ft-header-menu-top-cta:before {
		top: -6px;
		left: 0px;
		width: 0;
		height: 0;
		content: "";
		position: absolute;
		border-bottom: 134px solid hsl(120, 100%, 100%);
		;
		border-right: 110px solid transparent;
		color: #060606;
	}

	.ft-header-section.header-style-one .ft-header-main-menu {
		padding: 20px 10px;
		background-color: hsl(120, 100%, 100%);
		color: #060606;
	}

	.ft-header-section.header-style-one .ft-brand-logo {
		top: 50%;
		left: 0;
		position: absolute;
		-webkit-transform: translateY(-50%);
		transform: translateY(-50%);
	}

	.ft-header-section.header-style-one .ft-header-top {
		color: #fff;
		background-color: #4D148C;
		padding: 20px 0px 17px 94px;
	}
</style>