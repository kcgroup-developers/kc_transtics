<?php
function isCurrentPage($page)
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    if ($currentPage === $page || ($page === 'news.php' && $currentPage === 'preview.php')) {
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
</style>
<header id="ft-header" class="ft-header-section header-style-two">
    <div class="ft-header-top">
        <div class="container">
            <div class="ft-header-top-content d-flex align-items-center">
                <div class="ft-header-top-cta ul-li">
                    <ul class="d-flex">
                        <li><i class="fal fa-map-marker-alt"></i>
                            <span class="lang-en">Plot 11, Street Somdach Chea Sim (1928), Phum Chreas, Sangkat Kok Kleang, Khan Sen Sok, Phnom Penh, Cambodia</span>
                            <span class="lang-km" style="display:none;"><span class="lang-km" style="display:none;">ទីតាំងស្ថិតនៅ ដីឡូត៍11, ផ្លូវ សម្តេច ជា ស៊ីម (1928), ភូមិច្រេស, សង្តាត់គោកឃ្លាង, ខណ្ឌសែនសុខ, រាជធានីភ្នំពេញ, ប្រទេសកម្ពុជា</span>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="ft-header-cta-info d-flex">
                    <div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="ft-header-cta-text headline pera-content">
                        <p><span class="lang-en">Get In Touch</span><span class="lang-km" style="display:none;">ផ្នែកទំនាក់ទំនង</span></p>
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
                                    <a href="./" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? '#ea1e00' : '#4D148C'; ?>">
                                        <span class="lang-en">Home</span>
                                        <span class="lang-km" style="display:none;">ទំព័រ​ដើម</span>
                                    </a>
                                </li>
                                <li data-page="about.php" <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?>>
                                    <a href="about" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? '#ea1e00' : '#4D148C'; ?>">
                                        <span class="lang-en">About</span>
                                        <span class="lang-km" style="display:none;">អំពីក្រុមហ៊ុន</span>
                                    </a>
                                </li>
                                <li data-page="service.php" <?php if (basename($_SERVER['PHP_SELF']) == 'service.php' || basename($_SERVER['PHP_SELF']) == 'service-single.php') echo 'class="active"'; ?>>
                                    <a href="service" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'service.php' || basename($_SERVER['PHP_SELF']) == 'service-single.php') ? '#ea1e00' : '#4D148C'; ?>">
                                        <span class="lang-en">Service</span>
                                        <span class="lang-km" style="display:none;">សេវាកម្ម</span>
                                    </a>
                                </li>
                                <li data-page="activities.php" <?php if (basename($_SERVER['PHP_SELF']) == 'activities.php') echo 'class="active"'; ?>>
                                    <a href="activities" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'activities.php') ? '#ea1e00' : '#4D148C'; ?>">
                                        <span class="lang-en">Project</span>
                                        <span class="lang-km" style="display:none;">គម្រោង</span>
                                    </a>
                                </li>
                                <li data-page="news.php" <?php if (basename($_SERVER['PHP_SELF']) == 'news.php' || basename($_SERVER['PHP_SELF']) == 'preview.php' || basename($_SERVER['PHP_SELF']) == 'tag.php') echo 'class="active"'; ?>>
                                    <a href="news" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'news.php' || basename($_SERVER['PHP_SELF']) == 'preview.php' || basename($_SERVER['PHP_SELF']) == 'tag.php') ? '#ea1e00' : '#4D148C'; ?>">
                                        <span class="lang-en">News</span>
                                        <span class="lang-km" style="display:none;">ព័ត៌មាន</span>
                                    </a>
                                </li>
                                <li data-page="faq.php" <?php if (basename($_SERVER['PHP_SELF']) == 'faq.php') echo 'class="active"'; ?>>
                                    <a href="faq.php" style="color:<?php echo (basename($_SERVER['PHP_SELF']) == 'faq.php') ? '#ea1e00' : '#4D148C'; ?>">
                                        <span class="lang-en">Other</span>
                                        <span class="lang-km" style="display:none;">ផ្សេងៗ</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="ft-header-cta-btn">
                        <a class="d-flex justify-content-center align-items-center" href="contact" style="background:#4D148C;">
                            <span class="lang-en">Get Quote</span>
                            <span class="lang-km" style="display:none;">Get Quote</span>
                        </a>
                    </div>
                    
                    <div class="dropdown" style="margin-right:70px;">
                        <button class="btn dropdown-toggle" type="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-expanded="false">
                            <img id="language-flag" src="./assets/flag/English-Flag.png" alt="Eng" style="width:45px;"> <span id="language-label">Eng</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownLanguage" id="language-dropdown">
                            <!-- Dynamic language options will be inserted here -->
                        </ul>
                    </div>

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
                                <a href="!#"><img src="assets/img/logo/Logo KCT Mid-01.png" alt=""></a>
                            </div>
                            <nav class="mobile-main-navigation clearfix ul-li">
                                <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>><a href="index">Home</a></li>
                                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?>><a href="about">About</a></li>
                                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'service.php') echo 'class="active"'; ?>><a href="service" style="color:#4D148C;">Service</a></li>
                                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'activities.php') echo 'class="active"'; ?>><a href="activities" style="color:#4D148C;">Project</a></li>
                                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'news.php') echo 'class="active"'; ?>><a href="news" style="color:#4D148C;">News</a></li>
                                    <li><a href="faq.php">Other</a></li>
                                </ul>
                            </nav>
                            <div class="dropdown" style="margin-top: 20px;">
                                <button class="btn dropdown-toggle" type="button" id="dropdownLanguageMobile" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img id="mobile-language-flag" src="./assets/flag/Khmer-Flag.png" alt="ខ្មែរ" style="width:45px;"> <span id="mobile-language-label">ខ្មែរ</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownLanguageMobile" id="mobile-language-dropdown">
                                    <!-- Dynamic language options will be inserted here -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const currentPage = '<?php echo basename($_SERVER['PHP_SELF']); ?>';
                        const mobileLanguageDropdown = document.getElementById('mobile-language-dropdown');

                        // Set the English link dynamically for mobile
                        const englishLinkMobile = document.createElement('a');
                        englishLinkMobile.className = 'dropdown-item';
                        englishLinkMobile.href = '../' + currentPage;
                        englishLinkMobile.innerHTML = '<img src="./assets/flag/English-Flag.png" alt="Eng" style="width:45px;"> Eng';
                        englishLinkMobile.onclick = function () {
                            switchLanguage('en');
                            return false;
                        };

                        // Append the English link to the dropdown
                        mobileLanguageDropdown.appendChild(englishLinkMobile);
                    });
                </script>
            </div>
        </div>
    </div>
</header>
<style>
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