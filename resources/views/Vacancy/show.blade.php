<x-layout>

{{--    <x-breadcrums--}}
{{--        :vacancy="$vacancy"--}}
{{--        :links = "['vacancies' => route('vacancies.index'), $vacancy->title => '#']"--}}
{{--    />--}}

    <x-breadcrums
        :$vacancy
        :links="['Vacancies' => route('vacancies.index'), $vacancy->title => '#']"
        />

    <x-card>
        <div class="mb-4 grid grid-cols-2 gap-4">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
        </div>
    </x-card>


    <x-job-card :$vacancy />

</x-layout>
