@extends('_layouts.main')

@section('body')
      <div class="max-w-2xl mx-auto pb-12 px-6 mt-10">
            <div class="text-xl font-light leading-relaxed">
                <div class="text-center">
                    <div class="text-yellow-500 font-mono">{{ $page->date }}</div>
                    <h1 class="text-4xl">{{ $page->title }}</h1>
                </div>

                <div class="mt-8 prose:dark prose-xl prose-white text-slate-300">
                    @yield('content')
                </div>

                @include('_partials.pagination')
            </div>
      </div>
@endsection
