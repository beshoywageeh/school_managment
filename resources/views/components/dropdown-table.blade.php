<div class="btn-group btn-group-sm">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ $buttonText }}
    </button>
    <div class="dropdown-menu" >
        @foreach($items as $item)
        @can($item['can'])
        <a href="{{ $item['url'] }}" class="dropdown-item"
        @if(isset($item['onclick'])) onclick="{{ $item['onclick'] }}" @endif
        @if(isset($item['target'])) target="{{ $item['target'] }}" @endif>
         @if(isset($item['icon']))

             <i class="{{ $item['icon'] }}"></i>
         @endif
         {{ $item['text'] }}
     </a>
        @endcan

        @endforeach
    </div>
</div>

