
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Section</title>
    <link rel="stylesheet" type='text/css' href="gb-style.css">

    <?php

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

  <div id='gb-app-wrapper'>
    <div id='header-black-overlay'></div>
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
        <a class='nav-logo' href="#">
            <svg class="gb-logo-large gb-icon-fill-white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <use xlink:href="#gb-logo-small"></use>
            </svg>
        </a>
      </div>
      <div class="right-content">
        <a class='gb-tablet-hide gb-phone-hide gb-paragraph-memdium gb-text-white' href='http://www.globuzzer.com/'>Home</a>
        <a href='https://globuzzer.mn.co/sign_in' class='gb-text-capitalize gb-text-white gb-paragraph-memdium'>sign in</a>
      </div>
    </div>
    <!-- Nav end-->

 
      <div class="gb-card-two-wrapper"  style="background-image: linear-gradient( to bottom right, rgba(0, 0, 0, 0.0001) 0%, #514848 100% ),url(<?php echo $aData["image"] ?>);">
    <h2 class="gb-title-xx-large gb-text-uppercase"><?php echo $aData["name"] ?></h2>
    <p class="gb-paragraph-medium gb-margin-bottom-desktop-32 "><?php echo $aData["description"] ?></p>
    <input class="gb-btn gb-btn-small gb-btn-white" value="Join" type="button">
    <div class="gb-avatars">
      <h4 class="gb-title-tiny"><?php echo $aData["numMembers"] ?> Members</h4>
    </div>
  </div>

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
      
       </div> 
     
      
   

  <script type='text/javascript' src='scripts/svgs-loader.js'></script>
  <script type='text/javascript' src='scripts/topNavbar.js'></script>
  

</body>
</html>