@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Forms',
        'Validation',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Form Validation" :breadcrumbs="$breadcrumbs">       
    </x-layout.page>
</x-layout.master>
