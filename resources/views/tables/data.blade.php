@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Tables',
        'Data',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Data Tables" :breadcrumbs="$breadcrumbs">      
    </x-layout.page>
</x-layout.master>
