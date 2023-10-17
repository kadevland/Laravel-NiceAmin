@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Pages',
        'Error 404',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Error 404" :breadcrumbs="$breadcrumbs">       
    </x-layout.page>
</x-layout.master>
