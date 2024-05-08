<x-layout>

    <x-breadcrums
        :links="['Vacancies' => route('vacancies.index')]"
    />

    <x-card>

    </x-card>

    @foreach($vacancies as $vacancy)
        <x-job-card :vacancy="$vacancy" >
            <x-link :href=" route('vacancies.show', $vacancy) ">
                See
            </x-link>
        </x-job-card>
    @endforeach

</x-layout>
