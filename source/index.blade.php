------
extends: _layouts.main
section: content
title: Tim's journey through brain cancer
---

@section('body')
    <!-- hero -->
    <section class="sm:flex mx-auto mt-8 lg:mt-16 px-6 max-w-6xl">
        <div class="text-center sm:text-left sm:w-7/12 sm:pr-9">
            <h1 class="font-serif text-4xl lg:text-6xl mt-6">Tim's journey through brain cancer</h1>
            <p class="text-zinc-300 sm:text-xl leading-7 sm:leading-loose mt-6">For this light momentary affliction is preparing for us an eternal weight of glory beyond all comparison (2 Cor. 4:16-17).</p>
            <div class="mt-8 lg:mt-8 flex gap-4 justify-center sm:justify-normal">
                {{-- <x-button text="Diagnosis" href="/#journey" icon="clipboard" /> --}}
                {{-- <x-button text="Contact" href="/#contact" icon="contact" /> --}}
                <x-button text="Now" href="/now" icon="clock" />
                <a href="https://www.gofundme.com/f/Help-Tim-Fund-Vital-Brain-Cancer-Treatment" class="px-4 py-2 lg:px-5 bg-yellow-400 text-slate-900 text-sm font-semibold hover:bg-yellow-500 rounded-full" target="_blank">
                    <svg fill="none" height="25" viewBox="0 0 105 36" class="h-100" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" d="m4.8556 19.4183c1.28303 0 2.73375.5394 3.50113 1.6066h.09587v-1.3308h3.4771v10.9465c0 3.6329-2.99735 5.3594-5.97097 5.3594-2.88923 0-5.70701-1.6425-5.731072-4.7238h3.453002c.08403 1.3785 1.07907 2.0141 2.23031 2.0141 1.15088 0 2.32582-.7074 2.32582-2.458v-1.6783h-.09588c-.77922.935-2.08631 1.4385-3.28531 1.4385-2.91329 0-4.8556-2.7815-4.8556-5.623s1.94231-5.5512 4.8556-5.5512zm34.4819.264v6.1986c0 .9232.7193 1.6665 1.6184 1.6665.8992 0 1.6188-.7433 1.6188-1.6665v-6.1986h3.6925v6.1386c0 3.1413-2.1581 5.0596-5.3113 5.0596-3.0932 0-5.3113-1.8465-5.3113-5.0596v-6.1386zm59.8271-.288c3.2134 0 5.7674 2.398 5.7674 5.7551 0 .3128-.029.5774-.053.7494l-.007.0539h-7.7093c.1318 1.4026 1.0069 2.194 2.0741 2.194.5951 0 1.2012-.2401 1.7242-.8148l.074-.0843h3.561c-.923 2.4698-3.177 3.6206-5.4314 3.6206-2.8892 0-5.7669-1.906-5.7669-5.7188 0-3.3571 2.5538-5.7551 5.7669-5.7551zm-79.6456-.0959c3.3453 0 6.0787 2.3621 6.0787 5.767 0 3.4052-2.7334 5.7669-6.0787 5.7669-3.333 0-6.0305-2.338-6.0305-5.7669 0-3.429 2.6975-5.767 6.0305-5.767zm53.1373-6.2345v17.5286h-3.477v-1.4508h-.0959c-.9473 1.0673-2.2662 1.6666-3.597 1.6666-2.9973 0-4.9878-2.7334-4.9878-5.6948s1.9905-5.6833 4.9878-5.6833c1.1509 0 2.5298.4316 3.3812 1.4629h.0958v-7.8292zm-40.3325-.3117c.6833 0 1.3907.0837 2.0023.2277v2.9854c-.2758-.0718-.4916-.1081-.7315-.1081-.995 0-1.8583.408-1.8583 1.7265v2.1104h2.254v2.9855h-2.254v7.9129h-3.6929v-7.9129h-1.6065v-2.9855h1.6065v-2.8774c0-2.7219 1.9305-4.0645 4.2804-4.0645zm22.684 6.6421c2.0382 0 3.9324 1.4388 3.9324 4.2444v6.9538h-3.6925v-6.1864c0-1.0913-.7315-1.8224-1.6547-1.8224s-1.6547.7552-1.6547 1.8224v6.1864h-3.6925v-10.8984h3.4767v1.3667h.0959c.8273-1.1268 2.1462-1.6665 3.1894-1.6665zm33.019 0c1.9541 0 3.8128 1.4629 3.8128 4.2085v6.9897h-3.6929v-6.3182c0-1.0195-.6715-1.6906-1.5107-1.6906-.8514 0-1.5229.6833-1.5229 1.6906v6.3182h-3.6925v-6.3182c0-1.0195-.6715-1.6906-1.5107-1.6906-.8514 0-1.5229.6833-1.5229 1.6906v6.3182h-3.6929v-10.8984h3.4771v1.3667h.0959c.7315-1.1031 1.9664-1.6543 3.1413-1.6543 1.139 0 2.3262.5993 3.0454 1.8823h.0959c.9114-1.3071 2.2181-1.8945 3.4771-1.8945zm-21.4732 3.2731c-1.3548 0-2.458 1.1031-2.458 2.4579 0 1.3549 1.1032 2.4698 2.458 2.4698s2.4576-1.1149 2.4576-2.4698c0-1.3548-1.1028-2.4579-2.4576-2.4579zm-47.0105-.0837c-1.3308 0-2.4099 1.1028-2.4099 2.4817s1.0791 2.482 2.4099 2.482 2.4098-1.1031 2.4098-2.482-1.079-2.4817-2.4098-2.4817zm-13.59622.0837c-1.29488 0-2.34988 1.0431-2.34988 2.338s1.055 2.3499 2.34988 2.3499 2.33803-1.055 2.33803-2.3499-1.04315-2.338-2.33803-2.338zm93.24182-.5634c-.971 0-1.7983.6233-2.0741 1.8705h4.0884c-.228-1.2231-1.043-1.8705-2.0143-1.8705zm3.9303-6.085.681 2.0015.676-2.0015h.456v2.3673h-.307v-1.3974c0-.0482.002-.1281.004-.2399s.003-.2317.003-.3595l-.676 1.9968h-.318l-.682-1.9968v.0726c0 .0581.002.1462.005.265.003.1189.005.2059.005.2618v1.3974h-.307v-2.3673zm-.746 0v.2821h-.798v2.0852h-.324v-2.0852h-.798v-.2821zm-49.9072-5.6385c4.1515 0 7.7733 2.2566 9.7131 5.6085h-19.4258c1.9397-3.3519 5.5615-5.6085 9.7127-5.6085zm11.1571-5.37831c.7196-.71962 1.8968-.71962 2.616 0 .7197.71925.7197 1.89641 0 2.61604l-2.7881 2.78817c-.7193.7192-1.8964.7192-2.6161 0l-.0634-.0667c-.6551-.72385-.634-1.85189.0634-2.54934zm-24.8532-.06344c.7239-.65552 1.8519-.63438 2.5494.06344l2.7885 2.78817c.7193.71925.7193 1.89641 0 2.61604-.7196.7192-1.8968.7192-2.616 0l-2.7886-2.78817c-.7192-.71963-.7192-1.89679 0-2.61604zm13.6728-4.93875.0799.00171783c.9809.04222747 1.7699.85758817 1.7699 1.84842217v3.94275c0 1.01761-.8322 1.85014-1.8498 1.85014-1.0173 0-1.8498-.83253-1.8498-1.85014v-3.94275c0-1.017614.8325-1.85014 1.8498-1.85014z" fill="#0f172a"></path>
                    </svg>
                </a>
            </div>
            <div class="mt-8">
                <form method="POST" action="/success" name="subscribe" data-netlify="true">
                    <div class="max-w-md space-y-4">
                        <div>
                            <label for="email-subscribe" class="block text-zinc-300 text-base">Get updates from Tim</label>
                            <div class="mt-1.5 flex items-stretch">
                                <input id="email-subscribe" name="email-subscribe" type="email" class=" w-full px-5 py-2 bg-gray-200/90 text-zinc-900 border-transparent rounded-l" placeholder="email">
                                <button class="btn px-3 text-white bg-gray-50/10 hover:bg-slate-950/10 border border-slate-100/10  rounded-r">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="sm:w-5/12 sm:-top-6 sm:-right-6 mt-10 sm:mt-0">
            @include('_partials.feature')
        </div>
    </section>

    <!-- updates/reflections -->
    <section id="updates" class="lg:flex max-w-6xl mx-auto px-6 py-16">
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

        <div class="lg:w-1/2 lg:ml-12">
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
    </section>

    <!-- journey -->
    <section id="journey" class="bg-zinc-950/30 px-6 py-16">
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
    <section id="contact" class="px-6 py-16">
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
