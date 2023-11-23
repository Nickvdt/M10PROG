<?php

class Medewerker
{
    public float $uurloon;
    public int $aantaluur;

    function __construct($uurloon = 0, $aantaluur = 0)
    {
        $this->uurloon = $uurloon;
        $this->aantaluur = $aantaluur;
    }

    function gawerken($extrauren)
    {
        $this->aantaluur += $extrauren;
        echo "Medewerker heeft $extrauren extra uur gewerkt. Totaal gewerkte uren: {$this->aantaluur} uur";
    }

    function ganaarhuis($stoppen)
    {
        if ($stoppen) {
            echo "Medewerker gaat naar huis. Totale salaris: €" . ($this->uurloon * $this->aantaluur);
        } else {
            echo "Medewerker werkt door.";
        }
    }

    function pauze()
    {
        echo "Medewerker neemt een pauze.";
    }
}

class Manager extends Medewerker
{
    public function geefOpdracht($opdracht)
    {
        echo "Manager geeft de opdracht: '$opdracht'";
    }
}


$medewerker = new Medewerker(10, 8); // uurloon: €10, gewerkte uren: 8
$manager = new Manager();

$manager->geefOpdracht("Doe dit werk"); // geef een opdracht
echo "<br>";
$medewerker->gawerken(4); // werk 4 extra uren
echo "<br>";
$medewerker->pauze(); // neem pauze
echo "<br>";

$medewerker->ganaarhuis(true); // ga naar huis en bereken salaris