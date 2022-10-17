<div class="text-base  mt-12 pt-3 border-t border-yellow-500 font-mono flex justify-between">
    @if ($page->getPrevious())
        <a class="hover:text-yellow-500 flex justify-start grow w-1/2 sm:w-auto" href="{{ $page->getPrevious()->getPath() }}">
            <span class="text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mt-0.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </span>
            <p class="ml-1.5">{{ $page->getPrevious()->title }}</p>
        </a>
    @endif

    @if ($page->getNext())
        <a class="hover:text-yellow-500 text-right flex justify-end grow xs:w-1/2 sm:w-auto" href="{{ $page->getNext()->getPath() }}">
            <p class="mr-1.5">{{ $page->getNext()->title }}</p>
            <span class="text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mt-0.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
        </a>
    @endif
</div>