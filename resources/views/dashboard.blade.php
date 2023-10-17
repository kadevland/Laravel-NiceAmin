@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Dashboard',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Dashboard" :breadcrumbs="$breadcrumbs">
       
    </x-layout.page>
</x-layout.master>
