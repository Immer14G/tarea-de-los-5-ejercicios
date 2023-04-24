<?php
class evaluar {
  public $celsius;
  public $text;

  public function __construct($celsius) {

    $this->celsius = $celsius;
  }

  public function clima() {

    if ($this->celsius <= 0) {

      $color = "blue";
      echo "<span style='color: blue'></span>";
      $text = "temperatura máximamente FRIA";

    } else if ($this->celsius <= 30) {

      $color = "yellow";
      echo "<span style='color: yellow'></span>";
      $text = "temperatura estable";

    } else {
      $color = "red";
      echo "<span style='color: red'></span>";
      $text = "temperatura máximamente CALIENTE";

    }
    return "<span style='color: $color'>$text</span>";
  }
}


$temperatura = new evaluar(35);
$resultado = $temperatura->clima();

echo "La temperatura actual es: $resultado ";


?>