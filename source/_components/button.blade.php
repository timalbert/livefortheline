<a href="{{ $href ?? '#' }}" class="leading-snug justify-center px-4 py-1.5 lg:py-3 bg-slate-100/10 text-slate-100 uppercase text-xs font-semibold hover:bg-slate-500 rounded-lg {{ $class ?? '' }} {{ isset($icon) ? 'flex' : '' }}">
        @if(isset($icon))
            <span class="mr-2">
                @include('_icons.'.$icon)
            </span>
        @endif
        <span class="">{{ $text }}</span>
</a>
