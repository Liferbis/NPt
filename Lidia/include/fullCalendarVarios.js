$(document).ready(function() {


	var calendar = $('#calendar').fullCalendar({
        firstDay: 1,
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles',
            'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        buttonText:
                {
                    prev: ' ◄ ',
                    next: ' ► ',
                    prevYear: ' &lt;&lt; ',
                    nextYear: ' &gt;&gt; ',
                    today: 'hoy',
                    month: 'mes',
                    week: 'semana',
                    day: 'día'
                },
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        selectable: true,
        selectHelper: true,
        editable: true,
        //carga eventos
        events: {
            url: "gestion/events.php?personal=" + personal,
        },
        // Convert the allDay from string to boolean
        eventRender: function(event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
                selectHelper: true,
                //Agrega eventos
                select: function(start, end, allDay) {
                    start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
                    end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
                    calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                    true // make the event "stick"
                            );
                    calendar.fullCalendar('unselect');
                },
        editable: true,
                eventDrop: function(event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
                    $.ajax({
                        url: "gestion/update_events.php",
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function(json) {
                            alert("Updated Successfully");
                        }
                    });
                },
        eventResize: function(event) {
            var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
            var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
            $.ajax({
                url: "gestion/update_events.php",
                data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                type: "POST",
                success: function(json) {
                    alert("Updated Successfully");
                }
            });
        },
        eventClick: function(event) {
            var decision = confirm("Do you really want to do that?");
            if (decision) {
                $.ajax({
                    url: 'gestion/delete_event.php',
                    data: 'id = ' + event.id,
                    type: "POST",
                    success: function(json) {
                        $("#contenido2").html(json);
                    }
                });
            }
 
        }
    });
    $("#formulario").dialog({
        close: function(event, ui) {
            if (controlValores())
            {
            }
            else
            {
 
            }
        }
    });
