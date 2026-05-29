@props(['type' => 'submit'])

<button type="{{ $type }}"
    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
    {{ $slot }}
</button>
