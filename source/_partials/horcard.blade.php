<div class="flex group relative rounded-md leading-tight text-slate-100 bg-slate-50/5 hover:bg-slate-950/10 border-slate-100 border border-slate-100/10 p-6 mt-6">
    <div class="w-2/3">
        <h3 class="text-xl text-slate-100 font-bold">
            <a href="{{ $card->getUrl() }}">
                <span aria-hidden="true" class="absolute inset-0 z-10"></span>
                {{ $card->title }}
            </a>
        </h3>
        <p class="opacity-70 mt-2 ">{{ $card->subtitle }}</p>
    </div>
    <div class="group-hover:opacity-75 aspect-[4/3] relative h-full w-1/3 ml-6">
        <img src="/assets/images/{{ $card->image }}" alt="" class="absolute object-cover w-full h-full">
    </div>
</div>
