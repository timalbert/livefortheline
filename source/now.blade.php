---
items: [
    ["book", "A Day's Journey: Stories of Hope and Death-Defying Joy", "Tim Keesee", "http://bakerpublishinggroup.com/books/a-day-s-journey/415271"],
    ["book", "The Voice of the Heart: A Call to Full Living", "Chip Dodd", "https://www.amazon.com/Voice-Heart-Call-Full-Living/dp/098439916X?nodl=1&dplnkId=968fce7d-06fc-458f-b2a4-e5c1dc9e1b80"],
    ["music", "Challies' Favorite Songs of 2023", "Spotify", "https://open.spotify.com/playlist/3bjWB2yqxipS3x8crkua2Y?si=b80943d68add4c07"],
    ["article", "Press-pulse: a novel therapeutic strategy for the metabolic management of cancer", "Thomas N. Seyfried", "https://nutritionandmetabolism.biomedcentral.com/articles/10.1186/s12986-017-0178-2"],
    ["money", "Budget Wi$e", "Financial Coaching", "http://budgetwisefinancialcoaching.com"],
    ["money", "Sencha Green Tea", "Sei Mee Tea", "https://groundgreentea.com"],
    ["book", "Redemptive-Historical Bible Reading Plan", "ESV", "https://reasonabletheology.org/wp-content/uploads/Redemptive-Historical-Bible-Reading-Plan.pdf"],
]
---

@extends('_layouts.main')

@section('body')
    <div class="max-w-4xl pb-12 px-6 mt-10 mx-auto">
        <div class="text-xl leading-relaxed">
            <div class="prose:dark prose-xl prose-white prose-a:text-yellow-500 hover:prose-a:text-zinc-500 hover:prose-a:border-b hover:prose-a:border-zinc-500">
                <h1 class="not-prose font-serif text-7xl mt-1.5">Now</h1>
                <p class="leading-normal text-zinc-300 my-3">I'm Tim and this what I am up to right <a href="https://nownownow.com/about">now</a>.</p>

                <p>📍 Living in Hyde Park, MA 🥶 alongside my wife Kate 🩷 and 3 young, energetic boys Caleb 🏀 (7), Nathan 🧩 (5), and Matthew 🎲 (3).</p>
                <p>📣 Volunteering with <a href="https://provenanceprecisionmedicine.org">The Provenance Foundation</a>, <a href="https://www.patricesurley.com">Revitalized Health with Patrice</a> and <a href="https://drmaryjodimilia.com">Dr. Mary Jo Dimilla</a>. Check out their patient-centered work!</p>
                <p>⚕️ Treatment in Long Island 🗽 Feb 7-8, and London 🇬🇧 Feb 12-14.
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
