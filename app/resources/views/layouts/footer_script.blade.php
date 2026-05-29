<!-- jquery -->
<script src="{{ URL::asset('assests\js\jquery-3.3.1.min.js') }}"></script>


<!-- plugins-jquery (includes Bootstrap) -->
<script src="{{ URL::asset('assests/js/plugins-jquery.js') }}"></script>
<script src="{{ URL::asset('assests/js/custom.js') }}"></script>

<script src="{{ URL::asset('assests/js/tomselect.js') }}"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    function printDiv() {
        var printContents = document.getElementById('print').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
    // Initialise TomSelect for select elements
    if (document.getElementById('tom-select-it')) {
        new TomSelect('#tom-select-it');
    }
    // Initialise TomSelect for select elements
    document.querySelectorAll('.select2').forEach((el) => {
        if (el) new TomSelect(el);
    });
    // Update date and time
    function updateDateTime() {
        const now = new Date();
        const date = now.toLocaleDateString();
        const time = now.toLocaleTimeString();
        document.getElementById('datetime').textContent = `${date} ${time}`;
    }

    setInterval(updateDateTime, 1000);
    updateDateTime();
});


</script>



@stack('scripts')
