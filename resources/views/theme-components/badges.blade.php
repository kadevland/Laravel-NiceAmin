@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Badges',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Badges" :breadcrumbs="$breadcrumbs">


        <div class="row">
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Default Badges">
                    <x-badge>Primary</x-badge> 
                    <x-badge color="secondary">Secondary</x-badge> 
                    <x-badge color="success">Success</x-badge> 
                    <x-badge color="danger">Danger</x-badge> 
                    <x-badge color="warning">Warning</x-badge> 
                    <x-badge color="info">Info</x-badge> 
                    <x-badge color="light">Light</x-badge> 
                    <x-badge color="dark">Dark</x-badge> 

                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Pill Badges">
                        <x-badge style="pill">Primary</x-badge> 
                        <x-badge style="pill" color="secondary">Secondary</x-badge> 
                        <x-badge style="pill" color="success">Success</x-badge> 
                        <x-badge style="pill" color="danger">Danger</x-badge> 
                        <x-badge style="pill" color="warning">Warning</x-badge> 
                        <x-badge style="pill" color="info">Info</x-badge> 
                        <x-badge style="pill" color="light">Light</x-badge> 
                        <x-badge style="pill" color="dark">Dark</x-badge> 
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Icon Badges">
                        <x-badge icon="bi-star">Primary</x-badge> 
                        <x-badge icon="bi-collection" color="secondary">Secondary</x-badge> 
                        <x-badge icon="bi-check-circle" color="success">Success</x-badge> 
                        <x-badge icon="bi-exclamation-octagon" color="danger">Danger</x-badge> 
                        <x-badge icon="bi-exclamation-triangle" color="warning">Warning</x-badge> 
                        <x-badge icon="bi-info-circle" color="info">Info</x-badge> 
                        <x-badge icon="bi-star" color="light">Light</x-badge> 
                        <x-badge icon="bi-folder" color="dark">Dark</x-badge>                      
    
                    </x-card-body>
                </x-card>
            </div>
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Border Badges">
                        <x-badge style="border">Primary</x-badge> 
                        <x-badge style="border" color="secondary">Secondary</x-badge> 
                        <x-badge style="border" color="success">Success</x-badge> 
                        <x-badge style="border" color="danger">Danger</x-badge> 
                        <x-badge style="border" color="warning">Warning</x-badge> 
                        <x-badge style="border" color="info">Info</x-badge> 
                        <x-badge style="border" color="light">Light</x-badge> 
                        <x-badge style="border" color="dark">Dark</x-badge> 
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Button Badges">

                        <x-btn-badge class="mb-2" number="4">Primary</x-btn-badge> 
                        <x-btn-badge class="mb-2" number="4" color="success">Success</x-btn-badge> 
                        <x-btn-badge class="mb-2" number="4" color="danger">Danger</x-btn-badge> 
                        <x-btn-badge class="mb-2" number="4" color="warning">Warning</x-btn-badge> 
                        <x-btn-badge class="mb-2" number="4" color="info">Info</x-btn-badge> 
                        <x-btn-badge class="mb-2" number="4" color="light">Light</x-btn-badge> 
                        <x-btn-badge class="mb-2" number="4" color="dark">Dark</x-btn-badge> 

                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Heading Badges">

                        <h1>Example h1 heading <x-badge color="primary">Primary</x-badge></h1>
                        <h2>Example h2 heading <x-badge color="secondary">Secondary</x-badge></h2>
                        <h3>Example h3 heading <x-badge color="success">Success</x-badge></h3>
                        <h4>Example h4 heading <x-badge color="danger">Danger</x-badge></h4>
                        <h5>Example h5 heading <x-badge color="warning">Warning</x-badge></h5>
                        <h6>Example h6 heading <x-badge color="info">Info</x-badge></h6>
                    </x-card-body>
                </x-card>
            </div>
        </div>

    </x-layout.page>
</x-layout.master>
