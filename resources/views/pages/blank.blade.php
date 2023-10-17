@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Pages',
        'Blank',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Blank Page" :breadcrumbs="$breadcrumbs">
        <div class="row">
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Example Card">
                        <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
                    </x-card-body>
                </x-card>
            </div>
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Example Card">
                        <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
                    </x-card-body>
                </x-card>
            </div>
        </div>
    </x-layout.page>
</x-layout.master>
