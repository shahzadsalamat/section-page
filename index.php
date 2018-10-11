
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Section</title>
    <link rel="stylesheet" type='text/css' href="gb-style.css">

  <?php
    error_reporting(0);
    session_start();
    include_once("section-data/section-data.php");
    global $aSectionData;
    if (isset($_REQUEST["section"])) {
      // url: http://localhost/globuzzer-homepage-section/?section=322063
    $sSection = $_REQUEST["section"]; // e.g. 322063 for Copenhagen
    $aData = $aSectionData[$sSection];
 ?>
</head>
<body>

<div class='gb-app-wrapper'>
  <div class='gb-app-black-overlay'></div>
    <!-- NavAside start -->
    <div class='gb-nav-aside gb-gradient-red-black'>
      <div class='nav-aside-image-background'>
      </div>
      <div class='nav-aside-content'>
        <div class='nav-aside-close'>
          <svg class='nav-aside-close-icon gb-icon-medium gb-icon-white-opacity-50 gb-phone-hide' version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href='#close'></use>
          </svg>
        </div>
        <ul class='nav-aside-content-top'>

          <li class='nav-aside-top-list-item'>
            <a data-scroll-to='about-us' class='nav-aside-link gb-text-white' href='http://www.globuzzer.com/'>
              <svg class='nav-aside-icon gb-icon-medium gb-icon-white-opacity-50' version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <use xlink:href='#home'></use>
              </svg>  
              <h5 class='gb-text-uppercase gb-text-white gb-title-tiny gb-text-uppercase'>Home</h5>
            </a>
          </li> 
          <li class='nav-aside-top-list-item'>
            <a href='https://globuzzer.mn.co/sign_in' class='nav-aside-link gb-text-white' href='#'>
              <svg class='nav-aside-icon gb-icon-medium gb-icon-white-opacity-50' version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <use xlink:href='#calendar'></use>
              </svg>
              <h5 class='gb-text-uppercase gb-text-white gb-title-tiny gb-text-uppercase'>sign in</h5>
            </a>
          </li>
        </ul>
        <div class='nav-aside-content-bottom line-top'>
          <div class='content-left'>
            <a href="#">
              <svg class="gb-logo-large gb-icon-fill-white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <use xlink:href="#gb-logo-large"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- NavAside End -->

    <!-- Nav start-->
    <div class="gb-navbar gb-background-transparent">
      <div class="left-content">
        <a href='#' class='gb-desktop-hide nav-burger'>
          <svg class='gb-icon-medium gb-icon-white' version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href='#menu'></use>
          </svg>
        </a>
      </div>
      <div class='center-content'>
        <a class='nav-logo' href="http://www.globuzzer.com/">
            <svg class="gb-logo-large gb-icon-fill-white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <use xlink:href="#gb-logo-small"></use>
            </svg>
        </a>
      </div>
      <div class="right-content">
        <a  class='gb-tablet-hide gb-phone-hide gb-paragraph-memdium gb-text-white' href='http://www.globuzzer.com/'>Home</a>
        <a href='https://globuzzer.mn.co/sign_in' class='gb-text-capitalize gb-text-white gb-paragraph-memdium'>sign in</a>
      </div>
    </div>
    <!-- Nav end-->

   
    <!-- Page wrapper start -->
    <div class='gb-page-wrapper'>
      <!-- Header start-->
      <div class='header'>

        <div class='header-black-overlay'></div>
        <!-- CARD TWO STARTS -->
        <div class="gb-card-two-wrapper"  style="background-image: linear-gradient( to bottom right, rgba(0, 0, 0, 0.0001) 0%, #514848 100% ),url(<?php echo $aData["image"] ?>);">
          <h2 class="gb-title-xx-large gb-text-uppercase"><?php echo $aData["name"] ?></h2>
        <div class="gb-card-two-wrapper-description gb-margin-bottom-desktop-32 gb-margin-bottom-tablet-32">
         <p class="gb-paragraph-medium "><?php echo $aData["description"] ?></p>
        </div>
           <input class="gb-btn gb-btn-small gb-btn-white" value="Join" type="button">
             <div class="gb-avatars">
                <h4 class="gb-title-medium"><?php echo $aData["numMembers"] ?> Members</h4>
             </div>
         </div>
<!-- CARD TWO ENDS -->
       
      </div>
      <!-- Header end -->
    
<!-- ARTICLES STARTS -->
 
<div class='gb-card-four-wrapper'>
         <ul class='gb-card-four-sub-cards'>
         <?php
    foreach($aData["articles"] as $article) {
        echo "<li class='gb-card-four-sub-card'>
            <div class='gb-card-four-sub-card-info'>
              <h2 class='gb-title-medium'>".$article["title"]."</h2>
              <p class='gb-paragraph-small gb-margin-bottom-tablet-48 gb-margin-bottom-desktop-48'>".$article["content"]."</p>
              <ul class='posted-info'>
                <li class='posted-by'>
                  <svg class='source gb-icon-black-opacity-30 gb-icon-small' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                    <use xlink:href='#source'></use>
                  </svg>
                  <a class='gb-text-black' href='#'>".$article["source"]."</a>
                </li>
                <li class='posted-at'>
                  <svg class='gb-icon-black-opacity-30 posted-date gb-icon-small' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                    <use xlink:href='#clock'></use>
                  </svg>
                  <p>".$article["postedDate"]."</p>
                </li>
              </ul>
            </div>
            <div class='gb-card-four-sub-card-image'>
              <img src='".$article["url"]."' alt='story-image'>
            </div>
          </li>";
        }
        ?>
        <?php
        }
        ?>   
        </ul>
      </div>
      
 <!-- ARTICLES ENDS -->

      <!-- Footer Start -->
      <div class="gb-footer gb-background-black-opacity-5">
        <div class="footer-wrapper">
          <div class='footer-top-content'>
            <ul class='footer-nav gb-phone-hide gb-tablet-hide'>
              <li class="footer-nav-item gb-margin-bottom-8">
                <a class="gb-text-black-opacity-50 gb-subtitle-medium" href="https://mightynetworks.com/terms_of_use">
                  Terms &amp; Conditions
                </a>
              </li>
              <li class="footer-nav-item gb-margin-bottom-8">
                <a class="gb-text-black-opacity-50 gb-subtitle-medium" href="https://mightynetworks.com/privacy_policy">
                  Privacy Policy
                </a>
              </li>
            </ul>
            <ul class="footer-contact-list">
              <li class='footer-contact-item gb-margin-bottom-8'>
                <a class='footer-contact-link' href='href="https://www.google.com/maps/place/Skyttev%C3%A4gen+29,+133+36+Saltsj%C3%B6baden,+Ruotsi/@59.2707216,18.2862762,17z/data=!3m1!4b1!4m5!3m4!1s0x465f7f0cd4f5b7b3:0x75deb43dec7d4645!8m2!3d59.2707216!4d18.2884649"'>
                  <svg class="gb-icon-fill-black-opacity-30 gb-icon-small" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href="#location"></use>
                  </svg>
                  <p class='gb-text-black-opacity-50 gb-subtitle-medium'>Skyttevägen 29, Saltsjöbaden, Sweden</p>
                </a>
              </li>
              <li class='footer-contact-item gb-margin-bottom-8'>
                <a class='footer-contact-link' href='tel:46735555134'>
                  <svg class="gb-icon-fill-black-opacity-30 gb-icon-small" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href="#phone"></use>
                  </svg>
                  <p class='gb-text-black-opacity-50 gb-subtitle-medium'>+46 73 555 5 134</p>
                </a>
              </li>
              <li class='footer-contact-item gb-margin-bottom-8'>
                <a class='footer-contact-link' href='mailto:info@globuzzer.com'>
                  <svg class="gb-icon-fill-black-opacity-30 gb-icon-small" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href="#envelope"></use>
                  </svg>
                  <p class='gb-text-black-opacity-50 gb-subtitle-medium'>info@globuzzer.com</p>
                </a>
              </li>
            </ul>
            <ul class="footer-social-media-list">
              <li class="footer-social-media-item">
                <a class='footer-contact-link' href="https://www.facebook.com/SocialNetworkforStudentsandExpats/?hc_ref=ARTpukVVg9pLASlFEgSEGsyb34HwQIISr3bQWcT-CghqMvRc2ccJmEMvOT4qVL7plus&__xts__[0]=68.ARAied8czZYuUH1SnAAN-tgadfzqVniY7HZvUHyax0rpZF33Xm97dZKIPU_3iBvcxypV5tTXGHDoy1aI-ZKVuoQ2L7nhf-RjbgQrrwX3FR93GfT85bpmIWr8ObZRBGqTdv1-IYLxVty6zPOYRG-0eRTzdoIxCsrQWIt1u_gqNVOKlCpQwLTe&__tn__=%3C-R">
                  <svg class="gb-icon-fill-black-opacity-30 gb-icon-medium" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href="#facebook"></use>
                  </svg>
                </a>
              </li>
              <li class="footer-social-media-item">
                <a class='footer-contact-link' href="https://twitter.com/globuzzer">
                  <svg class="gb-icon-fill-black-opacity-30 gb-icon-medium" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href="#twitter"></use>
                  </svg>
                </a>
              </li>
              <li class="footer-social-media-item">
                <a class='footer-contact-link' href="https://www.youtube.com/channel/UC4u8N-QBDMWG6OqzSni8clw">
                  <svg class="gb-icon-fill-black-opacity-30 gb-icon-medium" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href="#youtube"></use>
                  </svg>
                </a>
              </li>
              <li class="footer-social-media-item">
                <a class='footer-contact-link' href="https://www.linkedin.com/company/globuzzer/">
                  <svg class="gb-icon-fill-black-opacity-30 gb-icon-medium" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href="#linkedin"></use>
                  </svg>
                </a>
              </li>
              <li class="footer-social-media-item">
                <a class='footer-contact-link' href="https://www.pinterest.se/globuzzer/pins/">
                  <svg class="gb-icon-fill-black-opacity-30 gb-icon-medium" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href="#pinterest"></use>
                  </svg>
                </a>
              </li>
              <li class="footer-social-media-item">
                <a class='footer-contact-link' href="https://www.instagram.com/globuzzer/">
                  <svg class="gb-icon-fill-black-opacity-30 gb-icon-medium" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </a>
              </li>
            </ul>



          </div>
          <div class='footer-bottom-content'>
            <div class="footer-rights-reserved">
              <div class='left-content'>
                <p class="gb-label gb-text-black-opacity-30">© 2018 All rights reserved.</p>
              </div>
              <ul class='right-content gb-desktop-hide'>
                <li class="footer-nav-item">
                  <a class="gb-text-black-opacity-30 gb-subtitle-medium" href="https://mightynetworks.com/terms_of_use">
                    Terms &amp; Conditions
                  </a>
                </li>
                <li class="footer-nav-item">
                  <a class="gb-text-black-opacity-30 gb-subtitle-medium" href="https://mightynetworks.com/privacy_policy">
                    Privacy Policy
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->
    </div>
  </div>

  <script type='text/javascript' src='scripts/svgs-loader.js'></script>
  <script type='text/javascript' src='scripts/nav-aside-trigger.js'></script>
  <script type='text/javascript' src='scripts/navbar.js'></script>
  
</body>
</html>