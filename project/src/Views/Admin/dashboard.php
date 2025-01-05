<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - CareerLink</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="bg-blue-600 text-white w-64 min-h-screen p-6">
            <h1 class="text-2xl font-bold text-center">CareerLink</h1>
            <nav class="mt-6">
                <ul>
                    <li class="mt-4"><a href="#" class="flex items-center hover:bg-blue-500 p-2 rounded"><i class="fas fa-tachometer-alt"></i><span class="ml-2">Tableau de bord</span></a></li>
                    <li class="mt-4"><a href="#" class="flex items-center hover:bg-blue-500 p-2 rounded"><i class="fas fa-briefcase"></i><span class="ml-2">Offres d'emploi</span></a></li>
                    <li class="mt-4"><a href="#" class="flex items-center hover:bg-blue-500 p-2 rounded"><i class="fas fa-user"></i><span class="ml-2">Candidatures</span></a></li>
                    <li class="mt-4"><a href="#" class="flex items-center hover:bg-blue-500 p-2 rounded"><i class="fas fa-chart-line"></i><span class="ml-2">Statistiques</span></a></li>
                    <li class="mt-4"><a href="#" class="flex items-center hover:bg-blue-500 p-2 rounded"><i class="fas fa-cog"></i><span class="ml-2">Paramètres</span></a></li>
                    <li class="mt-4"><a href="#" class="flex items-center hover:bg-blue-500 p-2 rounded"><i class="fas fa-sign-out-alt"></i><span class="ml-2">Déconnexion</span></a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h2 class="text-3xl font-semibold mb-6">Bienvenue sur votre tableau de bord, [Nom de l'utilisateur]</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <h3 class="font-bold text-xl">Offres d'emploi disponibles</h3>
                    <p class="text-2xl mt-2">120</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <h3 class="font-bold text-xl">Candidatures soumises</h3>
                    <p class="text-2xl mt-2">35</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <h3 class="font-bold text-xl">Nouveaux utilisateurs</h3>
                    <p class="text-2xl mt-2">15</p>
                </div>
            </div>

            <section class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">Graphiques des Candidatures</h2>
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <canvas id="candidaturesChart" width="400" height="200"></canvas>
                </div>
            </section>
        </main>
    </div>

</body>
</html>
