@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Buttons',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Buttons" :breadcrumbs="$breadcrumbs">
        <div class="row">
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Default Buttons">

                        <x-btn>Primary</x-btn>
                        <x-btn color="secondary">Secondary</x-btn>
                        <x-btn color="success">Success</x-btn>
                        <x-btn color="danger">Danger</x-btn>
                        <x-btn color="warning">Warning</x-btn>
                        <x-btn color="info">Info</x-btn>
                        <x-btn color="light">Light</x-btn>
                        <x-btn color="dark">Dark</x-btn>
                        <x-btn color="link">Link</x-btn>

                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Rounded Buttons">

                        <x-btn style="rounded">Primary</x-btn>
                        <x-btn style="rounded" color="secondary">Secondary</x-btn>
                        <x-btn style="rounded" color="success">Success</x-btn>
                        <x-btn style="rounded" color="danger">Danger</x-btn>
                        <x-btn style="rounded" color="warning">Warning</x-btn>
                        <x-btn style="rounded" color="info">Info</x-btn>
                        <x-btn style="rounded" color="light">Light</x-btn>
                        <x-btn style="rounded" color="dark">Dark</x-btn>
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Icon Buttons">                        
                        <x-btn icon="bi-star">With Text</x-btn>  
                        <x-btn color="secondary" icon="bi-collection"></x-btn>                      
                        <x-btn color="success" icon="bi-check-circle"></x-btn>
                        <x-btn color="danger" icon="bi-exclamation-octagon"></x-btn>
                        <x-btn color="warning" icon="bi-exclamation-triangle"></x-btn>
                        <x-btn color="info" icon="bi-info-circle"></x-btn>
                        <x-btn color="dark" icon="bi-folder"></x-btn>
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Button Groups">

                        <x-btn-group>
                            <x-btn >Left</x-btn>  
                            <x-btn >Middle</x-btn>  
                            <x-btn >Right</x-btn>  
                        </x-btn-group>

                        <x-btn-group>
                            <x-btn color="danger">Left</x-btn>  
                            <x-btn color="warning">Middle</x-btn>  
                            <x-btn color="success">Right</x-btn>  
                        </x-btn-group>

                        <x-btn-group>
                            <x-btn style="outline" >Left</x-btn>  
                            <x-btn style="outline" >Middle</x-btn>  
                            <x-btn style="outline" >Right</x-btn>  
                        </x-btn-group>
                      
                    </x-card-body>
                </x-card>
            </div>
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Outline Buttons">

                        <x-btn style="outline">Primary</x-btn>
                        <x-btn style="outline" color="secondary">Secondary</x-btn>
                        <x-btn style="outline" color="success">Success</x-btn>
                        <x-btn style="outline" color="danger">Danger</x-btn>
                        <x-btn style="outline" color="warning">Warning</x-btn>
                        <x-btn style="outline" color="info">Info</x-btn>
                        <x-btn style="outline" color="light">Light</x-btn>
                        <x-btn style="outline" color="dark">Dark</x-btn>
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Button Sizes">

                        <x-btn size="sm">Small</x-btn>
                        <x-btn color="secondary">Normal</x-btn>
                        <x-btn size="lg" color="success">Large</x-btn>
                        <x-btn size="sm" color="danger" style="outline">Small</x-btn>
                        <x-btn color="warning" style="outline">Normal</x-btn>
                        <x-btn size="lg" color="info" style="outline">Large</x-btn>

                        <x-btn-block class="mt-3">
                            <x-btn >Block Button</x-btn>
                        </x-btn-block>

                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Button States">
                        <x-btn>Normal</x-btn>
                        <x-btn disabled>Disabled</x-btn>
                        <x-btn style="outline" >Normal</x-btn>
                        <x-btn style="outline" disabled>Disabled</x-btn>
                    </x-card-body>
                </x-card>
            </div>
        </div>
    </x-layout.page>
</x-layout.master>
