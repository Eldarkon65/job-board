<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HeadHunter</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="from-10% via-30% to-90% mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-200 from-10% via-sky-200 via-30% to-emerald-200 to-90 text-slate-700">
    <nav class="mb-8 flex justify-between text-lg font-medium">
        <ul class="flex space-x-2">
            <li>
                <a href="{{ route('vacancies.index') }}">Home</a>
            </li>
        </ul>
        <ul class=" space-x-2">
            @auth()
                <li class="flex justify-end ">
                    {{ auth()->user()->name ?? 'Anynomus' }}
                </li>
                <li>
                    <form action="{{ route('auth.destroy') }}" method="POST" class="flex justify-end" >
                        @csrf
                        @method('DELETE')
                        <button>
                            Sign out
                        </button>
                    </form>
                </li>
                @else
                <li>
                    <a href="{{ route('auth.create') }}">Sign in</a>
                </li>
            @endauth
        </ul>
    </nav>


    {{ $slot }}
</body>
</html>
