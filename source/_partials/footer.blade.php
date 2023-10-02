<!-- footer -->
<section id="footer" class="text-center bg-slate-950 px-6 py-4">

    <!-- about -->
    @if(!$page->getPath())
        <div id="about" class="text-center py-4">
            <div class="max-w-3xl border-b border-white/30 mx-auto pb-4">
                <p class="">“Live for the line” was a phrase that my late Uncle Mike would use to illustrate the brevity of life.</p>
                <p class="mt-3">He would compare our lives to a mere dot on a line representing eternity. Life is a "vapors breath" in comparison to eternity. Therefore we should <b class="text-yellow-500 inline-block">live for the line</b>, spending our lives on what is eternally valuable: the glory of God in Jesus Christ (<a class="text-yellow-500"href="https://www.biblegateway.com/passage/?search=John+17%3A3&version=ESV">John 17:3</a>).</p>
                <div class="mt-4 text-sm">
                    <a class="flex justify-center" href="https://vimeo.com/112192201">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-yellow-400 stroke-yellow-400" viewBox="0 0 24 24">
                            <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                        </svg>
                        <p class="ml-1 hover:text-yellow-500">Live for the line by Randy Alcorn.</p>
                    </a>
                </div>
            </div>
        </div>
    @endif

    <div class="sm:flex justify-center text-white font-semibold leading-loose uppercase">
        <a class="border-b border-slate-100/50 mx-2.5 hover:text-yellow-500" href="/">Home</a>
        <a class="border-b border-slate-100/50 mx-2.5 hover:text-yellow-500" href="/#contact">Contact</a>
        <a class="border-b border-slate-100/50 mx-2.5 hover:text-yellow-500" href="/#updates">Updates</a>
        <a class="border-b border-slate-100/50 mx-2.5 hover:text-yellow-500" href="/#journey">Diagnosis</a>
        <a class="border-b border-slate-100/50 mx-2.5 hover:text-yellow-500" class="normal-case" href="https://www.gofundme.com/f/Help-Tim-Fund-Vital-Brain-Cancer-Treatment">GoFundMe</a>
    </div>
</section>
