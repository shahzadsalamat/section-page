<?php
//TODO: Articles Würzburg
include_once("articles/copenhagen-article.php");

global $aArticlesCopenhagen;

$sPicture = "section-data/images/Würzburg.jpg";
$sName = "Würzburg";
$sDescription = "You love wine, you like German sausages, you are interested in old ancient but young and vibrant city at the same time – It is definitely time for you to go and visit Würzburg! hosts the UNESCO World Heritage Site – the Würzburg Residenz, and is famous for its fortress- Festung Marienberg.";
$iNumMembers = 53;

$aDataWürzburg = [
    "name" => $sName,
    "description" => $sDescription,
    "numMembers" => $iNumMembers,
    "image" => $sPicture,
    "articles" => $aArticlesCopenhagen
];