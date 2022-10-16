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
<x-header>Students</x-header>
<div class="flex flex-col">
	<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
		<div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
			<div class="overflow-x-auto">
					@empty($studentArray)
					<p>No Students found</p>
					@else
					<x-table>
						<x-slot name="header">
							<x-table-col>Student Name</x-table-col>
						</x-slot>
						@foreach ($studentArray as $element)
								<tr class="cursor-pointer">
									<x-table-col>{{ $element['studentName'] }}</x-table-col>
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