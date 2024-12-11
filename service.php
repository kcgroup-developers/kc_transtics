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
<meta charset="UTF-8" />
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
</head>

<body>
    <!-- Start of header section
    ============================================= -->
    <?php include "./hearder-2.php" ?>
    <!-- End of header section
    ============================================= -->

    <!-- Start of Breadcrumb section
    ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/service-background.png.jpg">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2><span class="lang-en">Services</span><span class="lang-km" style="display:none;">សេវាកម្ម</span></h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="#"><span class="lang-en">Home</span><span class="lang-km" style="display:none;">ទំព័រដើម</span></a></li>
                        <li><span class="lang-en">Services</span><span class="lang-km" style="display:none;">សេវាកម្ម</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section
    ============================================= -->

    <!-- Start of Service page section
    ============================================= -->
    <section id="ft-service-page" class="ft-service-page-section page-padding">
        <div class="container">
            <div class="ft-section-title-2 headline pera-content text-center">
                <span class="sub-title"><span class="lang-en">Featured</span><span class="lang-km" style="display:none;">លក្ខណៈពិសេស</span></span>
                <h3><span class="lang-en">We are optimists who Love to <span>work together</span>.</span><span class="lang-km" style="display:none;">យើងមានគំនិតសុទិដ្ឋិនិយម ក្នុងការធ្វើការជាក្រុម</span></h3>
            </div>
            <div class="ft-service-page-items">
                <div class="row">
                    <?php
                    include './dnl_dashboard/PHP/config/db_conn.php';
                    $sql = "SELECT * FROM service";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data for each row as a service item
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="col-lg-4 col-md-6">';
                            echo '<div class="ft-service-innerbox-2 position-relative">';
                            echo '<div class="ft-service-img text-center">';
                            echo '<img src="./dnl_dashboard/Service/' . $row["image"] . '" style="width:370px;height:200px;" alt="">';
                            echo '</div>';
                            echo '<div class="ft-service-text position-relative headline">';
                            echo '<div class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">';
                            echo '<i class="flaticon-free-shipping"></i>';
                            echo '</div>';
                            $title = strlen($row["title"]) > 15 ? substr($row["title"], 0, 15) . "..." : $row["title"];
                            echo '<h3><a href="service-single.php?id=' . $row["id"] . '">' . $title . '</a></h3>';

                            echo '<div class="ft-btn-2">';
                            echo '<a href="service-single.php?id=' . $row["id"] . '">';
                            echo '<i class="icon-first flaticon-right-arrow"></i>';
                            echo '<span>Read More</span>';
                            echo '</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 results";
                    }

                    // Close the database connection
                    ?>
                </div>

            </div>
        </div>

        </div>
    </section>
    <!-- End of Service page section
    ============================================= -->

    <!-- Start of FAQ why choose section
    ============================================= -->
    <section id="ft-faq-why-choose-us" class="ft-faq-why-choose-us-section">
        <div class="container">
            <div class="ft-faq-why-choose-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ft-faq-content">
                            <div class="ft-section-title-2 headline pera-content">
                                <span class="sub-title"><span class="lang-en">Frequently Asked Question</span><span class="lang-km" style="display:none;">សំណួរដែលសួរជាញឹកញាប់</span></span>
                                <h2><span class="lang-en">Have an Any Question?</span><span class="lang-km" style="display:none;">តើលោកអ្នកមានចម្ងល់មែនដែរឬទេ?</span></h2>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item headline pera-content">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="lang-en">Can i specify a delivery date when ordering?</span><span class="lang-km" style="display:none;">តើខ្ញុំអាចបញ្ជាក់កាលបរិច្ឆេទដឹកជញ្ជូននៅពេលបញ្ជាទិញបានទេ?</span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <span class="lang-en">We will show you the delivery dates based on your location and shipping method. You can also check the estimated delivery time, which is the expected time when the shipped order will be delivered to the final destination.</span>
                                            <span class="lang-km" style="display:none;">យើងនឹងបង្ហាញអ្នកពីកាលបរិច្ឆេទដឹកជញ្ជូនដោយផ្អែកលើទីតាំង និងវិធីដឹកជញ្ជូនរបស់អ្នក។ អ្នកក៏អាចពិនិត្យមើលពេលវេលាដឹកជញ្ជូនដែលបានប៉ាន់ប្រមាណផងដែរ ដែលជាពេលវេលារំពឹងទុក នៅពេលដែលការបញ្ជាទិញដែលបានដឹកជញ្ជូននឹងត្រូវបានបញ្ជូនទៅគោលដៅចុងក្រោយ។</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item headline pera-content">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="lang-en">What payment methods are supported?</span><span class="lang-km" style="display:none;">តើវិធីសាស្រ្តទូទាត់ណាខ្លះត្រូវបានគាំទ្រ?</span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <span class="lang-en">There are many payment methods that you can use for payment, such as credit and debit cards, bank transfers, virtual wallets and buy now, pay later services. Each has its own advantages and disadvantages, such as security, convenience and fees.</span>
                                            <span class="lang-km" style="display:none;">មានវិធីបង់ប្រាក់ជាច្រើនដែលអ្នកអាចប្រើសម្រាប់ការទូទាត់ ដូចជាកាតឥណទាន និងឥណពន្ធ ការផ្ទេរប្រាក់តាមធនាគារ កាបូបនិម្មិត និងទិញឥឡូវនេះ ឬអាចមកទូទាត់ផ្ទាល់នៅក្រុមហ៊ុន។</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item headline pera-content">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span class="lang-en">What is Federation of International Trade Association?</span><span class="lang-km" style="display:none;">តើសមាគមពាណិជ្ជកម្មអន្តរជាតិសហព័ន្ធជាអ្វី?</span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <span class="lang-en">The Federation of International Trade Associations (FITA) is an organization that fosters international trade by strengthening the role of local, regional, and national associations that have an international mission. It is located in Reston, Virginia, and New York, New York, USA, and was founded in 1984</span>
                                            <span class="lang-km" style="display:none;">សហព័ន្ធសមាគមពាណិជ្ជកម្មអន្តរជាតិ (FITA) គឺជាអង្គការដែលជំរុញពាណិជ្ជកម្មអន្តរជាតិដោយការពង្រឹងតួនាទីរបស់សមាគមក្នុងស្រុក តំបន់ និងជាតិដែលមានបេសកកម្មអន្តរជាតិ។ វាមានទីតាំងនៅ Reston រដ្ឋ Virginia និងញូវយ៉ក ញូវយ៉ក សហរដ្ឋអាមេរិក ហើយត្រូវបានបង្កើតឡើងក្នុងឆ្នាំ 1984</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item headline pera-content">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span class="lang-en">How can I Track My Shipments?</span><span class="lang-km" style="display:none;">តើខ្ញុំអាចតាមដានការដឹកជញ្ជូនរបស់ខ្ញុំបានយ៉ាងដូចម្តេច?</span>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <span class="lang-en">To track your shipments online, you need to have a tracking number that is provided by the sender or the carrier. You can then enter the tracking number on the website of the carrier or a third-party tracking platform.</span>
                                            <span class="lang-km" style="display:none;">ដើម្បីតាមដានការដឹកជញ្ជូនរបស់អ្នកតាមអ៊ីនធឺណិត អ្នកត្រូវមានលេខតាមដានដែលត្រូវបានផ្តល់ដោយអ្នកផ្ញើ ឬក្រុមហ៊ុនដឹកជញ្ជូន។ បន្ទាប់មក អ្នកអាចបញ្ចូលលេខតាមដាននៅលើគេហទំព័ររបស់ក្រុមហ៊ុនដឹកជញ្ជូន ឬវេទិកាតាមដានភាគីទីបី។</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ft-why-choose-content-2">
                            <div class="ft-section-title-2 headline pera-content">
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
                                                <p><span class="lang-en">We can delivering products to the customer in the shortest possible time.</span><span class="lang-km" style="display:none;">ដោះស្រាយបញ្ហាទំនិញជាប់គាំងត្រឹមរយៈពេលខ្លី និងផ្ដល់ជូនអតិថិជននូវទំនុកចិត្តខ្ពស់ ជាមួយសេវាកម្មរបស់យើង</span></p>
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
    <!-- End of FAQ why choose section
    ============================================= -->

    <!-- Start of Footer section
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
    <!-- End of Footer section
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