<?php

class calcularFahrenheit{
    private $celsius;

    public function __construct($celsius)
    {
        $this ->celsius=$celsius;
    }
    public function convertir(){
        $centigrados =($this->celsius *9/5) + 32;
        return $centigrados;
        
    }
}

$conversion = new calcularFahrenheit(10);
$centigrados = $conversion ->convertir();

echo "10 grados celsius son ".$centigrados." fahrenheit";
?>