<?php

require_once "../../../vendor/autoload.php";
use App\Config\DB;
use App\Classes\Users;
use App\Controllers\UserController;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    echo'db rani 4andkhl l user';
    $user = new Users($username, $email, $password);
    echo'rani dkhl luser';
    $signup = new UserController();
    echo'rani dkhlt l sign in';

    // if (!$user->emptyInput()) {
    //     echo 'true';
    //     header("location: ../index.php?error=emptyinput");
    //     exit();
    // }




    // if ($signup->checkUser($username, $email)) {
    //     header("location: ../index.php?error=userexists");
    //     exit();
    // }


}
?>
