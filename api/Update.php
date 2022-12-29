<?php
require_once "UserMethod.php";
$user = new User();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'POST':
        if (!empty($_GET["id_user"])) {
            $id_user = intval($_GET["id_user"]);
            $user->update_User($id_user);
        }
        break;
    default:
        // Invalid Request Method
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
