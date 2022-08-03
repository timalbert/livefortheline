@extends('_layouts.main')

@section('body')
      <div class="max-w-2xl mx-auto px-6 pt-4">
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

                @if ($page->getNext())
                    <div class="mt-12 pt-3 border-t border-yellow-500">
                        <a class="font-mono hover:text-yellow-500 flex justify-center" href="{{ $page->getNext()->getPath() }}">
                            <p class="ml-4">{{ $page->getNext()->title }}</p>
                        </a>
                    </div>
                @endif
            </div>
      </div>
@endsection
