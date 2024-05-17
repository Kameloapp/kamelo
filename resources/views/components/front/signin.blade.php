<x-front.layout>
    <x-slot name="frontContent">
        <section  class="mb-16 h-screen max-h-[900px] flex justify-center">
            <div class="w-1/3 text-center self-center">
                <div class="prose mb-6"><h1>Sign In</h1></div>
                <a href="" class="w-full btn btn-info">Sign in with Mastodon</a>
                <div class="divider my-10">Or</div>
                <h2 class="mb-6">Sign in with email and password</h2>
                <form action="{{ route('user-authenticate') }}" method="post">
                    @csrf
                    <label class="form-control w-full mb-6">
                        <div class="label">
                            <span class="label-text">Your email?</span>
                        </div>
                        <input name="email" type="text" placeholder="Type here" class="input input-bordered w-full" />
                    </label>
                    <label class="form-control w-full mb-6">
                        <div class="label">
                            <span class="label-text">Your password?</span>
                        </div>
                        <input name="password" type="text" placeholder="Type here" class="input input-bordered w-full" />
                    </label>
                    <div class="flex justify-between mb-6">
                        <label>
                            <input name="remember" type="checkbox" checked="checked" class="checkbox checkbox-sm" />
                            Remember me
                        </label>
                        <a href="">Forgotten password ?</a>
                    </div>
                    <button type="submit" class="btn btn-success mb-6 w-full">Sign in</button>
                </form>
                Not a member yet ? <a href="{{ route('signup') }}" class="font-bold" >Create an account</a>
            </div>
        </section>
    </x-slot>
</x-front.layout>
