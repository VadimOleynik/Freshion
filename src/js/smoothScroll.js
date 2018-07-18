function currentYPosition() {
    // Firefox, Chrome, Opera, Safari
    if (self.pageYOffset) return self.pageYOffset;
    // Internet Explorer 6 - standards mode
    if (document.documentElement && document.documentElement.scrollTop)
    	return document.documentElement.scrollTop;
    // Internet Explorer 6, 7 and 8
    if (document.body.scrollTop) return document.body.scrollTop;
    return 0;
  }


  function elmYPosition(elm, extraOffset) {
    var extraOffset = extraOffset || 0;
  	var y = elm.offsetTop - extraOffset;
  	var node = elm;
  	while (node.offsetParent && node.offsetParent != document.body) {
  		node = node.offsetParent;
  		y += node.offsetTop;
  	} return y;
  }


  function smoothScroll(elm, speed, extraOffset) {
  	var speed = speed || 10;
  	var extraOffset = extraOffset || 0;
  	var startY = currentYPosition();
  	var stopY = elmYPosition(elm, extraOffset);
  	var distance = stopY > startY ? stopY - startY : startY - stopY;
  	if (distance < 100) {
  		scrollTo(0, stopY); return;
  	}
  	var speed = Math.round(distance / speed);
  	if (speed >= 20) speed = 20;
  	var step = Math.round(distance / 25);
  	var leapY = stopY > startY ? startY + step : startY - step;
  	var timer = 0;
  	if (stopY > startY) {
  		for ( var i=startY; i<stopY; i+=step ) {
  			setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
  			leapY += step; if (leapY > stopY) leapY = stopY; timer++;
  		} return;
  	}
  	for ( var i=startY; i>stopY; i-=step ) {
  		setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
  		leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
  	}
  }
