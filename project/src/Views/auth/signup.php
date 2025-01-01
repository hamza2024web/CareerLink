<?php
use App\Classes\Users;
use App\Controllers\Signup;
require_once "../../Controllers/UserController.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Instantiate the Users class
    $user = new Users($username, $email, $password);

    if (!$user->emptyInput()) {
        header("location: ./index.php?error=emptyinput");
        exit();
    }

    // Use Signup class to check for user existence
    require_once "../../Controllers/SignupController.php";
    $signup = new Signup();

    if ($signup->checkUser($username, $email)) {
        header("location: ./index.php?error=userexists");
        exit();
    }

    // Continue with user creation...
    echo "User input is valid!";
}
?>
