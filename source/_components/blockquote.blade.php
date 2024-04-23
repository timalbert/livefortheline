<blockquote class="leading-8 text-base sm:text-lg text-justify text-gray-300 bg-slate-700/25 border-l-2 border-yellow-500 mt-8 ml-0 py-6 px-8  {{ $class ?? '' }}">
    {!! $slot !!}
    @if(isset($caption))
        <figcaption class="font-sm">
            @if(isset($cite))
                <a class="esv-crossref-ignore text-yellow-500" href="{{ $cite }}">- {{ $caption }}</a>
            @else
                - {{ $caption }}
            @endif
        </figcaption>
    @endif
</blockquote>
