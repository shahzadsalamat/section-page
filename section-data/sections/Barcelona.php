<?php

include_once("articles/barcelona-article.php");

global $aArticlesBarcelona;

$sPicture = "section-data/images/Barcelona.jpg";
$sName = "Barcelona";
$sDescription = "Barcelona, the cosmopolitan capital of Spain’s Catalonia region, it is known for its art and architecture. The fantastic Sagrada Família church and other modernist landmarks designed.";
$iNumMembers = 122;

$aDataBarcelona = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesBarcelona
];