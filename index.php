<?php

require_once "session.php";
require_once "functions.php";

$action = $_GET['action'] ?? 'main';

switch ($action) {
    case "login":
        loginEndpoint();
        break;
    case "register":
        registerEndpoint();
        break;
    case "logout":
        logoutEndpoint();
        break;
    case "session":
        print_r($_SESSION);
        break;
    case "main":
    default:
        mainEndpoint();
}
