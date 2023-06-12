<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mes tâches 📜') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center min-h-screen bg-white dark:bg-gray-900">
	<div class="col-span-12">
		<div class="overflow-auto lg:overflow-visible ">
			<!-- <form>
				<ul class="flex flex-row text-lg p-3 space-x-32">
					<li class="ml-4">Nouvelle tâche</li>
					<li> <input type="text"> </li>
					<li>Titre</li>
					<li>Titre</li>
					<li>Titre</li>
				</ul>
			</form> -->
			<table class="table text-gray-900 dark:text-gray-400 border-separate space-y-6 text-sm">
				<thead class=" bg-slate-200 dark:bg-gray-800 text-gray-800 dark:text-gray-100" >
					<tr class="text-lg rounded-lg">
						<th class="p-3 fix-border">Ajouter une tâche</th>
					</tr>
				</thead>
				<tbody>
        			<tr class="bg-slate-200 dark:bg-gray-800 text-lg rounded-lg">
            			<td colspan="5" class="p-3 fix-border">
							<!-- TODO: add route and controller to use  route('tasks.store')   -->
                			<form method="POST" action="{{ ('tasks.store') }}" class="rounded-lg flex ">
                				@csrf
                				<input type="text" name="task_name" placeholder="Nom de la tâche" class="p-3   px-2 py-1 rounded-lg focus:outline-none focus:ring-2  focus:border-transparent mr-4">
								<textarea rows="1" name="description" placeholder="Description" class="border-2 py-1 rounded-lg focus:outline-none focus:ring-2  focus:border-transparent mr-4" class="p-3"></textarea>
								<input type="text" name="category" placeholder="Catégorie" class="border-2  px-2 py-1 rounded-lg focus:outline-none focus:ring-2  focus:border-transparent mr-4" class="p-3">
								<select name="status" class="border-2  px-8 py-1 mr-6 rounded-md focus:outline-none focus:ring-2  focus:border-transparent" class="p-3">
                        			<option value="A faire">A faire</option>
                       			 	<option value="En cours">En cours</option>
                       			 	<option value="Terminé">Terminé</option>
                    			</select>

                				<button type="submit" class="mr-2">Ajouter</button>
                			</form>
            			</td>
       				</tr>
    			</tbody>
			</table>
			<table class="table text-gray-900 dark:text-gray-400 border-separate space-y-6 text-sm">
				<thead class=" bg-slate-200 dark:bg-gray-800 text-gray-800 dark:text-gray-100" >
					<tr class="text-lg">
						<th class="p-3">Titre</th>
						<th class="p-3 text-left">Description</th>
						<th class="p-3 text-left">Categorie</th>
						<th class="p-3 text-left">Statut</th>
						<th class="p-3 text-left">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg-slate-200 dark:bg-gray-800 text-lg">
						<td class="p-3">
							<div class="flex align-items-center">
								<div class="ml-3">
									<div class="">Faire sa déclaration</div>
								</div>
							</div>
						</td>
						<td class="p-3 max-w-xs break-words">
							<p>ne pas oublier les fiches de paie</p>
							  
						</td>
						<td class="p-3 font-bold">
							impôts
						</td>
						<td class="p-3">
							<span class="bg-green-400 text-gray-50 rounded-md px-2">fait ✨</span>
						</td>
						<td class="p-3 ">
							<a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
								<i class="material-icons-outlined text-base">modifier</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
								<i class="material-icons-round text-base">supprimer</i>
							</a>
						</td>
					</tr>
					<tr class="bg-slate-200 dark:bg-gray-800">
						<td class="p-3">
							<div class="flex align-items-center">
								<img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="unsplash image">
								<div class="ml-3">
									<div class="">Realme</div>
									<div class="text-gray-500">mail@rgmail.com</div>
								</div>
							</div>
						</td>
						<td class="p-3">
							Technology
						</td>
						<td class="p-3 font-bold">
							200.00$
						</td>
						<td class="p-3">
							<span class="bg-red-400 text-gray-50 rounded-md px-2">no stock</span>
						</td>
						<td class="p-3">
							<a href="#" class="text-gray-400 hover:text-gray-100  mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
								<i class="material-icons-outlined text-base">edit</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
								<i class="material-icons-round text-base">delete_outline</i>
							</a>
						</td>
					</tr>
					<tr class="bg-slate-200 dark:bg-gray-800">
						<td class="p-3">
							<div class="flex align-items-center">
								<img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80" alt="unsplash image">
								<div class="ml-3">
									<div class="">Samsung</div>
									<div class="text-gray-500">mail@rgmail.com</div>
								</div>
							</div>
						</td>
						<td class="p-3">
							Technology
						</td>
						<td class="p-3 font-bold">
							200.00$
						</td>
						<td class="p-3">
							<span class="bg-yellow-400 text-gray-50  rounded-md px-2">start sale</span>
						</td>
						<td class="p-3">
							<a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
								<i class="material-icons-outlined text-base">edit</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
								<i class="material-icons-round text-base">delete_outline</i>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</x-app-layout>
