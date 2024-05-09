<div class="relative">
    @if($formRef)
        <button type="button" class="absolute top-0 right-1 h-full items-center text-slate-400"
                @click="$refs['input-{{ $name }}'].value=''; $refs['{{$formRef}}'].submit(); " >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </button>
    @endif
    <input type="text"
           x-ref="input-{{ $name }}"
           placeholder="{{ $placeholder }}"
           name="{{ $name }}"
           value="{{ $value }}"
           id="{{ $name }}"
           class="w-full pr-8 rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2"
    >
</div>
