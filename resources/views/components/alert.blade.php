<div {{ $attributes->merge(['class' => $classAlert, 'role' => 'alert']) }}>

    @isset($header)
        <h4 {{ $header->attributes->class(['alert-heading']) }}>{{ $header }}</h4>
    @endisset

    @isset($icon)
        <x-icon :name="$icon" @class(['me-1' => $slot->isNotEmpty()]) />
    @endisset
    {{ $slot }}

    @isset($footer)
        <hr>
        {{ $footer }}
    @endisset

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
