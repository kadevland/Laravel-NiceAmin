@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Accordion',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Accordion" :breadcrumbs="$breadcrumbs">      
    </x-layout.page>
</x-layout.master>
