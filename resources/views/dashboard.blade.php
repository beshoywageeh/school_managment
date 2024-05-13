@extends('layouts.app')
@section('title')
{{trans('Sidebar.Dashboard')}}
@endsection

@section('content')
<pre>
{{\App\Enums\UserGender::MALE->lang()}}

</pre>
@endsection
