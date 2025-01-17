<!-- resources/views/livewire/schedule-management.blade.php -->

<div class="card">
    <div class="card-header">
        <!-- أدوات التحكم -->

        <div class="row">
            <div class="col-md-4">
                <h3>جدول المدرسين اليومي</h3>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>اليوم</label>
                    <select wire:model.live="selectedDay" class="custom-select">
                        <option value="">اختر اليوم</option>
                        <option value="saturday">السبت</option>
                        <option value="sunday">الأحد</option>
                        <option value="monday">الاثنين</option>
                        <option value="tuesday">الثلاثاء</option>
                        <option value="wednesday">الأربعاء</option>
                        <option value="thursday">الخميس</option>
                    </select>

                </div>
            </div>
            <div class="col-md-4">
                <button class="mt-4 btn btn-primary" wire:click="$emit('print')">
                    <i class="ti ti-print"></i> طباعة
                </button>
            </div>
        </div>

    </div>
    <div class="card-body">
        @error('success')
            <div class="bg-white border alert border-success alert-dismissible fade show" role="alert">
                <h5 class='text-success'><strong>{{ $message }}</strong></h5>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- الجدول -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td colspan="9" class="bg-light">
                            <h5>{{ trans('schedules.' . $selectedDay) }}</h5>
                        </td>
                    </tr>
                    <tr class="font-bold alert alert-primary">
                        <th class="text-center align-middle">اسم المدرس</th>
                        <th class="text-center">الحصة الأولى</th>
                        <th class="text-center">الحصة الثانية</th>
                        <th class="text-center">الحصة الثالثة</th>
                        <th class="text-center">الحصة الرابعة</th>
                        <th class="text-center">الحصة الخامسة</th>
                        <th class="text-center">الحصة السادسة</th>
                        <th class="text-center">الحصة السابعة</th>
                        <th class="text-center">الحصة الثامنة</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Teachers as $Teacher)
                        <tr>
                            <td class="font-bold alert alert-primary">{{ $Teacher->name }}
                                <button wire:click="openScheduleModal({{ $Teacher->id }},{{ $Teacher->job_id }})"
                                    class="btn btn-sm btn-outline-primary position-absolute"
                                    style="top: 2px; right: 2px;">
                                    <i class="ti-plus"></i>
                                </button>

                            </td>
                            @for ($i = 1; $i <= 8; $i++)
                                <td>{{ $Schedules->where('user_id', $Teacher->id)->where('period', $i)->first()->class->title ?? '-' }}
                                </td>
                            @endfor

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal إضافة/تعديل الجدول -->
    @if ($showScheduleModal)
        <div class="modal fade show" style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">إضافة حصة</h5>
                        <button wire:click="closeScheduleModal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        @error('error')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                        <div class="form-group">
                            <label>الفصل</label>
                            <select wire:model="class_id" class="custom-select">
                                <option value="">اختر الفصل</option>
                                @foreach ($classes as $classroom)
                                    <option value="{{ $classroom->id }}">{{ $classroom->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>{{ trans('schedules.period') }}</label>
                            <select class="custom-select" wire:model="period">
                                <option selected value="">{{ trans('schedules.selected_period') }}</option>
                                @for ($i = 1; $i <= 8; $i++)
                                    <option value="{{ $i }}">{{trans('schedules.period').' '. $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="saveSchedule" class="btn btn-primary">حفظ</button>
                        <button wire:click="closeScheduleModal" class="btn btn-secondary">إلغاء</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif




</div>
