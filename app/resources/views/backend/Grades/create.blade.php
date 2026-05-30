<x-modal id="CreateGrade" title="{{ trans('Grades.title') }}" titleButton="{{trans('general.new')}}" can="grade-create" icon="plus" class="text-green-900 w-4 h-4" variant="success">
    <slot>
        <form action="{{ route('grade.store') }}" method="POST" id="CreateGrade">
            @csrf
            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Grades.name') }}</label>
                    <input type="text" name="Grade_Name" value="{{ old('Grade_Name') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Grades.select_res') }}</label>
                    <select multiple name="user_id[]" id="tom-select" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                        @foreach ($data['users'] as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </form>
    </slot>
</x-modal>
