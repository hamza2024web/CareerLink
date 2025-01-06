<?php
require_once("../../../vendor/autoload.php");
use App\Controllers\tagController;
use App\Config\Database;

$tagControllerFetch = new tagController();
if(isset($_POST["submit"])){
    if(empty($_POST["tag"])){
        echo "veuillez saiser le nom de tag";
    } else {
        $tag_name = $_POST["tag"];

        $tagController = new tagController();
        $tagController->setTag($tag_name);
    }
}
$results = $tagControllerFetch->getTag();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <form id="login-form" class="space-y-4" action="" method="POST">
        <div class="mb-8">
            <h3 class="text-gray-800 text-3xl font-extrabold">Add a special tag</h3>
            <p class="text-gray-500 text-sm mt-4 leading-relaxed">Create your account and explore a world of possibilities. Your Career begins here.</p>
        </div>

        <div>
            <label class="text-gray-800 text-sm mb-2 block">Name</label>
            <div class="relative flex items-center">
                <input name="tag" type="text" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Enter Tag name" />
            </div>
        </div>

        <div class="!mt-8">
            <button type="submit" name="submit" class="w-full shadow-xl py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                Add Tag
            </button>
        </div>
        <div id="player-section">
            <!-- Your existing player section content remains unchanged -->
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Player Management</h1>
            <div class="w-full max-w-6xl bg-white rounded-lg shadow-md overflow-hidden">
                <table class="table-auto w-full border-collapse">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2">id</th>
                            <th class="px-4 py-2">name</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <?php
                            foreach($results as $result){
                                ?>
                                <tr class="hover:bg-gray-100 transition">
                                    <td class="border px-4 py-2 text-center"><?= $result['id']; ?></td>
                                    <td class="border px-4 py-2 text-center"><?= $result['tag_name']; ?></td>
                                    <td class="border px-4 py-2 text-center space-x-2">
                                        <a href="" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">Edit</a>
                                        <a href="" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition" onclick="return confirm('Are you sure?');">Delete</a>
                                    </td>
                                    </tr>
                                    <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </form>
</body>

</html>