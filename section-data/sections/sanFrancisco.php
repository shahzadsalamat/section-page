<?php
//TODO: Articles sanFrancisco
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/SanFrancisco.jpg";
$sName = "SanFrancisco";
$sDescription = "";
$iNumMembers = 107;

$aDataSanFrancisco = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];