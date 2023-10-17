<x-btn :color="$color" {{ $attributes }}>
    {{ $slot }}
    <span class="badge bg-{{ $bgColor}} text-{{ $color }}">{{ $number }}</span>

</x-btn>
