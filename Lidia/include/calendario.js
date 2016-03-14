$(document).ready(function() {

	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	var calendar = $('#calendar').fullCalendar({
			editable: true,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'year,month,agendaWeek'
			},
			defaultDate: '2016-01-01',
			firstDay: 1,
			weekends: true,
			defaultEventMinutes:30,
			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			monthNameShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun','Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles','Jueves', 'Viernes', 'Sabado'],
			dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
			buttonText: {
				today: 'hoy',
				year:'año',
				month: 'mes',
				week: 'semana',
				day: 'dia'
			},

			events: "../include/cal.php",

			eventRender: function(event, element, view){
				if(event.allDay === "false" || event.allDay === "true"){
					event.allDay = true;
				}
			},
			
			selectable: true,
			selectHelper: true
			
			
	});
});			
	
	