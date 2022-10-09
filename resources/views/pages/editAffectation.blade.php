@extends('base')

@section('content')

<div class="h-screen bg-gradient-to-br bg-gray-100 flex justify-center items-center w-full">
    <form method="post" action="{{ route('update_affectation', ['affectation' => $affectation->id]) }}">
        @csrf
        @method('PUT')
      <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
        <div class="space-y-4">
          <h1 class="text-center text-2xl font-semibold text-gray-600">Ajouter Affectation</h1>

          @if(session()->has('success'))
          <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">{{ session()->get('success') }}</p>
          </div>  
         @endif
         @if ($errors->any())

         <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            @foreach($errors->all() as $error)
            <strong class="font-bold">{{ $error }}</strong>
            @endforeach
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
          </div>
        @endif

          <div>
            <label for="nbPassager" class="block mb-1 text-gray-600 font-semibold">Nombre passager</label>
            <input id="nbPassager" value={{$affectation->nbPassager}} required type="number" min="1" name="nbPassager" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <label for="vol" class="block mb-1 text-gray-600 font-semibold">Date vol</label>
            <input id="vol" value={{$affectation->dateVol}}type="date" name="dateVol" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" min=/>
          </div>

          <div>
            <label for="vol" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Liste destination</label>
            <select id="vol" name="vol_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-700 focus:border-violet-700  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-violet-700  dark:focus:border-violet-700 ">
                <option selected>Choisir destination</option>
                @foreach($vols as $vol)
                    @if($vol->id == $affectation->vol_id)
                        <option value="{{ $vol->id}}" selected>{{ $vol->villeArr}}</option>
                    @else
                        <option value="{{ $vol->id}}">{{ $vol->villeArr}}</option> 
                    @endif
                @endforeach
            </select>
         </div>

         <div>
            <label for="pilote" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Liste des pilotes</label>
            <select id="pilote" name="pilote_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-700 focus:border-violet-700  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-violet-700  dark:focus:border-violet-700 ">
                <option selected>Choisir le pilote</option>
                @foreach($pilotes as $pilote)
                    @if($pilote->id == $affectation->pilote_id)
                        <option value="{{ $pilote->id}}" selected>{{ $pilote->nom}} {{ $pilote->prenom}}</option>
                    @else
                        <option value="{{ $pilote->id}}">{{ $pilote->nom}} {{ $pilote->prenom}}</option> 
                    @endif
                @endforeach
            </select>
         </div>

         <div>
            <label for="avion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Liste des pilotes</label>
            <select id="avion" name="avion_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-700 focus:border-violet-700  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-violet-700  dark:focus:border-violet-700 ">
                <option selected>Choisir un avion</option>
                @foreach($avions as $avion)
                    @if($avion->id == $affectation->avion_id)
                        <option value="{{ $avion->id}}" selected>{{ $avion->nomAvion}} - {{ $avion->type_appareil->libType}}</option>
                    @else
                        <option value="{{ $avion->id}}">{{ $avion->nomAvion}} - {{ $avion->type_appareil->libType}}</option> 
                    @endif
                @endforeach
            </select>
         </div>

        </div>
        <button type="submit" class="mt-4 w-full bg-gradient-to-tr from-violet-700 to-violet-700 text-indigo-50 py-2 rounded-md text-lg tracking-wide">Enregistrer</button>
        <button class="mt-4 w-full bg-gradient-to-tr from-violet-700 to-violet-700 text-indigo-50 py-2 rounded-md text-lg tracking-wide"><a href="{{ route('affectation')}}">Annuler</a></button>
        
      </div>
    </form>
</div>

@endsection