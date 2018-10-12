<?php
//TODO: Articles Belgrade
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/Belgrade.jpg";
$sName = "Belgrade";
$sDescription = "Belgrade - rich in history, rich in culture, rich in food, rich in hospitality. No matter the age or a point of interest there is something for everyone. You can choose from best restaurants in Skadarlija, to the beach of Ada Ciganlija or a place of sub-urban culture of Savamala.";
$iNumMembers = 137;

$aDataBelgrade = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];