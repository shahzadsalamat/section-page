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
include_once("sections/rome.php");
include_once("sections/oslo.php");
include_once("sections/bogota.php");
include_once("sections/milan.php");
// e.g. include_once("data/paris.php");

global $aDataCopenhagen;
global $aDataHelsinki;
global $aDataStockholm;
global $aDataLondon;
global $aDataRome;
global $aDataOslo;
global $aDataBogota;
global $aDataMilan;
// e.g. global $aDataParis

$aSectionData = [
    "322063" => $aDataCopenhagen,
    "322064" => $aDataHelsinki,
    "195831" => $aDataStockholm,
    "195344" => $aDataLondon,
    "195833" => $aDataRome,
    "268471" => $aDataOslo,
    "569795" => $aDataBogota,
    "258697" => $aDataMilan
    //"195834" => $aDataParis
];