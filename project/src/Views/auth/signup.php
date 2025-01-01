<?php
use App\Config\DB;
use App\Classes\Users;
use App\Controllers\Signup;


if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user = new Users($username, $email, $password);

    if (!$user->emptyInput()) {
        header("location: ../index.php?error=emptyinput");
        exit();
    }

    $signup = new Signup();

    if ($signup->checkUser($username, $email)) {
        header("location: ../index.php?error=userexists");
        exit();
    }


}
?>
