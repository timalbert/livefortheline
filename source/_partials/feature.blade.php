
<div class="group relative rounded-md lg:flex">
    <div class="lg:w-2/3">
        <img class="group-hover:opacity-75 rounded-t-md" src="/assets/images/{{ $updates->reverse()->first()->image }}" alt="Featured image">
    </div>
    <div class="bg-white rounded-b-md p-4 group-hover:bg-slate-200 lg:p-8 lg:w-1/3 lg:rounded-tr-md">
        <h2 class="text-zinc-900 font-black text-2xl lg:text-4xl">
            <a href="{{ $updates->reverse()->first()->getUrl() }}">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $updates->reverse()->first()->title }}: {{ $updates->reverse()->first()->subtitle }}
            </a>
        </h2>
        <p class="text-slate-700 text-lg font-medium lg:text-2xl lg:mt-4">{{ $updates->reverse()->first()->description }}</p>
    </div>
</div>
