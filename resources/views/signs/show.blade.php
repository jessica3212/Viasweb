<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z">
                </path>
            </svg>
            <h2 class="ml-4 text-lg text-gray-500 leading-tight uppercase">
                Señal : {{ $sign->abscisa }}
            </h2>
            @can('signs.edit', 'signs.destroy')
            <x-button-enlace color="gray" class="ml-auto" href="{{ route('signs') }}">
                Volver
            </x-button-enlace>
            @endcan
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <main
                class="flex flex-col lg:flex-row bg-gray-600 backdrop-filter backdrop-blur-md rounded-xl overflow-hidden shadow-lg">
                <div class="flex-1 p-4 lg:p-6">

                    <div class="grid grid-rows-4 grid-cols-1 gap-4 md:grid-rows-2 md:grid-cols-4">
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                            <div class="text-white text-lg font-semibold mb-2">Absisa</div>
                            <div class="text-white font-normal">{{ $sign->abscisa }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">
                            <div class="text-white absolute right-2">

                            </div>
                            <div class="text-white text-lg font-semibold mb-2">Costado</div>
                            <div class="text-white font-normal">{{ $sign->costado }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">

                            <div class="text-white text-lg font-semibold mb-2">Descripción</div>
                            <div class="text-white font-normal">{{ $sign->descripcion }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">

                            <div class="text-white text-lg font-semibold mb-2">Estado de Tablero</div>
                            <div class="text-white font-normal">
                                @switch($sign->estado_tablero)
                                    @case('B')
                                        🟢 Bueno
                                        @break
                                    @case('R')
                                        🟡 Regular
                                        @break
                                    @case('M')
                                        🔴 Malo
                                        @break
                                    @default
                                        Por revisar
                                        @break      
                                @endswitch
                            </div>
                        </div>

                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative ">

                            <div class="text-white text-lg font-semibold mb-2 ">Estado de Paral</div>
                            <div class="text-white font-normal">
                                @switch($sign->estado_paral)
                                @case('B')
                                    🟢 Bueno
                                    @break
                                @case('R')
                                    🟡 Regular
                                    @break
                                @case('M')
                                    🔴 Malo
                                    @break
                                @default
                                    Por revisar
                                    @break      
                            @endswitch
                            </div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">
                            <div class="text-white absolute right-2">

                            </div>
                            <div class="text-white text-lg font-semibold mb-2">Dimensiones</div>
                            <div class="text-white font-normal">{{ $sign->dimensiones }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">
                            <div class="text-white absolute right-2">

                            </div>
                            <div class="text-white text-lg font-semibold mb-2">Leyenda</div>
                            <div class="text-white font-normal">{{ $sign->leyenda }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">
                            <div class="text-white absolute right-2">

                            </div>
                            <div class="text-white text-lg font-semibold mb-2">Observaciones</div>
                            <div class="text-white font-normal">{{ $sign->observaciones }}</div>
                        </div>
                        <div
                            class="rounded-md bg-white backdrop-filter backdrop-blur-lg bg-opacity-20 p-4 flex flex-col relative undefined">
                            <div class="text-white absolute right-2">

                            </div>
                            <div class="text-white text-lg font-semibold mb-2">Via</div>
                            <div class="text-white font-normal">{{ $sign->via->codigo_via }}</div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
        <script>
            var cloudmadeUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
                cloudmade = new L.TileLayer(cloudmadeUrl, {
                    maxZoom: 18
                }),
                map = new L.Map('map', {
                    layers: [cloudmade],
                    center: new L.LatLng(5.336726312563761, -72.39572187571952),
                    zoom: 15
                });

            var editableLayers = new L.FeatureGroup();
            map.addLayer(editableLayers);

            L.tileLayer(
                'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                    maxZoom: 18
                }).addTo(map);
            var drawnItems = new L.FeatureGroup();
            map.addLayer(drawnItems);

            //Converting the data
            var data = @json($data);

            //Parsing the data and adding the layer to map
            var layer = L.geoJSON(JSON.parse(data)).addTo(map);
            // Adjust map to show the Layer
            var bounds = layer.getBounds();
            map.fitBounds(bounds);
        </script>
    @endpush

</x-app-layout>
