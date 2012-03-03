var month = 0;
function view_month(num){
	month += num;
	$('#content #calendar').load('calendar?month=' + month);
}

function date_picker(){
	$('#datepicker').datepicker({
		inline: true,
		maxDate: '0d',
		onSelect: function(dateText, inst) { 
			$('#Start_date').val(dateText);
		}
	});
}

function time_slider( hour_slider, hours, min_slider, mins ) {
	$( hour_slider ).slider({
		orientation: "vertical",
		range: "min",
		min: 0,
		max: 23,
		value: 0,
		slide: function( event, ui ) {
			$( hours ).text( ui.value );
			$( hours ).val( ui.value );
		}
	});
	$( min_slider ).slider({
		orientation: "vertical",
		range: "min",
		min: 0,
		max: 59,
		value: 0,
		slide: function( event, ui ) {
			$( mins ).text( ui.value );
			$( mins ).val( ui.value );
		}
	});
	$( hours ).text( $( hour_slider ).slider( "value" ) );
	$( hours ).val( $( hour_slider ).slider( "value" ) );
	$( mins ).text( $( min_slider ).slider( "value" ) );
	$( mins ).val( $( hour_slider ).slider( "value" ) );
}

function start_slider() {
	time_slider( '#start-hours', '.Start_time_hours', '#start-mins', '.Start_time_mins' );
}

function duration_slider() {
	time_slider( '#duration-hours', '.Duration_hours', '#duration-mins', '.Duration_mins' );
}

function all(){
	view_month(0);
	date_picker();
	start_slider();
	duration_slider();
}

$(document).ready(function(){
	all();
});
