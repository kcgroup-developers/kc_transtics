<!DOCTYPE html>
<html lang="en">
<?php
// Include the database connection file
include './dnl_dashboard/PHP/config/db_conn.php';

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id'])) {
	// Sanitize the input to prevent SQL injection
	$postId = intval($_GET['id']);

	// Retrieve the blog post details by ID
	$sql = "SELECT id, title, content, date, posted_by, tag, image FROM posts WHERE id = $postId";
	$result = $conn->query($sql);

	// Check if a matching post is found
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	}
}
?>

<head>
	<meta charset="UTF-8">
	<title><?php echo $row["title"]; ?></title>
	<meta name="description" content="DNL">
	<meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, page builder, shipment, transport, transportation, truck, trucking">
	<meta property="og:title" content="<?php echo $row["title"]; ?>">
	<meta property="og:image" content="https://dnl.com.kh/dnl_dashboard/<?php echo $row["image"]; ?>" />
	<meta content="https://dnl.com.kh/dnl_dashboard/<?php echo $row["image"]; ?>" property="og:image">
	<meta content="https://dnl.com.kh/dnl_dashboard/<?php echo $row["image"]; ?>" property="twitter:image">
	<meta property="og:url" content="https://dnl.com.kh/" />
	<meta property="og:type" content="website" />
	<meta name="twitter:card" content="summary_large_image">
	<meta content="https://dnl.com.kh/dnl_dashboard/<?php echo $row["image"]; ?>" property="twitter:image">
	<meta name="twitter:site" content="@DNL">
	<meta name="twitter:title" content="<?php echo $row["title"]; ?>">
	<meta name="twitter:image:src" content="https://dnl.com.kh/dnl_dashboard/">
	<meta name="twitter:url" content="https://dnl.com.kh/">
	<link rel="shortcut icon" href="https://dnl.com.kh/assets/icon/Logo%20Profile%20DNL.png" type="image/x-icon">
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
		@font-face {
            font-family: 'Khmer OS Siemreap';
            src: url('assets/css/KhmerOSSiemreap.ttf') format('truetype');
        }
		.recent-blog-text a ,.ft-blog-feed-title-text {
            font-family: 'Khmer OS Siemreap';
        }
		.blog-details-text h3 ,.blog-details-text p{
            font-family: 'Khmer OS Siemreap';
        }
		.blog-details-img img {
			width: 100%;
			/* Set the width to 100% to make the image responsive */
			/* Set the desired height for the image */
			object-fit: cover;
			/* This ensures the image covers the entire space without stretching */
		}

		/* The modal (background) */
		/* Modal styles */
		.modal {
			display: none;
			position: fixed;
			z-index: 9999;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgba(0, 0, 0, 0.9);
		}

		.modal-content-img {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			max-width: 80%;
			max-height: 80%;
		}

		/* Center the image horizontally and vertically */
		.modal-content-img img {
			display: block;
			margin: auto;
			max-width: 100%;
			max-height: 100%;
		}

		.close {
			position: absolute;
			top: 15px;
			right: 35px;
			color: #f1f1f1;
			font-size: 40px;
			font-weight: bold;
			transition: 0.3s;
			z-index: 9999;
		}

		.close:hover,
		.close:focus {
			color: #bbb;
			text-decoration: none;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<!-- <div id="preloader"></div> -->
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
	<!-- Start of header section
	============================================= -->
	<?php include "./hearder-2.php" ?>
	<!-- End of header section
	============================================= -->

	<!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt="" /></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2><span class="lang-en">News</span><span class="lang-km" style="display:none;">ព័ត៌មាន</span></h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="index.html"><span class="lang-en">Home</span><span class="lang-km" style="display:none;">ទំព័រដើម</span></a></li>
                        <li><span class="lang-en">Latest News</span><span class="lang-km" style="display:none;">ព័ត៌មានថ្មីៗ</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	<!-- End of Breadcrumb section
	============================================= -->

	<!-- Start of Blog Details section
	============================================= -->
	<section id="ft-blog-feed-details" class="ft-blog-feed-details-section page-padding">

		<div class="container">
			<div class="ft-blog-feed-details-content">
				<div class="row">
					<div class="col-lg-9">
						<div class="blog-details-img-text-wrapper">
							<?php
							// Include the database connection file
							include './dnl_dashboard/PHP/config/db_conn.php';

							// Check if the 'id' parameter is present in the URL
							if (isset($_GET['id'])) {
								// Sanitize the input to prevent SQL injection
								$postId = intval($_GET['id']);

								// Retrieve the blog post details by ID
								$sql = "SELECT id, title, content, date, posted_by, tag, image FROM posts WHERE id = $postId";
								$result = $conn->query($sql);

								// Check if a matching post is found
								if ($result->num_rows > 0) {
									$row = $result->fetch_assoc();

									// Display the blog post details within the existing HTML structure
							?>
									<div class="blog-details-img position-relative">
										<img src="./dnl_dashboard/<?php echo $row["image"]; ?>" alt="">
									</div>
									<div class="ft-blog-details-item">
										<div class="blog-details-text headline">
											<div class="ftd-blog-meta-2  position-relative text-capitalize">
												<a href="#"><i class="far fa-clock"></i> <?php echo $row["date"]; ?></a>
												<a href="#"><i class="far fa-user"></i><?php echo $row["posted_by"]; ?></a>
												<a href="#"><i class="fas fa-tags"></i> <?php echo $row["tag"]; ?></a>
											</div>
											<h3><?php echo $row["title"]; ?></h3>
											<article>
												<?php echo $row["content"]; ?>
											</article>

											<!-- Add more sections or modify existing ones based on your requirements -->
										</div>
										<div class="ft-blog-tag-share clearfix">
											<div class="ft-blog-tag float-left">
												<span>Tags:</span>
												<!-- Assuming tags are stored as comma-separated values in the 'tag' column -->
												<?php
												$tags = explode(',', $row["tag"]);
												foreach ($tags as $tag) {
													$tag = trim($tag);
													if (!empty($tag)) {
														echo '<a href="tag?tag=' . urlencode($tag) . '">' . $tag . '</a>';
													}
												}
												?>
											</div>

											<div class="ft-blog-share float-right">
												<a class="fb-social" href="https://www.facebook.com/dynamicnetworklogisticscoltd"><i class="fab fa-facebook-f"></i><span>Like Us</span></a>
												<a class="tw-social" href="https://l.facebook.com/l.php?u=https%3A%2F%2Ftwitter.com%2FDNL_168%3Ffbclid%3DIwAR2jyXPEOlKvYPX97YUCgsMlPvROURgMrT73kNpfR0iZZ3rvF4o3RgbseM0&h=AT0eLR2VeAyGyOXwnKSMyT-ckeP07Ta1laIQS0p3P-Vls1qBy-YvGXwtqw5CTYubwxYW-IXndiS-WQtSOGyWqgU11HKGO5fi8Jn5pZrGDD5oqTixfD8ahDcG-mM6Ay4g0Mj_&__tn__=-UK-R&c[0]=AT2uFmCaYjN3Ar_vLT8riJuDhvPbt6HL6CvS1omSLLG_qZLzRILCgKa9GUHzoymxvdbMxEGvOzwcKD9fyi0pxWcNiCjWdfqGOEkl4jQONOBa9J538PcHg4AsG0BiHgOQtZNI5HvILz8xzMLth5751FWHn1a2sbkgR7RLB25V1PZlpP-ZPXFfagnquJaPRhtT6dciO3QLn6BxGJw8"><i class="fab fa-twitter"></i><span>Like Us</span></a>
												<a class="ln-social" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2F99309466%2Fadmin%2Ffeed%2Fposts%3Ffbclid%3DIwAR3Xs_Mnsl_ir1OUkz3efsY9mPb96lfIaNtefksFZo0PgxTFNz5f2zUdul0&h=AT3GKlzA0aTVLo_bYc9LSLyuXVdljP61mhzqtkIVWrTf1nfkD5LWTbm5urGfuARYmRlBJQfDuRUpLrA1PTZFSYUV_ShcJXuAWvfDPn-HMOCQhhLLavN1YESL_97rYRpEdHfm&__tn__=-UK-R&c[0]=AT2uFmCaYjN3Ar_vLT8riJuDhvPbt6HL6CvS1omSLLG_qZLzRILCgKa9GUHzoymxvdbMxEGvOzwcKD9fyi0pxWcNiCjWdfqGOEkl4jQONOBa9J538PcHg4AsG0BiHgOQtZNI5HvILz8xzMLth5751FWHn1a2sbkgR7RLB25V1PZlpP-ZPXFfagnquJaPRhtT6dciO3QLn6BxGJw8"><i class="fab fa-linkedin-in"></i><span>Like Us</span></a>
												<a class="in-social" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fdynamicnetworklogistics%3Ffbclid%3DIwAR0qqLNB2hYcV4oY3OCiHPalbTzjFkEATm6YGXYbpVwyM2szAWsHpnh_wQM&h=AT1crVW-cTUUsXPa7Gg1uT-3WrEW3GDjghNkcF9Vbm8B6aKvnCBOJp6eZCeHL8TdWlqn70eTdrtPuptCKPOwCJKTjlR3XSThYVPhaTBqOP3r1ZKZUaOn92ek10AGcIMBp9bf"><i class="fab fa-instagram"></i><span>Like Us</span></a>
											</div>
										</div>
									</div>
							<?php

									// Get the previous post (newer post)
									$prevSql = "SELECT id, title FROM posts WHERE id > $postId ORDER BY id ASC LIMIT 1";
									$prevResult = $conn->query($prevSql);
									$prevRow = $prevResult->fetch_assoc();

									echo '<div class="ft-blog-next-prev d-flex justify-content-between flex-wrap">';
									if ($prevRow) {
										echo '<div class="ft-blog-next-prev-btn">
								<a class="np-text text-uppercase" href="./preview?id=' . $prevRow["id"] . '">
									<i class="fas fa-angle-double-left"></i> Previous Post
								</a>
							</div>';
									} else {
										echo '<div class="ft-blog-next-prev-btn">
								<span class="np-text text-uppercase">No Previous Post</span>
							</div>';
									}

									// Get the next post (older post)
									$nextSql = "SELECT id, title FROM posts WHERE id < $postId ORDER BY id DESC LIMIT 1";
									$nextResult = $conn->query($nextSql);
									$nextRow = $nextResult->fetch_assoc();

									if ($nextRow) {
										echo '<div class="ft-blog-next-prev-btn np-text-item text-right">
								<a class="np-text text-uppercase" href="./preview?id=' . $nextRow["id"] . '">
									Next Post <i class="fas fa-angle-double-right"></i>
								</a>
							</div>';
									} else {
										echo '<div class="ft-blog-next-prev-btn np-text-item text-right">
								<span class="np-text text-uppercase">No Next Post</span>
							</div>';
									}
									echo '</div>'; // Closing ft-blog-next-prev div
								} else {
									// If no matching post is found
									echo "<p>Blog post not found.</p>";
								}
							} else {
								// If 'id' parameter is not present in the URL, display the newest post by default
								$latestSql = "SELECT id FROM posts ORDER BY id DESC LIMIT 1";
								$latestResult = $conn->query($latestSql);
								$latestRow = $latestResult->fetch_assoc();

								if ($latestRow) {
									// Redirect to the URL of the newest post
									header("Location: ./preview?id=" . $latestRow["id"]);
									exit();
								} else {
									echo "<p>No posts found.</p>";
								}
							}
							?>

						</div>



					</div>
					<div id="myModal" class="modal">
						<span class="close">&times;</span>
						<img class="modal-content-img" id="img01">
					</div>

					<script>
						var modal = document.getElementById("myModal");
						var img = document.querySelector(".blog-details-img img");
						var modalImg = document.getElementById("img01");
						var closeModal = document.getElementsByClassName("close")[0];

						img.onclick = function() {
							modal.style.display = "block";
							modalImg.src = this.src;
						}

						closeModal.onclick = function() {
							modal.style.display = "none";
						}

						window.onclick = function(event) {
							if (event.target == modal) {
								modal.style.display = "none";
							}
						}
					</script>

					<div class="col-lg-3">
						<div class="ft-side-bar-wrapper top-stikcy">
							<div class="ft-side-bar-widget-area">							
								<div class="ft-side-bar-widget headline ul-li-block">
									<?php
									include './dnl_dashboard/PHP/config/db_conn.php';

									// SQL query to get the count of posts for each tag
									$sql = "SELECT tag, COUNT(*) AS count FROM posts GROUP BY tag";
									$result = $conn->query($sql);

									// Initialize an empty array for tag counts
									$tagCounts = [];

									// Check if there are any results
									if ($result->num_rows > 0) {
										// Loop through the results and store the tag counts in the array
										while ($row = $result->fetch_assoc()) {
											$tagCounts[$row['tag']] = $row['count'];
										}
									}

									// Close the database connection
									$conn->close();
									?>
									
                                <div class="category-widget">
                                    <h3 class="widget-title position-relative"><span class="lang-en">Categories</span><span class="lang-km" style="display:none;">ប្រភេទ</span></h3>
                                    <ul>
                                        <?php
                                        // Sort the $tagCounts array by count in descending order
                                        arsort($tagCounts);

                                        // Get the top three categories
                                        $topCategories = array_slice($tagCounts, 0, 3, true);

                                        // Display the top three categories
                                        foreach ($topCategories as $tag => $count) {
                                            echo '<li>';
                                            echo '<a href="tag?tag=' . urlencode($tag) . '">' . htmlspecialchars($tag) . ' <span>' . $count . '</span></a>';
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
								</div>
								<div class="ft-side-bar-widget headline ul-li-block">
									<div class="recent-news-widget">
										<h3 class="widget-title position-relative"><span class="lang-en">Recent News</span><span class="lang-km" style="display:none;">ព័ត៌មានថ្មីៗ</span></h3>
										<?php
										// Include your database configuration file
										include './dnl_dashboard/PHP/config/db_conn.php';

										// SQL query to select recent news
										$sql = "SELECT id, title, image, date FROM posts ORDER BY date DESC LIMIT 3";
										$result = $conn->query($sql);

										// Check if there are any results
										if ($result->num_rows > 0) {
											// Loop through the results and output the HTML markup
											while ($row = $result->fetch_assoc()) {
												$title = $row["title"];
												// Limit the title to 100 characters
												$title = (mb_strlen($title, 'UTF-8') > 40) ? mb_substr($title, 0, 40, 'UTF-8') . '...' : $title;
												echo '<div class="recent-blog-img-text clearfix">';
												echo '<div class="recent-blog-img float-left">';
												echo '<img src="./dnl_dashboard/' . $row["image"] . '" alt="" />';
												echo '</div>';
												echo '<div class="recent-blog-text headline">';
												echo '<h3><a href="preview?id=' . $row["id"] . '">' . $title . '</a></h3>';
												echo '<span><i class="far fa-calendar-alt"></i> ' . $row["date"] . '</span>';
												echo '</div>';
												echo '</div>';
											}
										} else {
											echo "No recent news found.";
										}

										// Close the database connection

										?>
									</div>
								</div>
								<!-- <div class="ft-side-bar-widget headline ul-li-block">
									<div class="category-widget">
										<h3 class="widget-title"><span class="lang-en">Archives</span><span class="lang-km" style="display:none;">បណ្ណសារ</span></h3>
										<ul>
											<li><a href="blog.html">Ocean Freight <span>3</span></a></li>
											<li><a href="blog.html">Air Freight <span>3</span></a></li>
											<li><a href="blog.html">Rail Project <span>3</span></a></li>
										</ul>
									</div>
								</div> -->

								<div class="ft-side-bar-widget headline ul-li-block">
									<div class="tag-widget">
										<h3 class="widget-title position-relative"><span class="lang-en">Archives</span><span class="lang-km" style="display:none;">បណ្ណសារ</span></h3>
										<ul>
											<li><a href="blog.html"><span class="lang-en">Business</span><span class="lang-km" style="display:none;">ពាណិជ្ជកម្ម</span></a></li>
											<li><a href="blog.html"><span class="lang-en">Cargo</span><span class="lang-km" style="display:none;">ទំនិញ</span></a></li>
											<li><a href="blog.html"><span class="lang-en">Freight</span><span class="lang-km" style="display:none;">ការដឹកជញ្ជូន</span></a></li>
											<li><a href="blog.html"><span class="lang-en">Truck</span><span class="lang-km" style="display:none;">រថយន្តដឹកទំនិញ</span></a></li>
											<li><a href="blog.html"><span class="lang-en">Ship</span><span class="lang-km" style="display:none;">នាវា</span></a></li>
										</ul>
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
	<!-- Start of Blog Details section
	============================================= -->

	<!-- Start of Footer   section
	============================================= -->
	<footer id="ft-footer-2" class="ft-footer-section-2" data-background="assets/img/bg/background.png">
        <div class="ft-footer-widget-wrapper-2 p-5">
            <div class="container">
                <div class="row" style="display: flex; flex-wrap: wrap;">
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="logo-widget">
                                <div class="site-logo">
                                    <a href="#"><img src="assets/img/logo/Logo KCT -No BG-01.png" alt="" style="width: 150px;"></a>
                                </div>
                                <div class="ft-footer-address">
                                    <span>www.kct.com.kh</span>
                                    <span>Email: info@kctranstics.com</span>
                                    <span>Phone:+855 96 81 81 530</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="menu-widget">
                                <h3 class="widget-title"><span class="lang-en">Our Services</span><span class="lang-km" style="display:none;">សេវាកម្មរបស់យើងខ្ញុំ</span></h3>
                                <ul>
                                    <li><a href="#"><span class="lang-en">Potential dry port and SEZ investment</span><span class="lang-km" style="display:none;">កំពង់ផែស្ងួតដែលមានសក្តានុពល</span></a></li>
                                    <li><a href="#"><span class="lang-en">Domestic Transportation</span><span class="lang-km" style="display:none;">ការដឹកជញ្ជូនក្នុងស្រុក</span></a></li>
                                    <li><a href="#"><span class="lang-en">International Freight Sea, Land, Air</span><span class="lang-km" style="display:none;">ទំនិញអន្តរជាតិ សមុទ្រ ផ្លូវគោក ផ្លូវអាកាស</span></a></li>
                                    <li><a href="#"><span class="lang-en">Application of C/O, form D & E</span><span class="lang-km" style="display:none;">ពាក្យស្នើសុំ C/O ទម្រង់ D & E</span></a></li>
                                    <li><a href="#"><span class="lang-en">Application of QIP (Application CDC)</span><span class="lang-km" style="display:none;">ដាក់ពាក្យស្នើសុំ QIP (ដាក់ពាក្យ CDC)</span></a></li>
                                    <li><a href="#"><span class="lang-en">Import & Export Customs formalities</span><span class="lang-km" style="display:none;">កម្មវិធី QIP (កម្មវិធី CDC)</span></a></li>
                                    <li><a href="#"><span class="lang-en">Project Working</span><span class="lang-km" style="display:none;">បែបបទគយនាំចូល និងនាំចេញ</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="menu-widget">
                                <h3 class="widget-title"><span class="lang-en">Quick Links</span><span class="lang-km" style="display:none;">តំណរភ្ជាប់លឿន</span></h3>
                                <ul>
                                    <li><a href="index.php"><span class="lang-en">Home</span><span class="lang-km" style="display:none;">ទំព័រដើម</span></a></li>
                                    <li><a href="about.php"><span class="lang-en">About us</span><span class="lang-km" style="display:none;">អំពីក្រុមហ៊ុន</span></a></li>
                                    <li><a href="#"><span class="lang-en">Company History</span><span class="lang-km" style="display:none;">ប្រវត្តិ​ក្រុមហ៊ុន</span></a></li>
                                    <li><a href="#"><span class="lang-en">Company Events</span><span class="lang-km" style="display:none;">ព្រឹត្តិការណ៍ផ្សេងៗ</span></a></li>
                                    <li><a href="activities.php"><span class="lang-en">Supply Chain Management</span><span class="lang-km" style="display:none;">ការគ្រប់គ្រងខ្សែសង្វាក់ផ្គត់ផ្គង់</span></a></li>
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
        </div>
        <div class="ft-footer-copywrite-2 text-center">
            <span>Copyright @ 2024 KCT - Transtics. <span class="lang-en">All Rights Reserved</span><span class="lang-km" style="display:none;">រក្សាសិទ្ធិគ្រប់យ៉ាង</span></span>
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
	<script src="assets/js/jquery.nice-select.min.js"></script>
	<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/jquery.filterizr.js"></script>
	<script src="assets/js/rbtools.min.js"></script>
	<script src="assets/js/jquery.cssslider.min.js"></script>
	<script src="assets/js/rs6.min.js"></script>
	<script src="assets/js/knob.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/gmaps.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
	<script>
		function switchLanguage(language) {
			const elementsEn = document.querySelectorAll('.lang-en');
			const elementsKm = document.querySelectorAll('.lang-km');
			const languageLabel = document.getElementById('language-label');
			const languageFlag = document.getElementById('language-flag');
			const languageDropdown = document.getElementById('language-dropdown');

			if (language === 'en') {
				elementsEn.forEach(el => el.style.display = 'inline');
				elementsKm.forEach(el => el.style.display = 'none');
				languageLabel.textContent = 'Eng';
				languageFlag.src = './assets/flag/English-Flag.png';

				// Update dropdown to show Khmer option
				languageDropdown.innerHTML = '<li><a class="dropdown-item" href="#" onclick="switchLanguage(\'km\')"><img src="./assets/flag/Khmer-Flag.png" alt="Khmer" style="width:45px;"> ខ្មែរ</a></li>';
			} else if (language === 'km') {
				elementsEn.forEach(el => el.style.display = 'none');
				elementsKm.forEach(el => el.style.display = 'inline');
				languageLabel.textContent = 'ខ្មែរ';
				languageFlag.src = './assets/flag/Khmer-Flag.png';

				// Update dropdown to show English option
				languageDropdown.innerHTML = '<li><a class="dropdown-item" href="#" onclick="switchLanguage(\'en\')"><img src="./assets/flag/English-Flag.png" alt="Eng" style="width:45px;"> Eng</a></li>';
			}
		}

		// Initial call to set the correct language dropdown options
		switchLanguage('en'); // or 'km' based on your initial language setting
	</script>
</body>

</html>
