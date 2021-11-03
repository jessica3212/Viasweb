<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                </path>
            </svg>

            <h2 class="ml-4 text-xl text-gray-800 leading-tight uppercase">
                MAPA VIAL
            </h2>
        </div>
    </x-slot>
    
    @livewire('qgis-map')   

</x-app-layout>