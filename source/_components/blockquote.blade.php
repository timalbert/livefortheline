<blockquote class="mt-8 ml-0 py-6 px-8 text-lg bg-slate-700/25 border-l-2 text-justify border-yellow-500 text-slate-300 leading-8 {{ $class ?? '' }}">
    {!! $slot !!}
    @if(isset($caption))
        <figcaption class=""font-sm">
            @if(isset($cite))
                <a class="text-yellow-500" href="{{ $cite }}">- {{ $caption }}</a>
            @else
                - {{ $caption }}
            @endif
        </figcaption>
    @endif
</blockquote>
