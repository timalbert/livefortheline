<blockquote class="mt-7 ml-0 py-1 pl-8 text-lg border-l-2 border-yellow-500 text-slate-300 not-italic leading-8 {{ $class ?? '' }}">
    {{ $slot }}
    @if(isset($caption))
        <figcaption class=""font-sm">
            @if(isset($cite))
                <a class="text-yellow-500" href="{{ $cite }}">- {{ $caption }}</a>
            @else
                - {{ $caption}}
            @endif
        </figcaption>
    @endif
</blockquote>
