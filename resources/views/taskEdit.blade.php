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
                            <th class="p-3 fix-border">Modifier une tâche</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-slate-200 dark:bg-gray-800 text-lg rounded-lg">
                            <td colspan="5" class="p-3 fix-border">
                                <form method="POST" action="{{ route('tasks.update', $task->id) }}" class="rounded-lg">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex items-center">
                                    <label for="title" class="hidden">Titre</label>
                                    <input type="text" name="name" value="{{ $task->name }}" class="rounded-lg focus:outline-none focus:ring-2  focus:border-transparent mr-4">
                                    
                                    <label for="description" class="hidden">Description</label>
                                    <textarea rows="1" name="description" placeholder="Description" class="border-2  rounded-lg focus:outline-none focus:ring-2  focus:border-transparent mr-4" > {{$task->description}} </textarea>
                                    <label for="category" class="hidden">Catégorie</label>
                                    <select name="category" id="category" class="mr-4 bg-gray-100 dark:bg-gray-700 border border-gray-100 dark:border-gray-700 rounded-lg text-gray-900 dark:text-gray-100 focus:outline-none focus:border-gray-100 dark:focus:border-gray-700">
                                        <option value="travail" {{ $task->category == 'travail' ? 'selected' : '' }}>Travail</option>
                                        <option value="Personnel" {{ $task->category == 'maison' ? 'selected' : '' }}>Personnel</option>
                                        <option value="Urgent" {{ $task->category == 'loisir' ? 'selected' : '' }}>Urgent</option>
                                        <option value="Important" {{ $task->category == 'important' ? 'selected' : '' }}>Important</option>
                                        <option value="Loisir" {{ $task->category == 'loisir' ? 'selected' : '' }}>Loisir</option>
                                    </select>
                                    <select name="status" id="status" class="mr-4 bg-gray-100 dark:bg-gray-700 border border-gray-100 dark:border-gray-700 rounded-lg text-gray-900 dark:text-gray-100 focus:outline-none focus:border-gray-100 dark:focus:border-gray-700">
                                        <option value="A faire" {{ $task->status == 'todo' ? 'selected' : '' }}>A faire</option>
                                        <option value="En cours" {{ $task->status == 'doing' ? 'selected' : '' }}>En cours</option>
                                        <option value="Terminé" {{ $task->status == 'done' ? 'selected' : '' }}>Terminé</option>
                                    </select>
                                    <button type="submit" class="p-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg focus:outline-none focus:shadow-outline">Modifier</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
		    </div>
	    </div>
    </div>
</x-app-layout>
