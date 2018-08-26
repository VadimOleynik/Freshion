function ajax(method, url, params, funcIfTrue, funcIfFalse) {
	const request = new XMLHttpRequest();

	request.open(method, url);
	request.setRequestHeader("Content-Type", "application/json");

	request.onreadystatechange = function() {
		if (request.readyState == "4" && request.status == 200 && request.responseText == "1") {
			funcIfTrue();
		}
		else if(request.readyState == "4" && request.status == 200 && request.responseText !== "1") {
			funcIfFalse();
		}
		else if (request.readyState == "4" && request.status == 200) {
			funcIfErrServer();
		}
	}
	request.send(params);
}