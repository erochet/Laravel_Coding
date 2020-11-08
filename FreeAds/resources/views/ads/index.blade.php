<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des Annonces        
          <a href="{{ route('ads.create') }}" role="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">Créer une annonce</a>
        </h2>
    </x-slot>    
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-fixed">
              <thead>
                <tr>
                  <th class="px-4 py-2 w-1/4">Titre</th>
                  <th class="px-4 py-2 w-1/4">Description</th>
                  <th class="px-4 py-2 w-1/4">Category</th>
                  <th class="px-4 py-2 w-1/4">Picture</th>
                  <th class="px-4 py-2 w-1/4">Price</th>
                  <th class="px-4 py-2 w-1/4">Commune</th>
                  <th class="px-4 py-2 w-1/6"></th>
                  <th class="px-4 py-2 w-1/6"></th>
                  <th class="px-4 py-2 w-1/6"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($ads as $ad)
                  <tr>
                    <td class="px-4 py-3">{{ $ad->title }}</td>
                    <td class="px-4 py-3">{{ $ad->description }}</td>
                    <td class="px-4 py-3">{{ $ad->category_id }}</td>
                    <td class="px-4 py-3">{{ $ad->picture }}</td>
                  <td><img src="{{'img/' . ($ad->picture) }}" style="width:100px"></td>
                    <td class="px-4 py-3">{{ $ad->price }}</td>
                    <td class="px-4 py-3">{{ $ad->commune }}</td>
                    <td class="px-4 py-3"><a href="{{ route('ads.show', $ad->id) }}" role="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Voir</a></td>
                    <td class="px-4 py-3"><a href="{{ route('ads.edit', $ad->id) }}" role="button" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Modifier</a></td>
                    <td class="px-4 py-3">
                      <form id="destroy{{ $ad->id }}" action="{{ route('ads.destroy', $ad->id) }}" method="POST">
                        @csrf
                        @method('DELETE')                      
                        <a role="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                          onclick="event.preventDefault();
                          this.closest('form').submit();">
                          Supprimer
                        </a>
                      </form>
                    </td class="px-4 py-3">
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>  
</x-app-layout>