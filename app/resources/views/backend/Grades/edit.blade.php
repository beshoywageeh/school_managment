<x-modal id="grade-edit-{{ $grade->id }}" title="{{ trans('Grades.title') }}" icon="pencil" variant="warning" can="grade-edit">
    <slot>
        <form action="{{ route('grade.update') }}" method="POST" id="grade-edit-{{ $grade->id }}">
            @csrf
            <input type="hidden" name="id" value="{{ $grade->id }}">

            <div class="p-6">
                <div class="mb-4">
                    <x-input name="name" type="text" value="{{ $grade->name }}">{{ trans('Grades.name') }}</x-input>
                </div>
                <x-select name="user_id[]" label="{{ trans('Grades.select_res') }}" class="tom-select" multiple>
                    @foreach ($data['users'] as $user)
                        <option value="{{ $user->id }}" {{ $grade->users->contains($user) ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </x-select>
            </div>

        </form>
    </slot>
</x-modal>
