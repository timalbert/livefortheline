---
items: [
    ["book", "A Day's Journey: Stories of Hope and Death-Defying Joy", "Tim Keesee", "http://bakerpublishinggroup.com/books/a-day-s-journey/415271"],
    ["book", "Dark Clouds, Deep Mercy: Discovering the Grace of Lament", "Mark Vroegop", "https://www.crossway.org/books/dark-clouds-deep-mercy-tpb/"],
    ["music", "Challies' Favorite Songs of 2023", "Spotify", "https://open.spotify.com/playlist/3bjWB2yqxipS3x8crkua2Y?si=b80943d68add4c07"],
    ["article", "Press-pulse: a novel therapeutic strategy for the metabolic management of cancer", "Thomas N. Seyfried", "https://nutritionandmetabolism.biomedcentral.com/articles/10.1186/s12986-017-0178-2"],
    ["money", "Sei Mee Tea", "My Freen Tea source", "https://groundgreentea.com"],
    ["book", "Redemptive-Historical Bible Reading Plan", "ESV", "https://reasonabletheology.org/wp-content/uploads/Redemptive-Historical-Bible-Reading-Plan.pdf"],
]
---

@extends('_layouts.main')

@section('body')
    <div class="max-w-4xl pb-12 px-6 mt-10 mx-auto">
        <div class="text-xl leading-relaxed">
            <div class="prose:dark prose-xl prose-white prose-a:text-yellow-500 hover:prose-a:text-zinc-500 hover:prose-a:border-b hover:prose-a:border-zinc-500">
                <h1 class="not-prose font-serif text-7xl mt-1.5">Now</h1>
                <p class="leading-normal text-zinc-300 my-3">My name is Tim and this what I am doing right <a href="https://nownownow.com/about">now</a>.</p>

                <p>Living  in Hyde Park, MA with my beautiful wife Kate, and 3 young, energetic boys Caleb (7), Nathan (5), and Matthew (3). Volunteering with <a href="https://provenanceprecisionmedicine.org">The Provenance Foundation</a>, <a href="https://www.patricesurley.com">Revitalized Health with Patrice</a> and <a href="https://drmaryjodimilia.com">Dr. Mary Jo Dimilla</a>. Check out their patient-centered work!</p>
            </div>

            <section class="my-8">
                @if($page->items)
                    <h2 class="font-semibold text-2xl mt-10">Enjoying:</h2>
                    <ul class="mt-4">
                        @foreach($page->items as $item)
                            <li class="inline-block mt-3">
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
