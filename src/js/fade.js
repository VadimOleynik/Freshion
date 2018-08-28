function fadeOut(element, className, time=40, callback=function() {}, callbackParam) {
  let op = 1; 
  const timer = setInterval(function () {
    if (op <= 0.1){
     callback(callbackParam);
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


function fadeIn(element, className, time=40, callback=function() {}, callbackParam) {
  let op = 0.01; 
  const timer = setInterval(function () {
    if (op >= 1){
      callback(callbackParam);
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