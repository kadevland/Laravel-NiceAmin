@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Pages',
        'Contact',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Contact" :breadcrumbs="$breadcrumbs">       
    </x-layout.page>
</x-layout.master>
