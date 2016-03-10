$(document).ready(function() {
	$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'year,month,agendaWeek,agendaDay'
			},
			defaultDate: '2015-02-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2015-02-01'
				},
				{
					title: 'Long Event',
					start: '2015-02-07',
					end: '2015-02-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-02-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-02-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2015-02-11',
					end: '2015-02-13'
				},
				{
					title: 'Meeting',
					start: '2015-02-12T10:30:00',
					end: '2015-02-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2015-02-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2015-02-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2015-02-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2015-02-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2015-02-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2015-02-28'
				}
			]
		});

	// $('#calendar').fullCalendar({
	// 	header: {
	// 		left: 'prev,next today',
	// 		center: 'title',
	// 		right: 'year,month,agendaWeek,agendaDay'
	// 	},
	// 	editable: true,
	// 	disableDragging: true,
	// 	firstDay: 1,
	// 	weekends: true,
	// 	defaultEventMinutes:30,
	// 	monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
	// 	monthNameShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun','Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
	// 	dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles','Jueves', 'Viernes', 'Sabado'],
	// 	dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
	// 	buttonText: {
	// 	today: 'hoy',
	// 	year:'año',
	// 	month: 'mes',
	// 	week: 'semana',
	// 	day: 'dia'
	// 	},
	// 	allDaySlot: false,
	// 	allDayText: 'Todo el dia',
	// 	axisFormat: 'H:mm',
		

	// 	// defaultDate: '2016-01-12',
	// 	// editable: true,
	// 	// eventLimit: true, // allow "more" link when too many events
	// 	events: [
	// 		{
	// 			title: 'Pepito',
	// 			start: '2016-01-01',
	// 			end: '2016-01-12'
	// 		},
	// 		{
	// 			title: 'Grillo',
	// 			start: '2016-01-07',
	// 			end: '2016-01-11'
	// 		},
	// 		{
	// 			id: 999,
	// 			title: 'Repeating Event',
	// 			start: '2016-01-09T16:00:00'
	// 		},
	// 		{
	// 			id: 999,
	// 			title: 'Repeating Event',
	// 			start: '2016-01-16T16:00:00'
	// 		},
	// 		{
	// 			title: 'Conference',
	// 			start: '2016-01-11',
	// 			end: '2016-01-13'
	// 		},
	// 		{
	// 			title: 'Meeting',
	// 			start: '2016-01-12T10:30:00',
	// 			end: '2016-01-12T12:30:00'
	// 		},
	// 		{
	// 			title: 'Lunch',
	// 			start: '2016-01-12T12:00:00'
	// 		},
	// 		{
	// 			title: 'Meeting',
	// 			start: '2016-01-12T14:30:00'
	// 		},
	// 		{
	// 			title: 'Happy Hour',
	// 			start: '2016-01-12T17:30:00'
	// 		},
	// 		{
	// 			title: 'Dinner',
	// 			start: '2016-01-12T20:00:00'
	// 		},
	// 		{
	// 			title: 'Birthday Party',
	// 			start: '2016-01-13T07:00:00'
	// 		},
	// 		{
	// 			title: 'Click for Google',
	// 			url: 'http://google.com/',
	// 			start: '2016-01-28'
	// 		}
	// 	]
	// });
		
});