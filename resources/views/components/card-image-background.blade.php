<div class="card">
    @isset($src)
        <img src="{{ $src }}" class="card-img-top" alt="{{ $alt ?? '' }}">
    @endisset
    <div class="card-img-overlay">
        {{ $slot }}
    </div>
</div>
