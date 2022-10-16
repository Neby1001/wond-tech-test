<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
  @vite('resources/css/app.css')
  @livewireStyles
</head>
<body class="h-screen">
<x-header>Staff</x-header>
<div class="flex flex-col">
	<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
		<div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
			<div class="overflow-x-auto">
				<div class="flex justify-end p-2">
					<x-pagination class="p-8" :meta="$meta"/>
				</div>
				<x-table>
					<x-slot name="header">
						<x-table-col>First Name</x-table-col>
						<x-table-col>Last Name</x-table-col>
						<x-table-col>Search</x-table-col>
					</x-slot>
					@foreach ($staff as $s)
							<tr class="cursor-pointer border-b text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
								<x-table-col>{{ $s->forename }}</x-table-col>
								<x-table-col>{{ $s->surname }}</x-table-col>
								<x-table-col><a href="{{url('classes/'.$s->id.'')}}"  class="inline-flex items-center py-2 px-4 ml-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">View Classes</a></x-table-col>
							</tr>
					@endforeach
				</x-table>
				<div class="flex justify-end p-2">
					<x-pagination class="float-right" :meta="$meta"/>
				</div>
			</div>
		</div>
	</div>
</div>
	@livewireScripts
</body>
</html>
