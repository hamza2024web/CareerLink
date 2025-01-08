<?php
session_start();
$email = $_SESSION['email'];



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruteurs - CreeLink</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-6 shadow-lg">
        <h1 class="text-4xl font-bold text-center">CreeLink - Recruteurs</h1>
        <p class="text-center mt-2">Trouvez les talents qui feront la différence dans votre entreprise.</p>
        <nav class="mt-4">
            <ul class="flex justify-center space-x-6">
                <li><a href="#" class="hover:underline">Accueil</a></li>
                <li><a href="./offre.php" class="hover:underline">Offres d'emploi</a></li>
                <li><a href="#" class="hover:underline">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto mt-8 p-4">
        <h2 class="text-3xl font-semibold mb-6 text-center">Bienvenue, <?= $email ?> </h2>
        <p class="text-center text-lg text-gray-700">Connectez-vous avec des candidats talentueux et passionnés.</p>
        <p class="mt-4 text-center text-gray-600">Utilisez notre plateforme pour publier vos offres d'emploi et gérer les candidatures facilement.</p>

        <div class="flex justify-center mt-8">
            <a href="./offre.php" class="bg-blue-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none">Ajouter une Offre</a>
        </div>

        <section class="mt-12">
            <h2 class="text-2xl font-semibold mb-6 text-center">Offres d'Emploi Récentes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-blue-600">Développeur Web</h3>
                        <p class="text-gray-600">Localisation : Paris</p>
                        <p class="mt-2 text-gray-700">Rejoignez notre équipe dynamique pour développer des applications web innovantes.</p>
                        <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Postuler</button>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-blue-600">Designer UI/UX</h3>
                        <p class="text-gray-600">Localisation : Lyon</p>
                        <p class="mt-2 text-gray-700">Nous cherchons un designer créatif pour améliorer l'expérience utilisateur de nos produits.</p>
                        <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Postuler</button>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-blue-600">Chef de Projet</h3>
                        <p class="text-gray-600">Localisation : Marseille</p>
                        <p class="mt-2 text-gray-700">Nous recherchons un chef de projet expérimenté pour diriger nos initiatives stratégiques.</p>
                        <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Postuler</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-12">
            <h2 class="text-2xl font-semibold mb-6 text-center">Contactez-Nous</h2>
            <form class="bg-white shadow-lg rounded-lg p-8">
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium" for="name">Nom</label>
                    <input type="text" id="name" class="mt-1 p-3 w-full border rounded-lg" placeholder="Votre nom" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium" for="email">Email</label>
                    <input type="email" id="email" class="mt-1 p-3 w-full border rounded-lg" placeholder="Votre email" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium" for="message">Message</label>
                    <textarea id="message" class="mt-1 p-3 w-full border rounded-lg" rows="4" placeholder="Votre message" required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-blue-700">Envoyer</button>
            </form>
        </section>
    </main>

    <footer class="bg-gray-800 text-white text-center p-6 mt-8">
        <p>&copy; 2025 CreeLink. Tous droits réservés.</p>
    </footer>
</body>
</html>
