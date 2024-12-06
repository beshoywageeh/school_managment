<div class="col">
    <label for="gender" class="">{{ trans('general.gender') }}</label>
    <select id="gender" class="custom-select" name="gender" {{$attributes}}>
        <option value="" selected disabled>{{ trans('general.gender') }}</option>
        @foreach(\App\Enums\UserGender::cases() as $gender)
            <option value="{{ $gender->value }}" @selected(old('gender', $gender->value) == $gender->value)>{{ $gender->lang() }}</option>
        @endforeach
    </select>
    @error('gender')
    <div class="mt-1 alert alert-danger">{{ $message }}</div>
    @enderror
</div>
