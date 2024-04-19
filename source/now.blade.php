------
extends: _layouts.main
section: content
title: Now
items: [
    ["music", "All That I Ever Did", "Mike Cavanaugh", "https://open.spotify.com/album/5TWd2HKFNGORGEC7k1mzSt?si=6ip1Qr1oTZSTmIt0tjH0_g"],
    ["book", "When God Doesn't Fix It: Lessons You Never Wanted to Learn, Truths You Can't Live Without", "Laura Story", "https://amzn.to/3TVJLoQ"],
    ["book", "Understanding and Trusting Our Great God: Words from the Wise", "Tim Challies", "https://amzn.to/3W10dGO"],
    ["book", "Coach Builder", "Donald Miller", "https://amzn.to/440IMIj"],
    ["video", "Facing the Last Enemy", "Guy Waters", "https://www.ligonier.org/learn/series/facing-the-last-enemy"],
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
                            <li>Hyde Park, MA 🥶</li>
                            <li>living by faith alongside my wife Kate and 3 boys:
                            <ul>
                                <li>Caleb 🏀 (7)</li>
                                <li>Nathan 🧩 (5)</li>
                                <li>Matthew 🎲 (3)</li>
                            </ul>
                        </ul>
                    </li>
                    <li class="mt-10">⚕️ <b>Treatment</b>
                        <ul class="m-0 leading-snug">
                            <li>🇬🇧 DCvax induction phase April 3rd, 10, and 16th</li>
                            <li>🇩🇪 Immune Monitoring April 15th</li>
                            <li>🗽 Completed <a href="https://www.alpheusmedical.com">Alpheus Medical's</a> Sonodynamic Brain Cancer Clinical Trial</li>
                        </ul>
                    </li>
                    <li class="mt-10">📣 <b>Volunteering</b>
                        <ul class="m-0 leading-snug list-disc list-inside">
                            <li><a href="https://provenanceprecisionmedicine.org">The Provenance Foundation</a></li>
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
