<div class="col">
    <label for="gender" class="">{{ trans('general.gender') }}</label>
    <select id="gender" class="form-control" name="gender" {{$attributes}}>
        <option value="" selected>{{ trans('general.gender') }}</option>
        @foreach(\App\Enums\UserGender::cases() as $gender)
            <option value="{{ $gender->value }}" @selected(old('gender', $gender->value) == $gender->value)>{{ $gender->lang() }}</option>
        @endforeach
    </select>
</div>
