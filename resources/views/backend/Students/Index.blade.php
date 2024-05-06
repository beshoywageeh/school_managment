@extends('layouts.app')
@section('title')
{{trans('student.title')}}
@endsection
@section('content')
<div>
    <div class="card">
        <div class="card-body">
            <div class="flex justify-between mb-4">
                <x-Student-header />

            </div>
            <livewire:student-table />
        </div>
    </div>
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
</script>
<script>
    function confirmation(ev){
ev.preventDefault();
const urlToRedirect = ev.currentTarget.getAttribute('href');
console.log(urlToRedirect);
Swal.fire({
title:"{{trans('general.confirm')}}",
text:"{{trans('general.confirmation')}}",
icon:"warning",
showConfirmButton:true,
shoCancelButton:true,
dangerMode: true,
}).then((result)=>{
if(result.isConfirmed){
window.location.href=urlToRedirect;
}
});
}
</script>

@endpush
@endsection