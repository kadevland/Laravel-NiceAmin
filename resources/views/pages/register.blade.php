@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Pages',
        'Register',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Register" :breadcrumbs="$breadcrumbs">       
    </x-layout.page>
</x-layout.master>
