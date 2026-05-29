import "./bootstrap";
import flatpickr from "flatpickr";
import ApexCharts from "apexcharts";
window.ApexCharts = ApexCharts;
window.flatpickr = flatpickr;

// All components use local x-data + custom events (no Alpine stores).
// See alert.blade.php, modal.blade.php, toasts.blade.php.
