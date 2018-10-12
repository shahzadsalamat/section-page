<?php
//TODO: Articles Hebron
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/Hebron.jpg";
$sName = "Hebron";
$sDescription = "Hebron is the largest city in Palestine in both area and population and considered its commercial center. It is located in a distance of 30 Km to the South of Jerusalem, the capital of Palestine.";
$iNumMembers = 50;

$aDataHebron = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];