<div class="w-full md:w-1/3">
    <label for="gender" class="mb-1 label label-required">{{ trans('general.gender') }}</label>
    <select id="gender" class="select" name="gender" {{$attributes}}>
        <option value="">{{ trans('general.gender') }}</option>
        @foreach(\App\Enums\UserGender::cases() as $gender)
            <option value="{{ $gender->value }}" @selected(old('gender', $gender->value) == $gender->value)>{{ $gender->lang() }}</option>
        @endforeach
    </select>
</div>
