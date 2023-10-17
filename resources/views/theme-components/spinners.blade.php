@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Spinners',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Spinners" :breadcrumbs="$breadcrumbs">


        <div class="row">
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Border spinner">
                        <p>Use the border spinners for a lightweight loading indicator.</p>

                        <x-spinner />

                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Colors">

                        <x-spinner color="primary" />
                        <x-spinner color="secondary" />
                        <x-spinner color="success" />
                        <x-spinner color="danger" />
                        <x-spinner color="warning" />
                        <x-spinner color="info" />
                        <x-spinner color="light" />
                        <x-spinner color="dark" />


                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Alignment">
                        <p>Use flexbox utilities, float utilities, or text alignment utilities to place spinners exactly where you need them in any situation.</p>

                        <div class="d-flex justify-content-center">
                            <x-spinner />
                        </div>

                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Buttons">
                        <p>Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>


                        <x-btn color="primary" disabled><x-spinner :small="true" /></x-btn>
                        <x-btn color="primary" disabled><x-spinner :small="true" text="" /> Loading...</x-btn>
                        <x-btn color="primary" disabled><x-spinner type="grow" :small="true" /></x-btn>
                        <x-btn color="primary" disabled><x-spinner type="grow" :small="true" text="" /> Loading...</x-btn>

                    </x-card-body>
                </x-card>
            </div>
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Growing spinner">
                        <p>If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
                        <x-spinner type="grow" />

                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Growing Color spinners">

                        <x-spinner type="grow" color="primary" />
                        <x-spinner type="grow" color="secondary" />
                        <x-spinner type="grow" color="success" />
                        <x-spinner type="grow" color="danger" />
                        <x-spinner type="grow" color="warning" />
                        <x-spinner type="grow" color="info" />
                        <x-spinner type="grow" color="light" />
                        <x-spinner type="grow" color="dark" />

                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Sizes">
                        <p>Add <code>:small="true"</code> to make a smaller spinner that can quickly be used within other components. Or, use custom CSS or inline styles or <code> size="...."</code> to change the dimensions as needed.</p>
                        <x-spinner :small="true" />
                        <x-spinner size="30px" />
                        <x-spinner size="40px" />
                        <x-spinner size="50px" />                        
                        <x-spinner type="grow" :small="true" />
                        <x-spinner type="grow" size="30px" />
                        <x-spinner type="grow" size="40px" />
                        <x-spinner type="grow" size="50px" />

                    </x-card-body>
                </x-card>
            </div>
        </div>
    </x-layout.page>
</x-layout.master>
