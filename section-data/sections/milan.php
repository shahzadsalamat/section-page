<?php
//TODO: add articles oslo
include_once("articles/helsinki-article.php");

global $aArticlesHelsinki;

$sPicture = "section-data/images/Milan.jpg";
$sName = "Milan";
$sDescription = "Situated in the north of Italy it is the second biggest Italian city after Rome. But it is so much more than that, as it is crowned as the economic capital of Italy. It is one of the four world fashion capitals, an international hub for exhibition halls, and a design centre.";
$iNumMembers = 100;

$aDataMilan = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesHelsinki
];