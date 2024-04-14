------
extends: _layouts.main
section: content
title: Merchandise
---

@section('body')
    <div class="max-w-4xl pb-12 px-6 mt-10 mx-auto">
        <div class="text-xl leading-relaxed">
            <div class="prose:dark prose-xl prose-white prose-a:text-yellow-500 hover:prose-a:text-zinc-500 hover:prose-a:border-b hover:prose-a:border-zinc-500">
                <h1 class="not-prose font-serif text-7xl mt-1.5">Merch</h1>
                <p class="leading-normal text-zinc-300 my-3">A <a href="https://www.playitagainsports.com/locations/dedham-ma">neighborhood sports store</a> offered to create an online shop to sell a few items of "Live for the Line" gear. Even better, a portion of each purchase will go towards Tim's medical expeneses!</p>

                <div class="mt-12 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 xl:gap-x-12 text-center">
                    <div>
                        <h2>Apparel</h2>
                        <a class="block rounded-lg hover:outline outline-offset-2 outline-4 outline-yellow-500" target="_blank" href="https://livefortheline.itemorder.com/shop/category/150960/"><img class="max-w-full rounded-lg not-prose" src="/assets/images/store-apparel.jpg" /></a>
                        <p class="text-base">Sizes for <a target="_blank" href="https://livefortheline.itemorder.com/shop/category/150960/">Men</a>, <a target="_blank" href="https://livefortheline.itemorder.com/shop/category/108173/">Women</a> and <a target="_blank" href="https://livefortheline.itemorder.com/shop/category/124074/">Youth</a>
                    </div>
                    <div>
                        <h2>Accessories</h2>
                        <a class="block rounded-lg hover:outline outline-offset-2 outline-4 outline-yellow-500" target="_blank" href="https://livefortheline.itemorder.com/shop/category/102349/"><img class="max-w-full rounded-lg not-prose" src="/assets/images/store-accessories.jpg" /></a>
                        <p class="text-base"><a target="_blank" href="https://livefortheline.itemorder.com/shop/category/102349/">Drinks</a> and <a target="_blank" href="https://livefortheline.itemorder.com/shop/category/111799/">Hats</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
