<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mes tâches 📜') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center min-h-screen bg-white dark:bg-gray-900">
		<div class="col-span-12">
			<div class="overflow-auto lg:overflow-visible ">
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
                				<form method="POST" action="{{ route('tasks.store') }}" class="rounded-lg flex ">
                					@csrf
                					<input type="text" name="name" placeholder="Nom de la tâche" class="border-2 py-1 rounded-lg focus:outline-none focus:ring-2  focus:border-transparent mr-4">
									<textarea rows="1" name="description" placeholder="Description" class="border-2 py-1 rounded-lg focus:outline-none focus:ring-2  focus:border-transparent mr-4" class="p-3"></textarea>
									<select name="category" id="category" class="border-2 py-1 rounded-lg focus:outline-none focus:ring-2  focus:border-transparent mr-4">
                	                        <option value="travail">Travail</option>
                	                        <option value="Personnel">Personnel</option>
                	                        <option value="Urgent" >Urgent</option>
                	                        <option value="Important">Important</option>
                	                        <option value="Loisir">Loisir</option>
                	                    </select>
									<select name="status" class="border-2  px-8 py-1 mr-6 rounded-md focus:outline-none focus:ring-2  focus:border-transparent">
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
						@foreach($tasks as $task)
							@if($task->user_id == auth()->user()->id)
								<tr class="bg-slate-200 dark:bg-gray-800 text-lg">
									<td class="p-3">
									<div class="flex align-items-center">
										<div class="ml-3">
											<div class="">{{$task->name}}</div>
										</div>
									</div>
									</td>
									<td class="p-3 max-w-xs break-words">
									<p>{{$task->description}}</p>
									</td>
									<td class="p-3 font-bold">
									{{$task->category}}
									</td>
									<td class="p-3">
									@if($task->status === 'A faire')
									<span class="bg-red-400 text-gray-50 rounded-md px-2">{{$task->status}}</span>
									@elseif($task->status === 'En cours')
									<span class="bg-blue-400 text-gray-50 rounded-md px-2">{{$task->status}}</span>
									@elseif($task->status === 'Terminé')
									<span class="bg-green-400 text-gray-50 rounded-md px-2">{{$task->status}} ✨</span>
									@endif
									</td>
									<td class="p-3 ">
									<form action="{{route('tasks.edit',$task)}}" method="GET" class="text-gray-400 hover:text-gray-100  mx-2">
										@csrf
										<button type="submit" class="text-gray-400 hover:text-gray-100 bg-transparent border-none p-0">modifier</button>
									</form>
									<form action="{{route('tasks.destroy',$task)}}" method="POST" class="text-gray-400 hover:text-gray-100  ml-2">
										@csrf
										@method('DELETE')
										<button type="submit" class="text-gray-400 hover:text-gray-100 bg-transparent border-none p-0">supprimer</button> 
									</form>
									</td>
								</tr>
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</x-app-layout>
