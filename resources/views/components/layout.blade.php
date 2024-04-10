<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>
<body class="font-montserrat text-sm bg-white dark:bg-zinc-900">

    <div class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
        <!-- Left Sidebar -->
        <aside class=" w-1/6 py-10 pl-10  min-w-min  border-r border-gray-300 dark:border-zinc-700  hidden md:block ">

            <a href="/" class=" font-bold text-lg flex items-center gap-x-3 self-center">
                <img src="/imgs/kamelo-48.png" alt="Kamelo logo">
                <div class="tracking-wide dark:text-white">Kamelo<span class="text-red-600">.</span></div>
            </a>

            <!-- Menu -->
            <div class="mt-12 flex flex-col gap-y-4 text-gray-500 fill-gray-500 text-sm">
                <ul class="menu w-56">
                    <li>
                        <details>
                            @if (Auth::check())
                                <summary>
                                    <i data-lucide="User" class="mr-2"></i>Votre compte
                                </summary>
                                <ul>
                                    <li><a href="{{ route('user-home') }}">Flux</a></li>
                                    <li><a>Préférences</a></li>
                                </ul>
                            @else
                                <summary>
                                    <i data-lucide="User" class="mr-2"></i>Membre
                                </summary>
                                <ul>
                                    <li><a href="{{ route('signin') }}">Connexion</a></li>
                                    <li><a href="{{ route('signup') }}">Inscription</a></li>
                                </ul>
                            @endif

                        </details>
                    </li>
                    <li>
                        <details >
                            <summary>
                                <i data-lucide="Film" class="mr-2"></i>Films
                            </summary>
                            <ul>
                                <li><a href="{{ route('films-popular') }}">Populaires</a></li>
                                <li><a href="{{ route('user-home') }}">Cultes</a></li>
                            </ul>
                            @if (Auth::check())
                            <div class="divider my-1">Vos films</div>
                            <ul>
                                <li><a href="{{ route('user-home') }}">Recommandés</a></li>
                                <li><a href="{{ route('user-home') }}">Favoris</a></li>
                                <li><a href="{{ route('user-home') }}">A voir</a></li>
                                <li><a href="{{ route('user-home') }}">Aimés</a></li>
                                <li><a href="{{ route('user-home') }}">Vus</a></li>
                            </ul>
                            @endif
                        </details>
                    </li>
                    <li>
                        <details >
                            <summary>
                                <i data-lucide="Tv2" class="mr-2"></i>Séries TV
                            </summary>
                            <ul>
                                <li><a href="{{ route('films-popular') }}">Populaires</a></li>
                                <li><a href="{{ route('user-home') }}">Cultes</a></li>
                            </ul>
                            @if (Auth::check())
                            <div class="divider my-1">Vos films</div>
                            <ul>
                                <li><a href="{{ route('user-home') }}">Recommandées</a></li>
                                <li><a href="{{ route('user-home') }}">Favorites</a></li>
                                <li><a href="{{ route('user-home') }}">A voir</a></li>
                                <li><a href="{{ route('user-home') }}">Aimées</a></li>
                                <li><a href="{{ route('user-home') }}">Vues</a></li>
                            </ul>
                            @endif
                        </details>
                    </li>
<!--                    <li>
                        <details >
                            <summary>
                                <i data-lucide="Dices" class="mr-2"></i>Jeux de société
                            </summary>
                            <ul>
                                <li><a>Accueil</a></li>
                                <li><a>Préférences</a></li>
                            </ul>
                            <div class="divider my-1"></div>
                            <ul>
                                <li><a>Accueil</a></li>
                                <li><a>Préférences</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details >
                            <summary>
                                <i data-lucide="Book" class="mr-2"></i>Livres
                            </summary>
                            <ul>
                                <li><a>Accueil</a></li>
                                <li><a>Préférences</a></li>
                            </ul>
                        </details>
                    </li>-->
                </ul>
            </div><!-- /Menu -->

        </aside><!-- /Left Sidebar -->

        <main class=" flex-1 py-10  px-5 sm:px-10 ">

            <header class=" font-bold text-lg flex justify-between items-center  gap-x-3 md:hidden mb-3">
                    <span class="mr-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-700 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
                          </svg>
                    </span>
                <a class="flex" href="/">
                    <svg class="h-8 w-8 fill-red-600 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z"></path>
                    </svg>
                    <div class="tracking-wide dark:text-white flex-1 ml-2">Kamelo<span class="text-red-600">.</span></div>
                </a>
            </header>
            <header class="mb-8 text-white">
                <div class="flex justify-between">
                    <div class="w-1/3">
                        <label class="input input-bordered flex items-center gap-2">
                            <i class="h-4 w-4" data-lucide="search"></i>
                            <input type="text" class="grow border-0" placeholder="Search..." />
                            <kbd class="kbd kbd-sm">⌘</kbd>
                            <kbd class="kbd kbd-sm">K</kbd>
                        </label>
                    </div>
                    <div class="w-1/3 justify-end flex">
                        @if (Auth::check())
                        <div class="dropdown self-center">
                            <div tabindex="0" role="button" class="btn btn-sm">
                                <div class="avatar">
                                    <div class="w-6 rounded-full">
                                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                    </div>
                                </div>
                                User Login
                            </div>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a href="/user">
                                        <i class="mr-2" data-lucide="Home"></i>
                                        Accueil
                                    </a>
                                </li>
                                <li><a href="/user/settings">
                                        <i class="mr-2" data-lucide="Cog"></i>
                                        Preferences
                                    </a>
                                </li>
                                <li><a>
                                        <i class="mr-2" data-lucide="Log-out"></i>
                                        Déconnexion
                                    </a>
                                </li>
                            </ul>
                        </div>
                        @else
                            <a class="mr-2" href="{{ route('signin') }}">Connexion</a><a class="ml-2" href="{{ route('signup') }}">Inscription</a>
                        @endif
                    </div>
                </div>

            </header>

            <div id="app-content">
                {{ $slot }}
            </div>

            <footer class="text-zinc-600 text-center mt-16">
                Films / Livres / Séries Tv / Jeux de société
            </footer>
        </main>
    </div>
    <x-parts.modal-save/>

</body>

@vite('resources/js/app.js')
</html>
