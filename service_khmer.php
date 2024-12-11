<?php
include './dnl_dashboard/PHP/config/db_conn.php';
// Check if the 'id' parameter is provided in the URL
if (!isset($_GET['id'])) {
    echo "Service ID not provided";
    exit; // Stop the script if no ID is found
}

// Retrieve the service ID
$serviceId = $_GET['id'];
function isCurrentPage($page)
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    if ($currentPage === $page || ($page === 'news.php' && $currentPage === 'preview.php')) {
        return 'active';
    }
    return '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Service Details</title>
    <meta name="description" content="DNL">
    <meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, page builder, shipment, transport, transportation, truck, trucking">
    <meta name="author" content="Themexriver">
    <link rel="shortcut icon" href="assets/img/logo/logo3.png" type="image/x-icon">
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
</head>

<body>
	
<header id="ft-header" class="ft-header-section header-style-two">
    <div class="ft-header-top">
        <div class="container">
            <div class="ft-header-top-content d-flex  align-items-center">
                <div class="ft-header-top-cta ul-li">
                    <ul class="d-flex">
                        <li><i class="fal fa-map-marker-alt"></i>ទីតាំងស្ថិតនៅ ដីឡូត៍11, ផ្លូវ សម្តេច ជា ស៊ីម (1928), ភូមិច្រេស, សង្តាត់គោកឃ្លាង, ខណ្ឌសែនសុខ, រាជធានីភ្នំពេញ, ប្រទេសកម្ពុជា</li>
                        <!-- <li><i class="fal fa-envelope"></i>Email: dnl@gmail.com</li> -->

                    </ul>
                </div>
                <div class="ft-header-cta-info d-flex" style="margin-left: 20px;">
                    <div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="ft-header-cta-text headline pera-content">
                        <p>ទំនាក់ទំនង</p>
                        <h3>+855 96 81 81 530</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ft-header-main-menu-wrapper" style="background:#fff;">
        <div class="container">
            <div class="ft-header-main-menu-area position-relative">
                <div class="ft-header-main-menu d-flex align-items-center justify-content-between position-relative">
                <div class="ft-site-logo-area">
                            <div class="ft-site-logo position-relative">
                                <a href="./"><img src="assets/img/logo/Logo KCT Mid-01.png" alt=""></a>
                            </div>
                        </div>
                    <div class="ft-main-navigation-area">
                        <nav class="ft-main-navigation clearfix ul-li">
                            <ul id="ft-main-nav" class="nav navbar-nav clearfix">
                                <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>><a href="./" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? '#ea1e00' : '#4D148C'; ?>">ទំព័រដើម</a></li>
                                <li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?>><a href="about" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? '#ea1e00' : '#4D148C'; ?>">អំពីក្រុមហ៊ុន</a></li>
                                <li <?php if (basename($_SERVER['PHP_SELF']) == 'service.php' || basename($_SERVER['PHP_SELF']) == 'service-single.php') echo 'class="active"'; ?>><a href="service" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'service.php' || basename($_SERVER['PHP_SELF']) == 'service-single.php') ? '#ea1e00' : '#4D148C'; ?>">សេវាកម្ម</a></li>
                                <li <?php if (basename($_SERVER['PHP_SELF']) == 'activities.php') echo 'class="active"'; ?>><a href="activities" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'activities.php') ? '#ea1e00' : '#4D148C'; ?>">គម្រោង</a></li>
                                <li <?php if (basename($_SERVER['PHP_SELF']) == 'news.php' || basename($_SERVER['PHP_SELF']) == 'preview.php' || basename($_SERVER['PHP_SELF']) == 'tag.php') echo 'class="active"'; ?>><a href="news" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'news.php' || basename($_SERVER['PHP_SELF']) == 'preview.php' || basename($_SERVER['PHP_SELF']) == 'tag.php') ? '#ea1e00' : '#4D148C'; ?>">ព័ត៌មាន</a></li>
                                <li <?php if (basename($_SERVER['PHP_SELF']) == 'faq.php') echo 'class="active"'; ?>><a href="faq.php" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'faq.php') ? '#ea1e00' : '#4D148C'; ?>">ផ្សេងៗ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="ft-header-cta-btn">
                        <a class="d-flex justify-content-center align-items-center" href="contact" style="background:#4D148C; ">Get Quote</a>
                    </div>
                    <div class="dropdown" style="margin-right:70px;">
                        <button class="btn dropdown-toggle" type="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./assets/flag/Khmer-Flag.png" alt="ខ្មែរ" style="width:45px;"> ខ្មែរ
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownLanguage">
                            <li><a class="dropdown-item" href="service-single.php" id="english-link">
                                    <img src="./assets/flag/English-Flag.png" alt="Eng" style="width:45px;"> Eng
                                </a></li>
                        </ul>
                    </div>

                    <script>
                        
                            document.addEventListener('DOMContentLoaded', function() {
                                // Get the current URL's query string and extract the ID
                                const params = new URLSearchParams(window.location.search);
                                const serviceId = params.get('id');

                                // If there's a service ID, append it to the Khmer link
                                const englishLink = document.getElementById('english-link');
                                if (serviceId) {
                                    englishLink.href = 'service-single.php?id=' + serviceId;
                                } else {
                                    // Handle the case where there is no service ID in the URL
                                    englishLink.href = 'service-single.php';
                                }
                            });
                        
                    </script>

                    <div class="mobile_menu position-relative">
                        <div class="mobile_menu_button open_mobile_menu" style="color:#4D148C;  margin-top:35px;">
                            <i class="fal fa-bars"></i>
                        </div>
                        <div class="mobile_menu_wrap">
                            <div class="mobile_menu_overlay open_mobile_menu"></div>
                            <div class="mobile_menu_content">
                                <div class="mobile_menu_close open_mobile_menu">
                                    <i class="fal fa-times"></i>
                                </div>
                                <div class="m-brand-logo">
                                    <a href="!#"><img src="assets/img/logo/Logo KCT Mid-01.png" alt=""></a>
                                </div>
                                <nav class="mobile-main-navigation  clearfix ul-li">
                                    <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                        <li><a href="index">ទំព័រដើម</a></li>
                                        <li><a href="about">អំពីក្រុមហ៊ុន</a></li>
                                        <li><a href="service">សេវាកម្ម</a></li>
                                        <li><a href="activities">គម្រោង</a></li>
                                        <li><a href="news">ព័ត៌មាន</a></li>
                                        <li><a href="faq.php">ផ្សេងៗ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
