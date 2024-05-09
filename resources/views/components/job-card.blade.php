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
            <x-tag>{{ Str::ucfirst($vacancy->experience) }}</x-tag>
            <x-tag>{{ $vacancy->category }}</x-tag>
        </div>
    </div>


    {{ $slot }}
</x-card>
