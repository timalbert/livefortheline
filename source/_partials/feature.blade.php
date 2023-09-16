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
        <p class="text-slate-700 font-medium text-lg lg:text-xl lg:mt-2">{{ $updates->where('feature', true)->first()->subtitle }}</p>
    </div>
</div>
