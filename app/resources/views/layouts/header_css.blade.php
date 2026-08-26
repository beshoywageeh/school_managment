<link rel="stylesheet" href="{{ URL::asset('assests/css/tomselect.css') }}">
<style>
    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    ::-webkit-scrollbar-track {
        background-color: #f1f1f1;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #cbcbcb;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #a8a8a8;
    }

    * {
        scrollbar-width: thin;
        scrollbar-color: #cbcbcb #f1f1f1;
    }

    @media (prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
            scroll-behavior: auto !important;
        }
    }
</style>
@stack('css')
