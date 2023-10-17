@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Charts',
        'ApexCharts',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="ApexCharts" :breadcrumbs="$breadcrumbs">      
    </x-layout.page>
</x-layout.master>
