function getStats(){
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "https://arsnova.eu/api/statistics/", false);
	xhr.send();
	if(xhr.status==200){
//		console.log(xhr.responseText);
		return xhr.responseText;
	}
}

function writeStats(){
	var stats=JSON.parse(getStats());
	document.getElementById('stats').innerHTML=stats.answers;
}
