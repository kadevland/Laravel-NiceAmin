
<x-dynamic-component :component="$componentImage" :src="$src" :alt="$alt"  {{ $attributes->except(['src','alt']) }}>
{{ $slot }}
</x-dynamic-component>
