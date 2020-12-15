{{--<!doctype html>--}}

{{--<html lang="en">--}}

{{--<head>--}}

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>--}}

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>--}}

    {{--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>--}}

    {{--<link rel="stylesheet" href="https://fullcalendar.io/releases/interaction/4.2.0/main.min.js"/>--}}


{{--</head>--}}

{{--<body>--}}

{{--<div class="container">--}}

    {{--<div class="panel panel-primary">--}}

        {{--<div class="panel-heading">--}}

            {{--MY Calender--}}

        {{--</div>--}}

        {{--<div class="panel-body" >--}}

            {{--{!! $calendar->calendar() !!}--}}

            {{--{!! $calendar->script() !!}--}}

        {{--</div>--}}

    {{--</div>--}}

{{--</div>--}}

{{--</body>--}}

{{--</html>--}}

{{--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />--}}

{{--<h3>Calendar</h3>--}}

{{--<div id='calendar'></div>--}}

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>--}}
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>--}}
{{--<script>--}}
    {{--$(document).ready(function() {--}}
        {{--// page is now ready, initialize the calendar...--}}
        {{--$('#calendar').fullCalendar({--}}
            {{--// put your options and callbacks here--}}
            {{--events : [--}}
                    {{--@foreach($tasks as $task)--}}
                {{--{--}}
                    {{--title : '{{ $task->name }}',--}}
                    {{--start : '{{ $task->task_date }}',--}}
                    {{--url : '{{ route('tasks.edit', $task->id) }}'--}}
                {{--},--}}
                {{--@endforeach--}}
            {{--]--}}
        {{--})--}}
    {{--});--}}
{{--</script>--}}
<!-- CONTENT -->

<script>
    const events = [{"title":"1","backgroundColor":"#94CF3E","borderColor":"#94CF3E","link":"\/accueil?view=Request&amp;task=read&amp;id=148","start":"2019-07-30 07:00:00","end":"2019-07-16 09:00:00","name":"Depannage test"}]</script>
<style>
    .fc-event {
        cursor:pointer;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/locale/fr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

<div id="calendar">
</div>
<script>

    jQuery('#calendar').fullCalendar({
        height: 600,
        defaultView: 'agendaWeek',
//  defaultView: 'agendaFourDay',
        views: {
            agendaFourDay: {
                type: 'agenda',
                duration: { days: 3 }
            }
        },
        locale:'fr',
        timezone:'local',
        columnHeaderHtml: function(mom){
            return '<span class="bigDay">' + mom.format('D') + '</span><span class="smallDay">' + mom.format('ddd') + '</span>';
        },
        allDaySlot: false,
        slotLabelFormat:'HH[h]',
        minTime: '06:00:00',
        maxTime: '23:00:00',
        timeFormat: 'H:mm',
        slotLabelInterval: '01:00:00',
        slotDuration: '00:15:00',
        eventClick: function(event, element) {

            console.log(event)
            window.location.href=event.link;
        },
        eventResize: function() {
            exportEvents(jQuery('#calendar').fullCalendar('clientEvents'))
        },
        eventLimit: true, // allow "more" link when too many events
        events: events,
        eventRender: function(event, element) {
            element.prepend(jQuery("<div id='category'>"+event.name+"</div>"));
        }
    });

    jQuery('#calendar').append(jQuery("<div id='colorLegend'><span class='none'>Vide</span><span class='tocheck'>Au moins 1 proposition en attente</span><span class='confirm'>Toutes les propositions confirmées</span></div>"));

    jQuery(window).bind('resize', function () {
        if (jQuery(window).width() < 601) jQuery('#calendar').fullCalendar('changeView', 'agendaFourDay');
        else jQuery('#calendar').fullCalendar('changeView', 'agendaWeek');
    });
    jQuery(document).ready(function() {
        if (jQuery(window).width() < 601) jQuery('#calendar').fullCalendar('changeView', 'agendaFourDay');
        else jQuery('#calendar').fullCalendar('changeView', 'agendaWeek');
    });
</script>