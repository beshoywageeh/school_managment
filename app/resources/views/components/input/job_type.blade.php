<div class="mb-4">
    <label for="worker_type" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('general.worker_type') }}</label>
    <select id="worker_type" name="worker_type" {{ $attributes->class(['w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all bg-white']) }}>
        <option value="" selected>{{ trans('general.worker_type') }}</option>
        @foreach (\App\Enums\Jobs_types::cases() as $type)
            <option value="{{ $type->value }}" @selected(old('worker_type', $type->value) == $type->value)>{{ $type->lang() }}</option>
        @endforeach
    </select>
    @error('type')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
