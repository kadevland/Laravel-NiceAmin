@props(['src', 'alt'])

<div {{ $attributes->merge(['class' => 'row g-0']) }}>
    <div class="col-md-8">
        {{ $slot }}
    </div>
    <div class="col-md-4">

        @isset($src)
            <img src="{{ $src }}" class="img-fluid rounded-end" alt="{{ $alt ?? '' }}">
        @endisset
    </div>
</div>
