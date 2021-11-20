<div x-data="{ expanded: false }">

    <header class="bg-gradient-to-r from-white to-gray-200 shadow">
        <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                    <path
                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                    </path>
                </svg>
                <div class="ml-4 text-lg text-gray-500 leading-tight uppercase">Inventario Vial</div>
                <button @click="expanded = ! expanded"
                    class="text-center text-white bg-indigo-700 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg ml-auto">Formulario</button>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto my-8 sm:px-6 lg:px-8" x-show="expanded" x-collapse.duration.900ms>

        <x-jet-form-section submit="save">
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
                    <x-jet-input type="text" wire:model="createForm.codigo_via" class="w-full" />
                    <x-jet-input-error for="createForm.codigo_via" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label>
                        Nombre Via
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.nombre_via" class="w-full" />
                    <x-jet-input-error for="createForm.nombre_via" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label>
                        Compentencia
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.competencia" class="w-full"
                        value="Departamento" />
                    <x-jet-input-error for="createForm.competencia" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label>
                        Responsable
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.responsable"
                        class="w-full bg-gray-200 text-gray-400" disabled />
                    <x-jet-input-error for="createForm.responsable" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label>
                        Longitud (km)
                    </x-jet-label>
                    <x-jet-input type="number" wire:model="createForm.longitud" class="w-full" />
                    <x-jet-input-error for="createForm.longitud" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label>
                        Ancho Promedio (Km)
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.ancho_prom" class="w-full" />
                    <x-jet-input-error for="createForm.ancho_prom" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label class=" uppercase">
                        Orden (resolución 0000411 de 2020)
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.orden_resolucion" class="w-full" />
                    <x-jet-input-error for="createForm.orden_resolucion" />
                </div>

                <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                    PR
                </p>

                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label>
                        Inical
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.pr_inicio" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label>
                        Final
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.pr_final" class="w-full" />
                </div>

                <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold uppercase">
                    Inicio via
                </p>

                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Longitud
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.inicio_longitud" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Lalitud
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.inicio_latitud" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Altura
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.inicio_altura" class="w-full" />
                </div>

                <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                    Fin via
                </p>

                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Longitud
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.fin_longitud" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Lalitud
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.fin_latitud" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Altura
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.fin_altura" class="w-full" />
                </div>

                <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                    MUNICIPIOS
                </p>

                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label>
                        Desde
                    </x-jet-label>

                    <x-jet-input type="text" wire:model="createForm.ubicacion_desde" class="w-full" />

                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label>
                        Hasta
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.ubicacion_hasta" class="w-full" />
                </div>

                <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                    VÍA PAVIMENTADAS (Km)
                </p>

                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Bueno
                    </x-jet-label>
                    <x-jet-input type="number" wire:model="createForm.pav_bueno" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Regular
                    </x-jet-label>
                    <x-jet-input type="number" wire:model="createForm.pav_regular" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Malo
                    </x-jet-label>
                    <x-jet-input type="number" wire:model="createForm.pav_malo" class="w-full" />
                </div>

                <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                    VÍA EN AFIRMADO (Km)
                </p>

                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Bueno
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.afir_bueno" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Regular
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.afir_regular" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Malo
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.afir_malo" class="w-full" />
                </div>

                <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                    VÍA EN TIERRA (Km)
                </p>

                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Bueno
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.tierra_bueno" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Regular
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.tierra_regular" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Malo
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.tierra_malo" class="w-full" />
                </div>

                <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                    VÍAS CON MEJORAMIENTO (Km)
                </p>

                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Bueno
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.mej_bueno" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Regular
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.mej_regular" class="w-full" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-jet-label>
                        Malo
                    </x-jet-label>
                    <x-jet-input type="text" wire:model="createForm.mej_malo" class="w-full" />
                </div>



            </x-slot>

            <x-slot name="actions">
                <x-jet-button>
                    Crear
                </x-jet-button>
            </x-slot>
        </x-jet-form-section>

    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mx-8 my-6">
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
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                            @foreach ($vias as $via)

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <a href="{{ route('vias.show', $via) }}">
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
                                        <div class="text-sm text-gray-600">{{ $via->ubicacion_desde }}
                                        </div>
                                        <div class="text-sm text-gray-900 w-1">Hasta:</div>
                                        <div class="text-sm text-gray-600 w-1">
                                            {{ $via->ubicacion_hasta }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $via->longitud }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">Bueno:
                                            {{ number_format($via->pav_bueno, 2) }}</div>
                                        <div class="text-sm text-gray-500">Regular:
                                            {{ number_format($via->pav_regular, 2) }}</div>
                                        <div class="text-sm text-gray-500">Malo:
                                            {{ number_format($via->pav_malo, 2) }}</div>
                                        <div class="text-sm text-gray-900">Total Km:
                                            {{ number_format($via->pav_bueno + $via->pav_regular + $via->pav_malo, 2) }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">Bueno:
                                            {{ number_format($via->afir_bueno, 2) }}</div>
                                        <div class="text-sm text-gray-500">Regular:
                                            {{ number_format($via->afir_regular, 2) }}</div>
                                        <div class="text-sm text-gray-500">Malo:
                                            {{ number_format($via->afir_malo, 2) }}</div>
                                        <div class="text-sm text-gray-900">Total Km:
                                            {{ number_format($via->afir_bueno + $via->afir_regular + $via->afir_malo, 2) }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">Bueno:
                                            {{ number_format($via->tierra_bueno, 2) }}</div>
                                        <div class="text-sm text-gray-500">Regular:
                                            {{ number_format($via->tierra_regular, 2) }}</div>
                                        <div class="text-sm text-gray-500">Malo:
                                             {{ number_format($via->tierra_malo, 2) }}</div>
                                        <div class="text-sm text-gray-900">Total Km:
                                            {{ number_format($via->tierra_bueno + $via->tierra_regular + $via->tierra_malo, 2) }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">Bueno:
                                            {{ number_format($via->mej_bueno, 2) }}</div>
                                        <div class="text-sm text-gray-500">Regular:
                                            {{ number_format($via->mej_regular, 2) }}</div>
                                        <div class="text-sm text-gray-500">Malo:
                                            {{ number_format($via->mej_malo, 2) }}</div>
                                        <div class="text-sm text-gray-900">Total Km:
                                            {{ number_format($via->mej_bueno + $via->mej_regular + $via->mej_malo, 2) }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                            wire:click="edit('{{ $via->id }}')"><i
                                                class="fas fa-pen-alt"></i></a>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm">
                                        <a class="pl-2 hover:text-red-600 cursor-pointer text-md"
                                            wire:click="$emit('deleteVia', '{{ $via->id }}')"><i
                                                class="fas fa-trash-alt"></i></a>
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

    {{-- <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">
            Editar
        </x-slot>

        <x-slot name="content">


            <div class="mb-6">
                <x-jet-label>
                    Codigo de Via
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.codigo_via" class="w-full" />
                <x-jet-input-error for="editForm.codigo_via" />
            </div>

            <div class="mb-6">
                <x-jet-label>
                    Nombre Via
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.nombre_via" class="w-full" />
                <x-jet-input-error for="editForm.nombre_via" />
            </div>

            <div class="mb-6">
                <x-jet-label>
                    Compentencia
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.competencia" class="w-full"
                    value="Departamento" />
                <x-jet-input-error for="editForm.competencia" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Responsable
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.responsable" class="w-full bg-gray-200 text-gray-400"
                    disabled />
                <x-jet-input-error for="editForm.responsable" />
            </div>

            <div class="mb-6">
                <x-jet-label>
                    Longitud (km)
                </x-jet-label>
                <x-jet-input type="number" wire:model="editForm.longitud" class="w-full" />
                <x-jet-input-error for="editForm.longitud" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Ancho Promedio (Km)
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.ancho_prom" class="w-full" />
                <x-jet-input-error for="editForm.ancho_prom" />
            </div>

            <div class="mb-6">
                <x-jet-label class=" uppercase">
                    Orden (resolución 0000411 de 2020)
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.orden_resolucion" class="w-full" />
                <x-jet-input-error for="editForm.orden_resolucion" />
            </div>

            <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                PR
            </p>

            <div class="mb-6">
                <x-jet-label>
                    Inical
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.pr_inicio" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Final
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.pr_final" class="w-full" />
            </div>

            <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold uppercase">
                Inicio via
            </p>

            <div class="mb-6">
                <x-jet-label>
                    Longitud
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.inicio_longitud" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Lalitud
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.inicio_latitud" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Altura
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.inicio_altura" class="w-full" />
            </div>

            <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                Fin via
            </p>

            <div class="mb-6">
                <x-jet-label>
                    Longitud
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.fin_longitud" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Lalitud
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.fin_latitud" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Altura
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.fin_altura" class="w-full" />
            </div>

            <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                MUNICIPIOS
            </p>

            <div class="mb-6">
                <x-jet-label>
                    Desde
                </x-jet-label>

                <x-jet-input type="text" wire:model="editForm.ubicacion_desde" class="w-full" />

            </div>
            <div class="mb-6">
                <x-jet-label>
                    Hasta
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.ubicacion_hasta" class="w-full" />
            </div>

            <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                VÍA PAVIMENTADAS (Km)
            </p>

            <div class="mb-6">
                <x-jet-label>
                    Bueno
                </x-jet-label>
                <x-jet-input type="number" wire:model="editForm.pav_bueno" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Regular
                </x-jet-label>
                <x-jet-input type="number" wire:model="editForm.pav_regular" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Malo
                </x-jet-label>
                <x-jet-input type="number" wire:model="editForm.pav_malo" class="w-full" />
            </div>

            <p class="mb-6 mt-2 text-sm text-gray-800 font-semibold">
                VÍA EN AFIRMADO (Km)
            </p>

            <div class="mb-6">
                <x-jet-label>
                    Bueno
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.afir_bueno" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Regular
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.afir_regular" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Malo
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.afir_malo" class="w-full" />
            </div>

            <p class="mb-6 mt-2 text-sm text-gray-800 font-semibold">
                VÍA EN TIERRA (Km)
            </p>

            <div class="mb-6">
                <x-jet-label>
                    Bueno
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.tierra_bueno" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Regular
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.tierra_regular" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Malo
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.tierra_malo" class="w-full" />
            </div>

            <p class="mb-6 mt-2 text-sm text-gray-800 font-semibold">
                VÍAS CON MEJORAMIENTO (Km)
            </p>

            <div class="mb-6">
                <x-jet-label>
                    Bueno
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.mej_bueno" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Regular
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.mej_regular" class="w-full" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    Malo
                </x-jet-label>
                <x-jet-input type="text" wire:model="editForm.mej_malo" class="w-full" />
            </div>

            <x-slot name="footer">
                <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                    Actualizar
                </x-jet-danger-button>
            </x-slot>

    </x-jet-dialog-modal> --}}

    @push('script')
        <script>
            Livewire.on('deleteVia', viaId => {

                Swal.fire({
                    title: '¿Estas Seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, bórralo!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('vias-table', 'delete', viaId)
                        Swal.fire(
                            '¡Eliminado!',
                            'Se ha eliminado correctamente.',
                            'success'
                        )
                    }
                })
            });
        </script>
    @endpush
</div>
