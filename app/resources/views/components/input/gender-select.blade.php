<div class="mb-4">
    <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('general.gender') }}</label>
    <select id="gender" name="gender" {{ $attributes->class(['w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all bg-white']) }}>
        <option value="" selected>{{ trans('general.gender') }}</option>
        @foreach (\App\Enums\UserGender::cases() as $gender)
            <option value="{{ $gender->value }}">{{ $gender->lang() }}</option>
        @endforeach
    </select>
    @error('gender')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
