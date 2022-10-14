<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
  @vite('resources/css/app.css')
  @livewireStyles
</head>
<body>
	<div class="container">
		<div class="col-6">
			<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sa sm:rounded-lg">
				<div class="p-6 bg-white border-b border-gray-200">
					@empty($classData)
					<p>No Classes found</p>
					@else
					<x-table>
						<x-slot name="header">
							<x-table-col>Class Id</x-table-col>
							<x-table-col>Class Name</x-table-col>
							<x-table-col>View Students</x-table-col>
						</x-slot>
						@foreach ($classData as $element)
								<tr class="cursor-pointer">
									<x-table-col>{{ $element['id'] }}</x-table-col>
									<x-table-col>{{ $element['name'] }}</x-table-col>
									<x-table-col><a href="{{url('students/'.$element['id'].'')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search Students</a></x-table-col>
								</tr>
						@endforeach
					</x-table>
					@endempty
				</div>
			</div>
		</div>
		</div>
	</div>
</body>
<html>