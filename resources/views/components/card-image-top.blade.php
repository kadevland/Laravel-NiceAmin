@isset($src)
    <img src="{{ $src }}" class="card-img-top" alt="{{ $alt ?? '' }}">
@endisset
{{ $slot }}
