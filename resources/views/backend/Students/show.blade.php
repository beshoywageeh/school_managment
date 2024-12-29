@extends('layouts.app')
@section('title')
    {{ trans('student.show') }} | {{ $student->name }}
@endsection
@push('css')
    <style>
        #table {
            width: 100%;
            font-size: 1.2rem;
            text-align: right;
        }

        th,
        td {
            padding: 0.9rem 0;
        }
    </style>
@endpush
@section('content')
    <div class="card mb-40">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h4>{{ $student->name . ' ' . $student->parent->Father_Name }}</h4>
                </div>
                <div class="text-right col">
                    <button class="btn btn-info"
                        onclick="printDiv()">{{ trans('general.print') . ' ' . trans('general.attendance_request') }}
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            @include('backend.msg')
            <div class="tab round shadow">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="basic_info_tab" data-toggle="tab" href="#basic_info" role="tab"
                            aria-controls="basic_info" aria-selected="true">
                            {{ trans('General.basic_info') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active show" id="attendance_request-tab" data-toggle="tab"
                            href="#attendance_request" role="tab" aria-controls="attendance_request"
                            aria-selected="false"><i class="fa fa-user"></i> {{ trans('General.attendance_request') }} </a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="basic_info" role="tabpanel" aria-labelledby="basic_info_tab">
                        <div>
                            <div class="mb-4 table-responsive">
                                <table class="table table-striped table-bordered table-sm">
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
                                <table class="table table-striped table-bordered table-sm">
                                    <tr>
                                        <th>{{ trans('student.name') }}</th>
                                        <th>{{ trans('student.birth_date') }}</th>
                                        <th>{{ trans('student.gender') }}</th>
                                        <th>{{ trans('student.grade') }}</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->birth_date }}</td>
                                        <td>{{ $student->gender->lang() }}</td>
                                        <td>{{ $student->grade->name }}</td>
                                    </tr>
                                </table>
                            </div>
                            <hr>
                            <div class="mt-4 table-responsive">
                                <table class="table table-striped table-bordered table-sm">
                                    <thead class="alert-success">
                                        <tr>
                                            <th>{{ trans('payment.date') }}</th>
                                            <th>{{ trans('payment.type') }}</th>
                                            <th>{{ trans('payment.credit') }}</th>
                                            <th>{{ trans('payment.debit') }}</th>

                                        </tr>
                                    </thead>

                                    @forelse ($student->StudentAccount as $account)
                                        <tr>
                                            <td>{{ $account->created_at->format('Y-m-d') }}</td>
                                            <td>{{ $account->type->lang() }}</td>
                                            <td>{{ number_format($account->debit, 2) }}&nbsp; ج.م</td>
                                            <td>{{ number_format($account->credit, 2) }}&nbsp; ج.م</td>
                                        </tr>
                                    @empty
                                        <tr></tr>
                                    @endforelse
                                    <tfoot class="alert-info">
                                        <tr>
                                            <th colspan="2">{{ trans('payment.total') }}</th>
                                            <th>{{ number_format($student->StudentAccount->sum('credit'), 2) }}&nbsp;
                                                ج.م</th>
                                            <th>{{ number_format($student->StudentAccount->sum('debit'), 2) }}&nbsp;
                                                ج.م</th>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade  active show" id="attendance_request" role="tabpanel"
                        aria-labelledby="attendance_request-tab">
                        <div id="print">
                            <div class="row">
                                <div class="col text-center">
                                    <h5>{!! $school->heading_right !!}</h5>
                                </div>
                                <div class="col text-center " style="margin-top:10rem">
                                    <h3>{{ trans('general.attendance_request') }}</h3>
                                    <h6>{{ trans('student.attention') }}</h6>
                                </div>
                                <div class="col ">
                                    <div class="m-auto"
                                        style="width: 200px; height:200px; border:1px solid black;text-align:center">
                                        {{ trans('student.student_photo') }}</div>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive text-right">
                                <table id="table">
                                    <tr>
                                        <th><strong>{{ trans('student.name') }}/</strong></th>
                                        <td>{{ $student->name . ' ' . $student->parent->Father_Name }}</td>
                                        <th><strong>{{ trans('student.national_id') }}/</strong></th>
                                        <td>{{ $student->national_id }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.nationality') }}/</strong></th>
                                        <td>{{ $student->nationality->name }}</td>
                                        <th><strong>{{ trans('student.religion') }}/</strong></th>
                                        <td>{{ $student->religion->lang() }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.address') }}</strong></th>
                                        <td>{{ $student->address }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.birth_date') }}</strong></th>
                                        <td>{{ $student->birth_date }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.ageInOctober') }}</strong></th>
                                        <td>
                                            <table id="table">
                                                <tr>
                                                    <td><strong>{{ trans('student.day') }}</strong></td>
                                                    <td><strong>{{ trans('student.month') }}</strong></td>
                                                    <td><strong>{{ trans('student.year') }}</strong></td>
                                                </tr>
                                                @php
                                                    $date = \Carbon\Carbon::parse($student->birth_at_begin);
                                                @endphp
                                                <tr>
                                                    <td>{{ $date->format('d') }}</td>
                                                    <td>{{ $date->format('m') }}</td>
                                                    <td>{{ $date->format('y') }}</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.status_request') }}</strong></th>
                                        <td>{{ $student->student_status->lang() }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.school_certificate') }}</strong></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.schools_in') }}</strong></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.acc_join') }}</strong></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.parent_name_job') }}</strong></th>
                                        <td>{{ $student->parent->Father_Name }}</td>
                                        <td>{{ $student->parent->Father_Job }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.parent_assest_name_job') }}</strong></th>
                                        <td></td>

                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.parent_sender_name_job') }}</strong></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><strong>{{ trans('student.total_degree') }}</strong></th>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <hr>
                            <div class="row mb-2">
                                <div class="col">{{ trans('student.write_at') }} &nbsp; {{ date('m/d/Y') }}</div>
                                <div class="col">
                                    <p><strong>{{ trans('student.parent_sign') }}</strong></p>
                                    <p><strong>{{ trans('student.parent_name') }}</strong>
                                        {{ $student->parent->Father_Name }}</p>
                                    <p><strong>{{ trans('student.sign') }}</strong></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <p>{{ trans('student.msg_1') }}</p>
                            </div>
                            <div class="row">

                                <p>{{ trans('student.msg_2') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
