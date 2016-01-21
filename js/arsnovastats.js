function getStats(){
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "https://arsnova.eu/api/statistics/", false);
	xhr.send();
	if(xhr.status==200){
//		console.log(xhr.responseText);
		return xhr.responseText;
	}
}
function getStatsJSON(){
	return JSON.parse(getStats());
}

function writeStats(){
	/*
	 * answers
	 * lectureQuestions
	 * preparationQuestions
	 * openSessions
	 * closedSessions
	 * creators
	 * activeUsers
	 * activeStudents
	 * loggedinUsers
	 * interposedQuestions
	 * conceptQuestions
	 * questions
	 * sessions
	 */
	
	var stats=JSON.parse(getStats());
	for(var v in stats){
		console.log(v+': '+stats[v]);
	}
}

function createTable(){
	var i=0;
	var json=getStatsJSON();
	$("#myTable tr").remove(); 
	var table=document.getElementById("myTable");
	var header=table.createTHead();
	var row=header.insertRow(i++);
	var cell=row.insertCell(0);
	cell.innerHTML="Beschreibung";
	cell=row.insertCell(1);
	cell.innerHTML="Wert";

	for(var v in json){
		row=header.insertRow(i++);
		row.insertCell(0).innerHTML=v;
		row.insertCell(1).innerHTML=json[v];
		//		console.log(v+': '+stats[v]);
	}
}

function createPlot(){
	/*
	 * answers
	 * lectureQuestions
	 * preparationQuestions
	 * openSessions
	 * closedSessions
	 * creators
	 * activeUsers
	 * activeStudents
	 * loggedinUsers
	 * interposedQuestions
	 * conceptQuestions
	 * questions
	 * sessions
	 */
//	var json=getStatsJSON();
	var array=[['Android', 60], ['IPhone', 20]];
	
	$.jqplot('chartdiv', [array],{
		series:[{renderer:$.jqplot.BarRenderer}],
		axes:{
			xaxis:{
				renderer: $.jqplot.CategoryAxisRenderer
			}
		}
	});
}

$(document).ready(function (){
	createPlot();
//	createTable();
//	setInterval(createTable, 30000);
});