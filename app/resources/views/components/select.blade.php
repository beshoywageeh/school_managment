@props(['name', 'label' => ''])
<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
    @endif
    <select
        {{ $attributes->class(['w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all bg-white', 'border-red-500 focus:border-red-500 focus:ring-red-200' => $errors->has($name)])->merge(['name' => $name, 'id' => $name]) }}>
        {{ $slot }}
    </select>
    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
