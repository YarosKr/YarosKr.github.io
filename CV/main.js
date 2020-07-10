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