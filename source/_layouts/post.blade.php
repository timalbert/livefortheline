@extends('_layouts.main')

@section('body')
    <div class="max-w-2xl text-lg leading-relaxed mx-auto px-6 mt-9 sm:mt-12">
        <div class="text-center">
            @if ($page->date)
                <div class="inline-block bg-yellow-200/10 border border-yellow-300 text-yellow-500 font-mono font-semibold text-xs rounded-full px-3 py-1.5">{{ $page->date }}</div>
            @endif
            <h1 class="font-serif text-4xl sm:text-5xl mt-3 sm:mt-4">{{ $page->title }}</h1>
            @if ($page->subtitle)
                <p class="leading-normal text-gray-300 my-3">{{ $page->subtitle }}</p>
            @endif
        </div>

        <div class="mt-8 prose:dark prose-xl prose-white prose-a:text-yellow-500 hover:prose-a:text-yellow-400 hover:prose-a:border-b hover:prose-a:border-yellow-400">
            @if ($page->image)
                <div class="relative lg:-mx-48 w-full">
                    <img alt="feature image of {{ $page->title }}" class="rounded-lg lg:max-w-screen-lg" src="/assets/images/{{ $page->image }}" />
                </div>
            @endif

            @yield('content')
        </div>

        @if($page->readings)
            <h2 class="font-semibold text-2xl mt-10">Resources of grace from this trip</h2>
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

        @include('_partials.pagination')
    </div>
@endsection
