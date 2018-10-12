<?php
//TODO: Articles Lahore
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/lahore.jpg";
$sName = "lahore";
$sDescription = "Lahore, the city of gardens is the historic cultural centre of Pakistan. A cosmopolitan city famous for its ancient temples, mosques, palaces, forts and gardens dating back to 900AD. A major destination for tourism because of its welcoming hospitality and delicious Punjabi cuisine.";
$iNumMembers = 71;

$aDataLahore = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];