<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Verkoper') }}
        </h2>
    </x-slot>
    <div class="grid py-12 place-items-center">
        <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
            <h1 class="text-xl font-semibold">Regel bewerken</h1>
            <form class="mt-6">
                <div class="flex justify-between gap-3">
                    <span class="w-1/2">
                        <label for="ordernumber"
                            class="block text-xs font-semibold text-gray-600 uppercase">Bestellingnummer</label>
                        <input id="ordernumber" type="text" name="ordernumber" value="{{ $order->id }}" readonly
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>
                    <span class="w-1/2">
                        <label for="article"
                            class="block text-xs font-semibold text-gray-600 uppercase">Artikelnummer</label>
                        <select id="article" name="article"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
                            @foreach ($articles as $article)
                                <option class="py-1">{{ $article->artikelnummer }}</option>
                            @endforeach
                        </select>
                    </span>

                </div>

                <div class="flex justify-between gap-3">
                    <span class="w-1/2">
                        <label for="number"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Aantal</label>
                        <input id="number" type="text" name="number" value="{{ $order->aantal }}"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>
                    <span class="w-1/2">
                        <label for="unit"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Eenheid</label>
                        <select id="unit" name="unit"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
                            @foreach ($units as $unit)
                                <option class="py-1">{{ $unit->unit_name }}</option>
                            @endforeach
                        </select>
                    </span>

                </div>
                <button type="submit"
                    class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    Aanpassen
                </button>
            </form>
        </div>
    </div>

</x-app-layout>
