@extends('base')

@section('content')

<div >

<h1 class="text-3xl text-center pt-20">Liste des pilotes</h1>

<div class="flex flex-wrap flex-row justify-center py-20">

        @if($pilotes->count() > 0)

        @foreach ($pilotes as $pilote)

        <div class="m-5 flex flex-col justify-center max-w-xs p-6 shadow-md rounded-xl sm:px-12 dark:bg-gray-900 dark:text-gray-100">
            <img src="https://source.unsplash.com/150x150/?portrait?3" alt="" class="w-32 h-32 mx-auto rounded-full dark:bg-gray-500 aspect-square">
            <div class="space-y-4 text-center divide-y divide-gray-700">
                <div class="my-2 space-y-1">
                    <h2 class="text-xl font-semibold sm:text-2xl">{{ $pilote->nom }} {{ $pilote->prenom }} </h2>
                    <p class="px-5 text-xs sm:text-base dark:text-gray-400">Date embauche  {{ $pilote->embauche->format("d/m/Y")}}</p>
                </div>
            </div>
        </div>

        @endforeach
        @else 

        <p>Pas de pilotes</p>

        @endif
    </div>
</div>

<div class="flex justify-center mb-10">
    {{ $pilotes->links() }}
</div>
@endsection