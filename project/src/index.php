<?php

require_once("../vendor/autoload.php");
use App\Config\Database;

$db = new Database();
$db->connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="font-[sans-serif] min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="text-center space-y-8">
      <h1 class="text-4xl font-extrabold text-gray-800">Welcome to CareerLink</h1>
      <p class="text-gray-600 text-lg">Start your journey with us. Choose an option below:</p>

      <div class="flex flex-col md:flex-row items-center justify-center gap-6">
        <!-- Sign In Button -->
        <a href="./Views/auth/login.php" class="block w-52">
          <button class="w-full py-4 px-6 text-lg font-bold rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none shadow-lg">
            Sign In
          </button>
        </a>

        <!-- Register Button -->
        <a href="login_register.html" class="block w-52">
          <button class="w-full py-4 px-6 text-lg font-bold rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none shadow-lg">
            Register
          </button>
        </a>
      </div>
    </div>
  </div>
</body>

</html>
