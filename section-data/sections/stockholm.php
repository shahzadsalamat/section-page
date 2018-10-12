<?php
//TODO: Articles Stockholm
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/stockholm.jpg";
$sName = "Stockholm";
$sDescription = "Welcome to Stockholm, one of the most popular Scandinavian Capitals, where the weather turns like your mood, and the beauty lies between the mixture of colours, history, and the multicultural environment.";
$iNumMembers = 2025;

$aDataStockholm = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];