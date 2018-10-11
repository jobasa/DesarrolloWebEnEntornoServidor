function validar(){
  var rgb1Caja = document.getElementById('rgb1');
  var rgb2Caja = document.getElementById('rgb2');
  var rgb3Caja = document.getElementById('rgb3');

  //Comprobaciones
  if (!rgb1Caja.value) {
    alert("El campo RGB1 no tiene nigun valor");
    return false;
  }
  if (!rgb2Caja.value) {
    alert("El campo RGB2 no tiene nigun valor");
    return false;
  }
  if (!rgb3Caja.value) {
    alert("El campo RGB3 no tiene nigun valor");
    return false;
  }
  return true;

}
