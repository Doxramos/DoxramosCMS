<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 1/19/2017
 * Time: 9:03 AM
 */
require_once("../config.php");
if(devBuild == true && publicBuild == false && SystemMessages == true) {
    echo "<b>This is a developer release. Please only use this release if you know what you are doing!<br />Version ".VersionNO." ".VersionName.' Release<br />Released '.ReleaseDate.'</b>';
}
LoadPlugins();
if(!isset($_GET['page'])) {
    LoadTheme(ThemePath);
} else {
    switch($_GET['page']) {
        case "admin": echo "Load Admin Page"; break;
        default: LoadTheme(ThemePath); break;
    }
}
LoadPluginScripts();
