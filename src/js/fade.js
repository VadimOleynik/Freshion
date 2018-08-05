function fadeOut(element, className, time, callback) {
  var time = time || 20;
  var callback = callback || function() {};
  var op = 1; 
  var timer = setInterval(function () {
    if (op <= 0.1){
     element.style.opacity = 0;
     element.style.filter = "alpha(opacity=0)";
     clearInterval(timer);
     element.classList.remove(className);
   }
   element.style.opacity = op;
   element.style.filter = 'alpha(opacity=' + op * 100 + ")";
   op -= op * 0.1;
 }, time);
}


function fadeIn(element, className, time, callback) {
  var time = time || 20;
  var callback = callback || function() {};
  var op = 0.01; 
  var timer = setInterval(function () {
    if (op >= 1){
      clearInterval(timer);
      element.classList.add(className);
    }
    element.style.opacity = op;
    element.style.filter = 'alpha(opacity=' + op * 100 + ")";
    op += op * 0.1;
  }, time);
}