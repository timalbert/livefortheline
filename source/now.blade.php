------
extends: _layouts.main
section: content
title: Now
items: [
    ["book", "Introducing Covenant Theology", "Michael Horton", "https://amzn.to/4e9d6p2"],
    ["book", "How to Tell the Truth: The Story of How God Saved Me to Win Hearts--Not Just Arguments", "Preston Perry", "https://amzn.to/3yREQON"],
    ["book", "A Day's Journey", "Tim Keesee", "https://amzn.to/4c6kG1S"],
    ["video", "Not Ashamed: Paul's Letter to the Romans", "W. Robert Godfrey", "https://connect.ligonier.org/library/not-ashamed-pauls-letter-to-the-romans-203855/608445/about/"],
    ["music", "All That I Ever Did", "Mike Cavanaugh", "https://open.spotify.com/album/5TWd2HKFNGORGEC7k1mzSt?si=6ip1Qr1oTZSTmIt0tjH0_g"],
    ["money", "MyMojo Health Meter", "Keto Mojo", "https://keto-mojo.com"],
    ["money", "Sencha Green Tea", "Sei Mee Tea", "https://groundgreentea.com"],
    ["money", "Meat Delivery Service", "Good Ranchers", "https://www.gr0zpw2st.com/3XLJTL/3QQG7/"],
    ["money", "Meal Planning", "Plan To Eat", "https://app.plantoeat.com/ref/7254107407"],
]
---

@extends('_layouts.main')

@section('body')
    <div class="max-w-4xl pb-12 px-6 mt-10 mx-auto">
        <div class="text-xl leading-relaxed">
            <div class="prose:dark prose-xl prose-white prose-a:text-yellow-500 hover:prose-a:text-zinc-500 hover:prose-a:border-b hover:prose-a:border-zinc-500">
                <h1 class="not-prose font-serif text-7xl mt-1.5">Now</h1>
                <p class="leading-normal text-zinc-300 my-3">I'm Tim and this what I am up to right <a href="https://nownownow.com/about">now</a>.</p>

                <ul class="list-none p-0">
                    <li>📍 <b>Location</b>
                        <ul class="m-0 leading-snug list-disc list-inside">
                            <li>Hyde Park, MA 🍀</li>
                            <li>living by faith alongside my wife Kate and 3 boys:
                            <ul>
                                <li>Caleb 🏀 (8)</li>
                                <li>Nathan 🧩 (6)</li>
                                <li>Matthew 🎲 (3)</li>
                            </ul>
                        </ul>
                    </li>
                    <li class="mt-10">⚕️ <b>Treatment</b>
                        <ul class="m-0 leading-snug">
                            <li>🇬🇧 DCvax 5th dose July 5th</li>
                            <li>🗽 Completed <a href="https://www.alpheusmedical.com">Alpheus Medical's</a> Sonodynamic Brain Cancer Clinical Trial</li>
                        </ul>
                    </li>
                    <li class="mt-10">📣 <b>Volunteering</b>
                        <ul class="m-0 leading-snug list-disc list-inside">
                            <li><a href="https://provenanceprecisionmedicine.org">Provenance Precision Medicine Foundation</a></li>
                            <li><a href="https://www.patricesurley.com">Revitalized Health with Patrice</a></li>
                            <li><a href="https://drmaryjodimilia.com">Dr. Mary Jo Dimilia</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <section class="my-8">
                @if($page->items)
                    <h2 class="font-semibold text-2xl mt-10">Enjoying:</h2>
                    <ul class="mt-4 list-inside">
                        @foreach($page->items as $item)
                            <li class="block mt-3">
                                <a class="flex hover:text-yellow-500" href="{{ $item[3] }}">
                                    <span class="text-yellow-500">
                                        @include('_icons.'.$item[0])
                                    </span>
                                    <span class="ml-4 font-mono text-base">{{ $item[1] }} ({{ $item[2] }})</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <p class="text-base text-right text-gray-200 mt-8">Last updated at {{ date("F d, Y", $page->getModifiedTime()) }}
            </section>
        </div>
    </div>
@endsection
