@extends('_layouts.main')

@section('body')
    <div class="max-w-lg mx-auto px-6 mt-2 font-light">
        <ul class="space-y-8">
            @foreach($articles as $article)
                <li class="block w-full">
                    <a class="flex hover:text-yellow-500" href="{{ $article->getUrl() }}">
                        @include('_icons.'.$article->icon)
                        <p class="ml-4 font-mono text-base">{{ $article->date }} <span class="text-yellow-500">&bull;</span> {{ $article->title }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    
    <div class="max-w-2xl mx-auto py-8 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-center text-3xl font-bold tracking-tight">Updates</h2>
        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
            @foreach($updates->reverse() as $update)
                <div class="group relative">
                    <div class="w-full min-h-80 bg-gray-100 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="/assets/images/{{ $update->image }}" alt="" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-300">
                                <a href="{{ $update->getUrl() }}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    <b class="font-bold">{{ $update->title }}</b>
                                </a>
                            </h3>
                        </div>
                        <p class="text-sm font-mono text-gray-100">{{ $update->date }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="py-6 px-6 bg-slate-800 text-base borde border-slate-700">
        <div class="max-w-screen-md mx-auto">
            <p>“Live for the line” was a mantra my late Uncle Mike often used to illustrate the brevity of life.</p>
            <p class="mt-3">He would explain that this life is like a mere dot on a line representing eternity. Therefore, we should <b class="text-yellow-500 inline-block">live for the line</b>. Life is about living for what is eternally valuable: the glory of God in Jesus Christ (<a class="text-yellow-500"href="https://www.biblegateway.com/passage/?search=John+17%3A3&version=ESV">John 17:3</a>).</p>
        </div>
        <div class="mt-3 text-sm">
            <a class="flex justify-center hover:text-yellow-500" href="https://vimeo.com/112192201">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-yellow-400 stroke-yellow-400" viewBox="0 0 24 24">
                    <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                </svg>
                <p class="ml-1">Live for the line by Randy Alcorn.</p>
            </a>
        </div>
    </div>
@endsection
