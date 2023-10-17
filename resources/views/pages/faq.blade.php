@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Pages',
        'Frequently Asked Questions',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Frequently Asked Questions" :breadcrumbs="$breadcrumbs">       
    </x-layout.page>
</x-layout.master>
