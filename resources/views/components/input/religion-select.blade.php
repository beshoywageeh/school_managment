<select class="select" {{$attributes}}>
    <option value="">{{ trans('Parents.Religion') }}</option>

    @php($religionOptions = [
    'Christian' => trans('Parents.Christian'),
    'Muslim' => trans('Parents.Muslim')
    ])

    @foreach($religionOptions as $value => $label)
    <option value="{{ $value }}">{{ $label }}</option>
    @endforeach
</select>