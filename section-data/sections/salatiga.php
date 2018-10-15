<?php

include_once("articles/salatiga-article.php");

global $aArticlesSalatiga;

$sPicture = "section-data/images/Salatiga.jpg";
$sName = "Salatiga";
$sDescription = "";
$iNumMembers = 39;

$aDataSalatiga = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesSalatiga
];