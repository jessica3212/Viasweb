<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <img class="h-20" src="{{ asset('img/logo_secretaria.png') }}">
            <img class="h-20 ml-6" src="{{ asset('img/map_casanare_color_shadow.png') }}">
            <h1 class=" ml-6 text-lg text-gray-500 leading-7 uppercase">Secretaria de Infrastructura</h1>

            <div class=" ml-auto">
                <fieldset class="w-full space-y-1 text-black ">
                    <label for="Search" class="hidden">Buscar</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <button type="button" title="search" class="p-1 focus:outline-none focus:ring">
                                <svg fill="currentColor" viewBox="0 0 512 512" class="w-4 h-4 text-gray-600">
                                    <path
                                        d="M479.6,399.716l-81.084-81.084-62.368-25.767A175.014,175.014,0,0,0,368,192c0-97.047-78.953-176-176-176S16,94.953,16,192,94.953,368,192,368a175.034,175.034,0,0,0,101.619-32.377l25.7,62.2L400.4,478.911a56,56,0,1,0,79.2-79.195ZM48,192c0-79.4,64.6-144,144-144s144,64.6,144,144S271.4,336,192,336,48,271.4,48,192ZM456.971,456.284a24.028,24.028,0,0,1-33.942,0l-76.572-76.572-23.894-57.835L380.4,345.771l76.573,76.572A24.028,24.028,0,0,1,456.971,456.284Z">
                                    </path>
                                </svg>
                            </button>
                        </span>
                        <input type="search" name="Search" placeholder="Buscar..."
                            class="w-32 py-2 pl-10 text-sm rounded-md sm:w-auto focus:outline-none bg-gray-100 text-gray-500 focus:bg-gray-200 focus:border-indigo-400">
                    </div>
                </fieldset>
            </div>
        </div>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <div class="space-y-12">

                    <section>
                        <img class="shadow-xl" src="{{ asset('img/Imagen_inicio.jpg') }}" alt="">
                    </section>

                    <section>
                        <div class="p-6 space-y-6 sm:space-y-6">

                            <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-3 lg:grid-cols-3">
                                <div class="max-w-sm mx-auto">
                                    <img role="presentation" class="object-cover w-full rounded h-44" src="{{ asset('img/Oscar Eduardo.jpg') }}">
                                    <div class="py-6 space-y-2">
                                        <h3 class="text-xl font-semibold">Oscar Eduardo García</h3>
                                        <span class="text-xs">Despacho secretaria de infraestructura</span>

                                            <div x-data="{ expanded: false }">
                                                <button @click="expanded = ! expanded"><span class="py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">Ver mas...</span></button>
                                             
                                                <p class="mt-4 text-justify" x-show="expanded" x-collapse.duration.500ms>
                                                Oriundo de Villanueva, ingeniero sanitario y ambiental
                                                de la universidad de Boyacá, especialista en gerencia de proyectos de la
                                                universidad de Boyacá. Fue Director de los sistemas de acueducto,
                                                alcantarillado y aseo de la empresa de servicios públicos de Villanueva
                                                ESPAVI SA ESP, Gerente general de la empresa CENTALS SAS ESP, Subgerente
                                                técnico y operativo de la empresa departamental de aguas Acuatodos y
                                                coordinador y supervisor de proyectos de Construinter sas.</p>
                                            </div>
                                    </div>
                                </div>
                                <div class="max-w-sm mx-auto">
                                    <img role="presentation" class="object-cover w-full rounded h-44 " src="{{ asset('img/zulma.jpg') }}">
                                    <div class="py-6 space-y-2">
                                        <h3 class="text-xl font-semibold">Sulma Oriana López Castellanos</h3>
                                        <span class="text-xs">Dirección de programación</span>
                                        
                                        <div x-data="{ expanded: false }">
                                            <button @click="expanded = ! expanded"><span class="py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">Ver mas...</span></button>
                                         
                                            <p class="mt-4 text-justify" x-show="expanded" x-collapse.duration.500ms>
                                                Ingeniera Civil egresada de la Universidad Pedagógica
                                                y Tecnológica de Colombia, Especialista en Gerencia de Empresas de la
                                                Universidad del Rosario,
                                                Con 12 años de experiencias en instituciones públicas y privadas, tiene a su
                                                cargo dirigir la Oficina de Programación de la Secretaria de Obras Públicas
                                                y Transportes de Casanare; cuya labor es contribuir con su experiencia y
                                                profesionalismo en fortalecer técnicamente las iniciativas de inversión
                                                presentadas por los municipios y comunidades del Departamento de Casanare,
                                                en agilizar los procesos de viabilización de proyectos presentados en ésta
                                                dependencia y en atender las solicitudes de las comunidades de manera
                                                oportuna y eficaz.</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="max-w-sm mx-auto group">
                                    <img role="presentation"
                                        class="object-cover w-full rounded h-44 "
                                        src="{{ asset('img/BRENDA.jpeg') }}">
                                    <div class="p-6 space-y-2">
                                        <h3 class="text-xl font-semibold">
                                            Brenda Roraima Barrera</h3>
                                        <span class="text-xs dark:text-coolGray-400">Dirección de construcciones</span>
                                        
                                        <div x-data="{ expanded: false }">
                                            <button @click="expanded = ! expanded"><span class="py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest mb-2">Ver mas ...</span></button>
                                         
                                            <p class="text-justify" x-show="expanded" x-collapse.duration.500ms>
                                                Egresada de la Universidad Agraria de Colombia
                                            UNIAGRARIA, especialista en Gerencia de Proyectos de la Fundación
                                            Universitaria de Boyacá UNIBOYACA, con más de 8 años de experiencia en
                                            entidades públicas y privadas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="max-w-sm mx-auto group">
                                    <img role="presentation"
                                        class="object-cover w-full rounded h-44 "
                                        src="{{ asset('img/jose.jpeg') }}">
                                    <div class="p-6 space-y-2">
                                        <h3 class="text-xl font-semibold">
                                            Jose Vidal Avendaño Sepulveda</h3>
                                        <span class="text-xs">Tecnico Director</span>

                                          <div x-data="{ expanded: false }">
                                            <button @click="expanded = ! expanded"><span class="py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest mb-2">Ver mas ...</span></button>
                                         
                                            <p class="text-justify" x-show="expanded" x-collapse.duration.500ms>
                                            
                                                Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has
                                            tantas percipit perfecto. At per tempor albucius perfecto, ei probatus
                                            consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="max-w-sm mx-auto group">
                                    <img role="presentation"
                                        class="object-cover w-full rounded h-44 "
                                        src="{{ asset('img/Hernan.jpg') }}">
                                    <div class="p-6 space-y-2">
                                        <h3 class="text-xl font-semibold">
                                            Hernán Alfonso Vargas Ovejero</h3>
                                        <span class="text-xs">Ingeniero en Transportes y Vías</span>

                                          <div x-data="{ expanded: false }">
                                            <button @click="expanded = ! expanded"><span class="py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest mb-2">Ver mas ...</span></button>
                                         
                                            <p class="text-justify" x-show="expanded" x-collapse.duration.500ms>
                                            
                                                Aguazuleño, Ingeniero en Transportes y Vías de la UPTC, Ingeniero Civil de la Universidad de Costa Rica, especialista en Gerencia de Proyectos de la Universidad de Boyacá. Su mayor experiencia profesional ha sido en el sector privado, como gerente en empresa de Construcción, desarrollando proyectos urbanísticos. En el sector público se desempeñó como secretario de infraestructura del municipio de Aguazul, y como profesional de apoyo en el Departamento Administrativo de Planeación del departamento de Casanare.</p>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </section>

                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container px-5 py-12 mx-auto">
                          <div class="flex flex-wrap -m-12">
                            <div class="p-12 md:w-1/2 flex flex-col items-start">
                              <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest mb-2">FACEBOOK</span>

                              <iframe src="//www.facebook.com/plugins/page.php?href=facebook.com/InviasOficial&amp;width=700&amp;height=1000&amp;adapt_container_width=true&amp;show_facepile=false&amp;show_posts=true&amp;hide_cover=true&amp;colorscheme=light&amp;" scrolling="no" style="overflow:hidden; width:700px; height:1000px;"></iframe>
                            
                              
                            </div>
                            <div class="p-12 md:w-1/2 flex flex-col items-start">
                              <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest mb-2">TWITTER</span>
                             
                              <a class="twitter-timeline" data-lang="es" data-height="1000" href="https://twitter.com/InviasOficial?ref_src=twsrc%5Etfw">Tweets by InviasOficial</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                          </div>
                        </div>
                      </section>



                </div>



            </div>
        </div>
    </div>
</x-app-layout>