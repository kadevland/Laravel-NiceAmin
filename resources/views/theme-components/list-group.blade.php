@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'List Group',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="List Group" :breadcrumbs="$breadcrumbs">     
    </x-layout.page>
</x-layout.master>
