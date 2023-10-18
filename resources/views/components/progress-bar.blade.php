<div {{ $attributes->merge(['class' => 'progress','style'=>$getStyleWrapper()]) }}>
    <div @class($getClass()) @style($getStyle()) role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="{{ $getValueMin() }}" aria-valuemax="{{ $getValueMax() }}">
        @if ($label)
            {{ $getRatioValue() }}%
        @endif
        {{ $slot }}
    </div>
</div>
