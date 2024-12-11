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
    <title>KCT-Service</title>
    <meta name="description" content="KCT - KC Transtics ">
    <meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, page builder, shipment, transport, transportation, truck, trucking">
    <meta name="author" content="Themexriver">
    <link rel="shortcut icon" href="assets/img/logo/Logo KCT -No BG-01.png" type="image/x-icon">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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

        /* Style for dropdown toggle */
        .dropdown-active {
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 0.375rem;
            transition: background-color 0.3s ease;
        }

        .dropdown-active:hover {
            background-color: #f8f9fa;
            /* Change to desired hover background color */
        }

        /* Style for dropdown menu */
        .dropdown-menu {
            min-width: 7rem;
            padding: 0;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.375rem;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Style for dropdown items */
        .dropdown-item {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            color: #212529;
            font-family: 'Khmer OS Siemreap';
            transition: background-color 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
            /* Change to desired hover background color */
        }

        .mobile_menu_wrap {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 9999;
        }

        .mobile_menu_wrap.open {
            display: block;
        }

        .mobile_menu_content {
            background: #fff;
            width: 80%;
            height: 100%;
            padding: 20px;
            position: fixed;
            top: 0;
            right: 0;
            overflow-y: auto;
        }

        .mobile_menu_close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header id="ft-header" class="ft-header-section header-style-two">
        <div class="ft-header-top">
            <div class="container">
                <div class="ft-header-top-content d-flex align-items-center">
                    <div class="ft-header-top-cta ul-li">
                        <ul class="d-flex">
                            <li><i class="fal fa-map-marker-alt"></i>Plot 11, Street Somdach Chea Sim (1928), Phum Chreas, Sangkat Kok Kleang, Khan Sen Sok, Phnom Penh, Cambodia</li>
                        </ul>
                    </div>
                    <div class="ft-header-cta-info d-flex">
                        <div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="ft-header-cta-text headline pera-content">
                            <p>Get In Touch</p>
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
                                    <li data-page="index.php" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>
                                        <a href="./" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? '#ea1e00' : '#4D148C'; ?>">Home Page</a>
                                    </li>
                                    <li data-page="about.php" <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?>>
                                        <a href="about" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? '#ea1e00' : '#4D148C'; ?>">About</a>
                                    </li>
                                    <li data-page="service.php" <?php if (basename($_SERVER['PHP_SELF']) == 'service.php' || basename($_SERVER['PHP_SELF']) == 'service-single.php') echo 'class="active"'; ?>>
                                        <a href="service" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'service.php' || basename($_SERVER['PHP_SELF']) == 'service-single.php') ? '#ea1e00' : '#4D148C'; ?>">Service</a>
                                    </li>
                                    <li data-page="activities.php" <?php if (basename($_SERVER['PHP_SELF']) == 'activities.php') echo 'class="active"'; ?>>
                                        <a href="activities" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'activities.php') ? '#ea1e00' : '#4D148C'; ?>">Project</a>
                                    </li>
                                    <li data-page="news.php" <?php if (basename($_SERVER['PHP_SELF']) == 'news.php' || basename($_SERVER['PHP_SELF']) == 'preview.php' || basename($_SERVER['PHP_SELF']) == 'tag.php') echo 'class="active"'; ?>>
                                        <a href="news" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'news.php' || basename($_SERVER['PHP_SELF']) == 'preview.php' || basename($_SERVER['PHP_SELF']) == 'tag.php') ? '#ea1e00' : '#4D148C'; ?>">News</a>
                                    </li>
                                    <li data-page="faq.php" <?php if (basename($_SERVER['PHP_SELF']) == 'faq.php') echo 'class="active"'; ?>>
                                        <a href="faq.php" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'faq.php') ? '#ea1e00' : '#4D148C'; ?>">Other</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="ft-header-cta-btn">
                            <a class="d-flex justify-content-center align-items-center" href="contact" style="background:#4D148C;">Get Free Quote</a>
                        </div>
                        <div class="dropdown" style="margin-right:70px;">
                            <button class="btn dropdown-toggle" type="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./assets/flag/English-Flag.png" alt="Eng" style="width:45px;"> Eng
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                <li><a class="dropdown-item" href="service_khmer.php?id=?" id="khmer-link">
                                        <img src="./assets/flag/Khmer-Flag.png" alt="Eng" style="width:45px;">ខ្មែរ
                                    </a></li>
                            </ul>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Get the current URL's query string and extract the ID
                                const params = new URLSearchParams(window.location.search);
                                const serviceId = params.get('id');

                                // If there's a service ID, append it to the Khmer link
                                const khmerLink = document.getElementById('khmer-link');
                                if (serviceId) {
                                    khmerLink.href = 'service_khmer.php?id=' + serviceId;
                                } else {
                                    // Handle the case where there is no service ID in the URL
                                    khmerLink.href = 'service_khmer.php';
                                }
                            });
                        </script>
                    </div>
                    <div class="mobile_menu position-relative">
                        <div class="mobile_menu_button open_mobile_menu" style="color:#4D148C;">
                            <i class="fal fa-bars"></i>
                        </div>
                        <div class="mobile_menu_wrap">
                            <div class="mobile_menu_overlay open_mobile_menu"></div>
                            <div class="mobile_menu_content">
                                <div class="mobile_menu_close open_mobile_menu">
                                    <i class="fal fa-times"></i>
                                </div>
                                <div class="m-brand-logo">
                                    <a href="!#"><img src="assets/img/logo/logo3.png" alt=""></a>
                                </div>
                                <nav class="mobile-main-navigation clearfix ul-li">
                                    <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>><a href="index">Home Page</a></li>
                                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?>><a href="about">About</a></li>
                                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'service.php') echo 'class="active"'; ?>><a href="service" style="color:#4D148C;">Service</a></li>
                                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'activities.php') echo 'class="active"'; ?>><a href="activities" style="color:#4D148C;">Project</a></li>
                                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'news.php') echo 'class="active"'; ?>><a href="news" style="color:#4D148C;">News</a></li>
                                        <li><a href="faq.php">Other</a></li>
                                    </ul>
                                </nav>
                                <div class="dropdown" style="margin-top: 20px;">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownLanguageMobile" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="assets/flag/Khmer-Flag.png" alt="ខ្មែរ" style="width:45px;"> ខ្មែរ
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownLanguageMobile">
                                        <li><a class="dropdown-item" href="#" id="english-link-mobile">
                                                <img src="assets/flag/English-Flag.png" alt="Eng" style="width:45px;"> Eng
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const currentPage = '<?php echo basename($_SERVER['PHP_SELF']); ?>';
                            const englishLinkMobile = document.getElementById('english-link-mobile');
                            englishLinkMobile.href = '../' + currentPage;

                            // Mobile menu toggle
                            const openMobileMenu = document.querySelectorAll('.open_mobile_menu');
                            const mobileMenuWrap = document.querySelector('.mobile_menu_wrap');
                            openMobileMenu.forEach(button => {
                                button.addEventListener('click', () => {
                                    mobileMenuWrap.classList.toggle('open');
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </header>
    <!-- End of header section ============================================= -->

    <!-- Start of Breadcrumb section ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/service-background.png">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>Service</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Service Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section ============================================= -->
    <!-- Start of Service details section ============================================= -->
    <section id="ft-service-details" class="ft-service-details-section page-padding">
        <div class="container">
            <div class="ft-service-details-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-service-sidebar">
                            <div class="ft-service-sidebar-widget headline ul-li-block">
                                <div class="service-category-widget">
                                    <h3 class="widget-title">All Service</h3>
                                    <ul>
                                        <li id="service-18"><a href="service-single.php?id=18">Customers Clearance</a></li>
                                        <li id="service-19"><a href="service-single.php?id=19">Transportation</a></li>
                                        <li id="service-17"><a href="service-single.php?id=17">Freight </a></li>
                                        <li id="service-20"><a href="service-single.php?id=20">Warehousing</a></li>
                                        <li id="service-21"><a href="service-single.php?id=21">Distribution/Delivery</a></li>
                                        <li id="service-22"><a href="service-single.php?id=22">Last-minute delivery</a></li>
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

                                <div class="service-form-widget" style=" padding: 30px 20px; background-color:#4D148C;">

                                    <h3 class="widget-title text-uppercase">24/7 ONLINE SUPPORT</h3>
                                    <p>Get immediate quotes & book shipment.</p>
                                    <form action="./contact/process_contact.php" method="POST">
                                        <input type="text" name="name" placeholder="Name">
                                        <input type="email" name="email" placeholder="Email">
                                        <textarea name="question" placeholder="Your Question Here"></textarea>
                                        <button type="submit">Contact Now</button>
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

                            // Get the service ID and language from the URL
                            $service_id = isset($_GET['id']) ? $_GET['id'] : null;
                            $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

                            if ($service_id) {
                                $service_id = $_GET['id'];

                                // Select the service details from the database
                                $sql = "SELECT * FROM service WHERE id = $service_id";
                                $result = $conn->query($sql);

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
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
                                    echo '<h3>Overview</h3>';
                                    echo '<p>' . ($lang == 'en' ? $row["content"] : $row["content_khmer"]) . '</p>';
                                    echo '</div>';
                                } else {
                                    echo "Service not found";
                                }
                            } else {
                                echo "Service ID not provided";
                            }

                            $conn->close();
                            ?>

                            <div class="ft-service-details-counter-wrapper">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ft-service-details-counter-item d-flex align-items-center headline pera-content">
                                            <div class="ft-service-details-count-icon">
                                                <i class="flaticon-worldwide"></i>
                                            </div>
                                            <div class="ft-service-details-count-text">
                                                <h4 class="title text-uppercase">WE COVERED</h4>
                                                <h4 class="count-number"><span class="counter">158</span>+</h4>
                                                <p>International gateways</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ft-service-details-counter-item d-flex align-items-center headline pera-content">
                                            <div class="ft-service-details-count-icon">
                                                <i class="flaticon-logistics"></i>
                                            </div>
                                            <div class="ft-service-details-count-text">
                                                <h4 class="title text-uppercase">WE HANDLED</h4>
                                                <h4 class="count-number"><span class="counter">2000</span>+</h4>
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
    <!-- End of Service details section ============================================= -->

    <!-- Start of Footer section ============================================= -->
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
    <!-- End of FAQ why choose section ============================================= -->

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