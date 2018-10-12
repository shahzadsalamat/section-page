<?php
//TODO: Articles Rome
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/Salatiga.jpg";
$sName = "Salatiga";
$sDescription = "";
$iNumMembers = 39;

$aDataSalatiga = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];