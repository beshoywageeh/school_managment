<div class="btn-group btn-group-sm">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        {{ $buttonText }}
    </button>
    <div class="dropdown-menu">
        @foreach ($items as $item)
            @can($item['can'])
                @if ($item['type'] == 'button')
                    <button class="dropdown-item @if (isset($item['className'])) {{ $item['className'] }} @endif"
                        @if (isset($item['id'])) id="{{ $item['id'] }}" @endif
                        @if (isset($item['onclick'])) onclick="{{ $item['onclick'] }}" @endif data-toggle="modal"
                        @if (isset($item['target'])) data-target="{{ $item['target'] }}" @endif>
                        @if (isset($item['icon']))
                            <i class="{{ $item['icon'] }}"></i>
                        @endif
                        <strong>{{ $item['text'] }}</strong>
                    </button>
                @else
                    <a href="{{ $item['url'] }}"
                        class="dropdown-item @if (isset($item['className'])) {{ $item['className'] }} @endif"
                        @if (isset($item['id'])) id="{{ $item['id'] }}" @endif
                        @if (isset($item['onclick'])) onclick="{{ $item['onclick'] }}" @endif
                        @if (isset($item['target'])) target="{{ $item['target'] }}" @endif>
                        @if (isset($item['icon']))
                            <i class="{{ $item['icon'] }}"></i>
                        @endif
                        <strong>{{ $item['text'] }}</strong>
                    </a>
                @endif
            @endcan
        @endforeach
    </div>
</div>
