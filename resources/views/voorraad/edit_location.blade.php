<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Voorraadmanager') }}
        </h2>
    </x-slot>
    <div class="grid py-12 place-items-center">
        <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
            <h1 class="text-xl font-semibold">Regel bewerken</h1>
            <form class="mt-6" method="POST" action="{{route('update_location', $article->id)}}">
                @csrf
                {{ method_field('patch') }}
                <div class="flex justify-between gap-3">
                    <span class="w-1/2">
                        <label for="article"
                            class="block text-xs font-semibold text-gray-600 uppercase">Bestellingnummer</label>
                        <input id="article" type="text" name="article" value="{{ $article->artikelnummer }}" readonly
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>
                    <span class="w-1/2">
                        <label for="unit"
                            class="block text-xs font-semibold text-gray-600 uppercase">Bestellingnummer</label>
                        <input id="unit" type="text" name="unit" value="{{ $article->stock->unit->unit_name }}" readonly
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>

                </div>

                <div class="flex justify-between gap-3">
                    <span class="w-1/2">
                        <label for="location"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Aantal</label>
                        <input id="location" type="text" name="location" value="{{ $article->stock->location }}"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>

                </div>
                <input type="submit"
                    class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none"
                    value="Aanpassen">
            </form>
        </div>
    </div>

</x-app-layout>