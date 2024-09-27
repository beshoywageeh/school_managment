<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تقارير | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('assests/css/bootstrap-rtl.min.css')}}">
</head>
<style>
@media print {
    .no-print, .no-print * {
        display: none !important;
    }
}
</style>
<body>
    <div class="container-fluid text-center text-middle">
        <div class="row no-print mt-2">
            <div class="col"><a href="{{url()->previous()}}" class="btn btn-primary">{{trans('report.back')}}</a></div>
            <div class="col">
                <button class="btn btn-success" onclick="window.print()">{{trans('report.print')}}</button>
            </div>

        </div>
    @yield('content')
    </div>

<script>

</script>
</body>
</html>
