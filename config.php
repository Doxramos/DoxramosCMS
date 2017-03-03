<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 12/29/2016
 * Time: 1:58 AM
 */
session_start();
$configPath = dirname(__file__).'/config.json';
define("SystemMessages", true);
function LoadConfig($path) {
    $json = file_get_contents($path);
    $jsonp = json_decode($json, true);
    define("SiteName", $jsonp['Settings']['SiteName']);
    define("SiteLanguage", $jsonp['Settings']['Language']);
    define("publicBuild", $jsonp['Settings']['publicBuild']);
    define("devBuild", $jsonp['Settings']['devBuild']);
    define("ActiveTheme", $jsonp['Settings']['ActiveTheme']);
    define("WebMaster", $jsonp['Settings']['webmaster']);
    define("VersionName", $jsonp['Version']['FriendlyName']);
    define("VersionNO", $jsonp['Version']['buildno']);
    define("ReleaseDate", $jsonp['Version']['ReleaseDate']);
    define("MySQLUser", $jsonp['MySQL']['username']);
    define("MySQLPass", $jsonp['MySQL']['password']);
    define("MySQLDB", $jsonp['MySQL']['database']);
    define("MySQLHost", $jsonp['MySQL']['host']);
}
LoadConfig($configPath);

require_once dirname(__file__).'/core/main.hook';
LoadModule("SQL");
LoadClasses();
LoadHooks();
