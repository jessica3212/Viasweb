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
            @can('vias.edit', 'vias.create')
            <x-button-enlace color="orange" class="ml-auto" href="{{ route('marks', $via) }}">
                Mapa
            </x-button-enlace>
            <x-button-enlace color="gray" class="ml-4" href="{{ route('vias.index') }}">
                Volver
            </x-button-enlace>
            @endcan
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <main
                class="flex flex-col lg:flex-row bg-gray-800 backdrop-filter backdrop-blur-md rounded-xl overflow-hidden shadow-lg">
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
                            <div class="text-white font-normal">Desde: {{ $via->ubicacion_desde->nombre }}</div>
                            <div class="text-white font-normal">Hasta: {{ $via->ubicacion_hasta->nombre }}</div>
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

            <p class="p-6 text-gray-500">{{$data}}</p>

            <div>
                <div id="map" style=" height: 400px;" class=" rounded-md mt-6 shadow-md"></div>
            </div>

            <p class="my-6 text-lg">Proyectos en Via</p>

             <!-- This example requires Tailwind CSS v2.0+ -->  
             <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gradient-to-r from-teal-500 to-blue-800 text-white">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Nombre
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Pertenece a
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Estado
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Tipo
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Descarga
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($via->contrato_proyectos as $documento)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $documento->nombre }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $documento->via->codigo_via }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                                                @switch($documento->estado)
                                                    @case(1)
                                                        Pendiente
                                                    @break

                                                    @case(2)
                                                        Aprobado
                                                    @break

                                                    @case(3)
                                                        Desaprobado
                                                    @break

                                                    @default
                                                        Sin asignar
                                                @endswitch

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                                                @switch($documento->tipo)
                                                    @case(1)
                                                        Proyecto
                                                    @break

                                                    @case(2)
                                                        Contrato
                                                    @break

                                                    @default
                                                        Sin asignar
                                                @endswitch

                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                <a href="{{ Storage::url($documento->url_file) }}"
                                                    download="{{ $documento->nombre }}">
                                                    Descargar Archivo
                                                    <i class="ml-2 fas fa-download text-teal-600"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <p class="my-6 text-lg">Señales en Via</p>

            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gradient-to-r from-gray-500 to-orange-800 text-white">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Abscisa
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Costado
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Descripción
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Estado de Tablero
                                        </th>
        
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Estado de Paral
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Dimensiones
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Leyenda
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Observaciones
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Via
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($via->señales as $sign)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-teal-600">
                                                <div class="flex justify-left">
                                                    <span class="relative inline-flex rounded-md shadow-sm">
                                                        <a href="{{ route('sign.show', $sign) }}"
                                                            class="inline-flex items-center px-4 py-2 border border-blue-400 text-base leading-6 font-medium rounded-md text-gray-800 bg-white hover:text-blue-700 focus:border-purple-300 transition ease-in-out duration-150">
                                                            {{ $sign->abscisa }}
                                                        </a>
                                                        <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                                                            <span
                                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                                            <span
                                                                class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $sign->costado }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $sign->descripcion }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
        
                                                @switch($sign->estado_tablero)
                                                    @case('B')
                                                        Bueno
                                                    @break
        
                                                    @case('R')
                                                        Regular
                                                    @break
        
                                                    @case('M')
                                                        Malo
                                                    @break
        
                                                    @default
                                                        Sin asignar
                                                @endswitch
        
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
        
                                                @switch($sign->estado_paral)
                                                    @case('B')
                                                        Bueno
                                                    @break
        
                                                    @case('R')
                                                        Regular
                                                    @break
        
                                                    @case('M')
                                                        Malo
                                                    @break
        
                                                    @default
                                                        Sin asignar
                                                @endswitch
        
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $sign->dimensiones }} cm
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $sign->leyenda }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $sign->observaciones }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $sign->via->codigo_via }}
                                            </td>
                                        </tr>
                                    @endforeach
        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <p class="my-6 text-lg">Cambios en Via</p>

            @if ($via->cambios->isNotEmpty())
            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gradient-to-r from-gray-800 to-indigo-700 text-white">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
            
                                            Codigo
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Nombre de la via
                                        </th>
            
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Municipios
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Longitud
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Pavimentada
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Afirmado
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Tierra
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            En Mejoramiento
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Fecha de Cambio
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
            
                                    @foreach ($via->cambios as $cambio)
            
                                        <tr>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ json_decode($cambio->content)->codigo_via }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">{{ json_decode($cambio->content)->nombre_via }}</div>
                                                <div class="text-sm text-gray-500">Responsable:
                                                    {{ json_decode($cambio->content)->responsable }}</div>
                                            </td>
            
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">Desde:</div>
                                                <div class="text-sm text-gray-600">{{ json_decode($cambio->content)->ubicacion_desde_id }}</div>
                                                <div class="text-sm text-gray-900 w-1">Hasta:</div>
                                                <div class="text-sm text-gray-600 w-1">{{ json_decode($cambio->content)->ubicacion_hasta_id }}</div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ json_decode($cambio->content)->longitud }}
                                            </td>
            
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">Bueno:
                                                    {{ number_format(json_decode($cambio->content)->pav_bueno, 2) }}</div>
                                                <div class="text-sm text-gray-500">Regular:
                                                    {{ number_format(json_decode($cambio->content)->pav_regular, 2) }}</div>
                                                <div class="text-sm text-gray-500">Malo:
                                                    {{ number_format(json_decode($cambio->content)->pav_malo, 2) }}</div>
                                                <div class="text-sm text-gray-900">Total Km:
                                                    {{ number_format(json_decode($cambio->content)->pav_bueno + json_decode($cambio->content)->pav_regular + json_decode($cambio->content)->pav_malo, 2) }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">Bueno:
                                                    {{ number_format(json_decode($cambio->content)->afir_bueno, 2) }}</div>
                                                <div class="text-sm text-gray-500">Regular:
                                                    {{ number_format(json_decode($cambio->content)->afir_regular, 2) }}</div>
                                                <div class="text-sm text-gray-500">Malo:
                                                    {{ number_format(json_decode($cambio->content)->afir_malo, 2) }}</div>
                                                <div class="text-sm text-gray-900">Total Km:
                                                    {{ number_format(json_decode($cambio->content)->afir_bueno + json_decode($cambio->content)->afir_regular + json_decode($cambio->content)->afir_malo, 2) }}
                                                </div>
                                            </td>
                                            
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">Bueno:
                                                    {{ number_format(json_decode($cambio->content)->tierra_bueno, 2) }}</div>
                                                <div class="text-sm text-gray-500">Regular:
                                                    {{ number_format(json_decode($cambio->content)->tierra_regular, 2) }}</div>
                                                <div class="text-sm text-gray-500">Malo:
                                                     {{ number_format(json_decode($cambio->content)->tierra_malo, 2) }}</div>
                                                <div class="text-sm text-gray-900">Total Km:
                                                    {{ number_format(json_decode($cambio->content)->tierra_bueno + json_decode($cambio->content)->tierra_regular + json_decode($cambio->content)->tierra_malo, 2) }}
                                                </div>
                                            </td>
            
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">Bueno:
                                                    {{ number_format(json_decode($cambio->content)->mej_bueno, 2) }}</div>
                                                <div class="text-sm text-gray-500">Regular:
                                                    {{ number_format(json_decode($cambio->content)->mej_regular, 2) }}</div>
                                                <div class="text-sm text-gray-500">Malo:
                                                    {{ number_format(json_decode($cambio->content)->mej_malo, 2) }}</div>
                                                <div class="text-sm text-gray-900">Total Km:
                                                    {{ number_format(json_decode($cambio->content)->mej_bueno +json_decode($cambio->content)->mej_regular + json_decode($cambio->content)->mej_malo, 2) }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{date('d-m-Y', strtotime(json_decode($cambio->content)->created_at))}}
                                            </td>
                                        </tr>
            
                                    @endforeach
                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>  
            @else
            No tiene historial de cambios
            @endif

            
            

        </div>
    </div>

    @push('script')

        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
        <script>
            var cloudmadeUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
        cloudmade = new L.TileLayer(cloudmadeUrl, {maxZoom: 18}),
        map = new L.Map('map', {layers: [cloudmade], center: new L.LatLng(5.336726312563761, -72.39572187571952), zoom: 15 });
    
    var editableLayers = new L.FeatureGroup();
    map.addLayer(editableLayers);

        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                maxZoom: 18
            }).addTo(map);
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);
        var drawControl = new L.Control.Draw({
            position: 'topright',
            draw: {
                polygon: {
                    shapeOptions: {
                        color: 'purple' //polygons being drawn will be purple color
                    },
                    allowIntersection: false,
                    drawError: {
                        color: 'orange',
                        timeout: 1000
                    },
                    showArea: true, //the area of the polygon will be displayed as it is drawn.
                    metric: false,
                    repeatMode: true
                },
                polyline: {
                    shapeOptions: {
                        color: 'red'
                    },
                },
                circlemarker: false, //circlemarker type has been disabled.
                rect: {
                    shapeOptions: {
                        color: 'green'
                    },
                },
                circle: false,
            },
            edit: {
                featureGroup: drawnItems
            }
        });

        map.addControl(drawControl);
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
