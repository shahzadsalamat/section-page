<?php
//TODO: Articles Toronto
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/Toronto.jpg";
$sName = "Toronto";
$sDescription = "Toronto is often described as a smaller and less intense version of New York City. But as Canada’s most populous and largest city, this place has its own unique spirit.";
$iNumMembers = 56;

$aDataToronto = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];