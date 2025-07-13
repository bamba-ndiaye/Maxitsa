<!DOCTYPE html>
<html lang="fr">

        
        <!-- Contenu principal -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <div class="bg-white p-4 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="relative flex-1 max-w-lg">
                        <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                        </svg>
                        <input type="text" placeholder="recherche" class="w-full pl-10 pr-4 py-2 border-2 border-blue-400 rounded-lg bg-gray-200">
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-gray-400 rounded-full"></div>
                    <button class="bg-green-600 text-white px-6 py-2 rounded-lg font-semibold">
                        connecte
                    </button>
                </div>
            </div>
            
            <!-- Zone noire -->
            <div class="bg-black h-32 mx-4 mt-4 rounded-lg"></div>
            
            <!-- Boutons actions -->
            <div class="p-4 flex space-x-4">
                <button class="bg-gray-300 text-gray-800 px-6 py-2 rounded-lg">
                    consulter mes transaction
                </button>
                <button class="bg-gray-300 text-gray-800 px-6 py-2 rounded-lg">
                    lister compte
                </button>
                <button class="bg-gray-100 text-gray-800 px-6 py-2 rounded-lg">
                    créer un compte secondaire
                </button>
            </div>
            
            <!-- Tableau des transactions -->
            <div class="mx-4 mb-4 bg-white rounded-lg border-2 border-black p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between py-4 border-b">
                        <div class="text-lg font-medium">Payement</div>
                        <div class="text-orange-600">07/08/2025</div>
                        <div class="text-lg">-50000 fr</div>
                        <div class="text-green-600 font-medium">reussi</div>
                    </div>
                    
                    <div class="flex items-center justify-between py-4 border-b">
                        <div class="text-lg font-medium">Depot</div>
                        <div class="text-orange-600">01/08/2025</div>
                        <div class="text-lg">+150 000 fr</div>
                        <div class="text-green-600 font-medium">reussi</div>
                    </div>
                    
                    <div class="flex items-center justify-between py-4">
                        <div class="text-lg font-medium">retrait</div>
                        <div class="text-orange-600">07/05/2025</div>
                        <div class="text-lg">-45000 fr</div>
                        <div class="text-red-600 font-medium">echec</div>
                    </div>
                </div>
            </div>
        </div>
    

</html>