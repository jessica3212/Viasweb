<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <img class="h-20" src="{{ asset('img/Secretarias 2017-05-obras.jpg') }}">
            <img class="h-20 ml-6" src="{{ asset('img/logo2-cas.png') }}">
            <img class="h-20 ml-6" src="{{ asset('img/significado-del-escudo-de-colombia.png') }}">
            <h1 class=" ml-6 text-lg text-gray-500 leading-7 font-semibold uppercase">Secretaria de Infrastructura</h1>

            <div class=" ml-auto">
                <fieldset class="w-full space-y-1 text-black ">
                    <label for="Search" class="hidden">Buscar</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <button type="button" title="search" class="p-1 focus:outline-none focus:ring">
                                <svg fill="currentColor" viewBox="0 0 512 512" class="w-4 h-4 text-gray-600">
                                    <path d="M479.6,399.716l-81.084-81.084-62.368-25.767A175.014,175.014,0,0,0,368,192c0-97.047-78.953-176-176-176S16,94.953,16,192,94.953,368,192,368a175.034,175.034,0,0,0,101.619-32.377l25.7,62.2L400.4,478.911a56,56,0,1,0,79.2-79.195ZM48,192c0-79.4,64.6-144,144-144s144,64.6,144,144S271.4,336,192,336,48,271.4,48,192ZM456.971,456.284a24.028,24.028,0,0,1-33.942,0l-76.572-76.572-23.894-57.835L380.4,345.771l76.573,76.572A24.028,24.028,0,0,1,456.971,456.284Z"></path>
                                </svg>
                            </button>
                        </span>
                        <input type="search" name="Search" placeholder="Buscar..." class="w-32 py-2 pl-10 text-sm rounded-md sm:w-auto focus:outline-none bg-gray-100 text-gray-500 focus:bg-gray-200 focus:border-indigo-400">
                    </div>
                </fieldset>
            </div>
        </div>

       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                
                <div class="space-y-12 dark:bg-coolGray-800 dark:text-coolGray-100">

                    <section>
                        <img class="shadow-xl" src="{{ asset('img/Imagen_inicio.jpg') }}" alt="">
                    </section>
        
                    <section>
                        <div class="container max-w-6xl p-6 space-y-6 sm:space-y-12">
                           
                            <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                                <a href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-coolGray-900">
                                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-coolGray-500" src="{{ asset('img/Oscar Eduardo.jpg') }}">
                                    <div class="p-6 space-y-2">
                                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Oscar Eduardo García</h3>
                                        <span class="text-xs dark:text-coolGray-400">Despacho secretaria de infraestructura</span>
                                        <p class="text-justify">Oriundo de Villanueva, ingeniero sanitario y ambiental de la universidad de Boyacá, especialista en  gerencia de proyectos de la universidad de Boyacá. Fue Director de los sistemas de acueducto, alcantarillado y aseo de la empresa de servicios públicos de Villanueva ESPAVI SA ESP, Gerente general de la empresa CENTALS SAS ESP, Subgerente técnico y operativo de la empresa departamental de aguas Acuatodos y coordinador y supervisor de proyectos de Construinter sas.</p>
                                    </div>
                                </a>
                                <a href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-coolGray-900">
                                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-coolGray-500" src="{{ asset('img/zulma.jpg') }}">
                                    <div class="p-6 space-y-2">
                                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Sulma Oriana López Castellanos</h3>
                                        <span class="text-xs dark:text-coolGray-400">Dirección de programación</span>
                                        <p class="text-justify">Ingeniera Civil egresada de la Universidad Pedagógica y Tecnológica de Colombia, Especialista en Gerencia de Empresas de la Universidad del Rosario,
                                            Con 12 años de experiencias en instituciones públicas y privadas,  tiene a su cargo dirigir la Oficina de Programación de la Secretaria de Obras Públicas y Transportes de Casanare; cuya labor es   contribuir con su experiencia y profesionalismo en fortalecer técnicamente las iniciativas de inversión presentadas por los municipios y comunidades del Departamento de Casanare, en  agilizar los procesos de viabilización de proyectos presentados en ésta dependencia y en atender las solicitudes de las comunidades de manera oportuna y eficaz.
                                            </p>
                                    </div>
                                </a>
                                <a href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-coolGray-900">
                                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-coolGray-500" src="{{ asset('img/BRENDA.jpeg') }}">
                                    <div class="p-6 space-y-2">
                                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Brenda Roraima Barrera</h3>
                                        <span class="text-xs dark:text-coolGray-400">Dirección de construcciones</span>
                                        <p class="text-justify">Egresada de la Universidad Agraria de Colombia UNIAGRARIA, especialista en Gerencia de Proyectos de la Fundación Universitaria de Boyacá UNIBOYACA, con más de 8 años de experiencia en entidades públicas y privadas.</p>
                                    </div>
                                </a>
                                <a href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-coolGray-900 hidden sm:block">
                                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-coolGray-500" src="https://source.unsplash.com/random/484x364">
                                    <div class="p-6 space-y-2">
                                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
                                        <span class="text-xs dark:text-coolGray-400">January 24, 2021</span>
                                        <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
                                    </div>
                                </a>
                                <a href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-coolGray-900 hidden sm:block">
                                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-coolGray-500" src="https://source.unsplash.com/random/485x365">
                                    <div class="p-6 space-y-2">
                                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
                                        <span class="text-xs dark:text-coolGray-400">January 25, 2021</span>
                                        <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
                                    </div>
                                </a>
                                <a href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-coolGray-900 hidden sm:block">
                                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-coolGray-500" src="https://source.unsplash.com/random/486x366">
                                    <div class="p-6 space-y-2">
                                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
                                        <span class="text-xs dark:text-coolGray-400">January 26, 2021</span>
                                        <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
                                    </div>
                                </a><!---->
                            </div>
                            <div class="flex justify-center">
                                <button class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-coolGray-900 dark:text-coolGray-400">Load more posts...</button>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container px-6 py-12 mx-auto">
                            <div class="grid items-center gap-4 xl:grid-cols-5">
                                <div class="max-w-2xl mx-auto my-8 space-y-4 text-center xl:col-span-2 xl:text-left">
                                    <h2 class="text-4xl font-bold">Duo assum utroque appetere an</h2>
                                    <p class="dark:text-coolGray-400">Pri ex magna scaevola moderatius. Nullam accommodare no vix, est ei diceret alienum, et sit cetero malorum. Et sea iudico consequat, est sanctus adipisci ex.</p>
                                </div>
                                <div class="p-6 xl:col-span-3">
                                    <div class="grid gap-4 md:grid-cols-2">
                                        <div class="grid content-center gap-4">
                                            <div class="p-6 rounded shadow-md dark:bg-coolGray-900">
                                                <p>An audire commodo habemus cum. Ne sed corrumpit repudiandae. Tota aliquip democritum pro in, nec democritum intellegam ne. Propriae volutpat dissentiet ea sit, nec at lorem inani tritani, an ius populo perfecto vituperatoribus. Eu cum case modus salutandi, ut eum vocent sensibus reprehendunt.</p>
                                                <div class="flex items-center mt-4 space-x-4">
                                                    <img src="https://source.unsplash.com/51x51/?portrait" alt="" class="w-12 h-12 bg-center bg-cover rounded-full dark:bg-coolGray-500">
                                                    <div>
                                                        <p class="text-lg font-semibold">Leroy Jenkins</p>
                                                        <p class="text-sm dark:text-coolGray-400">CTO of Company Co.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-6 rounded shadow-md dark:bg-coolGray-900">
                                                <p>Sit wisi sapientem ut, pri civibus temporibus voluptatibus et, ius cu hinc fabulas. Nam meliore minimum et, regione convenire cum id. Ex pro eros mucius consectetuer, pro magna nulla nonumy ne, eam putent iudicabit consulatu cu.</p>
                                                <div class="flex items-center mt-4 space-x-4">
                                                    <img src="https://source.unsplash.com/52x52/?portrait" alt="" class="w-12 h-12 bg-center bg-cover rounded-full dark:bg-coolGray-500">
                                                    <div>
                                                        <p class="text-lg font-semibold">Leroy Jenkins</p>
                                                        <p class="text-sm dark:text-coolGray-400">CTO of Company Co.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid content-center gap-4">
                                            <div class="p-6 rounded shadow-md dark:bg-coolGray-900">
                                                <p>Putant omnium elaboraret per ut. Id dicta tritani nominavi quo, mea id justo errem elaboraret. Agam mollis scripserit ea his, ut nec postea verear persecuti. Ea noster senserit eam, ferri omittantur ei nec. Id mel solet libris efficiantur, commune explicari et eos. Case movet ad est, sed tota vocent appetere ea.</p>
                                                <div class="flex items-center mt-4 space-x-4">
                                                    <img src="https://source.unsplash.com/53x53/?portrait" alt="" class="w-12 h-12 bg-center bg-cover rounded-full dark:bg-coolGray-500">
                                                    <div>
                                                        <p class="text-lg font-semibold">Leroy Jenkins</p>
                                                        <p class="text-sm dark:text-coolGray-400">CTO of Company Co.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-6 rounded shadow-md dark:bg-coolGray-900">
                                                <p>Te omnes virtute volutpat sed. Ei esse eros interesset vel, ei populo denique ocurreret vix, eu cum pertinax mandamus vituperatoribus. Solum nihil luptatum per ex, ei amet viderer eos. Ea illum labitur mnesarchum pro. Eius meis salutandi ei nam, alterum expetenda et nec. Expetenda intellegat at eum, per mazim sanctus honestatis ad. Ei noluisse invenire vix. Te ancillae patrioque qui, probo bonorum vivendum ex vim.</p>
                                                <div class="flex items-center mt-4 space-x-4">
                                                    <img src="https://source.unsplash.com/54x54/?portrait" alt="" class="w-12 h-12 bg-center bg-cover rounded-full dark:bg-coolGray-500">
                                                    <div>
                                                        <p class="text-lg font-semibold">Leroy Jenkins</p>
                                                        <p class="text-sm dark:text-coolGray-400">CTO of Company Co.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                   
                   
                </div>



            </div>
        </div>
    </div>
</x-app-layout>

