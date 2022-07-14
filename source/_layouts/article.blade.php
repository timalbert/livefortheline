@extends('_layouts.main')

@section('body')
      <div class="max-w-lg mx-auto px-6">
            <div class="text-xl font-light leading-relaxed">
                <h1 class="text-2xl font-semibold uppercase">{{ $page->date }} <span class="text-yellow-500">&bull;</span> {{ $page->title }}</h1>

                <div class="mt-8 prose prose-xl prose-white text-slate-300">
                    @yield('content')
                </div>

                <div class="mt-12 pt-3 border-t border-yellow-500">
                    <a class="font-mono hover:text-yellow-500 flex items-center" href="{{ $page->getUrl() }}">
                        <svg class="w-6 h-6 stroke-yellow-500" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="ml-4">2/9/21  &bull; Waiting</p>
                    </a>
                </div>
            </div>
      </div>
@endsection
