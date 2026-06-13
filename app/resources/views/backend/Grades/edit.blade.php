<x-modal id="grade-edit-{{ $grade->id }}" title="{{ trans('Grades.title') }}" icon="pencil" class="text-yellow-900 w-4 h-4" can="grade-edit" variant="warning">
    <slot>
        <form action="{{ route('grade.update') }}" method="POST" id="grade-edit-{{ $grade->id }}">
            @csrf
            <input type="hidden" name="id" value="{{ $grade->id }}">

            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Grades.name') }}</label>
                    <input type="text" name="name" value="{{ $grade->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Grades.select_res') }}</label>
                    <select multiple name="user_id[]" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 tom-select" >
                        @foreach ($data['users'] as $user)
                            <option value="{{ $user->id }}" {{ $grade->users->contains($user) ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach

                    </select>
                </div>
            </div>

        </form>
    </slot>
</x-modal>
