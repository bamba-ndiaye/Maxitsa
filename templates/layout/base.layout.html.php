<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max it Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex h-screen">
        <!-- Sidebar gauche -->
        <div class="w-1/5 bg-yellow-700 text-white flex flex-col">
            <!-- Logo -->
            <div class="p-6">
                <div class="border-4 border-white rounded-lg p-4 text-center">
                    <div class="text-white text-2xl font-bold">
                        MAX <span class="text-orange-300">it</span>
                    </div>
                </div>
            </div>
            
            <!-- Menu -->
            <div class="flex-1 px-4 space-y-4">
                <div class="flex items-center space-x-3 p-3 rounded">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                    </svg>
                    <span class="text-lg">Accueil</span>
                </div>
                
                <div class="flex items-center space-x-3 p-3 rounded">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 000 2h1a1 1 0 100-2H9z"/>
                    </svg>
                    <span class="text-lg">payements</span>
                </div>
                
                <div class="flex items-center space-x-3 p-3 rounded">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                    </svg>
                    <span class="text-lg">Transactions</span>
                </div>
                
                <div class="flex items-center space-x-3 p-3 rounded bg-yellow-600">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-lg">Mes comptes</span>
                </div>
            </div>
        </div>
        
        <!-- Contenu principal -->
    <?php echo $contentForLayout; ?>

    </div>
</body>
</html>