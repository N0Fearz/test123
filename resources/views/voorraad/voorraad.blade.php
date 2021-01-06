<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Voorraadmanager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
            <div
                class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                <div class="flex justify-between">
                    <div class="flex-end border rounded w-1/4 px-2 lg:px-6 h-12 bg-transparent">
                        <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                            <div class="flex">
                                <span
                                    class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                    <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z"
                                            stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <input type="text"
                                class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin"
                                placeholder="Search">
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                Artikelnummer</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Eenheid</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Locatie</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Aantal</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Acties</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($articles as $article)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="flex items-center">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-800">
                                            {{ $article->artikelnummer }}

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <div class="text-sm leading-5 text-blue-900">
                                    {{ $article->stock->unit->unit_name }}

                                </div>
                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                {{ $article->stock->location }}


                            </td>
                            <td
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                {{ $article->stock->number }}


                            </td>
                            <td id="btnCheck"
                                class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                <div>
                                    <form method="POST" action="{{route('update_number', $article->stock_id)}}">
                                        @csrf
                                        @method('patch')
                                        <input class="border-2 border-black-500" type="number" name="number">
                                        <input type="submit"
                                            class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-grey py-2 px-4 border border-blue rounded"
                                            value="Bijboeken">

                                        <a href="{{route('edit_location', $article->id)}}"
                                            class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-grey py-2 px-4 border border-blue rounded">
                                            Locatie wijzigen
                                        </a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function myFunction() {
        document.getElementById("btnCheck").innerHTML = '<i class="fas fa-check"></i>';
    }

</script>