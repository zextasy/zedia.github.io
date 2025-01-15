<x-layout>
    <x-slot:title>
        Home
    </x-slot>
 
    @include('_partials.sections.home.jumbotron')

    @include('_partials.sections.home.overview')

    @include('_partials.sections.home.why-chose-us')

    @include('_partials.sections.home.benefits')

    @include('_partials.sections.home.faq')
</x-layout>

