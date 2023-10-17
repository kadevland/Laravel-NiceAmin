@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Forms',
        'Layouts',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Form Layouts" :breadcrumbs="$breadcrumbs">       
    </x-layout.page>
</x-layout.master>
