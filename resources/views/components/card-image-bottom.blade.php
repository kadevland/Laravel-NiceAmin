{{ $slot }}
@isset($src)
    <img src="{{ $src }}" class="card-img-bottom" alt="{{ $alt ?? '' }}">
@endisset
