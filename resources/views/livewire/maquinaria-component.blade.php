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
                BANCO DE MAQUINARIA
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
                            MUNICIPIO
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="createForm.municipio" class="w-full" />
                        <x-jet-input-error for="createForm.municipio" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            TRAMO A INTERVENIR
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="createForm.tramo" class="w-full" />
                        <x-jet-input-error for="createForm.tramo" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            VIAS SECUNDARIAS AFIRMADO
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="createForm.afirmado" class="w-full" />
                        <x-jet-input-error for="createForm.afirmado" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            RVS PAVIMENTADA
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="createForm.pavimentada" class="w-full" />
                        <x-jet-input-error for="createForm.pavimentada" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            VIAS TERCIARIAS
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="createForm.terciarias" class="w-full" />
                        <x-jet-input-error for="createForm.terciarias" />
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
                                <div class="flex bg-gradient-to-r from-teal-500 to-orange-700 px-2 py-4 sm:px-5">
                                    <x-jet-input type="text" wire:model="search" class="placeholder:text-slate-400 w-full"
                                        placeholder="Buscar por Codigo | Nombre | Longitud" />
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
                                    <thead class="bg-gradient-to-r from-teal-500 to-orange-700 text-white">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                                No.
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                                MUNICIPIO
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                                TRAMO A INTERVENIR
                                            </th>

                                            <th scope="col"
                                                class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                                Vias Secundarias Afirmado
                                            </th>

                                            <th scope="col"
                                                class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                                RVS Pavimentada
                                            </th>

                                            <th scope="col"
                                                class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                                Vias Terciarias
                                            </th>
                                            <th></th><th></th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($maquinaria as $maquina)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $maquina->id }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">
                                                    {{ $maquina->municipio }}</div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $maquina->tramo }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                {{ $maquina->afirmado }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                {{ $maquina->pavimentada }}
                                             </td>
                                             <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                {{ $maquina->terciarias }}
                                             </td>
                                             <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                                    wire:click="edit('{{ $maquina->id }}')"><i class="fas fa-pen-alt"></i></a>
                                            </td>
                                             <td class="px-6 py-4 whitespace-nowrap text-center text-sm">
                                                <a class="pl-2 hover:text-red-600 cursor-pointer text-md"
                                                    wire:click="$emit('deleteMaquina', '{{ $maquina->id }}')"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                            
                                        @endforeach                                      
                                    </tbody>
                                </table>
                                <div class="bg-gray-100 px-4 py-3 border-t border-gray-200 sm:px-6">
                                    {{ $maquinaria->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">
            Editar
        </x-slot>

        <x-slot name="content">
            <div class="mb-6">
                <x-jet-label>
                    MUNICIPIO
                </x-jet-label>
                <x-jet-input wire:model="editForm.municipio" type="text" class="w-full" />
                <x-jet-input-error for="editForm.municipio" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    TRAMO A INTERVENIR
                </x-jet-label>
                <x-jet-input wire:model="editForm.tramo" type="text" class="w-full" />
                <x-jet-input-error for="editForm.tramo" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    VIAS SECUNDARIAS AFIRMADO
                </x-jet-label>
                <x-jet-input wire:model="editForm.afirmado" type="text" class="w-full" />
                <x-jet-input-error for="editForm.afirmado" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    RVS PAVIMENTADA
                </x-jet-label>
                <x-jet-input wire:model="editForm.pavimentada" type="text" class="w-full" />
                <x-jet-input-error for="editForm.pavimentada" />
            </div>
            <div class="mb-6">
                <x-jet-label>
                    VIAS TERCIARIAS
                </x-jet-label>
                <x-jet-input wire:model="editForm.terciarias" type="text" class="w-full" />
                <x-jet-input-error for="editForm.terciarias" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                Actualizar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

@push('script')
    <script>
        Livewire.on('deleteMaquina', maquinaId => {

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
                    Livewire.emitTo('maquinaria-component', 'delete', maquinaId)
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
