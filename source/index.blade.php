@extends('_layouts.main')

@section('body')
    <div id="tagline" class="text-center mt-10 px-6">
        <h1 class="font-serif text-zinc-100 text-3xl sm:text-5xl">Tim's journey through brain cancer</h1>
    </div>

    <!-- Updates -->
    <section id="updates" class="mt-12 mx-auto px-6 max-w-7xl lg:mt-16">
        @include('_partials.feature')

        <div class="mt-12 grid grid-cols-2 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
            @foreach($updates->forget('feature')->reverse() as $update)
                @if(! $update->has('feature'))
                    @include('_partials.card')
                @endif
            @endforeach
        </div>
    </section>

    <!-- journey -->
    <section id="journey" class="mt-16 px-6 py-16 bg-zinc-900">
        <h2 class="text-center text-zinc-100 text-4xl font-semibold">Reliving My Diagnosis</h2>
        <p class="text-center text-zinc-300 mt-4 lg:text-xl">God's grace in my darkest hour</p>
        <ul class="space-y-8 max-w-lg mx-auto mt-8">
            @foreach($tim as $article)
                <li class="block w-full">
                    <a class="flex hover:text-yellow-500 items-center" href="{{ $article->getUrl() }}">
                        <div class="flex-shrink-0 relative p-4 bg-zinc-800 rounded-full overflow-hidden">
                            <span class="text-yellow-500">@include('_icons.'.$article->icon)</span>
                        </div>
                        <p class="ml-4 text-xl">{{ $article->title }} <span class="font-mono text-slate-400">&nbsp;({{ $article->date }})</span></p>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <!-- connect -->
    <section id="connect" class="mt-16 px-6 lg:pb-16">
        <div class="max-w-screen-xl mx-auto">
            <h2 class="text-center text-zinc-100 text-4xl font-semibold">Connect</h2>
            <p class="text-center text-zinc-300 mt-4 lg:text-xl">I would love to hear from you!</p>
            <form class="mt-12 max-w-4xl mx-auto" name="contact" method="POST" action="/success" data-netlify="true">
                <div class="flex flex-col lg:flex-row -mx-6">
                    <div class="flex-1 px-6 mb-6">
                        <label for="name" class="block uppercase mb-2 tracking-wide font-semibold">Name</label>
                        <input id="name" name="name" placeholder="Name" type="text" class="bg-white text-slate-900 w-full py-3 px-4 leading-6 focus:shadow-outline rounded-md border" required="">
                    </div>
                    <div class="flex-1 px-6">
                        <label for="email" class="block uppercase mb-2 tracking-wide font-semibold">Email</label>
                        <input id="email" name="email" placeholder="Email" type="email" class="bg-white text-slate-900 w-full py-3 px-4 leading-6 focus:shadow-outline rounded-md border" required="">

                        <div class="flex mt-2 justify-end">
                            <input id="subscribe" name="subscribe" type="checkbox" value="yes" class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-rellow-500 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                            <label class="form-check-label inline-block tracking-wide font-semibold" for="subscribe">
                                Send me the updates!
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <label for="message" class="block uppercase mb-2 tracking-wide font-semibold">Message</label>
                    <textarea id="message" name="message" placeholder="Your message (optional)" rows="6" class="bg-white text-slate-900 w-full py-3 px-4 leading-6 focus:shadow-outline rounded-md border"></textarea>
                </div>

                <div class="mt-10">
                    <button type="submit" class="bg-slate-300 hover:bg-slate-400 text-slate-900 font-semibold uppercase leading-6 tracking-wide py-4 px-4 block w-full focus:shadow-outline rounded-md transition-colors duration-200">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
