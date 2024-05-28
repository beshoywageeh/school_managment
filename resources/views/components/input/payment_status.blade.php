<div class="col">
<label for="gender" class="">{{ trans('general.worker_type') }}</label>
    <select id="worker_type" class="form-control" name="type" {{$attributes}}>
        <option value="" selected>{{ trans('general.worker_type') }}</option>
        @foreach(\App\Enums\Jobs_types::cases() as $job_type)
            <option value="{{ $job_type->value }}" @selected(old('type', $job_type->value) == $job_type->value)>{{ $job_type->lang() }}</option>
        @endforeach
    </select>
</div>
