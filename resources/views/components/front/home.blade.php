<x-front.layout>
    <x-slot name="frontContent">
        <div class="flex mb-16 relative h-[700px]">
            <img src="/imgs/movies-posters-collage.jpg" class="object-cover w-full rounded-r-xl absolute z-0" />
            <div class="basis-1/2 z-10 self-center">

                <div class="prose m-10">
                    <h1>
                        <small class="block text-sm">Films - Séries TV - Jeux de société - livres</small>
                        Gérez vos collections
                    </h1>
                    <h2>Découvrir - Partager - Recommander</h2>
                    <p>
                        Kamelo vous permet de découvrir, partager, noter, critiquer et recommander ce que vous appréciez.<br />
                        Livres, films, jeux de société ou encore série TV : donner votre avis, découvrez ce que regarde vos contacts, partagez vos découvertes.
                    </p>
                    <p>
                        Kamelo.fr est l'instance française du réseau décentralisé et fédéré Kamelo et à ce titre fait partie du Fédiverse.
                    </p>

                    <a href="{{ route('signin') }}" class="btn btn-secondary">Créer un compte</a>
                </div>
            </div>
        </div>

        <section class=" mb-16">
            <div class="prose mb-4"><h2>Films populaires</h2></div>
            <section class="items-list">
                @for ($i = 0; $i < 12; $i++)
                    <x-parts.item-list/>
                @endfor
            </section>
        </section>

        <section  class="mb-16">
            <div class="prose mb-4"><h2>Films cultes</h2></div>
            <section class="items-list">
                @for ($i = 0; $i < 12; $i++)
                    <x-parts.item-list/>
                @endfor
            </section>
        </section>

        <section class="flex justify-center">
            <div class="w-1/2 prose">
                <h2>Kamelo.social, un serveur décentralisé de Kamelo</h2>
                <p>
                    Kamelo est un logiciel décentralisé, fédéré, open-source de gestion de collections.<br />
                    Kamelo.social en est l'instance principale hébergée et gérée par le créateur de Kamelo.
                </p>
                <p>
                    Kamelo vous permet de gérer et organiser vos collections : films, séries TV, livres et jeux de société.<br />
                    Avec un compte Kamelo vous pouvez indiquer pour chaque élément (film, série Tv, jeu, bande dessinées, manga, livre ect)
                    si vous l'avez, si vous souhaitez le lire ou le voir, lui mettre une note, le mettre dans des listes personnelles etc...<br />
                </p>
                <p>
                    Envie de gérez d'autres types de collections ? Jeux-vidéos, musique, ou autres ?<br />
                    Kamelo est un logiciel libre, vous pouvez y contribuer en ajoutant votre collection, en nous aidant à l'améliorer, en proposant des corrections,
                    modifications, ajouts...<br />
                    Vous pouvez aussi le télécharger et l'installer sur votre propre serveur, pour vous, vos proches ou pour tous...
                </p>
            </div>

        </section>

    </x-slot>
</x-front.layout>
