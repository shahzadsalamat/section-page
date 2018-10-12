<?php
//TODO: Articles Zagreb
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/Zagreb.jpg";
$sName = "Zagreb";
$sDescription = "Zagreb is a small, but vibrant metropolis, capital of a coastal attractive Croatia, country of more than 1200 islands. It’s a year-round outdoor city, very popular for drinking coffee in many cafes around the main square ban Jelacic, walking around historic Upper Town, and many other sights...";
$iNumMembers = 75;

$aDataZagreb = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];