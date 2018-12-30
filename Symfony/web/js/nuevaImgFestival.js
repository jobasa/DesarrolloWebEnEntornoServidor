var tiposValidos =
[
  'image/jpeg',
  'image/png'
];

function ValidarTipos(file) {
  for (var i = 0; i < tiposValidos.length; i++) {
    if (file.type === tiposValidos[i]) {
      return true;
    }
  }
  return false;
}

function onChange(event) {
  var file = event.target.files[0];
  if (ValidarTipos(file)) {
    var festivalMiniatura = document.getElementById('festivalThumb');
    festivalThumb.src = window.URL.createObjectURL(file);
  }
}
