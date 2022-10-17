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

                @include('_partials.pagination')
            </div>
      </div>
@endsection
