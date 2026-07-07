@extends('layouts.app')
@section('title', 'الإعدادات')

@section('content')
<x-ui.settings-hub title="الإعدادات">
    <x-slot:actions>
    </x-slot:actions>

    <x-ui.card icon="building" label="بيانات المدرسة" href="/settings/school" :active="request()->is('settings/school')" />
    <x-ui.card icon="users" label="المستخدمون والصلاحيات" href="/settings/users" :active="request()->is('settings/users')" />
    <x-ui.card icon="calendar" label="السنة الدراسية" href="/settings/academic-year" :active="request()->is('settings/academic-year')" />
    <x-ui.card icon="graduation-cap" label="المراحل الدراسية" href="/settings/grades" :active="request()->is('settings/grades')" />
    <x-ui.card icon="book" label="المواد الدراسية" href="/settings/subjects" :active="request()->is('settings/subjects')" />
    <x-ui.card icon="dollar-sign" label="الرسوم الدراسية" href="/settings/fees" :active="request()->is('settings/fees')" />
    <x-ui.card icon="bell" label="الإشعارات" href="/settings/notifications" :active="request()->is('settings/notifications')" />
    <x-ui.card icon="shield" label="الأمان والنسخ الاحتياطي" href="/settings/security" :active="request()->is('settings/security')" />
    <x-ui.card icon="globe" label="اللغة والإعدادات العامة" href="/settings/general" :active="request()->is('settings/general')" />
</x-ui.settings-hub>
@endsection
