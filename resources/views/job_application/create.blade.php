<x-layout>
    <x-breadcrums class="mb-4"
    :links="[
    'Vacancies' => route('vacancies.index'),
    $vacancy->title => route('vacancies.show', $vacancy),
    'Apply' => '#'
    ]"/>

    <x-job-card :$vacancy />

    <x-card>
        <h2 class="mb-4 text-lg font-medium">
            Your Job Application
        </h2>
        <form action="{{ route('vacancies.application.store', $vacancy) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="expected_salary" class="mb-2 block text-sm font-medium text-slate-900">Expected Salary</label>
                <x-text-input type="number" name="expected_salary"></x-text-input>
            </div>

            <x-button class="w-full">Apply</x-button>

        </form>
    </x-card>
</x-layout>
