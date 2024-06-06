@props(['class','type'])
<button class="button btn-sm btn-{{$class}}" {{ $attributes }} type="{{$type}}">
    {{$slot}}
</button>
