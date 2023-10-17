<span {{ $attributes->merge(['class' => $classBadge]) }}>
    @isset($icon)
        <x-icon :name="$icon" @class(['me-1' => $slot->isNotEmpty()]) />
    @endisset
    {{ $slot }}
</span>
