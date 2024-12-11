<?php
// Start or resume the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Category</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Khmer OS Siemreap';
            src: url('assets/css/KhmerOSSiemreap.ttf') format('truetype');
        }
        .recent-blog-text a, .ft-blog-feed-title-text{
            font-family: 'Khmer OS Siemreap';
        }
        .ft-blog-feed-title-text a{
            font-family: 'Khmer OS Siemreap';
        }
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
        /* CSS for two posts per row */
        /* CSS for three rows with two posts each */
        .ft-blog-post-feed-innerbox {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
            /* Margin between rows, adjust as needed */
        }

        .ft-blog-post-feed-box {
            width: calc(50% - 15px);
            /* 50% width with margin */
            margin-bottom: 30px;
            background-color: #f4f4f4;
            border-radius: 5px solid gray;
            /* Margin between posts, adjust as needed */
        }

        @media (max-width: 768px) {
            .ft-blog-post-feed-box {
                width: 100%;
                /* Full width on smaller screens */
            }
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .page {
            padding: 5px 10px;
            margin: 0 2px;
            border: 1px solid #ddd;
            color: white;
            /* Change text color to white */
            text-decoration: none;
            border-radius: 3px;
            background-color: #00570e;
        }

        .page:hover {
            background-color: #0d941a;
            color: #f4f4f4;
        }

        .current {
            padding: 5px 10px;
            margin: 0 2px;
            border: 1px solid #333;
            background-color: #333;
            color: white;
            /* Change text color to white */
            border-radius: 3px;
        }

        .ellipsis {
            margin: 0 5px;
            color: #333;
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
                <h2>News</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Post Category</li>
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
                        <div class="row">
                            <?php
                            include './dnl_dashboard/PHP/config/db_conn.php';

                            $tag = isset($_GET['tag']) ? $_GET['tag'] : null;
                            $postsPerPage = 5;
                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $offset = ($page - 1) * $postsPerPage;

                            if ($tag) {
                                // Fetch total number of posts with the selected tag for pagination
                                $sqlTotal = "SELECT COUNT(id) AS total FROM posts WHERE tag = '$tag'";
                                $resultTotal = $conn->query($sqlTotal);
                                $rowTotal = $resultTotal->fetch_assoc();
                                $totalPosts = $rowTotal['total'];
                                $totalPages = ceil($totalPosts / $postsPerPage);

                                // Fetch posts with the selected tag for the current page
                                $sql = "SELECT id, title, content, date, posted_by, tag, image FROM posts WHERE tag = '$tag' ORDER BY date DESC, id DESC LIMIT $offset, $postsPerPage";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $count = 0; // Initialize post count
                                    while ($row = $result->fetch_assoc()) {
                                        if ($count % 2 == 0) {
                                            // Start a new row for every second post
                                            echo '<div class="row">';
                                        }

                                        // Display post content
                                        echo '<div class="col-md-6">';
                                        echo '<div class="ft-blog-post-feed-innerbox">';
                                        echo '<a href="blog-single.php?id=' . $row["id"] . '">';
                                        echo '<div class="ft-blog-post-feed-img">';
                                        echo '<img class="zoom-effect" src="./dnl_dashboard/' . $row["image"] . '" alt="" />';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '<div class="ft-blog-post-feed-text-wrapper headline pera-content">';
                                        echo '<div class="blog-meta">';
                                        echo '<a href="#"><i class="fas fa-user"></i> ' . $row["posted_by"] . '</a>';
                                        echo '<a href="#"><i class="far fa-clock"></i> ' . $row["date"] . '</a>';
                                        echo '<a href="#"><i class="fas fa-tag"></i> ' . $row["tag"] . '</a>';
                                        echo '</div>';
                                        echo '<div class="ft-blog-feed-title-text">';
                                        echo '<h3>';

                                        $title = $row["title"];
                                        // Limit the title to 100 characters
                                        $title = (mb_strlen($title, 'UTF-8') > 50) ? mb_substr($title, 0, 50, 'UTF-8') . '...' : $title;
                                        $content = $row["content"];
                                        // Limit the content to 500 characters
                                        $content = (mb_strlen($content, 'UTF-8') > 150) ? mb_substr($content, 0, 150, 'UTF-8') . '...' : $content;

                                        echo '<h3><a href="blog-single.php?id=' . $row["id"] . '">' . $title . '</a></h3>';
                                        echo '<p>' . $content . '</p>';
                                        echo '</p>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';

                                        if ($count % 2 != 0 || $count == $result->num_rows - 1) {
                                            // Close the row after the second post or if it's the last post
                                            echo '</div>';
                                        }

                                        $count++;
                                    }

                                    // Pagination links
                                    echo '<div class="pagination">';
                                    if ($page > 1) {
                                        echo '<a href="?page=' . ($page - 1) . '" class="page" style="color: white;">Previous</a>';
                                    }
                                    if ($totalPages > 2) {
                                        for ($i = 1; $i <= $totalPages; $i++) {
                                            if ($i == $page) {
                                                echo '<a href="?page=' . $i . '" class="page current-page" style="background-color: red; color: white;">' . $i . '</a>';
                                            } else {
                                                echo '<a href="?page=' . $i . '" class="page" style="color: white;">' . $i . '</a>';
                                            }
                                        }
                                    }
                                    if ($page < $totalPages) {
                                        echo '<a href="?page=' . ($page + 1) . '" class="page" style="color: white;">Next</a>';
                                    }
                                    echo '</div>';
                                } else {
                                    // No posts found with the selected tag
                                    echo '<p>No posts found with the selected tag.</p>';
                                }
                            } else {
                                // No tag selected
                                echo '<p>No tag selected.</p>';
                            }

                           
                            ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="ft-side-bar-wrapper top-stikcy">
                        <div class="ft-side-bar-widget-area">
                            <?php
                           

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
                            
                            ?>

                            <div class="ft-side-bar-widget headline ul-li-block">
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
                           <div class="ft-side-bar-widget headline ul-li-block">
                               <div class="recent-news-widget">
                                   <h3 class="widget-title position-relative">
                                       <span class="lang-en">Recent News</span>
                                       <span class="lang-km" style="display:none;">ពត័មានថ្មីបំផុត</span>
                                   </h3>
                                   <?php
                                   // Include your database configuration file
                                   
                           
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
                                           echo '<h3><a href="preview?id=' . $row["id"] . '">';
                                           echo '<span class="lang-en">' . $title . '</span>';
                                           echo '<span class="lang-km" style="display:none;">' . translateKhmer($title) . '</span>';
                                           echo '</a></h3>';
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
                          <?php
                          // Define the translateKhmer function
                          function translateKhmer($text) {
                              // Add your translation logic here
                              // Example translation logic:
                              // return "Translated Khmer Text";
                          }
                          
                          // Your existing code that uses the translateKhmer function
                          // Make sure the translateKhmer function is defined before this point
                          
                          // Rest of your PHP code
                          // Ensure the function is defined before any code that calls it
                          ?>
                          
                          <div class="ft-side-bar-widget headline ul-li-block">
                              <div class="tag-widget">
                                  <h3 class="widget-title position-relative">
                                      <span class="lang-en">Archives</span>
                                      <span class="lang-km" style="display:none;">បណ្ណសារ</span>
                                  </h3>
                                  <ul>
                                      <li>
                                          <a href="blog.html">
                                              <span class="lang-en">Business</span>
                                              <span class="lang-km" style="display:none;">ពាណិជ្ជកម្ម</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="blog.html">
                                              <span class="lang-en">Cargo</span>
                                              <span class="lang-km" style="display:none;">ទំនិញ</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="blog.html">
                                              <span class="lang-en">Freight</span>
                                              <span class="lang-km" style="display:none;">ការដឹកជញ្ជូន</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="blog.html">
                                              <span class="lang-en">Truck</span>
                                              <span class="lang-km" style="display:none;">រថយន្តដឹកទំនិញ</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="blog.html">
                                              <span class="lang-en">Ship</span>
                                              <span class="lang-km" style="display:none;">នាវា</span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>



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
    <script src="assets/js/rbtools.min.js"></script>
    <script src="assets/js/jquery.cssslider.min.js"></script>
    <script src="assets/js/rs6.min.js"></script>
    <script src="assets/js/knob.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/gmaps.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
</body>

</html>