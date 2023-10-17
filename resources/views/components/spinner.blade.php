<div {{ $attributes->merge(['class' => $classSpinner, 'style' => $styleSize, 'role' => 'status']) }}>
    @if (mb_strlen($text))
        <span class="visually-hidden">{{ $text }}</span>
    @endif
</div>
