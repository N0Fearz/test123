<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Verkoper') }}
        </h2>
    </x-slot>
    <div class="grid py-12 place-items-center">
        <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
            <h1 class="text-xl font-semibold">Bestelling toevoegen</h1>
            <form class="mt-6">
                <div class="flex justify-between gap-3">
                    <span class="w-1/2">
                        <label for="companyname"
                            class="block text-xs font-semibold text-gray-600 uppercase">Bedrijfsnaam</label>
                        <input id="companyname" type="text" name="companyname"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>
                    <span class="w-1/2">
                        <label for="phone"
                            class="block text-xs font-semibold text-gray-600 uppercase">Telefoonnummer</label>
                        <input id="phone" type="tel" name="phone"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>

                </div>

                <div class="flex justify-between gap-3">
                    <span class="w-1/2">
                        <label for="contactperson"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Contactpersoon</label>
                        <input id="contactperson" type="text" name="contactperson"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>
                    <span class="w-1/2">
                        <label for="email"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Email</label>
                        <input id="email" type="email" name="email"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                            required />
                    </span>

                </div>
                <button type="submit"
                    class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    toevoegen
                </button>
            </form>
        </div>
    </div>

</x-app-layout>
