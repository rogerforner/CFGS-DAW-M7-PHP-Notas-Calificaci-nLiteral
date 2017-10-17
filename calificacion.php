<?php
//#######################################################################
//############################################################## "ÍNDICE"
//***********************************************************************
//# *********************************************************************
//# Funciones
//# Valores
//# Resultado
//# *********************************************************************

//# Funciones
//# ---------------------------------------------------------------------
function calificacion($nota) {
  if ($nota > 10 || $nota < 0) {
    $calificacion = "ERROR: La nota no puede ser superior a 10 ni inferior a 0.";
    return $calificacion;

  } else {
    //Suspenso
    if ($nota >= 0 && $nota < 5) {
      $calificacion = "Suspenso! ☉▵☉凸";
      return $calificacion;
    }
    //Aprobado
    if ($nota >= 5 && $nota < 7) {
      $calificacion = "Aprobado! (~￣▽￣)~";
      return $calificacion;
    }
    //Notable
    if ($nota >= 7 && $nota < 9) {
      $calificacion = "Notable! \m/(>.<)\m/";
      return $calificacion;
    }
    //Sobresaliente
    if ($nota == 9) {
      $calificacion = "Sobresaliente! ≧◡≦";
      return $calificacion;
    }
    //Excelente
    if ($nota == 10) {
      $calificacion = "Montgomery Burns dice: Excelente! (ﾉ◕ヮ◕)ﾉ*:･ﾟ✧";
      return $calificacion;
    }
  }
}

//# Valores
//# ---------------------------------------------------------------------
//Obtener el valor introducido en el campo Nota.
$nota = $_POST['nota']; //name="nota"

//# Resultado
//# ---------------------------------------------------------------------
echo calificacion($nota);
?>
