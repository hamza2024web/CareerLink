<?php
session_start();
require_once("../../../vendor/autoload.php");

use App\Controllers\tagController;
use App\Controllers\catcontroller;
use App\Controllers\OffreController;

$tagControllerFetch = new tagController();
$resultsTag = $tagControllerFetch->getTag();

$catControllerFetch = new catcontroller();
$resultsCat = $catControllerFetch->getCat();

if(isset($_POST['add'])){
    if(empty($_POST['post']) || empty($_POST['salaire']) || empty($_POST['qualification']) || empty($_POST['lieu']) || empty($_POST['discription']) 
    || empty($_POST['tag']) || empty($_POST['categorie'])){
    echo "veuillez saiser les inputs correctement ...";
    } else {
        $recruteur_id = $_SESSION['user_id'];
        $tagOffre = $_POST["tag"];
        $category = $_POST["categorie"];
        $post = $_POST["post"];
        $salary = $_POST["salaire"];
        $qualification = $_POST["qualification"];
        $location = $_POST["lieu"];
        $description = $_POST["discription"];
        $addOffre = new OffreController();
        $addOffre->addoffre($post , $salary , $qualification , $location , $description ,$recruteur_id , $category ,$tagOffre);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Offres</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10 p-8 bg-white shadow-lg rounded-lg">
        <form id="login-form" class="space-y-6" action="" method="POST">
            <div class="mb-6">
                <h3 class="text-gray-800 text-4xl font-extrabold">Add Offres</h3>
                <p class="text-gray-500 text-sm mt-2 leading-relaxed">Add your offre here, and explore more passionate candidates in our platform.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                <div>
                    <label for="tag" class="block text-gray-700 font-medium mb-2">Tags</label>
                    <select name="tag" id="tag" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="">Select a Tag</option>
                        <?php
                        foreach ($resultsTag as $resultTag) {
                            echo "<option value='{$resultTag['id']}'>{$resultTag['tag_name']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div>
                    <label for="categorie" class="block text-gray-700 font-medium mb-2">Categories</label>
                    <select name="categorie" id="categorie" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="">Select a Category</option>
                        <?php
                        foreach ($resultsCat as $resultCat) {
                            echo "<option value='{$resultCat['id']}'>{$resultCat['category_name']}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div>
                <label for="post" class="block text-gray-700 font-medium mb-2">Post</label>
                <input name="post" id="post" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter post title">
            </div>

            <div>
                <label for="salaire" class="block text-gray-700 font-medium mb-2">Salaire</label>
                <input name="salaire" id="salaire" type="number" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter salary">
            </div>

            <div>
                <label for="qualification" class="block text-gray-700 font-medium mb-2">Qualification</label>
                <input name="qualification" id="qualification" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter qualification">
            </div>

            <div>
                <label for="lieu" class="block text-gray-700 font-medium mb-2">Lieu</label>
                <input name="lieu" id="lieu" type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter location">
            </div>

            <div>
                <label for="discription" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="discription" id="discription" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter description"></textarea>
            </div>

            <div class="mt-6">
                <button type="submit" name="add" class="w-full py-3 px-6 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    Add Offre
                </button>
            </div>
        </form>
    </div>
</body>

</html>
