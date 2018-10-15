<?php
include_once("articles/jakarta-article.php");

global $aArticlesJakarta;

$sPicture = "section-data/images/Jakarta.jpg";
$sName = "Jakarta";
$sDescription = "Welcome to Jakarta, the capital of Indonesia. The city where you could enjoy the tropical sun, encounter typical friendly people and experience unity in diversity of Indonesia.";
$iNumMembers = 105;

$aDataJakarta = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesJakarta
];