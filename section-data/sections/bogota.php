<?php

include_once("articles/bogota-article.php");

global $aArticlesBogota;

$sPicture = "section-data/images/bogota.jpg";
$sName = "Bogota";
$sDescription = "";
$iNumMembers = 38;

$aDataBogota = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesBogota
];