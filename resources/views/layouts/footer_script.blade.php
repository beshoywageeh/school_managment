<!-- jquery -->
<script src="{{ URL::asset('assests\js\jquery-3.3.1.min.js') }}"></script>


<!-- plugin_path -->
<script>
    var plugin_path = '{{ asset("assests/js") }}/';
</script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('assests/js/plugins-jquery.js') }}"></script>


<!-- charts sparkline -->
<script src="{{ URL::asset('assests/js/sparkline.init.js') }}"></script>

<!-- charts morris -->
<script src="{{ URL::asset('assests/js/morris.init.js') }}"></script>

<!-- datepicker -->
<script src="{{ URL::asset('assests/js/datepicker.js') }}"></script>

<!-- sweetalert2 -->
<script src="{{ URL::asset('assests/js/sweetalert2.all.js') }}"></script>

<!-- sweetalert2 -->
<script src="{{ URL::asset('assests/js/sweetalert2.js') }}"></script>

<!-- toastr -->
<script src="{{ URL::asset('assests/js/toastr.js') }}"></script>

<!-- validation -->
<script src="{{ URL::asset('assests/js/validation.js') }}"></script>

<!-- lobilist -->
<script src="{{ URL::asset('assests/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('assests/js/select2.full.min.js') }}"></script>

<script src="{{ URL::asset('assests/js/custom.js') }}"></script>

@if (Session::has('success'))
<script>
    alert('success')
    Toast.fire({
        icon: "success",
        title: "{{ Session::get('success') }}"
    });
</script>
@endif
@if(Session::has('error'))
<script>
    Toast.fire({
        icon: "error",
        title: "{{ Session::get('error') }}"
    });
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
                confirmButtonText: "{{ trans('general.ok') }}",
                showCancelButton: true,
                cancelButtonText: "{{ trans('general.Cancel') }}",
                type: "warning",
            }).then((result) => {
                if (result.value) {
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

<script>
    function printDiv() {
        var printContents = document.getElementById('print').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
<script>
    function updateDateTime() {
        const now = new Date();
        const date = now.toLocaleDateString();
        const time = now.toLocaleTimeString();
        document.getElementById('datetime').textContent = `${date} ${time}`;
    }

    setInterval(updateDateTime, 1000);
    updateDateTime();
</script>
<script>
    $(document).ready(function() {
        $('form').attr('autocomplete', 'off');
    })
</script>
<script>
    $(document).ready(function() {
        $('th').addClass('font-weight-bolder');
    })
</script>


<script src="{{ URL::asset('assests\\js\\datatable\\datatables\\jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assests\\js\\bootstrap-datatables\\dataTables.bootstrap4.min.js') }}"></script>


@stack('scripts')
