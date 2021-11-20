<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z">
                </path>
            </svg>
            <h2 class="ml-4 text-xl text-gray-800 leading-tight uppercase">
               Informes Ejecutivos
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <section class="text-gray-600">
                    <div class="container px-5 py-24 mx-auto">
                      <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                        <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                          <img class="rounded-full  object-cover object-center h-24 w-24" src="{{asset('img/planvial.jpeg')}}" alt="">
                        </div>
                        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                          <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Plan Vial</h2>
                          {{-- <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p> --}}
                         
                          <a href="docs/PVD_CASANARE_2021_2030V1.pdf" download="Plan Vial" class="mt-3 text-indigo-500 inline-flex items-center">Descargar
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                              <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                                    
                      
                      <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                        <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                          <img class="rounded-full h-24 w-24 object-cover object-center" src="{{asset('img/accion.jpeg')}}" alt="">
                        </div>
                        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                          <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Planes de Acción</h2>
                          {{-- <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p> --}}
                          <a class="mt-3 text-indigo-500 inline-flex items-center">Descargar
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                              <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                          </a>
                        </div>
                      </div>                                      
                     
                      <div class="flex items-center lg:w-3/5 mx-auto sm:flex-row flex-col">
                        <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                          <img class="rounded-full h-24 w-24 object-cover object-center" src="{{asset('img/norma.jpeg')}}" alt="">
                        </div>
                        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                          <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Norma y Politica</h2>
                          {{-- <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p> --}}
                          <a class="mt-3 text-indigo-500 inline-flex items-center">Descargar
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                              <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                     
                    </div>
                  </section>
            </div>
        </div>
    </div>
</x-app-layout>
