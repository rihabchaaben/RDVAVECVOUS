
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />


    <title>
        Drag-n-drop external events - Demos | FullCalendar
    </title>


    <link href='https://fullcalendar.io/assets/demo-to-codepen.css' rel='stylesheet' />



    <link href='https://fullcalendar.io/releases/core/4.2.0/main.min.css' rel='stylesheet' />




    <link href='https://fullcalendar.io/releases/daygrid/4.2.0/main.min.css' rel='stylesheet' />

    <link href='https://fullcalendar.io/releases/timegrid/4.2.0/main.min.css' rel='stylesheet' />


    <script src='https://fullcalendar.io/assets/demo-to-codepen.js'></script>

    <script src='https://fullcalendar.io/releases/core/4.2.0/main.min.js'></script>




    <script src='https://fullcalendar.io/releases/interaction/4.2.0/main.min.js'></script>

    <script src='https://fullcalendar.io/releases/daygrid/4.2.0/main.min.js'></script>

    <script src='https://fullcalendar.io/releases/timegrid/4.2.0/main.min.js'></script>



    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendarInteraction.Draggable;

            var containerEl = document.getElementById('external-events');
            var calendarEl = document.getElementById('calendar');
            var checkbox = document.getElementById('drop-remove');

            // initialize the external events
            // -----------------------------------------------------------------

            new Draggable(containerEl, {
                itemSelector: '.fc-event',
                eventData: function(eventEl) {
                    return {
                        title: eventEl.innerText
                    };
                }
            });

            // initialize the calendar
            // -----------------------------------------------------------------

            var calendar = new Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar
                drop: function(info) {
                    // is the "remove after drop" checkbox checked?
                    if (checkbox.checked) {
                        // if so, remove the element from the "Draggable Events" list
                        info.draggedEl.parentNode.removeChild(info.draggedEl);
                    }
                }
            });

            calendar.render();
        });

    </script>
    <style>

        html, body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #external-events {
            position: fixed;
            z-index: 2;
            top: 20px;
            left: 20px;
            width: 150px;
            padding: 0 10px;
            border: 1px solid #ccc;
            background: #eee;
        }

        .demo-topbar + #external-events { /* will get stripped out */
            top: 60px;
        }

        #external-events .fc-event {
            margin: 1em 0;
            cursor: move;
        }

        #calendar-container {
            position: relative;
            z-index: 1;
            margin-left: 200px;
        }

        #calendar {
            max-width: 900px;
            margin: 20px auto;
        }

    </style>
</head><body>

<div class='demo-topbar'>
    <button data-codepen class='codepen-button'>Edit in CodePen</button>




    Drag external events into the calendar with the Draggable API

</div>


<div id='external-events'>
    <p>
        <strong>Draggable Events</strong>
    </p>
    <div class='fc-event'>My Event 1</div>
    <div class='fc-event'>My Event 2</div>
    <div class='fc-event'>My Event 3</div>
    <div class='fc-event'>My Event 4</div>
    <div class='fc-event'>My Event 5</div>
    <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
    </p>
</div>

<div id='calendar-container'>
    <div id='calendar'></div>
</div>

</body>


</html>
