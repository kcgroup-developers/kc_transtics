<?php
function isCurrentPage($page)
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    if ($currentPage === $page) {
        return 'active';
    }
    return '';
}
?>
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


    .dropdown-menu {
        min-width: 7rem;
        padding: 0;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 0.375rem;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }


    .dropdown-item {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
        color: #212529;
        font-family: 'Khmer OS Siemreap';
        transition: background-color 0.3s ease;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;

    }
</style>
<header id="ft-header" class="ft-header-section header-style-one" style="background:#fff; height:auto;">
    <div class="ft-header-content-wrapper position-relative">
        <div class="container">
            <div class="ft-header-content position-relative">
                <div class="ft-brand-logo" style="width:350px;">
                    <a href="#"><img src="assets/img/logo/Logo KCT Mid-01.png" alt=""></a>
                </div>
                <div class="ft-header-menu-top-cta position-relative">
                    <div class="ft-header-top ul-li">
                        <ul>
                            <li>
                                <i class="fal fa-map-marker-alt"></i>
                                <span class="lang-en">Plot 11, Street Somdach Chea Sim (1928), Phum Chreas, Sangkat Kok Kleang, Khan Sen Sok, Phnom Penh, Cambodia</span>
                                <span class="lang-km" style="display:none;">ទីតាំងស្ថិតនៅ ដីឡូត៍11, ផ្លូវ សម្តេច ជា ស៊ីម (1928), ភូមិច្រេស, សង្តាត់គោកឃ្លាង, ខណ្ឌសែនសុខ, រាជធានីភ្នំពេញ, ប្រទេសកម្ពុជា</span>
                            </li>
                        </ul>
                    </div>
                    <div class="ft-header-main-menu d-flex justify-content-center align-items-center">
                        <nav class="ft-main-navigation clearfix ul-li">
                            <ul id="ft-main-nav" class="nav navbar-nav clearfix" style="margin-right:20px;">
                                <li class="<?php echo isCurrentPage('index.php'); ?>">
                                    <a href="./" style="color:<?php echo isCurrentPage('index.php') === 'active' ? '#ea1e00' : ''; ?>">
                                        <span class="lang-en">Home</span>
                                        <span class="lang-km" style="display:none;">ទំព័រ​ដើម</span>
                                    </a>
                                </li>
                                <li class="<?php echo isCurrentPage('about.php'); ?>">
                                    <a href="about" style="color:<?php echo isCurrentPage('about.php') === 'active' ? 'red' : ''; ?>">
                                        <span class="lang-en">About</span>
                                        <span class="lang-km" style="display:none;">អំពីក្រុមហ៊ុន</span>
                                    </a>
                                </li>
                                <li class="<?php echo isCurrentPage('service.php'); ?>">
                                    <a href="service" style="color:<?php echo isCurrentPage('service.php') === 'active' ? 'red' : ''; ?>">
                                        <span class="lang-en">Service</span>
                                        <span class="lang-km" style="display:none;">សេវាកម្ម</span>
                                    </a>
                                </li>
                                <li class="<?php echo isCurrentPage('activities.php'); ?>">
                                    <a href="activities" style="color:<?php echo isCurrentPage('activities.php') === 'active' ? 'red' : ''; ?>">
                                        <span class="lang-en">Project</span>
                                        <span class="lang-km" style="display:none;">គម្រោង</span>
                                    </a>
                                </li>
                                <li class="<?php echo isCurrentPage('news.php'); ?>">
                                    <a href="news" style="color:<?php echo isCurrentPage('news.php') === 'active' ? 'red' : ''; ?>">
                                        <span class="lang-en">News</span>
                                        <span class="lang-km" style="display:none;">ព័ត៌មាន</span>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="faq.php" style="color:<?php echo isCurrentPage('faq.php') === 'active' ? 'red' : ''; ?>">
                                        <span class="lang-en">Other</span>
                                        <span class="lang-km" style="display:none;">ផ្សេងៗ</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="ft-header-cta-btn">
                            <a class="d-flex justify-content-center align-items-center" href="contact.php" style="background:#4D148C; color:#fff;">
                                <span class="lang-en">Get A Quote</span>
                                <span class="lang-km" style="display:none;">ស្នើសុំការដេញថ្លៃ</span>
                            </a>
                        </div>
                        <div class="dropdown" style="margin-right: 60px;">
                            <button class="btn dropdown-toggle" type="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="language-flag" src="./assets/flag/English-Flag.png" alt="Eng" style="width:43px;"> <span id="language-label">Eng</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownLanguage" id="language-dropdown">
                                <!-- Dynamic language options will be inserted here -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile_menu position-relative">
                    <div class="mobile_menu_button open_mobile_menu">
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
                                    <li><a href="index.php"><span class="lang-en">Home</span><span class="lang-km" style="display:none;">ទំព័រ​ដើម</span></a></li>
                                    <li><a href="about.php"><span class="lang-en">About</span><span class="lang-km" style="display:none;">អំពី</span></a></li>
                                    <li><a href="service.php"><span class="lang-en">Service</span><span class="lang-km" style="display:none;">សេវាកម្ម</span></a></li>
                                    <li><a href="activities.php"><span class="lang-en">Project</span><span class="lang-km" style="display:none;">គម្រោង</span></a></li>
                                    <li><a href="blog.php"><span class="lang-en">News</span><span class="lang-km" style="display:none;">ព័ត៌មាន</span></a></li>
                                    <li><a href="#"><span class="lang-en">Other</span><span class="lang-km" style="display:none;">ផ្សេងៗ</span></a></li>
                                </ul>
                                <div class="dropdown" style="margin-top:20px;">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMobileLanguage" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img id="mobile-language-flag" src="./assets/flag/English-Flag.png" alt="Eng" style="width:45px;"> <span id="mobile-language-label">Eng</span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMobileLanguage" id="mobile-language-dropdown">
                                        <!-- Dynamic language options will be inserted here -->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft-header-cta-info d-flex" style="font-size: medium;">
            <div class="ft-header-cta-icon d-flex justify-content-center align-items-center" style="background:#4D148C;">
                <i class="flaticon-call"></i>
            </div>
            <div class="ft-header-cta-text headline pera-content" style="color:#4D148C;">
                <p><span class="lang-en">Get In Touch</span><span class="lang-km" style="display:none;">ទាក់ទង​មក​យើង</span></p>
                <h3>+855 96 81 81 530</h3>
            </div>
        </div>
    </div>
