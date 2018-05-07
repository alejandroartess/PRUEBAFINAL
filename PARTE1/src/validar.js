function validar() {

  var valor=document.getElementById('nombre').value;
  var valor2=document.getElementById('edad').value;
  var valor3=document.getElementById('curso').value;
  if (valor == "") {
    alert("El campo nombre esta vacio");
    return false;
  } else if (valor2 == "") {
    alert("El campo edad esta vacio");
    return false;
  } else if ((valor3>=1)&&(valor3<=6)) {
    return true;
  } else {
    alert("El campo curso tiene que ser entre el 1 y el 6");
    return false;
  }
}