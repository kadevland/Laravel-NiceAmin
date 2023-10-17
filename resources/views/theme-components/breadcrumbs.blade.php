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
                        @php
                            $parts = [
                                [
                                    'href' => route('index'),
                                    'label' => 'Home',
                                ],
                                [
                                    'href' => '#',
                                    'label' => 'Library',
                                ],
                                'Default',
                            ];
                        @endphp
                        <x-breadcrumbs :parts="$parts" />
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Centered">
                        @php
                            $parts = [
                                [
                                    'href' => route('index'),
                                    'label' => 'Home',
                                ],
                                [
                                    'href' => '#',
                                    'label' => 'Library',
                                ],
                                'Centered Position',
                            ];
                        @endphp
                        <x-breadcrumbs :parts="$parts" position="centered" />
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Right Positioned">
                        @php
                            $parts = [
                                [
                                    'href' => route('index'),
                                    'label' => 'Home',
                                ],
                                [
                                    'href' => '#',
                                    'label' => 'Library',
                                ],
                                'Right Position',
                            ];
                        @endphp
                        <x-breadcrumbs :parts="$parts" position="right" />
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="With Home Icon">
                        @php
                            $parts = [
                                [
                                    'href' => route('index'),
                                    'icon' => 'bi bi-house-door',
                                ],
                                [
                                    'href' => '#',
                                    'label' => 'Library',
                                ],
                                'Default',
                            ];
                        @endphp
                        <x-breadcrumbs :parts="$parts" />
                    </x-card-body>
                </x-card>
            </div>
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Breadcrumbs with a page title">
                        <div class="pagetitle">
                            <h1>Page Title</h1>
                            @php
                                $parts = [
                                    [
                                        'href' => route('index'),
                                        'label' => 'Home',
                                    ],
                                    'Components',
                                    'Breadcrumbs',
                                ];
                            @endphp
                            <x-breadcrumbs :parts="$parts" />
                        </div>
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Breadcrumbs with different dividers">
                        @php
                            $parts = [
                                [
                                    'href' => route('index'),
                                    'label' => 'Home',
                                ],
                                [
                                    'href' => '#',
                                    'label' => 'Library',
                                ],
                                'Data',
                            ];
                        @endphp
                        <x-breadcrumbs :parts="$parts" divider=">" />
                        <x-breadcrumbs :parts="$parts" divider="|" />
                        <x-breadcrumbs :parts="$parts" divider="-" />
                        <x-breadcrumbs :parts="$parts" divider="•" />
                        <x-breadcrumbs :parts="$parts" divider="" />
                    </x-card-body>
                </x-card>
            </div>
        </div>
    </x-layout.page>
</x-layout.master>
