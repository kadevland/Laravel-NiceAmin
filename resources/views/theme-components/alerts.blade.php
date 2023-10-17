@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Alerts',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Alerts" :breadcrumbs="$breadcrumbs">
        <div class="row">
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Default">
                        <x-alert>A simple primary alert—check it out!</x-alert>
                        <x-alert color="secondary">A simple secondary alert—check it out!</x-alert>
                        <x-alert color="success">A simple success alert—check it out!</x-alert>
                        <x-alert color="danger">A simple danger alert—check it out!</x-alert>
                        <x-alert color="warning">A simple warning alert—check it out!</x-alert>
                        <x-alert color="info">A simple info alert—check it out!</x-alert>
                        <x-alert color="light">A simple light alert—check it out!</x-alert>
                        <x-alert color="dark">A simple dark alert—check it out!</x-alert>
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="With Icon">
                        <x-alert icon="bi-star">A simple primary alert with icon—check it out!</x-alert>
                        <x-alert color="secondary" icon="bi-collection">A simple secondary alert with icon—check it out!</x-alert>
                        <x-alert color="success" icon="bi-check-circle">A simple success alert with icon—check it out!</x-alert>
                        <x-alert color="danger" icon="bi-bi-exclamation-octagon">A simple danger alert with icon—check it out!</x-alert>
                        <x-alert color="warning" icon="bi-exclamation-triangle">A simple warning alert with icon—check it out!</x-alert>
                        <x-alert color="info" icon="bi-info-circle">A simple info alert with icon—check it out!</x-alert>
                        <x-alert color="dark" icon="bi-folder">A simple dark alert with icon—check it out!</x-alert>
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="Outlined">

                        <x-alert style="outline">A simple primary outlined alert—check it out!</x-alert>
                        <x-alert style="outline" color="secondary">A simple secondary outlined alert—check it out!</x-alert>
                        <x-alert style="outline" color="success">A simple success outlined alert—check it out!</x-alert>
                        <x-alert style="outline" color="danger">A simple danger outlined alert—check it out!</x-alert>
                        <x-alert style="outline" color="warning">A simple warning outlined alert—check it out!</x-alert>
                        <x-alert style="outline" color="info">A simple info outlined alert—check it out!</x-alert>
                        <x-alert style="outline" color="light">A simple light outlined alert—check it out!</x-alert>
                        <x-alert style="outline" color="dark">A simple dark outlined alert—check it out!</x-alert>
                    </x-card-body>
                </x-card>
            </div>
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Default Solid Color">
                        <x-alert style="solid">A simple primary alert with solid color—check it out!</x-alert>
                        <x-alert style="solid" color="secondary">A simple secondary alert with solid color—check it out!</x-alert>
                        <x-alert style="solid" color="success">A simple success alert with solid color—check it out!</x-alert>
                        <x-alert style="solid" color="danger">A simple danger alert with solid color—check it out!</x-alert>
                        <x-alert style="solid" color="warning">A simple warning alert with solid color—check it out!</x-alert>
                        <x-alert style="solid" color="info">A simple info alert with solid color—check it out!</x-alert>
                        <x-alert style="solid" color="light">A simple light alert with solid color—check it out!</x-alert>
                        <x-alert style="solid" color="dark">A simple dark alert with solid color—check it out!</x-alert>
                    </x-card-body>
                </x-card>
                <x-card>
                    <x-card-body title="With Heading & Separator">

                        <x-alert>
                            <x-slot:header>
                                Primary Heading
                            </x-slot>                            
                            Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.
                            <x-slot:footer>
                                Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.
                            </x-slot>
                        </x-alert>
                        <x-alert color="secondary">
                            <x-slot:header>
                                Secondary Heading
                            </x-slot>
                            Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.
                            <x-slot:footer>
                                Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.
                            </x-slot>
                        </x-alert>
                        <x-alert color="success">
                            <x-slot:header>
                                Success Heading
                            </x-slot>
                            Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.
                            <x-slot:footer>
                                Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.
                            </x-slot>
                        </x-alert>
                        <x-alert color="danger">
                            <x-slot:header>
                                Danger Heading
                            </x-slot>
                            Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.
                            <x-slot:footer>
                                Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.
                            </x-slot>
                        </x-alert>
                        <x-alert color="warning">
                            <x-slot:header>
                                Warning Heading
                            </x-slot>
                            Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.
                            <x-slot:footer>
                                Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.
                            </x-slot>
                        </x-alert>
                        <x-alert color="info">
                            <x-slot:header>
                                Info Heading
                            </x-slot>
                            Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.
                            <x-slot:footer>
                                Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.
                            </x-slot>
                        </x-alert>
                        <x-alert color="light">
                            <x-slot:header>
                                Lignt Heading
                            </x-slot>
                            Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.
                            <x-slot:footer>
                                Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.
                            </x-slot>
                        </x-alert>
                        <x-alert color="dark">
                            <x-slot:header>
                                Dark Heading
                            </x-slot>
                            Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.
                            <x-slot:footer>
                                Temporibus quis et qui aspernatur laboriosam sit eveniet qui sunt.
                            </x-slot>
                        </x-alert>

                    </x-card-body>
                </x-card>
            </div>
        </div>
    </x-layout.page>
</x-layout.master>
