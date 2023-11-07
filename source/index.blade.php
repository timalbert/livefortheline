@extends('_layouts.main')

@section('body')

    <!-- hero -->
    <section class="sm:flex mx-auto mt-8 lg:mt-16 px-6 max-w-6xl">
        <div class="text-center sm:text-left sm:w-7/12 sm:pr-9">
            <h1 class="font-serif text-4xl lg:text-6xl mt-6">Tim's journey through brain cancer</h1>
            <p class="text-zinc-300 sm:text-xl leading-7 sm:leading-loose mt-6">For this light momentary affliction is preparing for us an eternal weight of glory beyond all comparison (2 Cor. 4:16-17).</p>
            <div class="mt-8 lg:mt-8 flex gap-4 justify-center sm:justify-normal">
                <x-button text="Contact" href="/#contact" icon="contact" />
                <x-button text="Diagnosis" href="/#journey" icon="clipboard" />
            </div>
        </div>
        <div class="sm:w-5/12 sm:-top-6 sm:-right-6 mt-10 sm:mt-0">
            @include('_partials.feature')
        </div>
    </section>

    <!-- updates/reflections -->
    <section id="updates" class="lg:flex max-w-6xl mx-auto px-6 py-12">
        <div class="lg:w-1/2 lg:order-last lg:ml-12">
            <h2 class="flex justify-center sm:leading-[125%] text-3xl sm:text-4xl font-medium lg:mt-0 mt-6">
                <span class="relative whitespace-nowrap">
                    Reflections
                    <svg class="absolute w-full opacity-70" width="428" height="9" viewBox="0 0 428 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m262.203 1.387 3.247.18c5.128.506 10.292.346 15.451.297 1.359-.036 2.447-.087 3.799-.012 8.94.272 17.616.417 26.555.689 5.694.092 11.117.17 16.81.262 2.441.023 4.876.158 7.04.278 7.04.277 13.797.762 20.837 1.04 4.605.144 8.946.16 13.557.193 6.782.041 13.274.4 20.068.22 2.447-.088 4.882.047 7.028.5 2.687.482 5.669.535 8.38.574l9.758.206c4.334.128 8.638.811 12.672 1.48.27.014.258.236.516.473l-.553.192-2.453.198-17.91.011c-14.381-.016-28.769.08-43.143-.048-10.852-.044-21.428-.183-32.279-.227-6.512-.026-13.029.06-19.269.048-2.989.057-5.971.004-8.952-.05-8.135-.116-16.269-.232-24.68-.251-3.794-.099-7.323-.071-10.852-.044-11.934-.103-23.591-.303-35.531-.295-8.952-.05-17.634-.085-26.586-.135-13.84.014-27.403-.068-41.243-.054-13.57.029-27.145.168-40.444.212l-36.65.31c-11.406.15-22.811.298-33.946.461-5.976.115-11.94.008-18.174-.114-6.776-.152-13.287-.179-20.063-.33-2.71-.04-5.687-.204-8.392-.353-2.435-.135-4.027-.78-5.343-1.52-1.052-.614-.455-1.583 1.18-1.715l2.453-.198c3.536-.139 7.335-.151 10.87-.29 7.071-.276 13.865-.457 21.2-.608 4.617-.079 9.247-.379 14.123-.22.54.03.818-.067 1.359-.037 4.623-.19 9.24-.268 14.135-.443 9.505-.142 18.752-.52 28.245-.441 1.63-.021 3.53-.027 5.159-.049 7.058-.055 14.11.001 21.181-.275 5.17-.27 10.593-.194 16.028-.338C146.362.88 155.32.82 164.284.647c1.089-.05 2.171.01 3.259-.042 7.858.212 15.469-.035 23.069-.06 1.359-.036 2.447-.087 3.799-.012 4.87.269 10.028.22 14.91.267 10.575.14 21.151.28 31.732.308 6.517-.085 14.104.112 21.15.28Z" fill="#eab308"></path>
                    </svg>
                </span>
            </h2>
            <div class="mt-10 lg:mx-0">
                @foreach($updates->forget('feature')->reverse() as $card)
                    @if(! $card->has('feature'))
                        @include('_partials.horcard')
                    @endif
                @endforeach
            </div>
        </div>
        <div class="lg:w-1/2 mt-12 lg:mt-0">
            <h2 class="flex justify-center sm:leading-[125%] text-3xl sm:text-4xl font-medium">
                <span class="relative whitespace-nowrap">
                    Health & Trip Updates
                    <svg class="absolute w-full opacity-70" width="428" height="9" viewBox="0 0 428 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m262.203 1.387 3.247.18c5.128.506 10.292.346 15.451.297 1.359-.036 2.447-.087 3.799-.012 8.94.272 17.616.417 26.555.689 5.694.092 11.117.17 16.81.262 2.441.023 4.876.158 7.04.278 7.04.277 13.797.762 20.837 1.04 4.605.144 8.946.16 13.557.193 6.782.041 13.274.4 20.068.22 2.447-.088 4.882.047 7.028.5 2.687.482 5.669.535 8.38.574l9.758.206c4.334.128 8.638.811 12.672 1.48.27.014.258.236.516.473l-.553.192-2.453.198-17.91.011c-14.381-.016-28.769.08-43.143-.048-10.852-.044-21.428-.183-32.279-.227-6.512-.026-13.029.06-19.269.048-2.989.057-5.971.004-8.952-.05-8.135-.116-16.269-.232-24.68-.251-3.794-.099-7.323-.071-10.852-.044-11.934-.103-23.591-.303-35.531-.295-8.952-.05-17.634-.085-26.586-.135-13.84.014-27.403-.068-41.243-.054-13.57.029-27.145.168-40.444.212l-36.65.31c-11.406.15-22.811.298-33.946.461-5.976.115-11.94.008-18.174-.114-6.776-.152-13.287-.179-20.063-.33-2.71-.04-5.687-.204-8.392-.353-2.435-.135-4.027-.78-5.343-1.52-1.052-.614-.455-1.583 1.18-1.715l2.453-.198c3.536-.139 7.335-.151 10.87-.29 7.071-.276 13.865-.457 21.2-.608 4.617-.079 9.247-.379 14.123-.22.54.03.818-.067 1.359-.037 4.623-.19 9.24-.268 14.135-.443 9.505-.142 18.752-.52 28.245-.441 1.63-.021 3.53-.027 5.159-.049 7.058-.055 14.11.001 21.181-.275 5.17-.27 10.593-.194 16.028-.338C146.362.88 155.32.82 164.284.647c1.089-.05 2.171.01 3.259-.042 7.858.212 15.469-.035 23.069-.06 1.359-.036 2.447-.087 3.799-.012 4.87.269 10.028.22 14.91.267 10.575.14 21.151.28 31.732.308 6.517-.085 14.104.112 21.15.28Z" fill="#eab308"></path>
                    </svg>
                </span>
            </h2>
            <div class="grid grid-cols-2 gap-y-6 gap-x-6 sm:grid-cols-2 mt-9">
                @foreach($trips->forget('feature')->reverse() as $card)
                    @if(! $card->has('feature'))
                        @include('_partials.card')
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- journey -->
    <section id="journey" class="bg-zinc-950/30 px-6 py-12">
        <h2 class="flex justify-center sm:leading-[125%] text-3xl sm:text-4xl font-medium">
            <span class="relative whitespace-nowrap">
                Recounting My Diagnosis
                <svg class="absolute w-full opacity-70" width="428" height="9" viewBox="0 0 428 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="m262.203 1.387 3.247.18c5.128.506 10.292.346 15.451.297 1.359-.036 2.447-.087 3.799-.012 8.94.272 17.616.417 26.555.689 5.694.092 11.117.17 16.81.262 2.441.023 4.876.158 7.04.278 7.04.277 13.797.762 20.837 1.04 4.605.144 8.946.16 13.557.193 6.782.041 13.274.4 20.068.22 2.447-.088 4.882.047 7.028.5 2.687.482 5.669.535 8.38.574l9.758.206c4.334.128 8.638.811 12.672 1.48.27.014.258.236.516.473l-.553.192-2.453.198-17.91.011c-14.381-.016-28.769.08-43.143-.048-10.852-.044-21.428-.183-32.279-.227-6.512-.026-13.029.06-19.269.048-2.989.057-5.971.004-8.952-.05-8.135-.116-16.269-.232-24.68-.251-3.794-.099-7.323-.071-10.852-.044-11.934-.103-23.591-.303-35.531-.295-8.952-.05-17.634-.085-26.586-.135-13.84.014-27.403-.068-41.243-.054-13.57.029-27.145.168-40.444.212l-36.65.31c-11.406.15-22.811.298-33.946.461-5.976.115-11.94.008-18.174-.114-6.776-.152-13.287-.179-20.063-.33-2.71-.04-5.687-.204-8.392-.353-2.435-.135-4.027-.78-5.343-1.52-1.052-.614-.455-1.583 1.18-1.715l2.453-.198c3.536-.139 7.335-.151 10.87-.29 7.071-.276 13.865-.457 21.2-.608 4.617-.079 9.247-.379 14.123-.22.54.03.818-.067 1.359-.037 4.623-.19 9.24-.268 14.135-.443 9.505-.142 18.752-.52 28.245-.441 1.63-.021 3.53-.027 5.159-.049 7.058-.055 14.11.001 21.181-.275 5.17-.27 10.593-.194 16.028-.338C146.362.88 155.32.82 164.284.647c1.089-.05 2.171.01 3.259-.042 7.858.212 15.469-.035 23.069-.06 1.359-.036 2.447-.087 3.799-.012 4.87.269 10.028.22 14.91.267 10.575.14 21.151.28 31.732.308 6.517-.085 14.104.112 21.15.28Z" fill="#eab308"></path>
                </svg>
            </span>
        </h2>
        <p class="text-center text-zinc-300 mt-4 lg:text-xl">God's grace in my darkest moment.</p>
        <ul class="space-y-8 max-w-lg mx-auto mt-8 text-base lg:text-lg">
            @foreach($tim as $article)
                <li class="block w-full">
                    <a class="flex items-center group" href="{{ $article->getUrl() }}">
                        <div class="flex-shrink-0 relative p-4 bg-slate-700/20 shadow-lg ring-yellow-500/50 ring-1 rounded-full overflow-hidden">
                            <span class="text-yellow-500">@include('_icons.'.$article->icon)</span>
                        </div>
                        <p class="ml-4 font-semibold group-hover:text-yellow-500">
                            {{ $article->title }} <span class="font-mono font-normal text-slate-300 text-sm group-hover:text-red-600">&nbsp;({{ $article->date }})</span>
                            <span class="block font-normal text-base opacity-70">{{ $article->subtitle }}</span>
                        </p>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <!-- contact -->
    <section id="contact" class="px-6 py-12">
        <div class="max-w-screen-xl mx-auto">
            <h2 class="flex justify-center sm:leading-[125%] text-3xl sm:text-4xl font-medium">
                <span class="relative whitespace-nowrap">
                    Contact Tim
                    <svg class="absolute w-full opacity-70" width="428" height="9" viewBox="0 0 428 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m262.203 1.387 3.247.18c5.128.506 10.292.346 15.451.297 1.359-.036 2.447-.087 3.799-.012 8.94.272 17.616.417 26.555.689 5.694.092 11.117.17 16.81.262 2.441.023 4.876.158 7.04.278 7.04.277 13.797.762 20.837 1.04 4.605.144 8.946.16 13.557.193 6.782.041 13.274.4 20.068.22 2.447-.088 4.882.047 7.028.5 2.687.482 5.669.535 8.38.574l9.758.206c4.334.128 8.638.811 12.672 1.48.27.014.258.236.516.473l-.553.192-2.453.198-17.91.011c-14.381-.016-28.769.08-43.143-.048-10.852-.044-21.428-.183-32.279-.227-6.512-.026-13.029.06-19.269.048-2.989.057-5.971.004-8.952-.05-8.135-.116-16.269-.232-24.68-.251-3.794-.099-7.323-.071-10.852-.044-11.934-.103-23.591-.303-35.531-.295-8.952-.05-17.634-.085-26.586-.135-13.84.014-27.403-.068-41.243-.054-13.57.029-27.145.168-40.444.212l-36.65.31c-11.406.15-22.811.298-33.946.461-5.976.115-11.94.008-18.174-.114-6.776-.152-13.287-.179-20.063-.33-2.71-.04-5.687-.204-8.392-.353-2.435-.135-4.027-.78-5.343-1.52-1.052-.614-.455-1.583 1.18-1.715l2.453-.198c3.536-.139 7.335-.151 10.87-.29 7.071-.276 13.865-.457 21.2-.608 4.617-.079 9.247-.379 14.123-.22.54.03.818-.067 1.359-.037 4.623-.19 9.24-.268 14.135-.443 9.505-.142 18.752-.52 28.245-.441 1.63-.021 3.53-.027 5.159-.049 7.058-.055 14.11.001 21.181-.275 5.17-.27 10.593-.194 16.028-.338C146.362.88 155.32.82 164.284.647c1.089-.05 2.171.01 3.259-.042 7.858.212 15.469-.035 23.069-.06 1.359-.036 2.447-.087 3.799-.012 4.87.269 10.028.22 14.91.267 10.575.14 21.151.28 31.732.308 6.517-.085 14.104.112 21.15.28Z" fill="#eab308"></path>
                    </svg>
                </span>
            </h2>
            <p class="text-center text-zinc-300 mt-4 lg:text-xl">I would love to connect with you!</p>
            <form class="mt-12 max-w-4xl mx-auto" name="contact" method="POST" action="/success" data-netlify="true">
                <div class="flex flex-col lg:flex-row -mx-6">
                    <div class="flex-1 px-6 mb-6">
                        <label for="name" class="block uppercase mb-2 tracking-wide font-semibold">Name</label>
                        <input id="name" name="name" placeholder="Name" type="text" class="bg-white/10 text-white w-full py-3 px-4 leading-6 focus:outline outline-offset-2 outline-4 outline-yellow-600 rounded-md border" required="">
                    </div>
                    <div class="flex-1 px-6">
                        <label for="email" class="block uppercase mb-2 tracking-wide font-semibold">Email</label>
                        <input id="email" name="email" placeholder="Email" type="email" class="bg-white/10 text-white w-full py-3 px-4 leading-6 focus:focus:outline outline-offset-2 outline-4 outline-yellow-600 rounded-md border" required="">

                        <div class="flex mt-2 justify-end">
                            <input id="subscribe" name="subscribe" type="checkbox" value="yes" class="form-check-input h-4 w-4 border border-zinc-300 rounded-sm bg-white/10 checked:bg-rellow-500 checked:border-yellow-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                            <label class="form-check-label inline-block tracking-wide font-semibold" for="subscribe">
                                Send me the updates!
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <label for="message" class="block uppercase mb-2 tracking-wide font-semibold">Message</label>
                    <textarea id="message" name="message" placeholder="Your message (optional)" rows="6" class="bg-white/10 text-white w-full py-3 px-4 leading-6 focus:focus:outline outline-offset-2 outline-4 outline-yellow-600 rounded-md border"></textarea>
                </div>

                <div class="mt-10">
                    <button type="submit" class="bg-zinc-300 hover:bg-slate-400 text-slate-900 font-semibold uppercase leading-6 tracking-wide py-4 px-4 block w-full focus:focus:outline outline-offset-2 outline-4 outline-yellow-600 rounded-md transition-colors duration-200">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
