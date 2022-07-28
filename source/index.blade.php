@extends('_layouts.main')

@section('body')
    <div class="max-w-lg mx-auto px-6 mt-2 font-light">
        <ul class="space-y-8">
            @foreach($articles as $article)
                <li class="block w-full">
                    <a class="flex hover:text-yellow-500" href="{{ $article->getUrl() }}">
                        @include('_icons.'.$article->icon)
                        <p class="ml-4 font-mono text-base">{{ $article->date }} &bull; {{ $article->title }}</p>
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="mt-12 p-4 bg-slate-800 text-base rounded border border-slate-700">
            <p>“Live for the line” was a mantra my late Uncle Mike often used to illudtrate the brevity of life.</p>
            <p class="mt-3">He would explain that this life is like a mere dot on a line representing eternity. Therefore, we should <b class="text-yellow-500 inline-block">live for the line</b>. Life is about living for what is eternally valuable: the glory of God in Jesus Christ (<a class="text-yellow-500" href="https://www.biblegateway.com/passage/?search=John+17%3A3&version=ESV">John 17:3</a>).</p>
        </div>
    </div>
    <div class="mt-3 text-sm">
        <a class="flex justify-center hover:text-yellow-500" href="https://vimeo.com/112192201">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-yellow-400 stroke-yellow-400" viewBox="0 0 24 24">
                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
            </svg>
            <p class="ml-1">Live for the line by Randy Alcorn.</p>
        </a>
    </div>
@endsection
