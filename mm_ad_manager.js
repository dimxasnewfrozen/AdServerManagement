// load jquery
var script = document.createElement('script');
script.src = 'jquery-2.0.3.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

// run the file
setTimeout(function(){

	var script = document.createElement('script');
	script.src = 'ad.js';
	script.type = 'text/javascript';
	document.getElementsByTagName('head')[0].appendChild(script);

},50);
