@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Tooltips',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Tooltips" :breadcrumbs="$breadcrumbs">      
    </x-layout.page>
</x-layout.master>
