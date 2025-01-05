<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreeLink - Trouver un emploi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-blue-600 text-white p-6">
        <h1 class="text-4xl font-bold text-center">CreeLink</h1>
        <p class="text-center mt-2">Trouvez votre emploi idéal</p>
        <nav class="mt-4">
            <ul class="flex justify-center space-x-4">
                <li><a href="#" class="hover:underline">Accueil</a></li>
                <li><a href="#" class="hover:underline">Utilisateurs</a></li>
                <li><a href="#" class="hover:underline">Offres</a></li>
                <li><a href="#" class="hover:underline">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="container mx-auto mt-8 p-4">
        <h2 class="text-3xl font-semibold mb-6 text-center">Utilisateurs à la recherche d'un emploi</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                <img src="https://via.placeholder.com/300" alt="Utilisateur 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-xl">Nom de l'utilisateur 1</h3>
                    <div class="flex flex-wrap mt-2">
                        <span class="bg-blue-200 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Développeur</span>
                        <span class="bg-green-200 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">JavaScript</span>
                        <span class="bg-yellow-200 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">React</span>
                    </div>
                    <p class="mt-2 text-gray-600">Passionné par le développement web et les nouvelles technologies.</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-200">Contacter</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                <img src="https://via.placeholder.com/300" alt="Utilisateur 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-xl">Nom de l'utilisateur 2</h3>
                    <div class="flex flex-wrap mt-2">
                        <span class="bg-blue-200 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Designer</span>
                        <span class="bg-green-200 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">UX/UI</span>
                        <span class="bg-yellow-200 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Photoshop</span>
                    </div>
                    <p class="mt-2 text-gray-600">Créatif avec une passion pour le design d'expérience utilisateur.</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-200">Contacter</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                <img src="https://via.placeholder.com/300" alt="Utilisateur 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-xl">Nom de l'utilisateur 3</h3>
                    <div class="flex flex-wrap mt-2">
                        <span class="bg-blue-200 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Gestion de projet</span>
                        <span class="bg-green-200 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Agile</span>
                        <span class="bg-yellow-200 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Scrum</span>
                    </div>
                    <p class="mt-2 text-gray-600">Expert en gestion de projet avec une approche axée sur les résultats.</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-200">Contacter</button>
                </div>
            </div>
            <!-- Ajoutez d'autres utilisateurs ici -->
        </div>

        <section class="mt-12">
            <h2 class="text-3xl font-semibold mb-6 text-center">Témoignages</h2>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <p class="italic text-gray-600">"CreeLink m'a aidé à trouver le travail de mes rêves! Merci!"</p>
                <p class="font-bold text-right mt-4">- Client Satisfait</p>
            </div>
        </section>

        <section class="mt-12">
            <h2 class="text-3xl font-semibold mb-6 text-center">Offres d'emploi récentes</h2>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="font-bold text-xl">Développeur Frontend</h3>
                <p class="text-gray-600">Lieu : Paris</p>
                <p class="mt-2">Description : Rejoignez notre équipe pour développer des solutions innovantes.</p>
                <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition duration-200">Postuler</button>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 mt-4">
                <h3 class="font-bold text-xl">Designer UI/UX</h3>
                <p class="text-gray-600">Lieu : Lyon</p>
                <p class="mt-2">Description : Conception d'interfaces utilisateur intuitives et engageantes.</p>
                <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition duration-200">Postuler</button>
            </div>
        </section>
    </main>
    
    <footer class="bg-gray-800 text-white text-center p-4 mt-8">
        <p>&copy; 2025 CreeLink. Tous droits réservés.</p>
    </footer>
</body>
</html>
