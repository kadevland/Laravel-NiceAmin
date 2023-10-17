@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Breadcrumbs',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Breadcrumbs" :breadcrumbs="$breadcrumbs">
        <div class="row">
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Default Breadcrumbs">
                    </x-card-body>
                </x-card>
            </div>
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Default Breadcrumbs">
                    </x-card-body>
                </x-card>
            </div>
        </div>
    </x-layout.page>
</x-layout.master>