</header>

    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/service-background.png">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>សេវាកម្ម</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="#">ទំព័រដើម</a></li>
                        <li>សេវាកម្មបន្ថែម</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section
	============================================= -->

    <!-- Start of Service details section
	============================================= -->
    <section id="ft-service-details" class="ft-service-details-section page-padding">
        <div class="container">
            <div class="ft-service-details-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-service-sidebar">
                            <div class="ft-service-sidebar-widget headline ul-li-block">
                                <div class="service-category-widget">
                                    <h3 class="widget-title">សេវាកម្មទាំងអស់</h3>
                                    <ul>
                                        <li id="service-18"><a href="service-single.php?id=18">ឯកសារគយ</a></li>
                                        <li id="service-19"><a href="service-single.php?id=19">ការដឹកជញ្ជូន</a></li>
                                        <li id="service-17"><a href="service-single.php?id=17">ការដឹកទំនិញ</a></li>
                                        <li id="service-20"><a href="service-single.php?id=20">ឃ្លាំងទុកទំនិញ</a></li>
                                        <li id="service-21"><a href="service-single.php?id=21">ការចែកចាយបន្ត</a></li>
                                        <li id="service-22"><a href="service-single.php?id=22">ដំណោះស្រាយលឿន</a></li>
                                    </ul>
                                </div>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var currentUrl = window.location.href;
                                    var activeColor = "#ea1e00";
                                    var listItems = document.querySelectorAll(".service-category-widget ul li");

                                    listItems.forEach(function(item) {
                                        var itemUrl = item.querySelector("a").getAttribute("href");
                                        if (currentUrl.indexOf(itemUrl) !== -1) {
                                            item.classList.add("active");
                                            item.querySelector("a").style.color = activeColor;
                                        }
                                    });
                                });
                            </script>
                            <div class="ft-service-sidebar-widget headline ul-li-block">

                                <div class="service-form-widget" style=" padding: 30px 20px;background-color: #4D148C;">

                                    <h3 class="widget-title text-uppercase">24/7 ONLINE SUPPORT</h3>
                                    <p>Get immediate quotes & book shipment.</p>
                                    <form action="../contact/process_contact.php" method="POST">
                                        <input type="text" name="name" placeholder="Name">
                                        <input type="email" name="email" placeholder="Email">
                                        <textarea name="question" placeholder="Your Question Here"></textarea>
                                        <button type="submit">ទំនាក់ទំនងឥលូវនេះ</button>
                                    </form>
                                </div>
                            </div>
                            <div class="ft-service-sidebar-widget headline ul-li-block">
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ft-service-details-content-wrapper headline pera-content">
                            <?php
                            // Connect to the database
                            include './dnl_dashboard/PHP/config/db_conn.php';
                            // Get the service ID from the URL
                            if (isset($_GET['id'])) {
                                $service_id = $_GET['id'];

                                // Select the service details from the database
                                $sql = "SELECT * FROM service_khmer WHERE id = $service_id";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Output the service details
                                    $row = $result->fetch_assoc();
                                    echo '<div class="ft-service-details-img-wrapper">';
                                    echo '<div class="row">';
                                    echo '<div class="col-md-6">';
                                    echo '<div class="ft-service-details-img">';
                                    echo '<img src="./dnl_dashboard/Service/' . $row["image"] . '" alt="">';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<div class="col-md-6">';

                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<div class="ft-service-details-text-wrapper">';
                                    echo '<h3>ទិដ្ឋភាពទូទៅ</h3>';
                                    echo '<p>' . $row["content"] . '</p>';
                                    echo '</div>';
                                } else {
                                    echo "Service not found";
                                }
                            } else {
                                echo "Service ID not provided";
                            }

                            // Close the database connection
                            $conn->close();
                            ?>


                            <div class="ft-service-details-counter-wrapper">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ft-service-details-counter-item d-flex align-items-center headline pera-content">
                                            <div class="ft-service-details-count-icon">
                                                <i class="flaticon-worldwide" style="color:#4D148C;"></i>
                                            </div>
                                            <div class="ft-service-details-count-text">
                                                <h4 class="title text-uppercase">WE COVERED</h4>
                                                <h4 class="count-number" style="color:#4D148C;"><span class="counter">158</span>+</h4>
                                                <p>International gateways</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ft-service-details-counter-item d-flex align-items-center headline pera-content">
                                            <div class="ft-service-details-count-icon">
                                                <i class="flaticon-logistics" style="color:#4D148C;"></i>
                                            </div>
                                            <div class="ft-service-details-count-text">
                                                <h4 class="title text-uppercase">WE HANDLED</h4>
                                                <h4 class="count-number" style="color:#4D148C;"><span class="counter">2000</span>+</h4>
                                                <p>Tons of air freight annually</p>
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
    </section>
    <!-- End of Service details section
	============================================= -->

    <!-- Start of Footer   section
	============================================= -->
    <footer id="ft-footer-2" class="ft-footer-section-2" data-background="assets/img/bg/background.png">
        <div class="ft-footer-widget-wrapper-2 p-5">
            <div class="container">
                <div class="row">
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
                                <h3 class="widget-title">សេវាកម្មរបស់យើងខ្ញុំ</h3>
                                <ul>
                                    <li><a href="#">កំពង់ផែស្ងួតដែលមានសក្តានុពល
                                        </a></li>
                                    <li><a href="#">ការដឹកជញ្ជូនក្នុងស្រុក</a></li>
                                    <li><a href="#">ទំនិញអន្តរជាតិ សមុទ្រ ផ្លូវគោក ផ្លូវអាកាស</a></li>
                                    <li><a href="#">ពាក្យស្នើសុំ C/O ទម្រង់ D & E</a></li>
                                    <li><a href="#">កម្មវិធី QIP (កម្មវិធី CDC)</a></li>
                                    <li><a href="#">បែបបទគយនាំចូល និងនាំចេញ</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-footer-widget ul-li-block headline pera-content">
                            <div class="menu-widget">
                                <h3 class="widget-title">តំណភ្ជាប់រហ័ស</h3>
                                <ul>
                                    <li><a href="index.php">ទំព័រដើម</a></li>
                                    <li><a href="about.php">អំពីក្រុមហ៊ុន</a></li>
                                    <li><a href="#">ប្រវត្តិរបស់កម្ពុជា</a></li>
                                    <li><a href="#">ព្រឹត្តិការណ៍ផ្សេងៗ</a></li>
                                    <li><a href="activities.php">
                                            ការគ្រប់គ្រងខ្សែសង្វាក់ផ្គត់ផ្គង់</a></li>

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
            <span>រក្សាសិទ្ធ@2024 ដោយក្រុមហ៊ុន ខេស៊ី ត្រេនស្ទីក៍កម្ពុជា</span>
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
</body>

</html>