<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 3/2/2017
 * Time: 7:19 PM
 */
require_once "../../../../config.php";
if(!isset($_POST['process'])) {

}
else {
    $account = new user();
    switch($_POST['process']) {
        case "login": $account->CheckLogin($_POST['login_username'], $_POST['login_password']); break;
        case "logout": unset($_SESSION['user']['id']); echo 1; break;
    }
}