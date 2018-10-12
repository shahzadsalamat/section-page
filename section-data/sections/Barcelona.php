<?php
//TODO: Articles Rome
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/Barcelona.jpg";
$sName = "Barcelona";
$sDescription = "Barcelona, the cosmopolitan capital of Spain’s Catalonia region, it is known for its art and architecture. The fantastic Sagrada Família church and other modernist landmarks designed.";
$iNumMembers = 122;

$aDataBarcelona = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];