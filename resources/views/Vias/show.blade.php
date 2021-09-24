<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z">
                </path>
            </svg>
            <h2 class="ml-4 text-xl text-gray-800 leading-tight uppercase">
                Via
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div >
                <div id="map" style=" height: 300px;" class=" rounded-md shadow-sm mb-6"></div>
            </div>

            <div class="bg-gradient-to-r from-green-500 to-blue-600 overflow-hidden shadow-xl sm:rounded-lg">


                <div
                    class="flex flex-row justify-center items-center min-h-screen bg-app bg-center bg-no-repeat bg-cover m-6">
                    <main
                        class="flex flex-col lg:flex-row bg-white backdrop-filter backdrop-blur-lg bg-opacity-30 rounded-xl overflow-hidden w-full max-w-6xl shadow-lg m-2 lg:m-2">
                        <div class="flex-1 p-4 lg:p-6">
                            <div class="text-lg text-white mb-8 flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-200">
                                    <path
                                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                    </path>
                                </svg>
                                <div class="ml-4 font-bold">{{ $via->nombre_via }}</div>
                            </div>
                            <div class="grid grid-rows-4 grid-cols-1 gap-4 md:grid-rows-2 md:grid-cols-4">
                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                                    <div class="text-white text-lg font-medium mb-2 ">Codigo Via</div>
                                    <div class="text-white font-normal">{{ $via->codigo_via }}</div>
                                </div>
                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">
                                    <div class="text-white absolute right-2">

                                    </div>
                                    <div class="text-white text-lg font-medium mb-2">Compentencia</div>
                                    <div class="text-white font-normal">{{ $via->competencia }}</div>
                                </div>
                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">

                                    <div class="text-white text-lg font-medium mb-2">Responsable</div>
                                    <div class="text-white font-normal">{{ $via->responsable }}</div>
                                </div>
                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">

                                    <div class="text-white text-lg font-medium mb-2">Orden Resolucion</div>
                                    <div class="text-white font-normal">{{ $via->orden_resolucion }}</div>
                                </div>

                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                                    <div class="text-white text-lg font-medium mb-2 ">Longitud</div>
                                    <div class="text-white font-normal">{{ $via->longitud }}</div>
                                </div>
                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">
                                    <div class="text-white absolute right-2">

                                    </div>
                                    <div class="text-white text-lg font-medium mb-2">Ancho Promedio</div>
                                    <div class="text-white font-normal">{{ $via->ancho_prom }}</div>
                                </div>
                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">

                                    <div class="text-white text-lg font-medium mb-2">PR</div>
                                    <div class="text-white font-normal">Inicio: {{ $via->pr->incial }}</div>
                                    <div class="text-white font-normal">Final: {{ $via->pr->final }}</div>
                                </div>
                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">

                                    <div class="text-white text-lg font-medium mb-2">Ubicación</div>
                                    <div class="text-white font-normal">Desde: {{ $via->ubicacion->desde }}</div>
                                    <div class="text-white font-normal">Hasta: {{ $via->ubicacion->hasta }}</div>
                                </div>

                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                                    <div class="text-white text-lg font-medium mb-2 ">Via Pavimentada</div>
                                    <div class="text-white font-normal">Bueno: {{ $via->vias_pavimentada->bueno }}
                                    </div>
                                    <div class="text-white font-normal">Regular:
                                        {{ $via->vias_pavimentada->regular }}</div>
                                    <div class="text-white font-normal">Malo: {{ $via->vias_pavimentada->malo }}
                                    </div>
                                </div>
                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                                    <div class="text-white text-lg font-medium mb-2 ">Via Afirmado</div>
                                    <div class="text-white font-normal">Bueno: {{ $via->vias_afirmado->bueno }}
                                    </div>
                                    <div class="text-white font-normal">Regular: {{ $via->vias_afirmado->regular }}
                                    </div>
                                    <div class="text-white font-normal">Malo: {{ $via->vias_afirmado->malo }}</div>
                                </div>

                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                                    <div class="text-white text-lg font-medium mb-2 ">Via Tierra</div>
                                    <div class="text-white font-normal">Bueno: {{ $via->vias_tierra->bueno }}
                                    </div>
                                    <div class="text-white font-normal">Regular: {{ $via->vias_tierra->regular }}
                                    </div>
                                    <div class="text-white font-normal">Malo: {{ $via->vias_tierra->malo }}</div>
                                </div>

                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                                    <div class="text-white text-lg font-medium mb-2 ">Via Mejoramientp</div>
                                    <div class="text-white font-normal">Bueno: {{ $via->vias_mejoramiento->bueno }}
                                    </div>
                                    <div class="text-white font-normal">Regular:
                                        {{ $via->vias_mejoramiento->regular }}</div>
                                    <div class="text-white font-normal">Malo: {{ $via->vias_mejoramiento->malo }}
                                    </div>
                                </div>

                                <div class=" ">
                                    <div class="text-white text-lg font-medium mb-2 "></div>
                                </div>

                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                                    <div class="text-white text-lg font-medium mb-2 ">Incio</div>
                                    <div class="text-white font-normal">Longitud: {{ $via->vias_inicio->longitud }}
                                    </div>
                                    <div class="text-white font-normal">Lalitud: {{ $via->vias_inicio->latitud }}</div>
                                    <div class="text-white font-normal">Altura: {{ $via->vias_inicio->altura }}</div>
                                </div>

                                <div
                                    class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                                    <div class="text-white text-lg font-medium mb-2 ">Fin</div>

                                    <div class="text-white font-normal">Longitud: {{ $via->vias_fin->longitud }}</div>
                                    <div class="text-white font-normal">Latitud: {{ $via->vias_fin->latitud }}</div>
                                    <div class="text-white font-normal">Altura: {{ $via->vias_fin->altura }}</div>
                                </div>


                            </div>
                        </div>
                    </main>
                </div>

                

            </div>

            
        </div>
    </div>

    @push('script')

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var mymap = L.map('map').setView([5.597, -72.082], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiamVzc2ljYTMyMTIiLCJhIjoiY2t0eWt5eDE3MGJyZjJ2b3d3MHlwOHByeSJ9.duFqVIZdOzdCjIjVmTIx0A', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap);
    </script>
@endpush

</x-app-layout>
