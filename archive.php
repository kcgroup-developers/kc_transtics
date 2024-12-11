<?php
// Start or resume the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Blog</title>
    <meta name="description" content="DNL" />
    <meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, page builder, shipment, transport, transportation, truck, trucking" />
    <meta name="author" content="Themexriver" />
    <link rel="shortcut icon" href="assets/img/logo/logo3.png" type="image/x-icon" />
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/video.min.css" />
    <link rel="stylesheet" href="assets/css/animated-slider.css" />
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/rs6.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        .truncate-text {
            max-height: 5em;
            /* Adjust the value as needed for 5 lines */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .zoom-effect {
            transition: transform 0.5s;
            transition: transform 0.5s, box-shadow 0.5s;

        }

        .zoom-effect:hover {
            transform: scale(1.02);
            box-shadow: 0 0 20px rgba(0, 255, 0, 0.5);
            /* Green shadow when hovering */
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
    <?php include "./hearder-2.php"?>
    <!-- End of header section
	============================================= -->

    <!-- Start of Breadcrumb section
	============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt="" /></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>Blog</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section
	============================================= -->

    <!-- Start of blog post feed section
	============================================= -->
    <section id="ft-blog-post-feed" class="ft-blog-post-feed-section page-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="ft-blog-post-feed-content">
                        <?php
                        include './dnl_dashboard/PHP/config/db_conn.php';

                        // Check if the 'tag' key is set in the URL parameter
                        if (isset($_GET['tag'])) {
                            // Get the archive category from the URL parameter
                            $tag = $_GET['tag'];

                            // SQL query to select posts for the specified archive tag
                            $sql = "SELECT id, title, content FROM posts WHERE tag = '$tag'";
                            $result = $conn->query($sql);

                            // Check if there are any results
                            if ($result->num_rows > 0) {
                                // Loop through the results and output the HTML markup
                                while ($row = $result->fetch_assoc()) {
                                    // Display the post title and content
                                    echo '<h3><a href="blog-single.php?id=' . $row["id"] . '">' . $row["title"] . '</a></h3>';
                                    echo '<p>' . $row["content"] . '</p>';
                                }
                            } else {
                                echo "No posts found for this archive tag.";
                            }
                        } else {
                            echo "Tag parameter is missing.";
                        }

                        // Close the database connection
                        $conn->close();
                        ?>

                    </div>
                    <div class="col-lg-3">
                        <div class="ft-side-bar-wrapper top-stikcy">
                            <div class="ft-side-bar-widget-area">
                                <div class="ft-side-bar-widget search-widget-area headline ul-li-block">
                                    <div class="search-widget position-relative">
                                        <form action="#">
                                            <input type="text" placeholder="Search." />
                                            <button><i class="far fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="ft-side-bar-widget headline ul-li-block">
                                    <div class="category-widget">
                                        <h3 class="widget-title position-relative">Categories</h3>
                                        <ul>
                                            <li>
                                                <a href="blog.html">Ocean Freight <span>3</span></a>
                                            </li>
                                            <li>
                                                <a href="blog.html">Air Freight <span>3</span></a>
                                            </li>
                                            <li>
                                                <a href="blog.html">Rail Project <span>3</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="ft-side-bar-widget headline ul-li-block">
                  <div class="recent-news-widget">
                    <h3 class="widget-title position-relative">Recent News</h3>
                    <div class="recent-blog-img-text clearfix">
                      <div class="recent-blog-img float-left">
                        <img src="assets/img/blog/rec1.jpg" alt="" />
                      </div>
                      <div class="recent-blog-text headline">
                        <h3>
                          <a href="blog-single.html"
                            >Zechs Magnesium flakes especially...</a
                          >
                        </h3>
                        <span
                          ><i class="far fa-calendar-alt"></i> December 12,
                          2021</span
                        >
                      </div>
                    </div>
                    <div class="recent-blog-img-text clearfix">
                      <div class="recent-blog-img float-left">
                        <img src="assets/img/blog/rec2.jpg" alt="" />
                      </div>
                      <div class="recent-blog-text headline">
                        <h3>
                          <a href="blog-single.html"
                            >Finding a way to the separate ‘work’ ...</a
                          >
                        </h3>
                        <span
                          ><i class="far fa-calendar-alt"></i> December 12,
                          2021</span
                        >
                      </div>
                    </div>
                    <div class="recent-blog-img-text clearfix">
                      <div class="recent-blog-img float-left">
                        <img src="assets/img/blog/rec3.jpg" alt="" />
                      </div>
                      <div class="recent-blog-text headline">
                        <h3>
                          <a href="blog-single.html"
                            >Hunching over desk can cause pain.</a
                          >
                        </h3>
                        <span
                          ><i class="far fa-calendar-alt"></i> December 12,
                          2021</span
                        >
                      </div>
                    </div>
                  </div>
                </div> -->
                                <div class="ft-side-bar-widget headline ul-li-block">
                                    <div class="category-widget">
                                        <h3 class="widget-title position-relative">Archives</h3>
                                        <ul>
                                            <li>
                                                <a href="blog.html">Ocean Freight <span>3</span></a>
                                            </li>
                                            <li>
                                                <a href="blog.html">Air Freight <span>3</span></a>
                                            </li>
                                            <li>
                                                <a href="blog.html">Rail Project <span>3</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="ft-side-bar-widget headline ul-li-block">
                  <div class="gallery-widget">
                    <h3 class="widget-title position-relative">Gallery</h3>
                    <ul class="zoom-gallery">
                      <li>
                        <a
                          href="assets/img/gallery/gl1.jpg"
                          data-source="assets/img/gallery/gl1.jpg"
                          ><img src="assets/img/gallery/gl1.jpg" alt=""
                        /></a>
                      </li>
                      <li>
                        <a
                          href="assets/img/gallery/gl2.jpg"
                          data-source="assets/img/gallery/gl2.jpg"
                          ><img src="assets/img/gallery/gl2.jpg" alt=""
                        /></a>
                      </li>
                      <li>
                        <a
                          href="assets/img/gallery/gl3.jpg"
                          data-source="assets/img/gallery/gl3.jpg"
                          ><img src="assets/img/gallery/gl3.jpg" alt=""
                        /></a>
                      </li>
                      <li>
                        <a
                          href="assets/img/gallery/gl4.jpg"
                          data-source="assets/img/gallery/gl4.jpg"
                          ><img src="assets/img/gallery/gl4.jpg" alt=""
                        /></a>
                      </li>
                      <li>
                        <a
                          href="assets/img/gallery/gl5.jpg"
                          data-source="assets/img/gallery/gl4.jpg"
                          ><img src="assets/img/gallery/gl5.jpg" alt=""
                        /></a>
                      </li>
                      <li>
                        <a
                          href="assets/img/gallery/gl6.jpg"
                          data-source="assets/img/gallery/gl4.jpg"
                          ><img src="assets/img/gallery/gl6.jpg" alt=""
                        /></a>
                      </li>
                    </ul>
                  </div>
                </div> -->
                                <div class="ft-side-bar-widget headline ul-li-block">
                                    <div class="tag-widget">
                                        <h3 class="widget-title position-relative">Archives</h3>
                                        <ul>
                                            <li><a href="blog.html">Business</a></li>
                                            <li><a href="blog.html">Cargo</a></li>
                                            <li><a href="blog.html">Freight</a></li>
                                            <li><a href="blog.html">Truck</a></li>
                                            <li><a href="blog.html">Ship</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="ft-side-bar-add headline ul-li-block">
								<a href="contact.php">
									<img src="assets/img/bg/add-bg.png" alt="">
								</a>
							</div> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </section>
    <!-- End of blog post section
	============================================= -->

    <!-- Start of Footer   section
	============================================= -->
    <footer id="ft-footer-2" class="ft-footer-section-2" data-background="assets/img/bg/f-bg.png">
        <div class="ft-footer-widget-wrapper-2 p-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="logo-widget">
                                <div class="site-logo">
                                    <a href="#"><img src="assets/img/logo/dnl01-1@2x.png" alt="" /></a>
                                </div>
                                <div class="ft-footer-address">
                                    <!-- <span>DNL Logistics #133, Street 178, Phnom Penh, Cambodia</span> -->
                                    <span> www.dnl.com.kh</span>
                                    <span>Email: info@kctranstics.com</span>
                                    <span>Phone:+855 96 81 81 530 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="menu-widget">
                                <h3 class="widget-title">Our Services</h3>
                                <ul>
                                    <li><a href="#" >Potential dry port and SEZ investment
                                        </a></li>
                                    <li><a href="#" >Domestic Transportation</a></li>
                                    <li><a href="#" >International Freight Sea, Land, Air </a></li>
                                    <li><a href="#" >Application of C/O, form D & E</a></li>
                                    <li><a href="#" >Application of QIP (Application CDC)</a></li>
                                    <li><a href="#" >Import & Export Customs formalities</a></li>
                                    <li><a href="#" >Project Working
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="menu-widget">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul>
                                    <li><a href="index.php" >Home</a></li>
                                    <li><a href="about.php" >About us</a></li>
                                    <li><a href="#" >Company History</a></li>
                                    <li><a href="#" >Company Events</a></li>
                                    <li><a href="activities.php" >Supply Chain Managment</a></li>
                                    <li><a href="#" >Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdynamicnetworklogisticscoltd&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=false&appId=697689201745453" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft-footer-copywrite-2 text-center">
            <span>Copyright @ 2024 DNL Dynamic Network Logistics.All Rights Reserved</span>
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
    <script src="assets/js/rbtools.min.js"></script>
    <script src="assets/js/jquery.cssslider.min.js"></script>
    <script src="assets/js/rs6.min.js"></script>
    <script src="assets/js/knob.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/gmaps.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
</body>

</html>