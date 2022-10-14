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
@livewire('livewire-ui-modal')
<div class="container">
    <div class="col-6">
        <livewire:counter /> 
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sa sm:rounded-lg">
				<div class="p-6 bg-white border-b border-gray-200">
					<x-table>
						<x-slot name="header">
							<x-table-col>First Name</x-table-col>
							<x-table-col>Last Name</x-table-col>
							<x-table-col>Search</x-table-col>
						</x-slot>
						@foreach ($staff as $s)
								<tr class="cursor-pointer">
									<x-table-col>{{ $s->forename }}</x-table-col>
									<x-table-col>{{ $s->surname }}</x-table-col>
									<x-table-col><a href="{{url('classes/'.$s->id.'')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Classes</a></x-table-col>
								</tr>
						@endforeach
					</x-table>
				</div>
			</div>
		</div>
    </div>
</div>
	@livewireScripts
</body>
</html>
