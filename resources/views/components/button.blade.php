@props(['class','type'])
<button class="btn btn-{{$class}}" {{ $attributes }} type="{{$type}}">
    {{$slot}}
</button>
