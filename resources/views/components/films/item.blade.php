<x-layout>

    <div class="relative w-full h-[250px] z-0">
        <img src="https://kifim.b-cdn.net/films/large/2006824.webp" class=" absolute object-cover w-full h-full rounded-lg mb-1"/>
        <div class="absolute w-full bg-red-700 h-full content-[' '] opacity-80"></div>
    </div>

    <div class="relative flex mb-8 gap-6 justify-end -mt-[250px] z-1 p-4">
        <div class="w-1/4 prose text-center">
            <img src="https://kifim.b-cdn.net/films/large/2006824.webp?width=320" class="w-full  rounded-lg mb-6"/>
            <x-parts.btn-save/>
        </div>
        <div class="w-3/4">
            <div class="prose m-6 h-[250px]">
                <h1 class="text-white pt-2">
                    Voleuses
                    <span class="block font-thin mt-3 text-sm">2023 - Drame, action</span>
                </h1>
                <div class="text-white">
                    <div>IMDB <span class="ml-3 font-thin">8.1</span></div>
                    <span class="block tracking-widest">★★★★☆</span>
                </div>
            </div>
            <div class="prose max-w-full m-6">
                <h2 class="text-white font-medium text-sm">Synopsys</h2>
                <div class="text-sm">
                    Un an après qu’un Black Friday a viré au chaos, un mystérieux tueur s’inspire de la fête traditionnelle de Thanksgiving et terrorise la ville de Plymouth (Massachussetts), berceau de la célèbre fête. Alors que les habitants sont éliminés les uns après les autres, ces meurtres qui semblaient aléatoires, révèlent un plan plus vaste et sinistre. Les habitants découvriront-ils le tueur et survivront-ils à la fête… ou deviendront-ils les invités de son dîner de Thanksgiving complètement tordu ?
                </div>

                <h2 class="text-white font-medium text-sm mt-6">A propos de Voleuses</h2>
                <div class="flex gap-6 text-sm">
                    <div class="w-1/2 flex flex-wrap">
                        <div class="w-1/2 font-bold">Sortie</div>
                        <div class="w-1/2 text-right">13/03/2024</div>
                        <div class="w-1/2 font-bold">Titre original</div>
                        <div class="w-1/2 text-right">Heureux Gagnants</div>
                        <div class="w-1/2 font-bold">Genres</div>
                        <div class="w-1/2 text-right">Comédie</div>
                        <div class="w-1/2 font-bold">IMDB ID</div>
                        <div class="w-1/2 text-right">#tt28444113</div>
                    </div>
                    <div class="w-1/2 flex flex-wrap gap-y-2">
                        <div class="w-1/2 font-bold">Réalisateur</div>
                        <div class="w-1/2 text-right">
                            Romain Choay<br />
                            Maxime Govare
                        </div>
                        <div class="w-1/2 font-bold">Producteurs</div>
                        <div class="w-1/2 text-right">
                            Romain Choay<br />
                            Maxime Govare
                        </div>
                        <div class="w-1/2 font-bold">Scénaristes</div>
                        <div class="w-1/2 text-right">
                            Romain Choay<br />
                            Maxime Govare
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-white font-medium text-sm mt-6 mb-3">Bandes annonces de Voleuses</h2>
    <section class="mb-8 flex gap-6">
        <div class="w-2/3 ">
            <img src="https://img.youtube.com/vi/JC4I_mxYL6U/mqdefault.jpg" class="w-full rounded-xl object-cover">
        </div>
        <div class="w-1/3">
            <div class="mb-3">
                <img src="https://img.youtube.com/vi/JC4I_mxYL6U/mqdefault.jpg" class="rounded-xl object-cover w-full">
            </div>
            <div>
                <img src="https://img.youtube.com/vi/JC4I_mxYL6U/mqdefault.jpg" class="rounded-xl object-cover w-full">
            </div>
        </div>
    </section>

    <h2 class="text-white font-medium text-sm mt-6 mb-3">Dans la collection</h2>
    <section class="mb-8 flex flex-wrap">
        @for ($i = 0; $i < 6; $i++)
            <x-parts.item-list/>
        @endfor
    </section>

    <h2 class="text-white font-medium text-sm mt-6 mb-3">Films similaires</h2>
    <section class="mb-8 flex flex-wrap">
        @for ($i = 0; $i < 6; $i++)
            <x-parts.item-list/>
        @endfor
    </section>

</x-layout>
