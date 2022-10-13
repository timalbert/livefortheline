@extends('_layouts.main')

@section('body')
      <div class="max-w-2xl mx-auto pb-12 px-6 mt-10">
            <div class="text-xl font-light leading-relaxed">
                <div class="text-center">
                    <div class="text-yellow-500 font-mono">{{ $page->date }}</div>
                    <h1 class="text-4xl">{{ $page->title }}</h1>
                </div>

                <div class="mt-8 prose:dark prose-xl prose-white text-slate-300">


                    <div class="relative lg:-mx-48 w-full">
                        <img alt="feature image of {{ $page->title }}" class="rounded-lg lg:max-w-screen-lg" src="/assets/images/{{ $page->image }}" />
                    </div>

                    @yield('content')
                </div>

                @if($page->readings)
                    <h2 class="font-semibold text-2xl mt-10">Resources of grace on this trip</h2>
                    <ul class="mt-8">
                        @foreach($page->readings as $reading)
                            <li class="block w-full mt-3">
                                <a class="flex hover:text-yellow-500" href="{{ $reading[3] }}">
                                    <span class="text-yellow-500">
                                        @include('_icons.'.$reading[0])
                                    </span>
                                    <span class="ml-4 font-mono text-base">{{ $reading[1] }} ({{ $reading[2] }})</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

                
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
            </div>
      </div>
@endsection
