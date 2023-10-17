@props(['title', 'breadcrumbs'])


<div class="pagetitle">
    @isset($title)
        <h1>{{ $title }}</h1>
    @endisset

    @isset($breadcrumbs)
        <x-breadcrumbs :parts="$breadcrumbs" />
    @endisset
</div>

<section {{ $attributes->merge(['class' => 'section']) }}>
    {{ $slot }}
</section>
