<x-layout>

    <x-slot name="nav">
        <div class="text-gray-400/70 flex  font-medium uppercase">
            <i data-lucide="film" class="mr-2"></i>Films
        </div>
        <a
            href="{{ route('films-popular') }}"
            class="flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white">
            <span>Populaires</span>
        </a>
        <a
            href="{{ route('films-popular') }}"
            class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white ">
            <span>Classiques</span>
        </a>
        <a
            href="{{ route('films-popular') }}"
            class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white ">
            <span>Recherche avancée</span>
        </a>
        <div class="divider mr-4">Vos films</div>
        <a
            href="{{ route('films-popular') }}"class="flex items-center space-x-2 py-1 dark:text-white  font-semibold  border-r-4 border-r-red-600 pr-20 ">
            <span>Recommandés</span>
        </a>
        <a
            href="{{ route('films-popular') }}"
            class="flex items-center space-x-2 py-1 group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white">
            <span>A voir</span>
        </a>
        <a
            href="{{ route('films-popular') }}"
            class="flex items-center space-x-2 py-1 group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white">
            <span>Favoris</span>
        </a>
        <a
            href="{{ route('films-popular') }}"
            class="flex items-center space-x-2 py-1 group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white">
            <span>Vus</span>
        </a>
    </x-slot>

    <div class="relative w-full h-[150px] z-0">
        <img src="https://kifim.b-cdn.net/films/large/2006824.webp" class=" absolute object-cover w-full h-full rounded-lg mb-1"/>
        <div class="absolute w-full bg-red-700 h-full content-[' '] opacity-80"></div>
    </div>

    <div class="relative flex mb-10 gap-6 -mt-[150px] z-1 p-4">
            <div class="prose m-3">
                <h1 class="text-white pt-2">
                    Films populaires
                    <span class="block font-thin mt-3 text-sm">2023 - Drame, action</span>
                </h1>
            </div>
    </div>

    <section class="flex mb-10 gap-3">
        <div class="w-1/5">
            <input type="text" placeholder="Dans le titre" class="input input-bordered w-full max-w-xs " />
        </div>
        <div class="w-1/5">
            <select class="select select-bordered w-full max-w-xs">
                <option disabled selected>Trier par</option>
                <option>Han Solo</option>
                <option>Greedo</option>
            </select>
        </div>
        <div class="w-1/5">
            <select class="select select-bordered w-full max-w-xs">
                <option disabled selected>Genres</option>
                <option>Han Solo</option>
                <option>Greedo</option>
            </select>
        </div>
        <div class="w-1/5">
            <select class="select select-bordered w-full max-w-xs">
                <option disabled selected>Note moyene</option>
                <option>Han Solo</option>
                <option>Greedo</option>
            </select>
        </div>
        <div class="w-1/5">
            <select class="select select-bordered w-full max-w-xs">
                <option disabled selected>Année de sortie</option>
                <option>Han Solo</option>
                <option>Greedo</option>
            </select>
        </div>
    </section>

    <section class="items-list">
        @for ($i = 0; $i < 100; $i++)
            <x-parts.item-list/>
        @endfor
    </section>

</x-layout>


