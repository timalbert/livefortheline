@extends('_layouts.main')

@section('body')
    <div class="sm:flex mx-auto mt-8 lg:mt-16 px-6 max-w-6xl">
        <div class="text-center sm:text-left sm:w-7/12 sm:pr-2">
            <h1 class="font-serif text-zinc-100 text-5xl mt-6">
                <div class="text-2xl text-yellow-500 font-semibold">Tim's</div> journey through brain cancer</h1>
            <p class="text-slate-400 mt-4 sm:text-xl">xl updates and reflections on eternity from Tim.</p>

            <div class="mt-6 lg:mt-10 flex gap-4 justify-center lg:justify-normal">
                <x-button text="Contact" href="/#contact" icon="contact" />
                <x-button text="Diagnosis" href="/#journey" icon="clipboard" />
            </div>
        </div>

        <div class="sm:w-5/12 mt-10 sm:mt-0 sm:-top-6 sm:-right-6">
            @include('_partials.feature')
        </div>
    </div>

    <section class="lg:flex mt-12 mx-auto px-6 max-w-6xl lg:mt-16">
        <div class="lg:order-last lg:w-1/2 lg:ml-16 lg:mt-0 mt-12">
            <h2 id="reflections" class="text-zinc-100 text-4xl font-semibold">Reflections</h2>
            <div class="mt-10 lg:mx-0 -mx-6">
                @foreach($updates->forget('feature')->reverse() as $card)
                    @if(! $card->has('feature'))
                        @include('_partials.horcard')
                    @endif
                @endforeach
            </div>
        </div>
        <div class="lg:w-1/2">
            <h2 class="text-zinc-100 text-3xl sm:text-4xl font-semibold lg:mt-0 mt-12">Health & Trip Updates</h2>
            <div class="grid grid-cols-2 gap-y-10 gap-x-8 sm:grid-cols-2 mt-10">
                @foreach($trips->forget('feature')->reverse() as $card)
                    @if(! $card->has('feature'))
                        @include('_partials.card')
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- journey -->
    <section id="journey" class="mt-16 px-6 py-16 bg-zinc-900/50 lg:py-18">
        <h2 class="text-center text-zinc-100 text-4xl font-semibold">Recounting My Diagnosis</h2>
        <p class="text-center text-zinc-300 mt-4 lg:text-xl">God's grace in my darkest moment.</p>
        <ul class="space-y-8 max-w-lg mx-auto mt-8 text-base lg:text-lg">
            @foreach($tim as $article)
                <li class="block w-full">
                    <a class="flex items-center hover:text-yellow-500" href="{{ $article->getUrl() }}">
                        <div class="flex-shrink-0 relative p-4 bg-slate-700/50 rounded-full overflow-hidden">
                            <span class="text-yellow-500">@include('_icons.'.$article->icon)</span>
                        </div>
                        <p class="ml-4 font-semibold">{{ $article->title }} <span class="font-mono font-normal text-slate-400 text-sm">&nbsp;({{ $article->date }})</span></p>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <!-- connect -->
    <section id="contact" class="mt-16 px-6 lg:pb-16">
        <div class="max-w-screen-xl mx-auto">
            <h2 class="text-center text-zinc-100 text-4xl font-semibold">Contact</h2>
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
