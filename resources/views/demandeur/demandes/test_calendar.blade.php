@extends('layouts.front.demandeurs.master')
@section('content')
        <!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'/>


    <title>
        Dynamically switch between locales - Demos | FullCalendar
    </title>


    <link href='/assets/demo-to-codepen.css' rel='stylesheet'/>

    <link href='https://unpkg.com/fullcalendar@3.10.1/dist/fullcalendar.min.css' rel='stylesheet'/>
    <link href='https://unpkg.com/fullcalendar@3.10.1/dist/fullcalendar.print.css' rel='stylesheet' media='print'/>

    @section('script')

        {{--<script src='https://unpkg.com/moment@2.24.0/min/moment.min.js'></script>--}}
        {{--<script src='https://unpkg.com/jquery@3.4.1/dist/jquery.min.js'></script>--}}

        {{--<script src='https://unpkg.com/fullcalendar@3.10.1/dist/fullcalendar.min.js'></script>--}}


        {{--<script src='https://unpkg.com/fullcalendar@3.10.1/dist/locale-all.js'></script>--}}






        <script src='/assets/demo-to-codepen.js'></script>



        <script>

            $(function () {
                var initialLocaleCode = 'fr';

                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay,listMonth'
                    },
                    locale: 'fr',
                    buttonIcons: false, // show the prev/next text
                    weekNumbers: true,
                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    eventLimit: true // allow "more" link when too many events
                });

                // build the locale selector's options
                $.each($.fullCalendar.locales, function (localeCode) {
                    $('#locale-selector').append(
                        $('<option/>')
                            .attr('value', localeCode)
                            .prop('selected', localeCode == initialLocaleCode)
                            .text(localeCode)
                    );
                });

                // when the selected option changes, dynamically change the calendar option
                $('#locale-selector').on('change', function () {
                    if (this.value) {
                        $('#calendar').fullCalendar('option', 'locale', this.value);
                    }
                });
            });

        </script>
    @endsection
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
            font-size: 14px;
        }

        #top {
            background: #eee;
            border-bottom: 1px solid #ddd;
            padding: 0 10px;
            line-height: 40px;
            font-size: 12px;
        }

        #calendar {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 10px;
        }

    </style>
</head>
<body>

<div id='top'>
    <button data-codepen class='codepen-button' style='float:right;margin-top:7px'>Edit in CodePen</button>

    Locales:
    <select id='locale-selector'></select>
</div>

<div id='calendar'></div>

</body>


</html>
