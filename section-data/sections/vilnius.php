<?php
//TODO: Articles Vilnius
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/Vilnius.jpg";
$sName = "Vilnius";
$sDescription = "City connecting north and south, east and west, well known as a center of Europe, one of the largest medieval old towns, unique history and marvelous Republic of Užupis invites you to enjoy it every time of the year.";
$iNumMembers = 153;

$aDataVilnius = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];