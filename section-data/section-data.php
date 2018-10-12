<?php
/**
 * Created by PhpStorm.
 * User: Bianca_neu
 * Date: 09.10.2018
 * Time: 11:32
 */

include_once("sections/copenhagen.php");
include_once("sections/helsinki.php");
include_once("sections/stockholm.php");
include_once("sections/london.php");
// e.g. include_once("data/paris.php");

global $aDataCopenhagen;
global $aDataHelsinki;
global $aDataStockholm;
global $aDataLondon;
// e.g. global $aDataParis

$aSectionData = [
    "322063" => $aDataCopenhagen,
    "322064" => $aDataHelsinki,
    "195831" => $aDataStockholm,
    "195344" => $aDataLondon
    //"195834" => $aDataParis
];