@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Components',
        'Cards',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Cards" :breadcrumbs="$breadcrumbs">

        <div class="row align-items-top">
            <div class="col-lg-6">
                <x-card>
                    <x-card-body title="Default Card">
                        Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas. Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut. Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
                    </x-card-body>
                </x-card>

                <x-card>
                    <x-card-header>Header</x-card-header>
                    <x-card-body>
                        <x-card-title>Card with header and footer</x-card-title>
                        Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas. Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut. Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
                    </x-card-body>
                    <x-card-footer>Footer</x-card-footer>
                </x-card>
                <x-card>
                    <x-card-image :src="url('assets/img/card.jpg')" position="left">
                        <x-card-body title="Card with an image on left">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </x-card-body>
                    </x-card-image>
                </x-card>
                <x-card>
                    <x-card-image :src="url('assets/img/card.jpg')" position="right">
                        <x-card-body title="Card with an image on right">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </x-card-body>
                    </x-card-image>
                </x-card>


            </div>
            <div class="col-lg-3">

                <x-card>
                    <x-card-image :src="url('assets/img/card.jpg')" position="top">
                        <x-card-body title="Card with an image on top">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </x-card-body>
                    </x-card-image>
                </x-card>
                <x-card>
                    <x-card-image :src="url('assets/img/card.jpg')" position="bottom">
                        <x-card-body title="Card with an image on bottom">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </x-card-body>
                    </x-card-image>
                </x-card>



            </div>
            <div class="col-lg-3">
                <x-card>
                    <x-card-image :src="url('assets/img/card.jpg')" position="background">
                        <x-card-title>Card with an image overlay</x-card-title>
                        <x-card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</x-card-text>
                    </x-card-image>
                </x-card>

                <x-card>
                    <x-card-body title="Card with titles, buttons, and links">
                        <x-card-subtitle>Card subtitle</x-card-subtitle>
                        <x-card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</x-card-text>
                        <x-card-text><x-btn color="primary">Button</x-btn></x-card-text>
                        <x-card-link>Card link</x-card-link>
                        <x-card-link>Another link</x-card-link>

                    </x-card-body>
                </x-card>


                <x-card class="text-center">

                    <x-card-header>
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul> 
                    </x-card-header>

                    <x-card-body title="Special title treatment">

                        <x-card-text>With supporting text below as a natural lead-in to additional content.</x-card-text>
                        <x-btn color="primary">Go somewhere</x-btn>
                    </x-card-body>

                </x-card>
         
            </div>

        </div>

    </x-layout.page>
</x-layout.master>
