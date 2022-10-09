@extends('base')

@section('content')



<div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-violet-700 text-zinc-50 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">N°vol</th>
                            <th class="py-3 px-6 text-left">Date vol</th>
                            <th class="py-3 px-6 text-center">Pilote</th>
                            <th class="py-3 px-6 text-center">Aéroport</th>
                            <th class="py-3 px-6 text-center">Nombre de passagers</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @if($affectations->count() > 0)

                        @foreach ($affectations as $affectation)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">{{ $affectation->avion_id }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span>{{ $affectation->dateVol->format("d/m/Y") }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                               <span>{{ $affectation->pilote->nom }} {{ $affectation->pilote->prenom }} </span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{ $affectation->avion->nomAvion }}</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <span>{{ $affectation->nbPassager}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <a href="{{ route('create_affectation') }}">
                                        <svg  fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></a>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>

                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg onclick="if(confirm('Voulez-vous vraiment supprimer cet affectation ?')){document.getElementById('form-{{$affectation->id}}').submit() }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>

                                        <form id="form-{{$affectation->id}}" action="{{ route('delete_affectation', ['affectation' => $affectation->id]) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @else
            <p>Pas de pilotes</p>
        @endif 
    </div>

    <div class="flex justify-center mb-10">
        {{ $affectations->links() }}
    </div>
</div>

@endsection