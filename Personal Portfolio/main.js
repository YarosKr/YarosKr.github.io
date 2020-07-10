const face = document.querySelector('#face');

face.addEventListener('mousemove', startRotate);
face.addEventListener('mouseout', stopRotate);

function startRotate(event) {
  const halfHeight = face.offsetHeight / 2;
  const halfWidth = face.offsetWidth / 2;
  face.style.transform = 'rotateX(' + (event.offsetY - halfHeight) / 15 + 'deg) rotateY(' + (event.offsetX - halfWidth) / 15 + 'deg)';
}

function stopRotate(event) {
  face.style.transform = 'rotate(0)';
}

function show_hide(id, numId) {
  var id = document.getElementById(id);
  var numId = document.getElementById(numId);
  if (id.style.display == 'none' || id.style.display == '') {
    id.style.display = 'block';
    numId.style.transform = 'rotate(90deg)';
  }
  else {
    id.style.display = 'none';
    numId.style.transform = 'rotate(0)'
  }
}





