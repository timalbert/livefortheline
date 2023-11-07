<div class="group relative bg-slate-50/5 border border-slate-100/10 hover:bg-slate-950/10 rounded-md">
    <div class="w-full min-h-80 aspect-w-1 aspect-h-1 rounded-t-md overflow-hidden group-hover:opacity-75 lg:h-50 lg:aspect-none">
        <img src="/assets/images/{{ $card->image }}" alt="" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
    </div>
    <div class="flex justify-between items-center p-3">
        <h3 class="text-lg leading-tight text-slate-100 font-bold leading-normal">
            <a href="{{ $card->getUrl() }}">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $card->title }}
            </a>
        </h3>
        <p class="bg-slate-950/50 rounded-full font-mono text-xs font-semibold text-zinc-300/80 px-2.5 py-1.5">{{ $card->date }}</p>
    </div>
</div>
