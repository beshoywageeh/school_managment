@props(['class'])
<button class="btn btn-{{$class}}" {{ $attributes }} type="button">
    {{$slot}}
</button>
