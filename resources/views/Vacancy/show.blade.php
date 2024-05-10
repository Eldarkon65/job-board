<x-layout>
    <x-breadcrums
        :$vacancy
        :links="['Vacancies' => route('vacancies.index'), $vacancy->title => '#']"
    />

    <x-job-card :$vacancy>
        <p class="text-sm text-slate-500">
            {{ nl2br($vacancy->description) }}
        </p>
    </x-job-card>

    <x-card>
        <h2 class="mb-4 text-lg font-medium">More {{ $vacancy->employer->company_name }} vacancies</h2>
        <div class="text-sm text-slate-500">
            @foreach ($vacancy->employer->vacancies as $otherVacancies)
                <div class="mb-4 flex justify-between">
                    <div class="text-slate-700">
                        <a href="{{ route('vacancies.show', $otherVacancies) }}">{{ $otherVacancies->title }}</a>
                        <div class="text-xs text-slate-400">
                            {{ $otherVacancies->created_at->diffForHumans() }}
                        </div>
                    </div>

                    <div class="text-xs">
                        ${{ number_format($otherVacancies->salary) }}
                    </div>
                </div>
            @endforeach
        </div>
    </x-card>
</x-layout>
