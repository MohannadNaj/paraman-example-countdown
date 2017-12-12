<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('vendor/parameters/css/core.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/parameters/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/date.css')}}" rel="stylesheet">
    <style type="text/css">
        .parameters-sidebar__container, .parameters-list > .row > .col-md-12 > .card {
            background-image: url({{asset('images/beach.jpg')}});
            background-position: center;
        }
        .parameters-list > .row > .col-md-12 > .card {
            background-blend-mode: luminosity;
        }
        .parameters-sidebar__container:before {
            content: " ";
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.65);
            right: 0;
            bottom: 0;
        }
        .parameters-list__list-item {
            background: rgba(215, 237, 249, 0.78);
        }
    </style>
    <!-- Scripts -->
    <script>
        window.Paraman = <?php echo json_encode(Paraman\ParametersManager::clientData()); ?>;

    </script>

</head>
<body>
    <div class="container-fluid" id="app">
        <paraman :parameters-list='{!! $parameters->toJson(JSON_HEX_APOS) !!}'></paraman>
    </div>
<script src="{{asset('vendor/parameters/js/core.js') . '?v='.Illuminate\Support\Str::random()}}"></script>
<script src="{{asset('js/date.js') . '?v='.Illuminate\Support\Str::random()}}"></script>
<script type="text/javascript">
    window.Paraman.editParametersOnly = true
</script>
<script src="{{asset('vendor/parameters/js/app.js') . '?v='.Illuminate\Support\Str::random()}}"></script>
</body>
</html>