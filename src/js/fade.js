function fadeOut(element, className, time, callback) {
  var time = time || 40;
  var callback = callback || function() {};
  var op = 1; 
  var timer = setInterval(function () {
    if (op <= 0.1){
     callback(element);
     if (className) {
      element.classList.remove(className);
    }
    clearInterval(timer);
  }
  element.style.opacity = op;
  element.style.filter = 'alpha(opacity=' + op * 100 + ")";
  op = op - 0.1;
}, time);
}


function fadeIn(element, className, time, callback) {
  var time = time || 40;
  var callback = callback || function() {};
  var op = 0.01; 
  var timer = setInterval(function () {
    if (op >= 1){
      callback();
      if (className) {
        element.classList.add(className);
      }
      clearInterval(timer);
    }
    element.style.opacity = op;
    element.style.filter = 'alpha(opacity=' + op * 100 + ")";
    op = op + 0.1;
  }, time);
}