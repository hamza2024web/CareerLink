<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <form id="login-form" class="space-y-4" action="" method="POST">
        <div class="mb-8">
            <h3 class="text-gray-800 text-3xl font-extrabold">Add Offres</h3>
            <p class="text-gray-500 text-sm mt-4 leading-relaxed">Add Your offre here , and explore more passionite candidat in our plateforme</p>
        </div>
        <div class="flex">
            <div class="form-group">
                <select name="tag" id="tag" required>
                    <option value="">Tag</option>
                    <option value="Candidat">Candidat</option>
                </select>
            </div>
            <div class="form-group">
                <select name="categorie" id="categorie" required>
                    <option value="">Tag</option>
                    <option value="Candidat">Candidat</option>
                </select>
            </div>
        </div>

        <div>
            <label class="text-gray-800 text-sm mb-2 block">Name</label>
            <div class="relative flex items-center">
                <input name="name" type="text" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Enter username" />
            </div>
        </div>

        <div>
            <label class="text-gray-800 text-sm mb-2 block">Email</label>
            <div class="relative flex items-center">
                <input name="email" type="email" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Enter email" />
            </div>
        </div>

        <div>
            <label class="text-gray-800 text-sm mb-2 block">Password</label>
            <div class="relative flex items-center">
                <input name="password" type="password" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Enter password" />
            </div>
        </div>
        <!-- Candidat Specific Fields -->
        <div id="candidatFields" style="display:none;">
            <div>
                <label class="text-gray-800 text-sm mb-2 block">Skills</label>
                <div class="relative flex items-center">
                    <input name="skils" type="text" class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Enter skills" />
                </div>
            </div>
            <div>
                <label class="text-gray-800 text-sm mb-2 block">Diplomat</label>
                <div class="relative flex items-center">
                    <input name="diplomat" type="text" class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Enter diploma" />
                </div>
            </div>
        </div>
        <!-- Recruteur Specific Fields -->
        <div id="recruteurFields" style="display:none;">
            <div>
                <label class="text-gray-800 text-sm mb-2 block">Company Name</label>
                <div class="relative flex items-center">
                    <input name="companyName" type="text" class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-lg outline-blue-600" placeholder="Enter company name" />
                </div>
            </div>
        </div>
        <div class="!mt-8">
            <button type="submit" name="submit" class="w-full shadow-xl py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                Create account
            </button>
        </div>
    </form>
</body>

</html>