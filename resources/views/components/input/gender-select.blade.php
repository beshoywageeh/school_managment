<div class="w-full md:w-1/3">
    <label for="gender" class="mb-1 label label-required">{{ trans('general.gender') }}</label>
    <select id="gender" class="select" {{$attributes}}>
        <option value="">{{ trans('general.gender') }}</option>

        @php($religionOptions = [
        'male' => trans('general.male'),
        'female' => trans('general.female')
        ])

        @foreach($religionOptions as $value => $label)
        <option value="{{ $value }}">{{ $label }}</option>
        @endforeach
    </select>
</div>