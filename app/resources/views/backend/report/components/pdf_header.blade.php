<div style="height: 5px; width: 95%; margin: auto;">
    <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
        <table class="data-table" style="width:100%">
            <tr>
                <td class="text-center" width="25%">
                    {{ $school->heading_right ?? '' }}
                </td>
                <td class="text-center" width="50%">
                    @yield('header-center')
                </td>
                <td class="text-left">
                    @if ($school->image == null)
                        <img class="img-fluid" style="max-width:10%"
                            src="{{ asset('assests/images/loop_labs.png') }}" alt="{{ $school->name }}">
                    @else
                        <img class="img-fluid" style="max-width:10%"
                            src="{{ storage_path('app/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                            alt="{{ $school->name }}">
                    @endif
                </td>
            </tr>
        </table>
    </div>
</div>
