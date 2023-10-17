@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Tables',
        'General',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="General Tables" :breadcrumbs="$breadcrumbs">      
    </x-layout.page>
</x-layout.master>
