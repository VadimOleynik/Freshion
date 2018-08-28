function getPosition(anchors) {
  const anchorPositions = new Array;
  
  for (let i = 0; i < anchors.length; i++) {
  	anchorPositions[i] = (elmYPosition(anchors[i]));
  }	
  return anchorPositions;
};