 <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Création d'une annonce
            </h2>
        </x-slot>    
        <div class="py-12">
          <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
              <x-jet-validation-errors class="mb-4" />
              @if (session()->has('message'))
                <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3">
                  {{ session('message') }}
                </div>
              @endif
              <form action="{{ route('ads.store') }}" method="post">
                  @csrf

                  <div class="mt-4">
                      <x-jet-label value="Titre" />
                      <x-jet-input class="block mt-1 w-full" type="text" id=title name="title" :value="old('title')" placeholder="Titre de l'annonce" required autofocus />
                  </div>

                  <div class="mt-4">
                      <x-jet-label value="Description" />
                      <textarea class="form-input rounded-md shadow-sm mt-1" style="width: 100%" id="description" name="description" placeholder="Détail de l'annonce">{{ old('detail') }}</textarea>
                  </div>

                  <div class="mt-4">
                    <x-jet-label value="Catégorie" />
                    <x-jet-input class="block mt-1 w-full" type="text" id=category_id name="category_id" :value="old('category_id')" placeholder="Catégorie de l'annonce" required autofocus />
                </div>

                  <div class="mt-4">
                    <x-jet-label value="Image" />
                    <x-jet-input class="block mt-1 w-full" type="text" id=picture name="picture" :value="old('picture')" placeholder="Fichier image de l'annonce" required autofocus />
                </div>

                <div class="mt-4">
                  <x-jet-label value="Prix" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=price name="price" :value="old('price')" placeholder="Prix de l'annonce" required autofocus />
              </div>

              <div class="mt-4">
                <x-jet-label value="Ville" />
                <x-jet-input class="block mt-1 w-full" type="text" id=commune name="commune" :value="old('commune')" placeholder="Ville de l'annonce" required autofocus />
            </div>

                  <div class="flex items-center justify-end mt-4">
                      <x-jet-button class="ml-4">
                          Envoyer
                      </x-jet-button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>  
    </x-app-layout>
