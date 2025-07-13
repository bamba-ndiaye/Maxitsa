<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un compte principal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="h-screen flex">
    <!-- Partie gauche - fond marron -->
    <div class="w-1/4 bg-yellow-700">
    </div>
    
    <!-- Partie droite - fond gris clair -->
    <div class="w-3/4 bg-gray-100 flex flex-col justify-center px-16">
        <div class="max-w-2xl mx-auto w-full">
            <div class="border-t-4 border-yellow-700 mb-8"></div>
            
            <h1 class="text-yellow-700 text-3xl font-bold mb-12 text-center">
                Créer un compte<br>principal
            </h1>

            <!-- Début du formulaire -->
            <form action="/" method="POST" enctype="multipart/form-data" class="space-y-6">
                <div class="flex gap-4">
                    <div class="w-1/2">
                        <input type="text" name="nom" placeholder="Nom" required class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                    </div>
                    <div class="w-1/2">
                        <input type="text" name="prenom" placeholder="Prénom" required class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                    </div>
                </div>

                <div>
                    <input type="tel" name="telephone" placeholder="Numéro téléphone" required class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                </div>

                <div>
                    <input type="text" name="adresse" placeholder="Adresse" required class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                </div>

                <div>
                    <input type="text" name="carte_identite" placeholder="Numéro de carte d'identité" required class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                </div>

                <div class="flex gap-4">
                    <div class="w-1/2">
                        <label class="block text-sm text-yellow-700 font-semibold mb-1">Recto</label>
                        <input type="file" name="recto" accept="image/*" required class="w-full p-3 rounded-lg bg-yellow-700 text-white text-lg file:bg-yellow-600 file:text-white file:rounded-lg">
                    </div>
                    <div class="w-1/2">
                        <label class="block text-sm text-yellow-700 font-semibold mb-1">Verso</label>
                        <input type="file" name="verso" accept="image/*" required class="w-full p-3 rounded-lg bg-yellow-700 text-white text-lg file:bg-yellow-600 file:text-white file:rounded-lg">
                    </div>
                </div>

                <div class="mt-8">
                    <button type="submit" class="w-full bg-yellow-700 text-white py-4 rounded-lg font-semibold text-lg">
                        Créer un compte
                    </button>
                </div>
            </form>
            <!-- Fin du formulaire -->
        </div>
    </div>
</div>

</body>
</html>
