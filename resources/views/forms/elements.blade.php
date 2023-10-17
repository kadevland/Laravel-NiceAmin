@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Forms',
        'Elements',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Form Elements" :breadcrumbs="$breadcrumbs">       
    </x-layout.page>
</x-layout.master>
