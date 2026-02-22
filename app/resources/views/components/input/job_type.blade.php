<div class="col">
<label for="" class="">{{ trans('general.worker_type') }}</label>
    <select id="worker_type" class="custom-select" name="worker_type" {{$attributes}}>
        <option value="" selected>{{ trans('general.worker_type') }}</option>
        @foreach(\App\Enums\Jobs_types::cases() as $type)
            <option value="{{ $type->value }}" @selected(old('type', $type->value) == $type->value)>{{ $type->lang() }}</option>
        @endforeach
    </select>
    @error('type')
    <div class="mt-1 alert alert-danger">{{ $message }}</div>
    @enderror
</div>
