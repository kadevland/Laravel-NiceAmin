@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Pagination',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Pagination" :breadcrumbs="$breadcrumbs">      
    </x-layout.page>
</x-layout.master>
