<div>
    <x-slot name="header">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path
                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
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
                        <x-jet-input type="text" wire:model="createForm.nombre" class="w-full" />
                        <x-jet-input-error for="createForm.nombre" />

                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            TIPO
                        </x-jet-label>
                        <x-jet-input type="radio" wire:model="createForm.tipo" name="type" value="1"
                            class="my-3" />
                        Proyecto
                        <x-jet-input type="radio" wire:model="createForm.tipo" name="type" value="2"
                            class="my-3 ml-6" />
                        Contrato
                        <x-jet-input-error for="createForm.tipo" />
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                        <x-jet-label>
                            ESTADO
                        </x-jet-label>
                        <x-jet-input type="radio" wire:model="createForm.estado" name="estado" value="1"
                            class="my-3" />
                        Pendiente
                        <x-jet-input type="radio" wire:model="createForm.estado" name="estado" value="2"
                            class="my-3 ml-6" />
                        Aprobado
                        <x-jet-input type="radio" wire:model="createForm.estado" name="estado" value="3"
                            class="my-3 ml-6" />
                        Desaprobado
                        <x-jet-input-error for="createForm.estado" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            VIA
                        </x-jet-label>

                        <select wire:model="createForm.via_id"
                            class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">

                            <option value="" selected disabled>Seleccione una Via</option>

                            @foreach ($vias as $via)
                                <option value="{{ $via->id }}">{{ $via->codigo_via }} | {{$via->nombre_via}}</option>
                            @endforeach

                        </select>

                        <x-jet-input-error for="createForm.via_id" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">



                        <input wire:model="createForm.url_file" accept=".doc,.docx,.pdf" type="file"
                            id="{{ $rand }}"
                            class="px-8 py-12 border-2 border-dashed rounded-md border-gray-400 text-gray-400 bg-gray-100 w-full">

                        <x-jet-input-error for="createForm.url_file" />

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
                                                class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                                Tipo
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                                Descarga
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($documentos as $documento)
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
                                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm">
                                                    <a class="pl-2 hover:text-red-600 cursor-pointer text-md"
                                                        wire:click="$emit('deleteDocumento', '{{ $documento->id }}')"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    @push('script')
    <script>
        Livewire.on('deleteDocumento', documentoId => {

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
                    Livewire.emitTo('project-component', 'delete', documentoId)
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
