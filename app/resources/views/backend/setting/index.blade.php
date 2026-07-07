@extends('layouts.app')
@section('title')
    {{ trans('setting.title') }}
@endsection

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-1 space-y-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <div class="text-center">
                    <div class="mb-4">
                        @if($school_info->image == null)
                            <img class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-gray-100" src="{{ asset('assests/images/loop_labs.png') }}" alt="{{ $school_info->name }}" />
                        @else
                            <img class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-gray-100" src="{{ URL::asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}" alt="{{ $school_info->name }}" />
                        @endif
                    </div>
                    <h3 class="text-lg font-bold text-gray-800">{{ $school_info->name }}</h3>
                    <div class="mt-6 space-y-3">
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-500">{{ trans('setting.total_student') }}</span>
                            <span class="text-lg font-bold text-blue-600">{{ $std_count }}</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-500">{{ trans('setting.total_teacher') }}</span>
                            <span class="text-lg font-bold text-green-600">{{ $teach_count }}</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-500">{{ trans('setting.total_classroom') }}</span>
                            <span class="text-lg font-bold text-purple-600">{{ $grd_count }}</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t border-gray-100 text-right">
                        <p class="text-gray-600 text-sm">{{ $school_info->address }}</p>
                        <p class="text-gray-600 text-sm mt-1">{{ $school_info->phone }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h5 class="text-lg font-bold text-gray-800 mb-4">{{ trans('Sidebar.Grade') }}</h5>
                <div class="space-y-3">
                    @foreach($grades as $grade)
                    <div class="flex justify-between items-center py-2 border-b border-dotted border-gray-200">
                        <span class="text-gray-700">{{ $grade->name }}</span>
                        <span class="px-2 py-1 bg-red-100 text-red-600 text-xs font-medium rounded-full">{{ $grade->students_count }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h5 class="text-lg font-bold text-gray-800 mb-2">{{ trans('setting.auth_details') }}</h5>
                <p class="text-sm text-gray-500 mb-4">{{ trans('setting.auth_details_desc') }}</p>
                <div class="text-left mb-4">
                    <span class="text-sm text-gray-500">{{ trans('setting.auth_name') }}: </span>
                    <span class="text-gray-800 font-medium">{{ $user->name }}</span>
                </div>

                <form method="post" action="{{ route('settings.update_password') }}">
                    @csrf
                    <div class="space-y-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('setting.old_password') }}</label>
                            <input type="password" name="old_password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" id="old_password" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1" for="new-password">{{ trans('setting.new_password') }}</label>
                            <input type="password" name="new_password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" id="new-password" />
                        </div>
                        <button type="submit" class="w-full px-4 py-2 bg-danger text-white rounded-lg hover:bg-danger/90 font-medium transition-colors">
                            {{ trans('general.buttons.edit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-6">{{ trans('setting.school_details') }}</h2>
                <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $school_info->id }}">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="school-name">{{ trans('setting.name') }}</label>
                            <input type="text" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary bg-gray-50" value="{{ $school_info->name }}" name="school_name" />
                            @error('school_name')
                                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="school-phone">{{ trans('setting.phone') }}</label>
                            <input type="text" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary bg-gray-50" value="{{ $school_info->phone }}" name="school_phone" />
                            @error('school_phone')
                                <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <x-textarea name="address" label="{{ trans('setting.address') }}" class="bg-gray-50" rows="3">{{ $school_info->address }}</x-textarea>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">{{ trans('general.logo') }}</label>
                            <div class="relative">
                                <input type="file" name="logo" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" />
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center hover:border-blue-400 transition-colors bg-gray-50" id="logo-preview">
                                    @if($school_info->image)
                                        <img src="{{ URL::asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}" class="w-20 h-20 mx-auto rounded-lg object-cover mb-2" />
                                    @else
                                        <svg class="w-10 h-10 mx-auto text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    @endif
                                    <span class="text-sm text-gray-500">{{ trans('general.upload_image') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 pt-6 mb-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-4">{{ trans('setting.print_settings') }}</h3>
                        <div class="space-y-4">
                            <x-textarea name="head_right" label="{{ trans('setting.heading_right') }}" class="bg-gray-50" rows="2">{{ $school_info->heading_right }}</x-textarea>
                            <x-textarea name="footer_right" label="{{ trans('setting.footer_right') }}" class="bg-gray-50" rows="2">{{ $school_info->footer_right }}</x-textarea>
                            <x-textarea name="footer_left" label="{{ trans('setting.footer_left') }}" class="bg-gray-50" rows="2">{{ $school_info->footer_left }}</x-textarea>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium transition-colors flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ trans('general.buttons.save') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection