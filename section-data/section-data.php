<?php
/**
 * Created by PhpStorm.
 * User: Bianca_neu
 * Date: 09.10.2018
 * Time: 11:32
 */

include_once("copenhagen.php");
include_once("helsinki.php");
// e.g. include_once("data/paris.php");

global $aDataCopenhagen;
global $aDataHelsinki;
// e.g. global $aDataParis

$aSectionData = [
    "322063" => $aDataCopenhagen,
    "322064" => $aDataHelsinki,
    //"195834" => $aDataParis
];