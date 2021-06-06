
<?php
/**
 * E' definita una classe ‘Movie’:
 * - all'interno della classe sono dichiarati degli attributi
 * - all'interno della classe è definito un costruttore
 * - all'interno della classe è definito almeno un metodo
 * - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 */

class Movie {
    // Attributi
    public $titolo;
    public $regista;
    public $durata;
    public $genere;

    // Costruttore
    function __construct($titolo, $regista, $durata, $genere) {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->durata = $durata;
        $this->genere = $genere;
    }

    // Metodi
    public function getRegista() {
        return $this->regista;
    }
}

// Istanza 1
