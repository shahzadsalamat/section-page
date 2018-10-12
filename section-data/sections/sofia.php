<?php
//TODO: Articles Sofia
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/Sofia.jpg";
$sName = "Sofia";
$sDescription = "The capital of Bulgaria – Sofia, is one of those cities you will either fall in love with at first sight or will never understand. Sofia is both old and young. Full of history and looking in the future. Modern and ancient.";
$iNumMembers = 49;

$aDataSofia = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];