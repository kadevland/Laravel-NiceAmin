@isset($href)
    <a {{ $attributes->merge(['class' => $classBtn, 'href' => $href]) }}">
        @isset($icon)
            <x-icon :name="$icon" @class(['me-1' => $slot->isNotEmpty()]) />
        @endisset
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classBtn, 'type' => $typeBtn]) }}>
        @isset($icon)
            <x-icon :name="$icon" @class(['me-1' => $slot->isNotEmpty()]) />
        @endisset
        {{ $slot }}
    </button>
@endisset
