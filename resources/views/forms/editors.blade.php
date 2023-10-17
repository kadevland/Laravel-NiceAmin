@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Forms',
        'Editors',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Form Editors" :breadcrumbs="$breadcrumbs">       
    </x-layout.page>
</x-layout.master>
