google.load('visualization', '1.0', {'packages':['corechart', 'gauge']});

var week = 0;

/*
gauges showing kcal per week, active days per week, total time per week
*/
function chart1() {
	var offset = week;
	
	var chart = new google.visualization.Gauge(document.getElementById('chart1_area'));
	var plus_button = $('#chart1 .buttons .plus')[0];
	var minus_button = $('#chart1 .buttons .minus')[0];
	var options = {
			width: 600, height: 180,
			max: 5000, min: 0,			
			redFrom: 0, redTo: 500,
			yellowFrom:500, yellowTo: 1000,
			greenFrom: 4500, greenTo: 5000,
			minorTicks: 5,
			animation:{
				duration: 2000,
				easing: 'out'
			}
		};

	function drawChart(week_offset) {
		$.getJSON('graph', {chart: 1, week: week_offset},function(json_data) {
			var data = new google.visualization.DataTable();
			for(i in json_data.format){
				data.addColumn(json_data.format[i][0], json_data.format[i][1]);
			}		
			data.addRows(json_data.data);
			$('#chart1 .buttons .date').html(json_data.title);						
			chart.draw(data, options);
		});
	}

	plus_button.onclick = function() {
		drawChart(++offset);
	}
	minus_button.onclick = function() {
		drawChart(--offset);
	}
	drawChart(offset);
}

function chart2() {
	var offset = week;
	
	var chart = new google.visualization.Gauge(document.getElementById('chart2_area'));
	var plus_button = $('#chart2 .buttons .plus')[0];
	var minus_button = $('#chart2 .buttons .minus')[0];
	var options = {
			width: 600, height: 180,
			max: 7, min: 0,			
			redFrom: 0, redTo: 1,
			yellowFrom:1, yellowTo: 2,
			greenFrom: 6, greenTo: 7,
			minorTicks: 5,
			animation:{
				duration: 2000,
				easing: 'out'
			}
		};

	function drawChart(week_offset) {
		$.getJSON('graph', {chart: 2, week: week_offset},function(json_data) {
			var data = new google.visualization.DataTable();
			for(i in json_data.format){
				data.addColumn(json_data.format[i][0], json_data.format[i][1]);
			}		
			data.addRows(json_data.data);
			$('#chart2 .buttons .date').html(json_data.title);						
			chart.draw(data, options);
		});
	}

	plus_button.onclick = function() {
		drawChart(++offset);
	}
	minus_button.onclick = function() {
		drawChart(--offset);
	}
	drawChart(offset);
}

function chart3() {
	var offset = week;
	var chart = new google.visualization.Gauge(document.getElementById('chart3_area'));
	var plus_button = $('#chart3 .buttons .plus')[0];
	var minus_button = $('#chart3 .buttons .minus')[0];
	var options = {
			width: 600, height: 180,
			max: 240, min: 0,			
			redFrom: 0, redTo: 30,
			yellowFrom:30, yellowTo: 60,
			greenFrom: 180, greenTo: 240,
			minorTicks: 5,
			animation:{
				duration: 2000,
				easing: 'out'
			}
		};

	function drawChart(week_offset) {
		$.getJSON('graph', {chart: 3, week: week_offset},function(json_data) {
			var data = new google.visualization.DataTable();
			for(i in json_data.format){
				data.addColumn(json_data.format[i][0], json_data.format[i][1]);
			}
			data.addRows(json_data.data);
			$('#chart3 .buttons .date').html(json_data.title);
			chart.draw(data, options);
		});
	}

	plus_button.onclick = function() {
		drawChart(++offset);
	}
	minus_button.onclick = function() {
		drawChart(--offset);
	}
	drawChart(offset);
}

/*
line chart showing kcal per day per week
*/
function chart4(){
	var offset = week;
	var chart = new google.visualization.LineChart(document.getElementById('chart4_area'));
	var plus_button = $('#chart4 .buttons .plus')[0];
	var minus_button = $('#chart4 .buttons .minus')[0];
	var options = {	
			'title': 'Kcal Per Day',
			'width':400,
			'height':300,
			'legend': 'none',
			animation:{
				duration: 2000,
				easing: 'out'
			}
	};

	function drawChart(week_offset) {
		$.getJSON('graph', {chart: 4, week: week_offset},function(json_data) {
			var data = new google.visualization.DataTable();
			for(i in json_data.format){
				data.addColumn(json_data.format[i][0], json_data.format[i][1]);
			}
			data.addRows(json_data.data);
			$('#chart4 .buttons .date').html(json_data.title);
			chart.draw(data, options);
		});
	}

	plus_button.onclick = function() {
		drawChart(++offset);
	}
	minus_button.onclick = function() {
		drawChart(--offset);
	}
	drawChart(offset);
}

/*
Pie chart showing workout counts per activity
*/
function chart5(){
	var offset = week;
	var chart = new google.visualization.PieChart(document.getElementById('chart5_area'));
	var plus_button = $('#chart5 .buttons .plus')[0];
	var minus_button = $('#chart5 .buttons .minus')[0];
	var options = {	
			is3D: true,
			'title': 'Activity By Workouts',
			'width':300,
			'height':300,
			'legend': 'none'
	};

	function drawChart(week_offset) {
		$.getJSON('graph', {chart: 5, week: week_offset},function(json_data) {
			var data = new google.visualization.DataTable();
			for(i in json_data.format){
				data.addColumn(json_data.format[i][0], json_data.format[i][1]);
			}
			data.addRows(json_data.data);
			$('#chart5 .buttons .date').html(json_data.title);
			chart.draw(data, options);
		});
	}

	plus_button.onclick = function() {
		drawChart(++offset);
	}
	minus_button.onclick = function() {
		drawChart(--offset);
	}
	drawChart(offset);
}

/*
pie chart showing total kcal per activity
*/
function chart6(){
	var offset = week;
	var chart = new google.visualization.PieChart(document.getElementById('chart6_area'));
	var plus_button = $('#chart6 .buttons .plus')[0];
	var minus_button = $('#chart6 .buttons .minus')[0];
	var options = {	
			is3D: true,
			'title': 'Activity By Kcal',
			'width':300,
			'height':300,
			'legend': 'none'
	};

	function drawChart(week_offset) {
		$.getJSON('graph', {chart: 6, week: week_offset},function(json_data) {
			var data = new google.visualization.DataTable();
			for(i in json_data.format){
				data.addColumn(json_data.format[i][0], json_data.format[i][1]);
			}
			data.addRows(json_data.data);
			$('#chart6 .buttons .date').html(json_data.title);
			chart.draw(data, options);
		});
	}

	plus_button.onclick = function() {
		drawChart(++offset);
	}
	minus_button.onclick = function() {
		drawChart(--offset);
	}
	drawChart(offset);
}

function all(){
	chart1();
	chart2();
	chart3();
	chart4();
	chart5();
	chart6();
}

$(document).ready(function(){
	all();
});
