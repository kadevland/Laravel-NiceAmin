@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Modal',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Modal" :breadcrumbs="$breadcrumbs">      
    </x-layout.page>
</x-layout.master>
