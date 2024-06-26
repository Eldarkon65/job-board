<x-layout>
    <h2 class="my-16 text-center text-4xl font-medium text-slate-600">
        Sign in to your account
    </h2>
    <x-card class="py-8 px-16">
        <form action="{{ route('auth.store') }}" method="POST" class="space-y-2.5">
            @csrf

            <div class="">
                <label for="email" class="mb-2 block text-sm font-medium text-slate-900">E-mail</label>
                <x-text-input name="email"/>
            </div>

            <div class="">
                <label for="password" class="mb-2 block text-sm font-medium text-slate-900">Password</label>
                <x-text-input name="password" type="password"/>
            </div>

            <div class=" mb-8 flex justify-between text-xs">
                <div>
                    <div class="flex items-center space-x-1">
                        <input type="checkbox" name="remember" class="rounded-sm border border-slate-400">
                        <label for="remember">Remember me</label>
                    </div>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">Forget Password?</a>
                </div>
            </div>

            <x-button class="w-full bg-green-50">Sign in</x-button>

        </form>
    </x-card>
</x-layout>
