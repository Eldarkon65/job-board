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

</x-layout>
