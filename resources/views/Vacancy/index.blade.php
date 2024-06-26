<x-layout>

    <x-breadcrums
        :links="['Vacancies' => route('vacancies.index')]"
    />

    <div class="mb-4 rounded-md border border-slate-300 bg-white p-4 shadow-sm" x-data="" >
        <form x-ref="filters" id="filter-form" action="{{ route('vacancies.index') }}" method="GET" >
        <div class="mb-4 grid grid-cols-2 gap-4">
            <div>
                <div class="mb-1 font-semibold">Search</div>
                <x-text-input name="search" value="{{ request('search') }}" placeholder="Search for any text" form-ref="filters" />
            </div>
            <div>
                <div class="mb-1 font-semibold">Search</div>

                <div class="flex space-x-2">
                    <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="From" form-ref="filters"  />
                    <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="To" form-ref="filters"  />
                </div>
            </div>
            <div>
                <div class="mb-1 font-semibold">Experience</div>
                <x-radio-group name="experience" :options="\App\Models\Vacancy::$experience"/>
            </div>
            <div>
                <div>
                    <div class="mb-1 font-semibold">Category</div>
                    <x-radio-group name="category" :options="\App\Models\Vacancy::$category"/>
                </div>
            </div>
        </div>

            <x-button class="w-full">
                Filter
            </x-button>
        </form>
    </div>

    @foreach($vacancies as $vacancy)
        <x-job-card :vacancy="$vacancy" >
            <x-link :href=" route('vacancies.show', $vacancy) ">
                See
            </x-link>
        </x-job-card>
    @endforeach

</x-layout>
