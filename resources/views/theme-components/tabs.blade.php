@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Tabs',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Tabs" :breadcrumbs="$breadcrumbs">
      
    </x-layout.page>
</x-layout.master>
