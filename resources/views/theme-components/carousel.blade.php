@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Carousel',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Carousel" :breadcrumbs="$breadcrumbs">      
    </x-layout.page>
</x-layout.master>
