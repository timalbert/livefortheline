@extends('_layouts.main')

@section('body')
<div class="max-w-4xl prose:dark prose-xl prose-white prose-a:text-yellow-500 hover:prose-a:text-zinc-500 hover:prose-a:border-b hover:prose-a:border-zinc-500 pb-12 px-6 mt-10 mx-auto">
    <div class="text-xl leading-relaxed">
        <div class="">
            <h1 class="not-prose font-serif text-7xl mt-1.5">Now</h1>
            <p class="leading-normal text-zinc-300 my-3">This is a <a href="https://nownownow.com/about">now page</a>, and right now I'm currently ...</p>

            <p>Volunteering with <a href="provenanceprecisionmedicine.org">The Provenance Foundation</a>, <a href="https://www.patricesurley.com">Revitalized Health with Patrice</a> and <a href="https://drmaryjodimilia.com">Dr. Mary Jo Dimilla</a>. Check out their patient-centered work!</p>
        </div>

        <section class="my-8">
            <h3>Reading</h3>
            <ul class="list-disc">
                <li><a href="http://bakerpublishinggroup.com/books/a-day-s-journey/415271">A Day's Journey: Stories of Hope and Death-Defying Joy</a> (Tim Keesee)</li>
                <li><a href="https://www.crossway.org/books/dark-clouds-deep-mercy-tpb/">Dark Clouds, Deep Mercy: Discovering the Grace of Lament</a> (Mark Vroegop)</li>
                <li><a href="https://reasonabletheology.org/wp-content/uploads/Redemptive-Historical-Bible-Reading-Plan.pdf">Redemptive-Historical Bible Reading Plan</a></li>
            </ul>

            <p class="text-base text-right mt-8">Last updated at {{ date("F d, Y", $page->getModifiedTime()) }}
        </section>
    </div>
</div>
@endsection
