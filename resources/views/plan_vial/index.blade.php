<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
            </svg>
            <h2 class="ml-4 text-xl text-gray-800 leading-tight uppercase">
                PLAN VIAL
            </h2>
        </div>
    </x-slot>
    
    @livewire('ficha2')
    @livewire('ficha3')
    @livewire('ficha4')
    @livewire('ficha5')
    @livewire('ficha6')
    @livewire('ficha7')
    @livewire('ficha15')
    

</x-app-layout>