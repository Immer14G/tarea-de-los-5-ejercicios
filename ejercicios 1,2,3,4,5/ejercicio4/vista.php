<?php
class Juego{
    public $numero;
    public $precio;

    public function __construct($_numero,$_precio)
    {
        $this->numero = $_numero;
        $this->precio = $_precio;
    }

    public function Jugar(){
        if($this->precio == 1)
        {
            if ($this->numero == 63)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $70</h1>";
            }
            else if($this->numero > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        
        else if($this->precio == 2)
        {
            if ($this->numero == 5)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $140</h1>";
            }
            else if($this->numero > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->precio == 3)
        {
            if ($this->numero == 70)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $210</h1>";
            }
            else if($this->numero > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->precio == 4)
        {
            if ($this->numero == 25)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $280</h1>";
            }
            else if($this->numero > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->precio == 5)
        {
            if ($this->numero == 53)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $350</h1>";
            }
            else if($this->numero > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->precio == 6)
        {
            if ($this->numero == 100)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $420</h1>";
            }
            else if($this->numero > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->precio == 7)
        {
            if ($this->numero == 2)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $490</h1>";
            }
            else if($this->numero > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->precio== 8)
        {
            if ($this->numero == 13)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $560</h1>";
            }
            else if($this->numero > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
        }
        }
        else if($this->precio == 9)
        {
            if ($this->numero == 23)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $630</h1>";
            }
            else if($this->numero > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
        }
        else if($this->precio == 10)
        {
            if ($this->numero == 45)
            {
                echo "<h1>FELICIDADES USTED HA GANADO $700</h1>";
            }
            else if($this->numero > 100)
            {
                echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO VALIDO</h1>";
            }
            else
            {
                echo "<h1>LO SENTIMOS USTED HA PERDIDO, SUERTE A LA PROXIMA</h1>";
            }
            
        }
        else
        {
            echo "<h1>ERROR, POR FAVOR INGRESE UN NUMERO DE ENTRADA VALIDA</h1>";
        }
    }
}

$objeto = new Juego($_POST['precio'], $_POST['numero']);
$objeto->Jugar();
?>



