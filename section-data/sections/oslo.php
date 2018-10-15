<?php
//TODO: add articles oslo
include_once("articles/oslo-article.php");

global $aArticlesOslo;

$sPicture = "section-data/images/oslo.jpg";
$sName = "Oslo";
$sDescription = "Oslo, a city where raw Norwegian nature and Scandinavian minimalism meet in order to create one of the most magnificent places in Europe. Oslo is a meeting point of many cultures and in its streets, parks and fjords you will find many incredible stories that will imprint this city in your memory.";
$iNumMembers = 874;

$aDataOslo = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesOslo
];