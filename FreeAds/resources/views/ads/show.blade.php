<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Fiche d'une annonce
      </h2>
  </x-slot>    
  <div class="py-12">
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
      <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <p class="text-2xl">Titre</p>
        <p>{{ $ads->title }}</p>
        <p class="text-2xl">Description</p>
        <p>{{ $ads->description }}</p>
       
        <p class="text-2xl">Date de création</p>
        <p>{{ $ads->created_at->format('d/m/Y') }}</p>
        @if($ads->created_at != $ads->updated_at)
          <p class="text-2xl">Dernière mise à jour</p>
          <p>{{ $ads->updated_at->format('d/m/Y') }}</p>
        @endif
      </div>
    </div>
  </div>
</div>  
</x-app-layout>