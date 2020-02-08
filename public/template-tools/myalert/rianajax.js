

// Ajax load
function load(link,place){
	var xhr = new XMLHttpRequest();
	place = document.getElementById(place)
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			place.innerHTML = xhr.responseText;
		}else{
			place.innerHTML = "Loading...";
		}
	}

	xhr.open('GET', link, true);
	xhr.send();
}




function send(link){
	console.log(link);
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			return xhr.responseText;
		}else{
			return "failed";
		}
	}

	xhr.open('GET', link, true);
	xhr.send();
}














