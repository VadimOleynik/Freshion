function getPosition(anchors) {
  var anchorPositions = new Array;
  for (var i = 0; i < anchors.length; i++) {
  	anchorPositions[i] = (elmYPosition(anchors[i]));
  }	
  return anchorPositions;
};