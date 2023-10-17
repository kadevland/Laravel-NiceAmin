@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Charts',
        'Chart.js',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Chart.js" :breadcrumbs="$breadcrumbs">      
    </x-layout.page>
</x-layout.master>
