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
<x-header>Classes</x-header>
<div class="flex flex-col">
	<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
		<div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
			<div class="overflow-x-auto">
					@empty($classArray)
					<p>No Classes found</p>
					@else
					<x-table>
						<x-slot name="header">
							<x-table-col>Class Id</x-table-col>
							<x-table-col>Class Name</x-table-col>
							<x-table-col>View Students</x-table-col>
						</x-slot>
						@foreach ($classArray as $element)
								<tr class="cursor-pointer">
									<x-table-col>{{ $element['id'] }}</x-table-col>
									<x-table-col>{{ $element['name'] }}</x-table-col>
									<x-table-col><a href="{{url('students/'.$element['id'].'')}}" class="inline-flex items-center py-2 px-4 ml-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Search Students</a></x-table-col>
								</tr>
						@endforeach
					</x-table>
					@endempty
			</div>
		</div>
	</div>
</div>
</body>
<html>