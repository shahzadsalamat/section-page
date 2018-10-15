<?php

include_once("articles/rome-article.php");

global $aArticlesRome;

$sPicture = "section-data/images/Rome.jpg";
$sName = "Rome";
$sDescription = "Rome. The capital of Italy offers a unique cultural heritage which always enchants people. Rome has been the centre of the most important historical events & home to the brightest minds.";
$iNumMembers = 142;

$aDataRome = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesRome
];