@extends('_layouts.main')

@section('body')
    <div class="text-center mt-4">
        <h1 class="text-center text-3xl sm:text-4xl font-">Tim's journey <span class="inline-block"><span class="text-yellow-">through</span> brain cancer</span></h1>
    </div>

    <div class="max-w-lg mx-auto px-6 mt-8 font-light">
        <ul class="space-y-8">
            @foreach($articles as $article)
                <li class="block w-full">
                    <a class="flex hover:text-yellow-500" href="{{ $article->getUrl() }}">
                        <span class="text-yellow-500">@include('_icons.'.$article->icon)</span>
                        <p class="ml-4 font-mono text-base">{{ $article->date }} <span class="text-yellow-500">&bull;</span> {{ $article->title }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    
    <div class="max-w-2xl mx-auto mt-12 px-6 sm:mt-16 lg:max-w-7xl lg:px-8">
        <h2 class="text-center text-3xl uppercase font-semibold">Updates</h2>
        <div class="mt-8 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
            @foreach($updates->reverse() as $update)
                <div class="group relative bg-slate-800 hover:bg-slate-700 rounded-md">
                    <div class="w-full min-h-80 bg-gray-100 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="/assets/images/{{ $update->image }}" alt="" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="p-4 flex justify-between">
                        <h3 class="text-sm text-gray-300">
                            <a href="{{ $update->getUrl() }}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                <b class="font-bold">{{ $update->title }}</b>
                            </a>
                        </h3>
                        <p class="text-sm font-mono text-gray-100">{{ $update->date }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="p-12 mt-24 bg-slate-800 text-base">
        <div class="max-w-screen-md mx-auto">
            <p>“Live for the line” was a phrase that my late Uncle Mike would use to illustrate the brevity of life.</p>
            <p class="mt-3">He would compare our lives to a mere dot on a line representing eternity. Life is a "vapors breath" in comparison to eternity. Therefore we should <b class="text-yellow-500 inline-block">live for the line</b>, spending our lives on what is eternally valuable: the glory of God in Jesus Christ (<a class="text-yellow-500"href="https://www.biblegateway.com/passage/?search=John+17%3A3&version=ESV">John 17:3</a>).</p>
        </div>
        <div class="mt-4 text-sm">
            <a class="flex justify-center hover:text-yellow-500" href="https://vimeo.com/112192201">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-yellow-400 stroke-yellow-400" viewBox="0 0 24 24">
                    <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                </svg>
                <p class="ml-1">Live for the line by Randy Alcorn.</p>
            </a>
        </div>
    </div>

    <section id="contact" x-ref="contact" class="py-16 lg:py-24">
        <div class="max-w-screen-xl mx-auto px-8">
            <h2 class="text-center text-4xl font-semibold">Connect</h2>
            <p class="mt-4 text-xl text-center max-w-3xl mx-auto text-gray-500">I would love to hear from you!</p>
            <form action="/success" class="mt-12 max-w-4xl mx-auto" method="POST" name="Contact Form"><input type="hidden" name="form-name" value="Contact Form">
                <div class="flex flex-col lg:flex-row -mx-6">
                    <div class="flex-1 px-6 mb-6">
                        <label for="name" class="block uppercase tracking-wide font-semibold mb-2">Name</label>
                        <input id="name" name="name" placeholder="Name" type="text" class="bg-white w-full py-3 px-4 leading-6 focus:shadow-outline rounded-md border" required="">
                    </div>
                    <div class="flex-1 px-6 mb-6">
                        <label for="email" class="block uppercase tracking-wide font-semibold mb-2">Email</label>
                        <input id="email" name="email" placeholder="Email" type="email" class="bg-white w-full py-3 px-4 leading-6 focus:shadow-outline rounded-md border" required="">
                    </div>
                </div>
                <div>
                    <label for="message" class="block uppercase tracking-wide font-semibold mb-2">Message</label>
                    <textarea id="message" name="message" placeholder="Your message" rows="6" class="bg-white w-full py-3 px-4 leading-6 focus:shadow-outline rounded-md border mb-6" required=""></textarea>
                </div>
                <div>
                    <button type="submit" class="bg-slate-300 hover:bg-slate-400 text-slate-900 font-semibold uppercase leading-6 tracking-wide py-4 px-4 block w-full focus:shadow-outline rounded-md transition-colors duration-200">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
