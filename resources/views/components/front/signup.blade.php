<x-front.layout>
    <x-slot name="frontContent">
        <section  class="mb-16 h-screen max-h-[900px] flex justify-center">
            <div class="w-1/3 text-center self-center">
                <div class="prose mb-6"><h1>Commencez à gérer vos collections</h1></div>
                <a href="" class="w-full btn btn-info">Créer un compte via Mastodon</a>
                <div class="divider my-10">Ou</div>
                <h2 class="mb-6">Créez un compte avec votre email</h2>
                <form action="{{ route('user-register') }}" method="post">
                    @csrf
                    <label class="form-control w-full mb-6 hidden">
                        <div class="label">
                            <span class="label-text">Votre nom ?</span>
                        </div>
                        <input name="fullname" type="text" placeholder="Ne remplissez pas ce champ" class="input input-bordered w-full" />
                    </label>
                    <label class="form-control w-full mb-6">
                        <div class="label">
                            <span class="label-text">Votre email ?</span>
                        </div>
                        <input name="email" type="text" placeholder="votre@email.fr" class="input input-bordered w-full" />
                    </label>
                    <label class="form-control w-full mb-6">
                        <div class="label">
                            <span class="label-text">Votre pseudonyme ?</span>
                        </div>
                        <input name="name" type="text" placeholder="Votre pseudo" class="input input-bordered w-full" />
                    </label>
                    <label class="form-control w-full mb-6">
                        <div class="label">
                            <span class="label-text">Votre mot de passe ?</span>
                        </div>
                        <input name="password" type="password" placeholder="Soyez original" class="input input-bordered w-full" />
                    </label>
                    <label class="form-control w-full mb-6">
                        <div class="label">
                            <span class="label-text">Confirmation du mot de passe ?</span>
                        </div>
                        <input name="password_confirmation" type="password" placeholder="Répétez votre mot de passe" class="input input-bordered w-full" />
                    </label>
                    <button type="submit" class="btn btn-success mb-6 w-full">Créer mon compte</button>
                </form>
                Vous avez déjà un compte ? <a href="{{ route('login') }}" class="font-bold" >Se connecter</a>
            </div>
        </section>
    </x-slot>
</x-front.layout>
