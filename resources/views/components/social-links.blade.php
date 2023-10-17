@props(['twitter', 'facebook', 'instagram', 'linkedin'])

<div {{ $attributes->merge(['class' => 'social-links']) }}>

    @isset($twitter)
        <a href="{{ $twitter }}" class="twitter"><x-icon name="bi-twitter"/></a>
    @endisset
    @isset($facebook)
        <a href="{{ $facebook }}" class="facebook"><x-icon name="bi-facebook"/></a>
    @endisset
    @isset($instagram)
        <a href="{{ $instagram }}" class="instagram"><x-icon name="bi-instagram"/></a>
    @endisset
    @isset($linkedin)
        <a href="{{ $linkedin }}" class="linkedin"><x-icon name="bi-linkedin"/></a>
    @endisset
</div>
