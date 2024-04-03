<tr>
    <td> {{ $loop->iteration }}</td>
    <td>
        {{ $student->name }}
    </td>
    <td>{{ $student->join_date }}</td>
    <td>{{ $student->user->first_name . ' ' . $student->user->second_name }}</td>
    <td>{{$student->grade->Grade_Name}}</td>
    <td>
        <x-drop-down_-table  :data="$student->id">
        </x-drop-down_-table>

    </td>
</tr>
