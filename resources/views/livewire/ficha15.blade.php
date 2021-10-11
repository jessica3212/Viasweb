<div>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-jet-form-section submit="save" class="mb-6">
                <x-slot name="title">
                    Vias en Zona de Riesgo
                </x-slot>

                <x-slot name="description">
                    Complete la información necesaria para asignar una ficha a una Via.
                </x-slot>

                <x-slot name="form">

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

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Codigo Via
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                        <x-jet-input-error for="createForm.nombre_via" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Nombre Via
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                        <x-jet-input-error for="createForm.nombre_via" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Longitud Via
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                        <x-jet-input-error for="createForm.nombre_via" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label>
                            Pasa por Zona de Riesgo
                        </x-jet-label>
                        <x-jet-input type="radio" name="type" class="my-3" />
                        Si
                        <x-jet-input type="radio" name="type" class="my-3 ml-6" />
                        No
                    </div>

                    <div class="col-span-6 sm:col-span-3 capitalize">
                        <x-jet-label>
                            LONGITUD APROXIMADA DE LA VÍA QUE CRUZA LA ZONA DE RIESGO(km) 
                        </x-jet-label>
                        <x-jet-input type="text" class="w-full" />
                        <x-jet-input-error for="createForm.nombre_via" />
                    </div>

                    <div class="col-span-6 sm:col-span-6 capitalize">
                        <x-jet-label>
                            REQUIERE FACTOR DE REAJUSTE
                        </x-jet-label>
                        <x-jet-input type="radio" name="type" class="my-3" />
                        Si
                        <x-jet-input type="radio" name="type" class="my-3 ml-6" />
                        No
                    </div>                   

                </x-slot>

                <x-slot name="actions">
                    <x-jet-button>
                        Agregar
                    </x-jet-button>
                </x-slot>


            </x-jet-form-section>

        </div>
    </div>
    
</div>
