@extends('_layouts.main')

@section('body')
      <div class="max-w-2xl mx-auto px-6 py-4">
            <div class="text-xl font-light leading-relaxed">
                <h1 class="text-2xl sm:text-3xl text-center font-bold uppercase">
                    {{ $page->title }}  <span class="text-yellow-500">&bull;</span>  {{ $page->date }}
                </h1>

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

                @if ($page->getNext())
                    <div class="mt-12 pt-3 border-t border-yellow-500">
                        <a class="font-mono text-base hover:text-yellow-500 flex justify-center" href="{{ $page->getNext()->getPath() }}">
                            <p class="ml-4">{{ $page->getNext()->title }}</p>
                        </a>
                    </div>
                @endif
            </div>
      </div>
@endsection
