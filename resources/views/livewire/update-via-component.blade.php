<div>
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

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    
            <x-jet-form-section submit="update" class="mb-6">
                <x-slot name="title">
                    FORMULARIO PARA INVENTARIO
                </x-slot>
    
                <x-slot name="description">
                    Complete la información necesaria para poder subir un nuevo archivo.
                </x-slot>
    
                <x-slot name="form">
    
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Codigo de Via
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.codigo_via" class="w-full" />
                        <x-jet-input-error for="editForm.codigo_via" />
                    </div>
    
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Nombre Via
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.nombre_via" class="w-full" />
                        <x-jet-input-error for="editForm.nombre_via" />
                    </div>
    
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Compentencia
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.competencia" class="w-full"
                            value="Departamento" />
                        <x-jet-input-error for="editForm.competencia" />
                    </div>
                    
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Responsable
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.responsable"
                            class="w-full bg-gray-200 text-gray-400" disabled />
                        <x-jet-input-error for="editForm.responsable" />
                    </div>
    
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Longitud (km)
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.longitud" class="w-full" />
                        <x-jet-input-error for="editForm.longitud" />
                    </div>
    
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Ancho Promedio (Km)
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.ancho_prom" class="w-full" />
                        <x-jet-input-error for="editForm.ancho_prom" />
                    </div>
    
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label class=" uppercase">
                            Orden (resolución 0000411 de 2020)
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.orden_resolucion" class="w-full" />
                        <x-jet-input-error for="editForm.orden_resolucion" />
                    </div>
    
                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        PR
                    </p>
    
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Inical
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.pr_inicio" class="w-full" />
                        <x-jet-input-error for="editForm.pr_inicio" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Final
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.pr_final" class="w-full" />
                        <x-jet-input-error for="editForm.pr_final" />
                    </div>
    
                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold uppercase">
                        Inicio via
                    </p>
    
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Longitud
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.inicio_longitud" class="w-full" />
                        <x-jet-input-error for="editForm.inicio_longitud" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Lalitud
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.inicio_latitud" class="w-full" />
                        <x-jet-input-error for="editForm.inicio_latitud" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Altura
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.inicio_altura" class="w-full" />
                        <x-jet-input-error for="editForm.inicio_altura" />
                    </div>
    
                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        Fin via
                    </p>
    
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Longitud
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.fin_longitud" class="w-full" />
                        <x-jet-input-error for="editForm.fin_longitud" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Lalitud
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.fin_latitud" class="w-full" />
                        <x-jet-input-error for="editForm.fin_latitud" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Altura
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.fin_altura" class="w-full" />
                        <x-jet-input-error for="editForm.fin_altura" />
                    </div>
    
                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        MUNICIPIOS
                    </p>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Desde
                        </x-jet-label>
    
                        <select wire:model="editForm.ubicacion_desde_id"
                            class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
    
                            <option value="" selected disabled>Seleccione un Municipio</option>
    
                            @foreach ($municipios as $municipio)
                                <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                            @endforeach
    
                        </select>
    
                        <x-jet-input-error for="editForm.ubicacion_desde_id" />
                    </div>
    
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Hasta
                        </x-jet-label>
    
                        <select wire:model="editForm.ubicacion_hasta_id"
                            class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
    
                            <option value="" selected disabled>Seleccione un Municipio</option>
    
                            @foreach ($municipios as $municipio)
                                <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                            @endforeach
    
                        </select>
    
                        <x-jet-input-error for="editForm.ubicacion_hasta_id" />
                    </div>
    
                    {{-- <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Desde
                        </x-jet-label>
    
                        <x-jet-input type="text" wire:model="editForm.ubicacion_desde" class="w-full" />
                        <x-jet-input-error for="editForm.ubicacion_desde" />
    
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Hasta
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.ubicacion_hasta" class="w-full" />
                        <x-jet-input-error for="editForm.ubicacion_hasta" />
                    </div> --}}
    
                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        VÍA PAVIMENTADAS (Km)
                    </p>
    
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Bueno
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.pav_bueno" class="w-full" />
                        <x-jet-input-error for="editForm.pav_bueno" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Regular
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.pav_regular" class="w-full" />
                        <x-jet-input-error for="editForm.pav_regular" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Malo
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.pav_malo" class="w-full" />
                        <x-jet-input-error for="editForm.pav_malo" />
                    </div>
    
                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        VÍA EN AFIRMADO (Km)
                    </p>
    
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Bueno
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.afir_bueno" class="w-full" />
                        <x-jet-input-error for="editForm.afir_bueno" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Regular
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.afir_regular" class="w-full" />
                        <x-jet-input-error for="editForm.afir_regular" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Malo
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.afir_malo" class="w-full" />
                        <x-jet-input-error for="editForm.afir_malo" />
                    </div>
    
                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        VÍA EN TIERRA (Km)
                    </p>
    
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Bueno
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.tierra_bueno" class="w-full" />
                        <x-jet-input-error for="editForm.tierra_bueno" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Regular
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.tierra_regular" class="w-full" />
                        <x-jet-input-error for="editForm.tierra_regular" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Malo
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.tierra_malo" class="w-full" />
                        <x-jet-input-error for="editForm.tierra_malo" />
                    </div>
    
                    <p class="col-span-6 sm:col-span-6 mt-2 text-sm text-gray-800 font-semibold">
                        VÍAS CON MEJORAMIENTO (Km)
                    </p>
    
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Bueno
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.mej_bueno" class="w-full" />
                        <x-jet-input-error for="editForm.mej_bueno" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Regular
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.mej_regular" class="w-full" />
                        <x-jet-input-error for="editForm.mej_regular" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label>
                            Malo
                        </x-jet-label>
                        <x-jet-input type="text" wire:model="editForm.mej_malo" class="w-full" />
                        <x-jet-input-error for="editForm.mej_malo" />
                    </div>  
    
                </x-slot>
                <x-slot name="actions">
                    <x-jet-button>
                        Actualizar
                    </x-jet-button>
                </x-slot>
    
            </x-jet-form-section>
    
        </div>
      </div>

</div>
