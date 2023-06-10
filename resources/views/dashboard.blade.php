<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center min-h-screen bg-white dark:bg-gray-900">
	<div class="col-span-12">
		<div class="overflow-auto lg:overflow-visible ">
			<table class="table text-gray-900 dark:text-gray-400 border-separate space-y-6 text-sm">
				<thead class=" bg-slate-200 dark:bg-gray-800 text-gray-800 dark:text-gray-100" >
					<tr>
						<th class="p-3">Titre</th>
						<th class="p-3 text-left">Categorie</th>
						<th class="p-3 text-left">Price</th>
						<th class="p-3 text-left">Status</th>
						<th class="p-3 text-left">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg-slate-200 dark:bg-gray-800">
						<td class="p-3">
							<div class="flex align-items-center">
								<div class="ml-3">
									<div class="">Appple</div>
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
							<span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
						</td>
						<td class="p-3 ">
							<a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
								<i class="material-icons-outlined text-base">edit</i>
							</a>
							<a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
								<i class="material-icons-round text-base">delete_outline</i>
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
