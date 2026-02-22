@if($data['is_pdf'])
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-size: 0.875rem;
    }

    .table {
        border: 1px solid black !important;
        width: 100%;
        border-collapse: collapse;
        text-align:center;
        text-align: center;
    }

    .table td,
    .table th {
        border: 1px solid black !important;
        border-collapse: collapse;
        padding: 3px;
    }

    .table th {
        font-weight: 1.2rem !important;
    }

    p {
        margin: 0;
        padding: 0;
    }

    #heading {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .text-right {
        text-align: right;
    }

    .text-left {
        text-align: left;
    }

    @page {
        header: page-header;
        footer: page-footer;
    }
</style>

<body>
<table class="table">

<thead>
    <tr>
        <th>#</th>
        <th>{{trans('stock.name')}}</th>
        <th>{{trans('grades.name')}}</th>
        <th>{{trans('class_rooms.Name')}}</th>
        <th>{{trans('stock.current_stock')}}</th>
    </tr>
</thead>
    @foreach ($data['clothes'] as $clothe)
<tr>
    <td>{{$loop->index+1}}</td>
    <td>{{$clothe->name}}</td>
    <td>{{$clothe->grade->name}}</td>
    <td>{{$clothe->classroom->name}}</td>
    <td>{{($clothe->orders->sum('pivot.quantity_in')+$clothe->opening_qty)-$clothe->orders->sum('pivot.quantity_out')}}</td>
</tr>
    @endforeach
</table>
<htmlpageheader name="page-header">
    <div style="height: 5px; width: 95%; margin: auto;">
        <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
            <table class="data-table" style="width:100%">
                <tr>
                    <td class="text-center" width="25%">
                        {!! $data['school_data']->heading_right !!}
                    </td>
                    <td class="text-center" width="50%">
                        <center>
                            {{trans('report.clothes_stock')}}
                        </center>
                    </td>
                    <td class="text-left">
                        @if ($data['school_data']->image == null)
                            <img class="img-fluid" style="max-width:10%"
                                src="{{ asset('assests/images/loop_labs.png') }}" alt="{{ $data['school_data']->name }}">
                        @else
                            <img class="img-fluid" style="max-width:10%"
                                src="{{ storage_path('app/attachments/schools/' . $data['school_data']->slug . '/' . $data['school_data']->image->filename) }}"
                                alt="{{ $data['school_data']->name }}">
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

                            </center>
                        </div>
                    </td>
                    <td class="text-center" width="50%">
                        {PAGENO}
                    </td>
                    <td class="text-left">

                        <center>

                            {!! $data['school_data']->footer_left !!}
                        </center>

                    </td>
                </tr>
            </table>
        </div>
    </div>
</htmlpagefooter>
</body>

</html>
@else
    @extends('layouts.app')
    @section('content')
        <a href="{{ route('report.clothes_stocks.pdf', request()->query()) }}" class="btn btn-primary">Export to PDF</a>
        <table class="table">

            <thead>
                <tr>
                    <th>#</th>
                    <th>{{trans('stock.name')}}</th>
                    <th>{{trans('grades.name')}}</th>
                    <th>{{trans('class_rooms.Name')}}</th>
                    <th>{{trans('stock.current_stock')}}</th>
                </tr>
            </thead>
                @foreach ($data['clothes'] as $clothe)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$clothe->name}}</td>
                <td>{{$clothe->grade->name}}</td>
                <td>{{$clothe->classroom->name}}</td>
                <td>{{($clothe->orders->sum('pivot.quantity_in')+$clothe->opening_qty)-$clothe->orders->sum('pivot.quantity_out')}}</td>
            </tr>
                @endforeach
            </table>
    @endsection
@endif
