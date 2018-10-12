<?php
//TODO: Articles London
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/london.jpg";
$sName = "London";
$sDescription = "";
$iNumMembers = 165;

$aDataLondon = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];