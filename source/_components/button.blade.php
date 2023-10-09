<a href="{{ $href ?? '#' }}" class="align-center items-center text-slate-100 bg-slate-50/5 hover:bg-slate-950/10 border border-slate-100/20 hover:bg-slate-500 uppercase text-sm rounded-full px-4 py-1.5 lg:py-2 {{ $btnclass ?? '' }} {{ isset($icon) ? 'flex' : '' }}">
    @if(isset($icon))
        <span class="mr-2 text-yellow-500">
            @include('_icons.'.$icon)
        </span>
    @endif
    <span class="font-bold">{{ $text }}</span>
</a>
