@extends('_layouts.main')

@section('body')
<div class="max-w-7xl pb-12 px-6 mt-10 mx-auto">
    <div class="text-xl leading-relaxed">
        <div class="text-center">
            <h1 class="font-serif text-5xl mt-1.5">Updates</h1>
        </div>

        <section id="updates" class="mt-12 mx-auto px-6 max-w-7xl lg:mt-16">
            <div class="mt-12 grid grid-cols-2 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                @foreach($updates->reverse() as $update)
                    @include('_partials.card')
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection
