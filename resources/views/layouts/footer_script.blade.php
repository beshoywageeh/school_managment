<!-- jquery -->
<script src="{{ asset('assests/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::asset('assests\js\datatable\datatables\jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assests\js\datatable\datatable-extension\dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assests\js\bootstrap-datatables\dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assests\js\datatable\datatable-extension\buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ asset('assests/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script>
    var plugin_path = 'assests/js/';
</script>
<!-- chart -->
<script src="{{ asset('assests/js/chart-init.js') }}"></script>

<!-- calendar -->
<script src="{{ asset('assests/js/calendar.init.js') }}"></script>

<!-- charts sparkline -->
<script src="{{ asset('assests/js/sparkline.init.js') }}"></script>

<!-- charts morris -->
<script src="{{ asset('assests/js/morris.init.js') }}"></script>

<!-- datepicker -->
<script src="{{ asset('assests/js/datepicker.js') }}"></script>

<!-- sweetalert2 -->
<script src="{{ asset('assests/js/sweetalert2.all.js') }}"></script>

<!-- toastr -->
<script src="{{ asset('assests/js/toastr.js') }}"></script>

<!-- validation -->
<script src="{{ asset('assests/js/validation.js') }}"></script>

<!-- lobilist -->
<script src="{{ asset('assests/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ asset('assests/js/select2.full.min.js') }}"></script>

<script src="{{ asset('assests/js/custom.js') }}"></script>

@if (Session::has('success'))
    <script>
        Toast.fire({
            icon: "success",
            title: "{{ Session::get('success') }}"
        });
    </script>
@elseif(Session::has('error'))
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
    $(function() {
        $("body").niceScroll({
            cursorcolor: "#0a0a0a",
            cursorwidth: "6px",
            cursorborder: "none"
        });
    });
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
        $('#datatable').DataTable({
            language: {
                url: "{{ asset('assests/' . app()->getLocale() . '.json') }}"
            },
            responsive: true,
            lengthMenu: [
                [20, 40, 50, -1],
                [20, 40, 50, "الكل"]
            ]
        })
    })
</script>
<script src="{{ asset('assests/modules.json') }}">



</script>
@stack('scripts')
