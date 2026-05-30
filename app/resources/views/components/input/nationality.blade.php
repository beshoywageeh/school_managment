<div class="mb-4">
    <label for="nationality" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('general.nationality') }}</label>
    <select id="nationality" name="nationality" {{ $attributes->class(['w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all bg-white']) }}>
        <option value="" selected disabled>{{ trans('general.nationality') }}</option>
        @foreach (Cache::remember('nationalities', now()->addDay(), function () {
            return \App\Models\nationality::all();
        }) as $nationality)
            <option value="{{ $nationality->id }}" @selected($nationality->id === 247)>{{ $nationality->name }}</option>
        @endforeach
    </select>
    @error('nationality')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
