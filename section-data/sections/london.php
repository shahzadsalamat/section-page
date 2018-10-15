<?php

include_once("articles/london-article.php");

global $aArticlesLondon;

$sPicture = "section-data/images/london.jpg";
$sName = "London";
$sDescription = "";
$iNumMembers = 165;

$aDataLondon = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesLondon
];