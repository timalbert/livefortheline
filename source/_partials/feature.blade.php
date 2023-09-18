<div class="bg-zinc-50 hover:bg-zinc-200 group relative lg:rotate-3 p-4 rounded-md sm:text-5xl lg:mt-4 lg:-top-6 lg:-left-4">
    <div class="">
        <img class="shadow-inner-md rounded-sm group-hover:opacity-75" src="/assets/images/{{ $updates->where('feature', true)->first()->image }}" alt="Featured image">
    </div>
    <div class="p-4 pb-0 lg:pb-1">
        <h2 class="text-slate-900 font-black text-2xl">
            <a href="{{ $updates->where('feature', true)->first()->getUrl() }}">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $updates->where('feature', true)->first()->title }}
            </a>
        </h2>
        <p class="text-slate-700 font-medium text-lg lg:text-xl lg:mt-2">
            {{ $updates->where('feature', true)->first()->subtitle }}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 inline ml-1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        </p>
    </div>
</div>
