@props(['parent'])
<x-dropdown-table :buttonText="trans('general.buttons.action')">
    @can('parents-info')
        <a href="{{ route('parents.show', $parent) }}" x-on:click="open = false"
            class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg text-gray-700 hover:bg-gray-50">
            <x-hero-icon name="information-circle" class="w-5 h-5 text-gray-400" />
            {{ trans('general.buttons.view') }}
        </a>
    @endcan
    @can('parents-edit')
        <a href="{{ route('parents.edit', $parent) }}" x-on:click="open = false"
            class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg text-gray-700 hover:bg-gray-50">
            <x-hero-icon name="pencil" class="w-5 h-5 text-gray-400" />
            {{ trans('general.buttons.edit') }}
        </a>
    @endcan
    @can('parents-delete')
        <form action="{{ route('parents.destroy', $parent) }}" method="POST" class="w-full"
            x-on:submit="open = false; confirmation(event)">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="w-full flex items-center gap-2 px-3 py-2 text-sm rounded-lg text-right transition-colors text-danger hover:bg-danger/10">
                <x-hero-icon name="trash" class="w-5 h-5 text-danger" />
                {{ trans('general.buttons.delete') }}
            </button>
        </form>
    @endcan
</x-dropdown-table>
