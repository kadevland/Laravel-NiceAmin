@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Progress',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Progress" :breadcrumbs="$breadcrumbs">


        <div class="row">
            <div class="col-lg-6">

                <x-card>
                    <x-card-body title="Default">
                        <!-- Default Progress Bars-->
                        <x-progress-bar value="25" />
                        <x-progress-bar class="mt-3" value="50" />
                        <x-progress-bar class="mt-3" value="75" />
                        <x-progress-bar class="mt-3" value="100" />

                        <!-- End Default Progress Bars-->
                    </x-card-body>
                </x-card>

                <x-card>
                    <x-card-body title="Labels">

                        <!-- Progress Bars with labels-->
                        <x-progress-bar value="25">25%</x-progress-bar>
                        <x-progress-bar class="mt-3" value="50" :label="true" />
                        <x-progress-bar class="mt-3" value="75" :label="true" />
                        <x-progress-bar class="mt-3" value="100" :label="true" />
                        <!-- End Progress Bars with labels -->

                    </x-card-body>
                </x-card>

                <x-card>
                    <x-card-body title="Backgrounds">
                        <!-- Progress Bars with Backgrounds-->

                        <x-progress-bar value="15" />
                        <x-progress-bar class="mt-3" color="success" value="30" />
                        <x-progress-bar class="mt-3" color="info" value="45" />
                        <x-progress-bar class="mt-3" color="warning" value="60" />
                        <x-progress-bar class="mt-3" color="danger" value="75" />
                        <x-progress-bar class="mt-3" color="dark" value="100" />
                        <!-- End Progress Bars with Backgrounds -->
                    </x-card-body>
                </x-card>

            </div>

            <div class="col-lg-6">

                <x-card>
                    <x-card-body title="Height">
                        <p>We only set a height value on the .progress or use property size, so if you change that value the inner .progress-bar will automatically resize accordingl</p>
                        <!-- Progress Bars with heights-->
                        <x-progress-bar value="50" size="sm">size sm</x-progress-bar>
                        <x-progress-bar value="50" class="mt-3" size="lg">size lg</x-progress-bar>
                        <x-progress-bar value="50" class="mt-3" size="xlg">size xlg</x-progress-bar>
                        <x-progress-bar value="50" class="mt-3" size="50px">size 50px</x-progress-bar>
                        <!-- End Progress Bars with heights -->

                    </x-card-body>
                </x-card>

                <x-card>
                    <x-card-body title="Striped Backgrounds">

                        <!-- Progress Bars with Striped Backgrounds-->
                        <x-progress-bar :striped="true" value="15" />
                        <x-progress-bar class="mt-3" :striped="true" color="success" value="30" />
                        <x-progress-bar class="mt-3" :striped="true" color="info" value="45" />
                        <x-progress-bar class="mt-3" :striped="true" color="warning" value="60" />
                        <x-progress-bar class="mt-3" :striped="true" color="danger" value="75" />
                        <x-progress-bar class="mt-3" :striped="true" color="dark" value="100" />
                        <!-- End Progress Bars with Striped Backgrounds -->

                    </x-card-body>
                </x-card>


                <x-card>
                    <x-card-body title="Striped Animated Backgrounds">
                        <!-- Progress Bars with Striped Backgrounds-->
                        <x-progress-bar :striped="true" :animated="true" value="15" />
                        <x-progress-bar class="mt-3" :striped="true" :animated="true" color="success" value="30" />
                        <x-progress-bar class="mt-3" :striped="true" :animated="true" color="info" value="45" />
                        <x-progress-bar class="mt-3" :striped="true" :animated="true" color="warning" value="60" />
                        <x-progress-bar class="mt-3" :striped="true" :animated="true" color="danger" value="75" />
                        <x-progress-bar class="mt-3" :striped="true" :animated="true" color="dark" value="100" />
                        <!-- End Progress Bars with Striped Animated Backgrounds -->
                    </x-card-body>
                </x-card>


            </div>
        </div>
    </x-layout.page>
</x-layout.master>
