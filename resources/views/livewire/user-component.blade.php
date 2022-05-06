<div>

    <header class="bg-gradient-to-r from-white to-gray-200 shadow">
        <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <div class="ml-4 text-lg text-gray-500 leading-tight uppercase">Administración de Usuarios</div>
            </div>
        </div>
    </header>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Users Table -->
            <div class="flex flex-col shadow-xl rounded-lg">
                <div class="-my-2 overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full ">
                        <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <div class="flex bg-gray-700 px-2 py-4 sm:px-5">
                                <x-jet-input type="text" wire:model="search" class="placeholder:text-slate-400 w-full"
                                    placeholder="Buscar un usuario..." />
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
                                <thead class="bg-gray-700 text-white">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Nombre
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Documento
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Rol
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Estado
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-xl object-cover"
                                                            src="{{ $user->profile_photo_url }}"
                                                            alt="{{ $user->name }}">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $user->name }}
                                                            {{ $user->apellido }}</div>
                                                        <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $user->documento }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $user->roles()->pluck('name')->join(' | ') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                @switch($user->status)
                                                    @case(1)
                                                        Activo
                                                        @break
                                                    @case(0)
                                                        Inactivo
                                                        @break
                                                    @default
                                                        
                                                @endswitch
                                            </td>
                                                <td class="text-center text-sm">
                                                    <div class="flex justify-center">
                                                            <a class="text-blue-300 hover:text-blue-700 cursor-pointer"
                                                                wire:click="showUser('{{ $user->id }}')">
                                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                  </svg>
                                                            </a>
                                                            <a class="text-red-500 cursor-pointer ml-3"
                                                                wire:click="$emit('chageStatusUser', '{{ $user->id }}')">
                                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                                  </svg>
                                                            </a>
                                                    </div>
                                                </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="bg-gray-100 px-4 py-3 border-t border-gray-200 sm:px-6">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <x-edit-modal wire:model="open" maxWidth="5xl">

        <x-slot name="title">
            
        </x-slot>

        <x-slot name="content">

            <div class="col-span-6 sm:col-span-3">
                <x-jet-label>
                    Nombre
                </x-jet-label>
                <x-jet-input type="text" wire:model="show.name" class="w-full" disabled />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <x-jet-label>
                    Apellido
                </x-jet-label>
                <x-jet-input type="text" wire:model="show.apellido" class="w-full" disabled />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <x-jet-label>
                    Documento
                </x-jet-label>
                <x-jet-input type="text" wire:model="show.documento" class="w-full" disabled />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <x-jet-label>
                    Email
                </x-jet-label>
                <x-jet-input type="text" wire:model="show.email" class="w-full" disabled />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-button>
                Cerrar
            </x-jet-button>
        </x-slot>

    </x-edit-modal>

    @push('script')
        <script>
            Livewire.on('chageStatusUser', userId => {
                Swal.fire({
                    title: '¿Estas Seguro?',
                    text: "¡Se cambiara el estado del usuario!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, Cambiar Estado!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('user-component', 'changestatus', userId)
                        Swal.fire(
                            '¡Estado Cambiao!',
                            'Se ha cambiado correctamente.',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endpush
    
</div>
