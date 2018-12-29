<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css">
    {{--<link rel="stylesheet" type="text/css" href="https://fullcalendar.io/assets/base.css?1545448050">--}}

    <style>

    </style>
</head>
<body>
    <div id="app">
        @include('components.menu-top-fixed')

        {{--@include()--}}

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script><script>
        $(function() {

            var todayDate = moment().startOf('day');
            var YM = todayDate.format('YYYY-MM');
            var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
            var TODAY = todayDate.format('YYYY-MM-DD');
            var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                navLinks: true,
                events: [
                    {
                        title: 'All Day Event',
                        start: YM + '-01'
                    },
                    {
                        title: 'Long Event',
                        start: YM + '-07',
                        end: YM + '-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: YM + '-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: YM + '-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: YESTERDAY,
                        end: TOMORROW
                    },
                    {
                        title: 'Meeting',
                        start: TODAY + 'T10:30:00',
                        end: TODAY + 'T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: TODAY + 'T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: TODAY + 'T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: TODAY + 'T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: TODAY + 'T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: TOMORROW + 'T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: YM + '-28'
                    }
                ]
            });
        });
    </script>
</body>
</html>
