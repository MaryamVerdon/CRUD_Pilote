@extends('base')

@section('content')

<section class="antialiased bg-gray-100 text-gray-600 h-screen ">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Vols</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">N° vol</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Ville départ</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Heure</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Ville arrivée</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Heure</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @if($vols->count() > 0)

                            @foreach ($vols as $vol)
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-800">{{ $vol->id}}</div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ $vol->villeDep }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-violet-700">{{$vol->dep_h}} h {{$vol->dep_min <10 ? 0 . $vol->dep_h : $vol->dep_h }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ $vol->villeArr }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-violet-700">{{$vol->arr_h}} h {{$vol->arr_min <10 ? 0 . $vol->arr_h : $vol->arr_h }}</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @else 

        <p>Pas de vols</p>

        @endif
        <div class="flex justify-center mt-10">
            {{ $vols->links() }}
        </div>
    </div>
</section>

@endsection