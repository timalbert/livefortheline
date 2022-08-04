@extends('_layouts.main')

@section('body')
      <div class="max-w-2xl mx-auto px-6 pt-4">
            <div class="text-xl font-light leading-relaxed">
                <h1 class="text-2xl sm:text-3xl text-center lg:text-left font-bold uppercase">
                    {{ $page->date }} <span class="text-yellow-500">&bull;</span> {{ $page->title }}
                </h1>

                <div class="mt-8 prose:dark prose-xl prose-white text-slate-300">
                    @yield('content')
                </div>

                @if ($page->getNext())
                    <div class="mt-12 pt-4 pb-8 border-t border-yellow-500">
                        <a class="font-mono hover:text-yellow-500 flex justify-center" href="{{ $page->getNext()->getPath() }}">
                            @include('_icons.'.$page->getNext()->icon)
                            <p class="ml-4">{{ $page->getNext()->title }}</p>
                        </a>
                    </div>
                @endif
            </div>
      </div>
@endsection
