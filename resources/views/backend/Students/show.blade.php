@extends('layouts.app')
@section('title')
    {{trans('student.show')}} | {{ $student->name }}
@endsection
@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <div class="flex justify-between mb-4">
                <h4 class="card-title">{{ $student->name }}</h4>
            </div>
            @include('backend.msg')
            <div class="mb-4 table-responsive">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>{{ trans('parents.Father_Name') }}</th>
                        <td>{{ $student->parent->Father_Name }}</td>
                        <th>{{ trans('parents.Father_Phone') }}</th>
                        <td>{{ $student->parent->Father_Phone }}</td>
                    </tr>
                    <tr>
                        <th>{{ trans('parents.Mother_Name') }}</th>
                        <td>{{ $student->parent->Mother_Name }}</td>
                        <th>{{ trans('parents.Mother_Phone') }}</th>
                        <td>{{ $student->parent->Mother_Phone }}</td>
                    </tr>
                </table>
            </div>
            <hr>
            <div class="mt-4 table-responsive">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>{{trans('student.name')}}</th>
                        <th>{{trans('student.birth_date')}}</th>
                        <th>{{trans('student.gender')}}</th>
                        <th>{{trans('student.grade')}}</th>
                    </tr>
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->birth_date}}</td>
                        <td>{{$student->gender->lang()}}</td>
                        <td>{{$student->grade->name}}</td>
                    </tr>
                </table>
            </div>
            <hr>
            <div class="mt-4 table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="alert-success">
                    <tr>
                        <th>{{trans('payment.date')}}</th>
                        <th>{{trans('payment.type')}}</th>
                        <th>{{trans('payment.credit')}}</th>
                        <th>{{trans('payment.debit')}}</th>

                    </tr>
                    </thead>

                    @forelse ($student->StudentAccount as $account)
                        <tr>
                            <td>{{$account->created_at->format('Y-m-d')}}</td>
<td>{{$account->type->lang()}}</td>
                            <td>{{number_format($account->debit,2)}}&nbsp; ج.م</td>
                            <td>{{number_format($account->credit,2)}}&nbsp; ج.م</td>
                        </tr>
                    @empty
                        <tr></tr>
                    @endforelse
                    <tfoot class="alert-info">
                    <tr>
                        <th colspan="2">{{trans('payment.total')}}</th>
                       <th>{{Number::currency($student->student_account_sum_debit, in: 'EGP', locale: 'ar')}}</th>
                       <th>{{Number::currency($student->student_account_sum_credit, in: 'EGP', locale: 'ar')}}</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    @push('scripts')

@endpush
@endsection
