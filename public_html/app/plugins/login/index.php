<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 3/2/2017
 * Time: 4:50 PM
 */
function login_page() {
    require_once dirname(__file__).'\\login_page.php';
}
define("LOGIN_PAGE_ACTION", str_replace(publicp, "//".$_SERVER['HTTP_HOST'], dirname(__file__).'/login.php'));
