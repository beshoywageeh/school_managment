<!-- jquery -->
<script src="{{ URL::asset('assests\js\jquery-3.3.1.min.js') }}"></script>


<!-- plugin_path -->
<script>
    var plugin_path = '{{ asset('assests/js') }}/';
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

@stack('scripts')