</header>

<script>
    function switchLanguage(language) {
        const elementsEn = document.querySelectorAll('.lang-en');
        const elementsKm = document.querySelectorAll('.lang-km');
        const languageLabel = document.getElementById('language-label');
        const mobileLanguageLabel = document.getElementById('mobile-language-label');
        const languageFlag = document.getElementById('language-flag');
        const mobileLanguageFlag = document.getElementById('mobile-language-flag');
        const languageDropdown = document.getElementById('language-dropdown');
        const mobileLanguageDropdown = document.getElementById('mobile-language-dropdown');

        if (language === 'en') {
            elementsEn.forEach(el => el.style.display = 'inline');
            elementsKm.forEach(el => el.style.display = 'none');
            languageLabel.textContent = 'Eng';
            mobileLanguageLabel.textContent = 'Eng';
            languageFlag.src = './assets/flag/English-Flag.png';
            mobileLanguageFlag.src = './assets/flag/English-Flag.png';

            // Update dropdown
            languageDropdown.innerHTML = '<li><a class="dropdown-item" href="#" onclick="switchLanguage(\'km\')"><img src="./assets/flag/Khmer-Flag.png" alt="Khmer" style="width:43px;"> ខ្មែរ</a></li>';
            mobileLanguageDropdown.innerHTML = '<li><a class="dropdown-item" href="#" onclick="switchLanguage(\'km\')"><img src="./assets/flag/Khmer-Flag.png" alt="Khmer" style="width:45px;"> ខ្មែរ</a></li>';
        } else if (language === 'km') {
            elementsEn.forEach(el => el.style.display = 'none');
            elementsKm.forEach(el => el.style.display = 'inline');
            languageLabel.textContent = 'ខ្មែរ';
            mobileLanguageLabel.textContent = 'ខ្មែរ';
            languageFlag.src = './assets/flag/Khmer-Flag.png';
            mobileLanguageFlag.src = './assets/flag/Khmer-Flag.png';

            // Update dropdown
            languageDropdown.innerHTML = '<li><a class="dropdown-item" href="#" onclick="switchLanguage(\'en\')"><img src="./assets/flag/English-Flag.png" alt="Eng" style="width:43px;"> Eng</a></li>';
            mobileLanguageDropdown.innerHTML = '<li><a class="dropdown-item" href="#" onclick="switchLanguage(\'en\')"><img src="./assets/flag/English-Flag.png" alt="Eng" style="width:45px;"> Eng</a></li>';
        }
    }

    // Initial call to set the correct language dropdown options
    switchLanguage('en'); // or 'km' based on your initial language setting
</script>

