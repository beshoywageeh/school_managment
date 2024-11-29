@extends('layouts.report_view')

@section('title')
    {{ trans('report.daily_fee') }}
@endsection
@section('content')

<htmlpageheader name="page-header">
    <div style="height: 5px; width: 95%; margin: auto;">
        <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
            <table class="data-table" style="width:100%">
                <tr>
                    <td class="text-center" width="25%">
                        {!! $school->heading_right !!}
                    </td>
                    <td class="text-center" width="50%">
                        {{ trans('report.period', ['from' => $data['begin'], 'to' => $data['end']]) }}
                    </td>
                    <td class="text-left">
                        @if ($school->image == null)
                            <img class="img-fluid" style="max-width:10%"
                                src="{{ asset('assests/images/loop_labs.png') }}" alt="{{ $school->name }}">
                        @else
                            <img class="img-fluid" style="max-width:10%"
                                src="{{ asset('storage/app/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                                alt="{{ $school->name }}">
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
</htmlpageheader>
<htmlpagefooter name="page-footer">
    <div style="height: 5px; width: 95%; margin: auto;">
        <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-top:2px solid black">
            <table class="data-table" style="width:100%">
                <tr>
                    <td class="text-right" width="20%">
                        <div class="text-center">
                            <center>

                                {!! $school->footer_right !!}
                            </center>
                        </div>
                    </td>
                    <td class="text-center" width="50%">
                        {PAGENO}
                    </td>
                    <td class="text-left">

                        <center>

                            {!! $school->footer_left !!}
                        </center>

                    </td>
                </tr>
            </table>
        </div>
    </div>
</htmlpagefooter>
        <div class="table-responsive" id="data">
            <table class="table text-center table-striped table-bordered table-sm">
                <thead>
                    <tr class="text-white bg-dark">
                        <th>#</th>
                        <th>{{ trans('report.manual') }}</th>
                        <th>{{ trans('report.date') }}</td>
                        <th>{{ trans('report.student') }}</th>
                        <th>{{ trans('report.fee') }}</th>
                        <th>{{ trans('report.note') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $fee)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $fee->manual }}</td>
                            <td>{{ $fee->date }}</td>
                            <td>{{ $fee->student->name }}</td>
                            <td>{{ Number::currency($fee->Debit, 'EGP','ar') }}</td>
                            <td>{{ $fee->note }}</td>
                        </tr>
                    @empty
                        <h5>{{ trans('report.no_data_found') }}</h5>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr class="text-center text-white bg-dark">
                        <th colspan="4">{{ trans('report.total') }}</th>
                        <th>{{ Number::currency($data->sum('Debit'), 'EGP','ar') }}</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
@endsection
