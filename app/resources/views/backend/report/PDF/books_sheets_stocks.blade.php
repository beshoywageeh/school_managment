@extends('layouts.pdf', ['school' => $school])

@section('header-center')
    <p>{{ trans('report.books_sheets_stocks') }}</p>
    <br>
    <p>{{ trans('report.print_date', ['date' => date('Y-m-d')]) }}</p>
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ trans('stock.name') }}</th>
                <th>{{ trans('Grades.name') }}</th>
                <th>{{ trans('class_rooms.Name') }}</th>
                <th>{{ trans('stock.current_stock') }}</th>
            </tr>
        </thead>
        @foreach ($data as $clothe)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $clothe->name }}</td>
                <td>{{ $clothe->grade->name }}</td>
                <td>{{ $clothe->classroom->name }}</td>
                <td>{{ $clothe->orders->sum('quantity_in') + $clothe->opening_qty - $clothe->orders->sum('quantity_out') }}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
