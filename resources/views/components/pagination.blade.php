@php
	$i = intval($meta->current_page);
	$nextPage = ++$i;
	$previousPage = $i-2;
@endphp
	@if ($meta->previous)
	<a href="{{url('staff/'.$previousPage.'')}}" class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
		Previous
	</a>
	@endif
	@if ($meta->more)
	<a href="{{url('staff/'.$nextPage.'')}}" class="inline-flex items-center py-2 px-4 ml-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
		Next
	</a>
	@endif