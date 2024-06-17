@extends('layouts.app')
@section('title')
    {{ trans('report.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row mb-40">
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col text-center">
                            <h4>{{ trans('report.title') }} | {{ trans('Sidebar.Students') }}</h4>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        @php
                            $acc_links=[
                                [
                                'Name'=>trans('report.student_info'),
                                'Url'=>'1'
                                ]];
                        @endphp
                        @foreach( $acc_links as $acc_link)
                            <li class="">
                                <div class="media">
                                    <div class="media-body text-center">
                                        <button class="btn" data-toggle="modal" data-target="{{$acc_link['Url']}}">
                                            <span class="text-danger">
                                                {{ $acc_link['Name'] }}</span>
                                        </button>
                                    </div>
                                </div>

                            </li>
                            <div class="mt-20 mb-20 divider dotted"></div>
                        @endforeach

                    </ul>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col text-center">
                            <h4>{{ trans('report.title') }} | {{ trans('Sidebar.Teacher') }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col text-center">
                            <h4>{{ trans('report.title') }} | {{ trans('Sidebar.Clothes_Books') }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-4 card card-statistics h-100">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col text-center">
                            <h4>{{ trans('report.title') }} | {{ trans('Sidebar.accounting') }}</h4>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        @php
                            $acc_links=[
                                [
                                'Name'=>trans('Sidebar.schoolfees'),
                                'Url'=>'1'
                                ],[
                                'Name'=>trans('Sidebar.fees_invoice'),
                                'Url'=>'1'
                                ],[
                                'Name'=>trans('Sidebar.Recipt_Payment'),
                                'Url'=>'1'
                                ],[
                                'Name'=>trans('Sidebar.except_fee'),
                                'Url'=>'1'
                                ],[
                                'Name'=>trans('Sidebar.payment_parts'),
                                'Url'=>'1'
                                ],[
                                'Name'=>trans('Sidebar.credit'),
                                'Url'=>'1'
                                ],];
                        @endphp
                        @foreach( $acc_links as $acc_link)
                            <li class="">
                                <div class="media">
                                    <div class="media-body text-center">
                                        <a href="{{$acc_link['Url']}}" class="">
                                            <span class="text-danger">
                                                {{ $acc_link['Name'] }}</span>
                                        </a>
                                    </div>
                                </div>

                            </li>
                            <div class="mt-20 mb-20 divider dotted"></div>
                        @endforeach

                    </ul>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
