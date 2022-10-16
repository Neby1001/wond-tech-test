<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
  @vite('resources/css/app.css')
  @livewireStyles
</head>
<body class="flex h-screen justify-center items-center bg-gradient-to-b from-blue-200 to-blue-500">
	<div class="text-center bg-blue-500 p-32 rounded"> <!-- ⬅️ THIS DIV WILL BE CENTERED -->
		<h1 class="text-3xl text-white p-5">School Staff Directory</h1>
		<a href="{{url('staff/1')}}" class="bg-slate-200 hover:bg-slate-400 text-black font-bold py-2 px-4 rounded cursor-pointer">Launch</a>
	</div>
</body>
</html>
