<div>

    <x-slot name="header">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z">
                </path>
            </svg>
            <h2 class="ml-4 text-xl text-gray-800 leading-tight uppercase">
                Inventario Vial
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         
            <x-jet-form-section submit="save" class="mb-6">
                <x-slot name="title">
                    FORMULARIO PARA INVENTARIO
                </x-slot>
                <x-slot name="description">
                    Registro de datos de vias para inventario
                </x-slot>
                <x-slot name="form">

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Codigo de Via
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                        <x-jet-input-error for="createForm.codigo_via"/>
                    </div>
             
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Nombre Via
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                        <x-jet-input-error for="createForm.nombre_via"/>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Compentencia
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" value="Departamento" />
                        <x-jet-input-error for="createForm.competencia"/>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Responsable
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full bg-gray-200 text-gray-400" value="Casanare" disabled />
                        <x-jet-input-error for="createForm.responsable"/>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Longitud (km)
                        </x-jet-label>
                        <x-jet-input type="number" class="w-full" />
                        <x-jet-input-error for="createForm.longitud"/>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Ancho Promedio (Km)
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                        <x-jet-input-error for="createForm.ancho_prom"/>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label class=" uppercase">
                            Orden (resolución 0000411 de 2020)
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                        <x-jet-input-error for="createForm.orden_resolucion"/>
                    </div>

                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        PR
                    </p>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Inical
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Final
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>

                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        Inicio via
                    </p>

                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Longitud
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Lalitud
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Altura
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>

                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        Fin via
                    </p>

                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Longitud
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Lalitud
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Altura
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>

                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        MUNICIPIOS
                    </p>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Desde
                        </x-jet-label>

                        <x-jet-input type="text" class="w-full" />
                       
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Hasta
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>

                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        VÍA PAVIMENTADAS (Km)
                    </p>

                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Bueno
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Regular
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Malo
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>

                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        VÍA EN AFIRMADO (Km)
                    </p>

                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Bueno
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Regular
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Malo
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>

                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        VÍA EN TIERRA (Km)
                    </p>

                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Bueno
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Regular
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Malo
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>

                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        VÍAS CON MEJORAMIENTO (Km)
                    </p>

                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Bueno
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Regular
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Malo
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                    </div>



                </x-slot>

                <x-slot name="actions">
                    <x-jet-button>
                        Crear
                    </x-jet-button>
                </x-slot>
            </x-jet-form-section>


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-indigo-700 text-white">
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
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">



                                        @foreach ($vias as $via)


                                            <tr>
                                                
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <a href="{{route('vias.show', $via)}}">
                                                        {{ $via->codigo_via }}
                                                    </a>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{ $via->nombre_via }}</div>
                                                    <div class="text-sm text-gray-500">Responsable:
                                                        {{ $via->responsable }}</div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">Desde:</div>
                                                    <div class="text-sm text-gray-600">{{ $via->ubicacion->desde }}
                                                    </div>
                                                    <div class="text-sm text-gray-900 w-1">Hasta:</div>
                                                    <div class="text-sm text-gray-600 w-1">
                                                        {{ $via->ubicacion->hasta }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $via->longitud }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">Bueno:
                                                        {{ number_format($via->vias_pavimentada->bueno, 2) }}</div>
                                                    <div class="text-sm text-gray-500">Regular:
                                                        {{ number_format($via->vias_pavimentada->regular, 2) }}</div>
                                                    <div class="text-sm text-gray-500">Malo:
                                                        {{ number_format($via->vias_pavimentada->malo, 2) }}</div>
                                                    <div class="text-sm text-gray-900">Total Km:
                                                        {{ number_format($via->vias_pavimentada->total_km, 2) }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">Bueno:
                                                        {{ number_format($via->vias_afirmado->bueno, 2) }}</div>
                                                    <div class="text-sm text-gray-500">Regular:
                                                        {{ number_format($via->vias_afirmado->regular, 2) }}</div>
                                                    <div class="text-sm text-gray-500">Malo:
                                                        {{ number_format($via->vias_afirmado->malo, 2) }}</div>
                                                    <div class="text-sm text-gray-900">Total Km:
                                                        {{ number_format($via->vias_afirmado->total_km, 2) }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">Bueno:
                                                        {{ number_format($via->vias_tierra->bueno, 2) }}</div>
                                                    <div class="text-sm text-gray-500">Regular:
                                                        {{ number_format($via->vias_tierra->regular, 2) }}</div>
                                                    <div class="text-sm text-gray-500">Malo:
                                                        {{ number_format($via->vias_tierra->malo, 2) }}</div>
                                                    <div class="text-sm text-gray-900">Total Km:
                                                        {{ number_format($via->vias_tierra->total_km, 2) }}</div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">Bueno:
                                                        {{ number_format($via->vias_mejoramiento->bueno, 2) }}</div>
                                                    <div class="text-sm text-gray-500">Regular:
                                                        {{ number_format($via->vias_mejoramiento->regular, 2) }}</div>
                                                    <div class="text-sm text-gray-500">Malo:
                                                        {{ number_format($via->vias_mejoramiento->malo, 2) }}</div>
                                                    <div class="text-sm text-gray-900">Total Km:
                                                        {{ number_format($via->vias_mejoramiento->total_km, 2) }}
                                                    </div>
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




            </div>
        </div>
    </div>
</div>
