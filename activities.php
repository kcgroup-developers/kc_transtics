<?php

include './dnl_dashboard/PHP/config/db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Our Some Activities</title>
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
        .pagination .page-item .page-link {
            color: #4D148C;
            border-color: #4D148C;
        }

        .pagination .page-item .page-link:hover {
            background-color: #4D148C;
            color: white;
        }

        .pagination .page-item.active .page-link {
            background-color: #4D148C;
            color: white;
        }
    </style>
</head>

<body>

    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>
    <!-- Start of header section
============================================= -->
    <?php
   include 'hearder-2.php';

    // Get the language parameter from the URL
    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
    ?>

    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt="" /></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2><span class="lang-en">Project</span><span class="lang-km" style="display:none;">គម្រោង</span></h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="index.html"><span class="lang-en">Home</span><span class="lang-km" style="display:none;">ទំព័រដើម</span></a></li>
                        <li><span class="lang-en">Activities</span><span class="lang-km" style="display:none;">សកម្មភាព</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section ============================================= -->

    <!-- Start of Project section ============================================= -->
    <section id="ft-project-page" class="ft-project-page-section page-padding">
        <div class="container">
            <div class="ft-section-title-2 headline pera-content text-center">
                <span class="sub-title"><span class="lang-en">Project</span><span class="lang-km" style="display:none;">គម្រោង</span></span>
                <h2><span class="lang-en">Let's Checkout our All Top Rated Latest Project</span><span class="lang-km" style="display:none;">សូមមើលគម្រោងថ្មីៗដែលទទួលបានការវាយតម្លៃខ្ពស់បំផុតរបស់យើង</span></h2>
            </div>
            <div class="ft-project-post-item-content">
                <?php


                // Query to fetch unique categories from the database
                $sql_categories = "SELECT DISTINCT category FROM project";
                $result_categories = $conn->query($sql_categories);

                if ($result_categories->num_rows > 0) {
                    echo '<div class="ft-project-item-filter-btn ul-li">';
                    echo '<ul id="filters" class="nav-gallery text-center">';
                    echo '<li class="filtr-button filtr-active" data-filter="All" id="filter-all"><span class="lang-en">All</span><span class="lang-km" style="display:none;">ទាំងអស់</span></li>';
                    while ($row_category = $result_categories->fetch_assoc()) {
                        echo '<li class="filtr-button" data-filter="' . $row_category["category"] . '" id="filter-' . $row_category["category"] . '">' . $row_category["category"] . '</li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                } else {
                    echo '<span class="lang-en">No categories found</span><span class="lang-km" style="display:none;">រកមិនឃើញប្រភេទទេ</span>';
                }

                // Pagination
                $limit = 6; // Number of projects per page
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $start = ($page - 1) * $limit;

                // Determine the category to focus on
                $category = isset($_GET['category']) ? $_GET['category'] : 'All';
                $category_filter = ($category != 'All') ? "WHERE category = '$category'" : "";

                // Query to fetch data from the database with pagination and category filter
                $sql_projects = "SELECT project_id, image, category, type_of_product, description FROM project $category_filter LIMIT $start, $limit";
                $result_projects = $conn->query($sql_projects);

                if ($result_projects->num_rows > 0) {
                    echo '<div class="ft-project-item-wrapper filtr-container row">';
                    // Output data of each row
                    while ($row_project = $result_projects->fetch_assoc()) {
                        echo '<div class="col-lg-4 col-sm-6 filtr-item" data-category="' . $row_project["category"] . '" data-sort="Busy streets">';
                        echo '<div class="ft-portfolio-slider-innerbox position-relative">';
                        echo '<div class="ft-portfolio-img">';
                        echo '<img src="./dnl_dashboard/Project/' . $row_project["image"] . '" alt="" />';
                        echo '</div>';
                        echo '<div class="ft-portfolio-text headline headline pera-content" style="top: 280px;">';
                        echo '<h3><a href="#">' . $row_project["category"] . '</a></h3>';
                        echo '<p>' . $row_project["description"] . '</p>';
                        // If you have a link field in your database, you can uncomment the following line
                        // echo '<div class="ft-btn-3"><a class="d-flex justify-content-center align-items-center" href="' . $row_project["link"] . '"><span class="lang-en">Read More</span><span class="lang-km" style="display:none;">អាន​បន្ថែម</span> <i class="flaticon-right-arrow"></i></a></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';

                    // Pagination links
                    $sql_total_projects = "SELECT COUNT(project_id) AS total FROM project $category_filter";
                    $result_total_projects = $conn->query($sql_total_projects);
                    $row_total_projects = $result_total_projects->fetch_assoc();
                    $total_pages = ceil($row_total_projects["total"] / $limit);

                    echo '<ul class="pagination justify-content-center">';
                    if ($page > 1) {
                        echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '&category=' . $category . '&lang=' . $lang . '"><span class="lang-en">Previous</span><span class="lang-km" style="display:none;">មុន</span></a></li>';
                    }
                    for ($i = 1; $i <= $total_pages; $i++) {
                        echo '<li class="page-item ' . ($page == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '&category=' . $category . '&lang=' . $lang . '">' . $i . '</a></li>';
                    }
                    if ($page < $total_pages) {
                        echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '&category=' . $category . '&lang=' . $lang . '"><span class="lang-en">Next</span><span class="lang-km" style="display:none;">បន្ទាប់</span></a></li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<span class="lang-en">No projects found</span><span class="lang-km" style="display:none;">រកមិនឃើញគម្រោង</span>';
                }

                $conn->close();
                ?>
            </div>
        </div>
    </section>
    <!-- End of Project section ============================================= -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var filters = document.querySelectorAll('#filters .filtr-button');

            filters.forEach(function(filter) {
                filter.addEventListener('click', function() {
                    var category = this.getAttribute('data-filter');
                    filterProjects(category);
                });
            });

            function filterProjects(category) {
                var projects = document.querySelectorAll('.ft-project-item-wrapper .filtr-item');

                projects.forEach(function(project) {
                    if (category === 'All' || project.getAttribute('data-category') === category) {
                        project.style.display = 'block';
                    } else {
                        project.style.display = 'none';
                    }
                });
            }
        });

        var filterButtons = document.querySelectorAll('.filtr-button');

        filterButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                filterButtons.forEach(function(btn) {
                    btn.classList.remove('filtr-active');
                });
                this.classList.add('filtr-active');
            });
        });
    </script>
    <!-- End of Project section
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
</body>

</html>