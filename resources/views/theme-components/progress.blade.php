@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Progress',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Progress" :breadcrumbs="$breadcrumbs">     
    </x-layout.page>
</x-layout.master>
