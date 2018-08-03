/*function fadeOut(element, className, callback) {
  var callback = callback || function() {};
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
      if (op <= 0.1){
        clearInterval(timer);
        element.classList.remove(className);
      }
      element.style.opacity = op;
      element.style.filter = 'alpha(opacity=' + op * 100 + ")";
      op -= op * 0.1;
    }, 50);
  }


  function fadeIn(element, className, callback) {
    var callback = callback || function() {};
    var op = 0.1;  // initial opacity
    var timer = setInterval(function () {
      if (op >= 1){
        clearInterval(timer);

      }
      element.style.opacity = op;
      element.style.filter = 'alpha(opacity=' + op * 100 + ")";
      op += op * 0.1;
    }, 50);
  }*/


  function fade (el1, el2, className, callback) {
    var callback = callback || function() {};
    /*var op1 = 0.1;  // initial opacity
    var timer = setInterval(function () {
      if (op1 >= 1){
        clearInterval(timer);
        el2.classList.add(className);
      }
      el1.style.opacity = op1;
      el1.style.filter = 'alpha(opacity=' + op1 * 100 + ")";
      op1 += op1 * 0.1;
    }, 50);*/

    var op1 = 1;  // initial opacity
    var timer = setInterval(function () {
      if (op1 <= 0.1){
        clearInterval(timer);
        el2.classList.add(className);
        el1.classList.remove(className);
      }
      el1.style.opacity = op1;
      el1.style.filter = 'alpha(opacity=' + op1 * 100 + ")";
      op1 -= op1 * 0.1;
    }, 50);
  }