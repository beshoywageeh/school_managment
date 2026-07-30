<script src="{{ URL::asset('assests/js/tomselect.js') }}"></script>

<script>
    function confirmation(event) {
        if (!confirm('هل أنت متأكد من عملية الحذف؟')) {
            event.preventDefault();
            return false;
        }
        return true;
    }

    document.addEventListener('DOMContentLoaded', function() {
        window.printDiv = function() {
            var printContents = document.getElementById('print').innerHTML;
            var win = window.open('', '_blank');
            win.document.write('<!DOCTYPE html><html><head><title>Print</title>');
            document.querySelectorAll('link[rel="stylesheet"], style').forEach(function(el) {
                win.document.write(el.outerHTML);
            });
            win.document.write('<' + '/head><body>' + printContents + '<' + '/body></html>');
            win.document.close();
            win.focus();
            win.print();
        };
        // Initialise TomSelect for select elements
        if (document.getElementById('tom-select')) {
            new TomSelect('#tom-select', {
                plugins: ['remove_button'],
                persist: false,
                create: true,
                maxItems: 1,
            });
        }
        // Initialise TomSelect for select elements
        document.querySelectorAll('.tom-select').forEach((el) => {
            if (el) new TomSelect(el, {
                plugins: ['remove_button'],
                persist: false,
                create: true,
                maxItems: null,
            });
        });
        // Update date and time
        function updateDateTime() {
            const el = document.getElementById('datetime');
            if (!el) return;
            const now = new Date();
            const date = now.toLocaleDateString();
            const time = now.toLocaleTimeString();
            el.textContent = `${date} ${time}`;
        }

        setInterval(updateDateTime, 30000);
        updateDateTime();
        window.addEventListener('load', function() {
            document.getElementById('pre-loader')?.remove();
        });

    });
</script>



@stack('scripts')
