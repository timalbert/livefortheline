---
items: [
    ["book", "When God Doesn't Fix It: Lessons You Never Wanted to Learn, Truths You Can't Live Without", "Laura Story", "https://www.amazon.com/When-God-Doesnt-Fix-Lessons/dp/0718036972#:~:text=In%20When%20God%20Doesn't,use%20us%20in%20extraordinary%20ways"],
    ["video", "Facing the Last Enemy", "Guy Waters", "https://www.ligonier.org/learn/series/facing-the-last-enemy"],
    ["book", "Coach Builder", "Donald Miller", "https://coachbuilder.com/book/"],
    ["music", "Challies' Favorite Songs of 2023", "Spotify", "https://open.spotify.com/playlist/3bjWB2yqxipS3x8crkua2Y?si=b80943d68add4c07"],
    ["money", "Sencha Green Tea", "Sei Mee Tea", "https://groundgreentea.com"],
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
                    <ul class="mt-4">
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
