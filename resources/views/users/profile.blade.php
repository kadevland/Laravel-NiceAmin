@php
    $breadcrumbs = [
        [
            'href' => route('index'),
            'label' => 'Home',
        ],
        'Users',
        'Profile',
    ];

@endphp

<x-layout.master>
    <x-layout.page title="Profile" :breadcrumbs="$breadcrumbs" class="profile">

        <div class="row">
            <div class="col-xl-4">
                <x-card>
                    <x-card-body class="profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ url('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                        <h2>Kevin Anderson</h2>
                        <h3>Web Designer</h3>

                        <x-social-links twitter="#" facebook="#" instagram="#" linkedin="#" />

                        
                    </x-card-body>
                    

                </x-card>

            </div>


        </div>

    </x-layout.page>
</x-layout.master>
