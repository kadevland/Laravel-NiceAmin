<div {{ $attributes->merge(['class' => 'card-body']) }}>

 

    @isset($title)
        <x-card-title> {{ $title }}</x-card-title>
    @endisset

    {{ $slot }}

 

</div>
