@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Pages',
        'Login',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Login" :breadcrumbs="$breadcrumbs">       
    </x-layout.page>
</x-layout.master>
