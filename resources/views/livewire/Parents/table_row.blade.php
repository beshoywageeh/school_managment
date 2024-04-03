<tr>
    <td> {{ $loop->iteration }}</td>
    <td>{{ $parent->Father_Name }}</td>
    <td>{{ $parent->Father_Phone }}</td>
    <td>{{ $parent->Mother_Name }}</td>
    <td>{{ $parent->Mother_Phone }}</td>
    <td>{{ $parent->Address }}</td>

    <td>
        <x-drop-down_-table edit delete info :data="$parent->id">
        </x-drop-down_-table>
       

    </td>
</tr>
