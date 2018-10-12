<?php
//TODO: add articles oslo
include_once("articles/helsinki-article.php");

global $aArticlesHelsinki;

$sPicture = "section-data/images/bogota.jpg";
$sName = "Bogota";
$sDescription = "";
$iNumMembers = 38;

$aDataBogota = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesHelsinki
];