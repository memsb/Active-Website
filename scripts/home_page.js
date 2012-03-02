var month = 0;
function view_month(num){
	month += num;
	$('#content').load('calendar?month=' + month);
}
function all(){
	view_month(0);
}

$(document).ready(function(){
	all();
});
