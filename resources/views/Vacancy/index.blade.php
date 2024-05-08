<x-layout>
    @foreach($vacancies as $vacancy)
        <div>
            {{ $vacancy->title }}
        </div>
    @endforeach
</x-layout>
