<script src="{{url::asset('assests/js/custom.js')}}"></script>
@if (Session::has('success'))
<script>
    toast.success({{ Session::get('success') }})
</script>
@elseif(Session::has('error'))
<script>
    toast.error({{ Session::get('error') }})
</script>
@endif
<script>
    if (navigator.onLine) {

        function confirmation(ev) {
            ev.preventDefault();
const urlToRedirect = ev.currentTarget.getAttribute('href');
            Swal.fire({
                title: "{{ trans('general.confirm') }}",
                text: "{{ trans('general.confirmation') }}",
                icon: "warning",
                showConfirmButton: true,
                shoCancelButton: true,
                dangerMode: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    } else {

        function confirmation(ev) {
            ev.preventDefault();
            const urlToRedirect = ev.currentTarget.getAttribute('href');
            let conf = confirm("{{ trans('general.confirmation') }}");
            if (conf) {
                window.location.href = urlToRedirect;
            }
        };
    }
</script>
@stack('scripts')
