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
include_once("sections/Salatiga.php");
include_once("sections/Barcelona.php");
include_once("sections/Lisbon.php");
include_once("sections/Jakarta.php");
include_once("sections/lahore.php");
include_once("sections/bogota.php");
include_once("sections/toronto.php");
include_once("sections/sofia.php");
include_once("sections/zagreb.php");
include_once("sections/wurzburg.php");
include_once("sections/sanFrancisco.php");
include_once("sections/belgrade.php");
include_once("sections/hebron.php");
include_once("sections/Vilnius.php");
// e.g. include_once("data/paris.php");

global $aDataCopenhagen;
global $aDataHelsinki;
global $aDataStockholm;
global $aDataLondon;
global $aDataRome;
global $aDataOslo;
global $aDataMilan;
global $aDataSalatiga;
global $aDataBarcelona;
global $aDataLisbon;
global $aDataJakarta;
global $aDataBogota;
global $aDataLahore;
global $aDataBogota;
global $aDataToronto;
global $aDataSofia;
global $aDataZagreb;
global $aDataWuerzburg;
global $aDataSanFrancisco;
global $aDataBelgrade;
global $aDataHebron;
global $aDataVilnius;
// e.g. global $aDataParis

$aSectionData = [
    "322063" => $aDataCopenhagen,
    "322064" => $aDataHelsinki,
    "195831" => $aDataStockholm,
    "195344" => $aDataLondon,
    "195833" => $aDataRome,
    "268471" => $aDataOslo,
    "569795" => $aDataBogota,
    "258697" => $aDataMilan,
    "588489" => $aDataSalatiga,
    "195835" => $aDataBarcelona,
    "446233" => $aDataLisbon,
    "244080" => $aDataJakarta,
    "387773" => $aDataLahore,
    "466728" => $aDataToronto,
    "435389" => $aDataSofia,
    "403651" => $aDataZagreb,
    "318520" => $aDataWuerzburg,
    "312045" => $aDataSanFrancisco,
    "294024" => $aDataBelgrade,
    "273962" => $aDataHebron,
    "210260" => $aDataVilnius,
    //"195834" => $aDataParis
];