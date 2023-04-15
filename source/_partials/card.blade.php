<div class="group relative bg-slate-950 hover:bg-slate-800 rounded-md">
    <div class="w-full min-h-80 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
        <img src="/assets/images/{{ $update->image }}" alt="" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
    </div>
    <div class="lg:flex lg:justify-between lg:items-center p-4 pb-5">
        <h3 class="text-lg leading-tight text-slate-100 font-bold leading-normal">
            <a href="{{ $update->getUrl() }}">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $update->title }}
            </a>
        </h3>
        <p class="text-sm text-slate-300 font-semibold mt-2 lg:text-base lg:mt-0">{{ $update->date }}</p>
    </div>
</div>
