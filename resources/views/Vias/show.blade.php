<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z">
                </path>
            </svg>
            <h2 class="ml-4 text-lg text-gray-500 leading-tight uppercase">
                Via : {{ $via->nombre_via }}
            </h2>
            <x-button-enlace color="gray" class="ml-auto" href="{{ route('vias.index') }}">
                Volver
            </x-button-enlace>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <main
                class="flex flex-col lg:flex-row bg-gray-800 backdrop-filter backdrop-blur-md rounded-xl overflow-hidden shadow-lg m-2 lg:m-2">
                <div class="flex-1 p-4 lg:p-6">

                    <div class="grid grid-rows-4 grid-cols-1 gap-4 md:grid-rows-2 md:grid-cols-4">
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                            <div class="text-white text-lg font-semibold mb-2">Codigo Via</div>
                            <div class="text-white font-normal">{{ $via->codigo_via }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">
                            <div class="text-white absolute right-2">

                            </div>
                            <div class="text-white text-lg font-semibold mb-2">Compentencia</div>
                            <div class="text-white font-normal">{{ $via->competencia }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">

                            <div class="text-white text-lg font-semibold mb-2">Responsable</div>
                            <div class="text-white font-normal">{{ $via->responsable }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">

                            <div class="text-white text-lg font-semibold mb-2">Orden Resolucion</div>
                            <div class="text-white font-normal">{{ $via->orden_resolucion }}</div>
                        </div>

                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                            <div class="text-white text-lg font-semibold mb-2 ">Longitud</div>
                            <div class="text-white font-normal">{{ $via->longitud }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">
                            <div class="text-white absolute right-2">

                            </div>
                            <div class="text-white text-lg font-semibold mb-2">Ancho Promedio</div>
                            <div class="text-white font-normal">{{ $via->ancho_prom }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">

                            <div class="text-white text-lg font-semibold mb-2">PR</div>
                            <div class="text-white font-normal">Inicio: {{ $via->pr_inicio }}</div>
                            <div class="text-white font-normal">Final: {{ $via->pr_final }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">

                            <div class="text-white text-lg font-semibold mb-2">Ubicación</div>
                            <div class="text-white font-normal">Desde: {{ $via->ubicacion_desde }}</div>
                            <div class="text-white font-normal">Hasta: {{ $via->ubicacion_hasta }}</div>
                        </div>

                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                            <div class="text-white text-lg font-semibold mb-2 ">Via Pavimentada</div>
                            <div class="text-white font-normal">Bueno: {{ $via->pav_bueno }}
                            </div>
                            <div class="text-white font-normal">Regular:
                                {{ $via->pav_regular }}</div>
                            <div class="text-white font-normal">Malo: {{ $via->pav_malo }}
                            </div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                            <div class="text-white text-lg font-semibold mb-2 ">Via Afirmado</div>
                            <div class="text-white font-normal">Bueno: {{ $via->afir_bueno }}
                            </div>
                            <div class="text-white font-normal">Regular: {{ $via->afir_regular }}
                            </div>
                            <div class="text-white font-normal">Malo: {{ $via->afir_malo }}</div>
                        </div>

                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                            <div class="text-white text-lg font-semibold mb-2 ">Via Tierra</div>
                            <div class="text-white font-normal">Bueno: {{ $via->tierra_bueno }}
                            </div>
                            <div class="text-white font-normal">Regular: {{ $via->tierra_regular }}
                            </div>
                            <div class="text-white font-normal">Malo: {{ $via->tierra_malo }}</div>
                        </div>

                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                            <div class="text-white text-lg font-semibold mb-2 ">Via Mejoramientp</div>
                            <div class="text-white font-normal">Bueno: {{ $via->mej_bueno }}
                            </div>
                            <div class="text-white font-normal">Regular:
                                {{ $via->mej_regular }}</div>
                            <div class="text-white font-normal">Malo: {{ $via->mej_malo }}
                            </div>
                        </div>

                        <div class=" ">
                            <div class="text-white text-lg font-medium mb-2 "></div>
                        </div>

                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                            <div class="text-white text-lg font-semibold mb-2 ">Incio</div>
                            <div class="text-white font-normal">Longitud: {{ $via->inicio_longitud }}
                            </div>
                            <div class="text-white font-normal">Lalitud: {{ $via->inicio_latitud }}</div>
                            <div class="text-white font-normal">Altura: {{ $via->inicio_altura }}</div>
                        </div>

                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                            <div class="text-white text-lg font-semibold mb-2 ">Fin</div>

                            <div class="text-white font-normal">Longitud: {{ $via->fin_longitud }}</div>
                            <div class="text-white font-normal">Latitud: {{ $via->fin_latitud }}</div>
                            <div class="text-white font-normal">Altura: {{ $via->fin_altura }}</div>
                        </div>


                    </div>
                </div>
            </main>

            <div>
                <div id="map" style=" height: 400px;" class=" rounded-md mt-6 shadow-md"></div>
            </div>

        </div>
    </div>

    @push('script')

        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script>
            var mymap = L.map('map').setView([5.597, -72.082], 13);

            L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiamVzc2ljYTMyMTIiLCJhIjoiY2t0eWt5eDE3MGJyZjJ2b3d3MHlwOHByeSJ9.duFqVIZdOzdCjIjVmTIx0A', {
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
