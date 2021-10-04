<div>
    <x-slot name="header">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z">
                </path>
            </svg>
            <h2 class="ml-4 text-xl text-gray-800 leading-tight uppercase">
                ARCHIVO DE CONTRATOS Y PROYECTOS
            </h2>
        </div>
    </x-slot>




    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-jet-form-section submit="save" class="mb-6">
                <x-slot name="title">
                    Subir un Nuevo Archivo
                </x-slot>

                <x-slot name="description">
                    Complete la información necesaria para poder subir un nuevo archivo.
                </x-slot>

                <x-slot name="form">

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            NOMBRE
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                        <x-jet-input-error for="createForm.nombre_via" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            TIPO
                        </x-jet-label>
                        <x-jet-input type="radio" name="type" class="my-3" />
                        Proyecto
                        <x-jet-input type="radio" name="type" class="my-3 ml-6" />
                        Contrato
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                        <x-jet-label>
                            ESTADO
                        </x-jet-label>
                        <x-jet-input type="radio" name="estado" class="my-3" />
                        Pendiente
                        <x-jet-input type="radio" name="estado" class="my-3 ml-6" />
                        Aprobado
                        <x-jet-input type="radio" name="estado" class="my-3 ml-6" />
                        Desaprobado
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            VIA
                        </x-jet-label>
                        <select
                            class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            wire:model="category_id">
                            <option value="" selected disabled>Seleccione una categoría</option>

                            <option value="1">Via 1</option>
                            {{-- @foreach ($vias as $via)
                            <option value="{{ $via->id }}">{{ $via->nombre_via }}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    <div class="col-span-6 sm:col-span-4">

                        <fieldset class="w-full space-y-1 text-gray-100">
                            <div class="flex">
                                <input type="file" name="files" id="files"
                                    class="px-8 py-12 border-2 border-dashed rounded-md border-gray-700 text-gray-400 bg-gray-100 w-full">
                            </div>
                        </fieldset>

                        <x-jet-input-error for="createForm.image" />
                    </div>

                </x-slot>

                <x-slot name="actions">
                    <x-jet-button>
                        Agregar
                    </x-jet-button>
                </x-slot>


            </x-jet-form-section>


            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg my-7">

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
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
                                                class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                                Descarga
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                asdfadsfs
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">Bueno:
                                                    asdfsdaf</div>
                                            </td>
                                        </tr>
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
