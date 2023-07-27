<div class="group relative lg:flex">
    <div class="lg:w-2/3">
        <img class="group-hover:opacity-75 rounded-t-md lg:rounded-bl-md lg:rounded-r-none" src="/assets/images/{{ $updates->where('feature', true)->first()->image }}" alt="Featured image">
    </div>
    <div class="bg-zinc-50 rounded-b-md p-4 group-hover:bg-slate-200 lg:p-10 lg:w-1/3 lg:rounded-l-none lg:rounded-tr-md">
        <h2 class="text-slate-900 font-black text-2xl lg:text-4xl">
            <a href="{{ $updates->where('feature', true)->first()->getUrl() }}">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $updates->where('feature', true)->first()->title }}
            </a>
        </h2>
        <p class="text-slate-700 text-lg font-medium lg:text-2xl lg:mt-4">{{ $updates->where('feature', true)->first()->description }}</p>
    </div>
</div>
