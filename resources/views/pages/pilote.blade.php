@extends('base')

@section('content')

<h1>Page Pilote</h1>

<div class="flex flex-col justify-center max-w-xs p-6 shadow-md rounded-xl sm:px-12 dark:bg-gray-900 dark:text-gray-100">
	<img src="https://source.unsplash.com/150x150/?portrait?3" alt="" class="w-32 h-32 mx-auto rounded-full dark:bg-gray-500 aspect-square">
	<div class="space-y-4 text-center divide-y divide-gray-700">
		<div class="my-2 space-y-1">
			<h2 class="text-xl font-semibold sm:text-2xl">Leroy Jenkins</h2>
			<p class="px-5 text-xs sm:text-base dark:text-gray-400">Date embauche</p>
		</div>
		
	</div>
</div>
@endsection