<x-modal id="CreateGrade" title="{{ trans('Grades.title') }}" titleButton="{{trans('general.new')}}" can="grade-create" icon="plus" class="text-green-900 w-4 h-4" variant="success">
    <slot>
        <form action="{{ route('grade.store') }}" method="POST" id="CreateGrade">
            @csrf
            <div class="p-6">
                <div class="mb-4">
                    <x-input name="Grade_Name" type="text" value="{{ old('Grade_Name') }}">{{ trans('Grades.name') }}</x-input>
                </div>
                <x-select name="user_id[]" label="{{ trans('Grades.select_res') }}" id="tom-select" multiple>
                    @foreach ($data['users'] as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </x-select>
            </div>

        </form>
    </slot>
</x-modal>
