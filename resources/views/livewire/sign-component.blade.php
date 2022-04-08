<div>
    <x-slot name="header">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <h2 class="ml-4 text-xl text-gray-800 leading-tight uppercase">
                INVENTARIO DE SEÑALIZACIÓN
            </h2>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-jet-form-section submit="save" class="mb-6">
                <x-slot name="title">
                    Crear una nueva señalización
                </x-slot>

                <x-slot name="description">
                    Complete la información necesaria para poder crear una nueva señalización.
                </x-slot>

                <x-slot name="form">

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Abscisa
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="createForm.abscisa" class="w-full" />
                        <x-jet-input-error for="createForm.abscisa" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Costado
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="createForm.costado" class="w-full" />
                        <x-jet-input-error for="createForm.costado" />
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                        <x-jet-label>
                            Descripción
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="createForm.descripcion" class="w-full" />
                        <x-jet-input-error for="createForm.descripcion" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Estado de Tablero
                        </x-jet-label>
                        <x-jet-input type="radio" wire:model="createForm.estado_tablero" name="estado_tablero" value="B"
                            class="my-3" />
                        Bueno
                        <x-jet-input type="radio" wire:model="createForm.estado_tablero" name="estado_tablero" value="R"
                            class="my-3 ml-6" />
                        Regular
                        <x-jet-input type="radio" wire:model="createForm.estado_tablero" name="estado_tablero" value="M"
                            class="my-3 ml-6" />
                        Malo
                        <x-jet-input-error for="createForm.estado_tablero" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Estado de Paral
                        </x-jet-label>
                        <x-jet-input type="radio" wire:model="createForm.estado_paral" name="estado_paral" value="B"
                            class="my-3" />
                        Bueno
                        <x-jet-input type="radio" wire:model="createForm.estado_paral" name="estado_paral" value="R"
                            class="my-3 ml-6" />
                        Regular
                        <x-jet-input type="radio" wire:model="createForm.estado_paral" name="estado_paral" value="M"
                            class="my-3 ml-6" />
                        Malo
                        <x-jet-input-error for="createForm.estado_paral" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Dimensiones
                        </x-jet-label>
                        <x-jet-input type="number" wire:model="createForm.dimensiones" class="w-full" />
                        <x-jet-input-error for="createForm.dimensiones" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Leyenda
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="createForm.leyenda" class="w-full" />
                        <x-jet-input-error for="createForm.leyenda" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Observaciones
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="createForm.observaciones" class="w-full" />
                        <x-jet-input-error for="createForm.observaciones" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            VIA
                        </x-jet-label>

                        <select wire:model="createForm.via_id"
                            class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

                            <option value="" selected disabled>Seleccione una Via</option>

                            @foreach ($vias as $via)
                                <option value="{{ $via->id }}">{{ $via->codigo_via }}</option>
                            @endforeach

                        </select>

                        <x-jet-input-error for="createForm.via_id" />
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                        <x-jet-label>
                            Ubicación
                        </x-jet-label>
                        <div wire:ignore>
                            <div id="map" class=" rounded-md mb-6 shadow-md z-10" style="height: 500px;"></div>
                            
                        </div>
                            <x-jet-input wire:model.defer="createForm.cordenadas" id="mark" type="text" value="{{request('mark')}}" />
                            {{-- <input wire:model="createForm.cordenadas" id="mark" type="text" value="{{request('mark')}}"> --}}
                        <x-jet-input-error for="createForm.cordenadas" />
                    </div>

                </x-slot>
                <x-slot name="actions">
                    <x-jet-action-message class="mr-3" on="saved">
                        Señal Agregada.
                    </x-jet-action-message>
                    <x-jet-button>
                        Agregar
                    </x-jet-button>
                </x-slot>
            </x-jet-form-section>
        </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mx-8 mt-6 pb-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="flex bg-gradient-to-r from-teal-500 to-blue-800 px-2 py-4 sm:px-5">
                        <x-jet-input type="text" wire:model="search" class="placeholder:text-slate-400 w-full"
                            placeholder="Buscar Señal" />
                        <div>
                            <select wire:model="perPage"
                                class="ml-6 border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                class="outline-none">
                                <option value="2">2 por página</option>
                                <option value="5">5 por página</option>
                                <option value="10">10 por página</option>
                                <option value="15">15 por página</option>
                                <option value="25">25 por página</option>
                                <option value="50">50 por página</option>
                                <option value="100">100 por página</option>
                            </select>
                        </div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gradient-to-r from-teal-500 to-blue-800 text-white">
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
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($signs as $sign)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-teal-600">                                  
                                        <div class="flex justify-left">
                                            <span class="relative inline-flex rounded-md shadow-sm">
                                              <a href="{{ route('sign.show', $sign) }}" class="inline-flex items-center px-4 py-2 border border-blue-400 text-base leading-6 font-medium rounded-md text-gray-800 bg-white hover:text-blue-700 focus:border-purple-300 transition ease-in-out duration-150">
                                                    {{ $sign->abscisa }}
                                                </a>
                                              <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                                <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
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
                                    <td class="pr-3 text-center text-sm">
                                        <div class="flex justify-center">
                                        <a class="text-blue-300 hover:text-blue-700 cursor-pointer"
                                            wire:click="edit('{{ $sign->abscisa }}')">
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                              </svg>
                                        </a>
                                        <a class="text-red-500 cursor-pointer ml-3"
                                            wire:click="$emit('deleteSign', '{{ $sign->id }}')">
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="bg-gray-100 px-4 py-3 border-t border-gray-200 sm:px-6">
                        {{ $signs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Editar
        </x-slot>

        <x-slot name="content">

            <div class="mb-6">
                <x-jet-label>
                    Abscisa
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.abscisa" class="w-full" />
                <x-jet-input-error for="editForm.abscisa" />
            </div>

            <div class="mb-6">
                <x-jet-label>
                    Costado
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.costado" class="w-full" />
                <x-jet-input-error for="editForm.costado" />
            </div>

            <div class="mb-6">
                <x-jet-label>
                    Descripción
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.descripcion" class="w-full" />
                <x-jet-input-error for="editForm.descripcion" />
            </div>

            <div class="mb-6">
                <x-jet-label>
                    Estado de Tablero
                </x-jet-label>
                <x-jet-input type="radio" wire:model="editForm.estado_tablero" name="estado_tablero" value="B"
                    class="my-3" />
                Bueno
                <x-jet-input type="radio" wire:model="editForm.estado_tablero" name="estado_tablero" value="R"
                    class="my-3 ml-6" />
                Regular
                <x-jet-input type="radio" wire:model="editForm.estado_tablero" name="estado_tablero" value="M"
                    class="my-3 ml-6" />
                Malo
                <x-jet-input-error for="editForm.estado_tablero" />
            </div>

            <div class="mb-6">
                <x-jet-label>
                    Estado de Paral
                </x-jet-label>
                <x-jet-input type="radio" wire:model="editForm.estado_paral" name="estado_paral" value="B"
                    class="my-3" />
                Bueno
                <x-jet-input type="radio" wire:model="editForm.estado_paral" name="estado_paral" value="R"
                    class="my-3 ml-6" />
                Regular
                <x-jet-input type="radio" wire:model="editForm.estado_paral" name="estado_paral" value="M"
                    class="my-3 ml-6" />
                Malo
                <x-jet-input-error for="editForm.estado_paral" />
            </div>

            <div class="mb-6">
                <x-jet-label>
                    Dimensiones
                </x-jet-label>
                <x-jet-input type="number" wire:model="editForm.dimensiones" class="w-full" />
                <x-jet-input-error for="editForm.dimensiones" />
            </div>

            <div class="mb-6">
                <x-jet-label>
                    Leyenda
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.leyenda" class="w-full" />
                <x-jet-input-error for="editForm.leyenda" />
            </div>

            <div class="mb-6">
                <x-jet-label>
                    Observaciones
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.observaciones" class="w-full" />
                <x-jet-input-error for="editForm.observaciones" />
            </div>

            <div class="mb-6">
                <x-jet-label>
                    VIA
                </x-jet-label>

                <select wire:model="editForm.via_id"
                    class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

                    <option value="" selected disabled>Seleccione una Via</option>

                    @foreach ($vias as $via)
                        <option value="{{ $via->id }}">{{ $via->codigo_via }}</option>
                    @endforeach

                </select>

                <x-jet-input-error for="editForm.via_id" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-update-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                Actualizar
            </x-update-button>
        </x-slot>
    </x-jet-dialog-modal>

    @push('script')
    <script>
        Livewire.on('deleteSign', signId => {
            Swal.fire({
                title: '¿Estas Seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, Eliminar Señal!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('sign-component', 'delete', signId)
                    Swal.fire(
                        'Señal Eliminada!',
                        'Se ha eliminado correctamente.',
                        'success'
                    )
                }
            })
        })
    </script>
 
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
             polygon: false,

             polyline: false,

             circlemarker: false, 
             //circlemarker type has been disabled.
             rect: false,

             circle: false,

             rectangle: false,
         },
         edit: {
             featureGroup: drawnItems
         }
     });

     map.addControl(drawControl);
     map.on('draw:created', function(e) {
         var type = e.layerType,
             layer = e.layer;
         drawnItems.addLayer(layer);
         $('#mark').val(JSON.stringify(layer.toGeoJSON()));
     });
 </script>
@endpush

</div>
