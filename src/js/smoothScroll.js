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


  function elmYPosition(elm, extraOffset=0) {
  	let y = elm.offsetTop - extraOffset;
  	const node = elm;
  	while (node.offsetParent && node.offsetParent != document.body) {
  		node = node.offsetParent;
  		y += node.offsetTop;
  	} return y;
  }

  function elmXPosition(elm, extraOffset=0) {
    let x = elm.offsetLeft - extraOffset;
    const node = elm;
    while (node.offsetParent && node.offsetParent != document.body) {
      node = node.offsetParent;
      x += node.offsetLeft;
    } return x;
  }


  function smoothScroll(elm, speed=10, extraOffset=0) {
  	const startY = currentYPosition();
  	const stopY = elmYPosition(elm, extraOffset);
  	const distance = stopY > startY ? stopY - startY : startY - stopY;
  	if (distance < 100) {
  		scrollTo(0, stopY); return;
  	}
  	speed = Math.round(distance / speed);
  	if (speed >= 20) speed = 20;
  	const step = Math.round(distance / 25);
  	let leapY = stopY > startY ? startY + step : startY - step;
  	let timer = 0;
  	if (stopY > startY) {
  		for ( let i=startY; i<stopY; i+=step ) {
  			setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
  			leapY += step; if (leapY > stopY) leapY = stopY; timer++;
  		} return;
  	}
  	for ( let i=startY; i>stopY; i-=step ) {
  		setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
  		leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
  	}
  }
