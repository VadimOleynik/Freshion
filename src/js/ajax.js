function ajax(method, url, params, callback) {
	const request = new XMLHttpRequest();

	request.open(method, url);
	request.setRequestHeader("Content-Type", "application/json");

	request.onreadystatechange = function() {
		if (request.readyState == "4" && request.status == 200) {
			console.log(request.responseText);
		}
	}
	request.send(params);
}