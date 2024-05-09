<x-card>
    <div class="mb-4 flex justify-between ">
        <h2 class="text-lg font-medium">{{ $vacancy->title }}</h2>
        <div class="text-slate-500">
            ${{ number_format($vacancy->salary )}}
        </div>
    </div>

    <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
        <div class="flex space-x-4">
            <div>Company name</div>
            <div>{{ $vacancy->location }}</div>
        </div>

        <div class="flex space-x-1 text-xs">
            <x-tag>
                <a href="{{ route('vacancies.index', ['experience' => $vacancy->experience]) }}">
                    {{ Str::ucfirst($vacancy->experience) }}
                </a>
            </x-tag>
            <x-tag>
                <a href="{{ route('vacancies.index', ['category' => $vacancy->category]) }}">
                    {{ $vacancy->category }}
                </a>
            </x-tag>
        </div>
    </div>


    {{ $slot }}
</x-card>
