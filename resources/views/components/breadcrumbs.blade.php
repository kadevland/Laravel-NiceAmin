<nav @class($navClass()) @style([sprintf('--bs-breadcrumb-divider: \'%s\';',$divider) => !is_null($divider)])>
    @if (count($parts))
        <ol class="breadcrumb">
            @foreach ($parts as $part)
                @if (is_array($part))
                    <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                      <a href="{{ data_get($part, 'href', '#') }}">
                        @isset($part['icon'])
                        <x-icon name="{{ data_get($part, 'icon', '') }}"></x-icon>
                        @else
                        {{ data_get($part, 'label', '') }}
                        @endisset
                        
                      </a>
                    </li>
                @else
                    <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">{{ $part }}</li>
                @endif
            @endforeach

        </ol>
    @endif
</nav>
