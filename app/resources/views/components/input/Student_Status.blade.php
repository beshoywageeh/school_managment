<div class="mb-4">
    <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.status') }}</label>
    <select id="worker_type" name="student_status" {{ $attributes->class(['w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all bg-white']) }}>
        <option value="" selected>{{ trans('student.status') }}</option>
        @foreach (\App\Enums\Student_Status::cases() as $status)
            <option value="{{ $status->value }}" @selected(old('type', $status->value) == $status->value)>{{ $status->lang() }}</option>
        @endforeach
    </select>
    @error('type')
        <p class="mt-2 text-sm text-danger">{{ $message }}</p>
    @enderror
</div>
