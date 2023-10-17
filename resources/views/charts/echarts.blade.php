@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Charts',
        'ECharts',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="ECharts" :breadcrumbs="$breadcrumbs">      
    </x-layout.page>
</x-layout.master>
