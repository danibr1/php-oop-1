
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
    public function getDataUscita($data_uscita) {
        return $data_uscita;
    }

    public function getDescrizione($descrizione) {
        return $descrizione;
    }
}

// Istanza 1
$interstellar = new Movie ('Interstellar','Christopher Nolan','2h49m','Avventura');
echo '<h1>Titolo: ' . $interstellar->titolo . '</h1>';
echo '<h3>Regista: ' . $interstellar->regista . '</h3>';
echo '<h3>Durata: ' . $interstellar->durata . '</h3>';
echo '<h3>Genere: ' . $interstellar->genere . '</h3>';
echo '<h3>Data Uscita: ' . $interstellar->getDataUscita('26 ottobre 2014') . '</h3>';
echo '<h4>Descrizione: ' . $interstellar->getDescrizione('In un futuro non precisato, un drastico cambiamento climatico colpisce duramente l\'agricoltura. Il granturco è l\'unica coltivazione ancora in grado di crescere ed un gruppo di scienziati è intenzionato ad attraversare lo spazio per trovare nuovi luoghi adatti a coltivarlo.') . '</h4><br>';

// Istanza 2
$gravity = new Movie ('Gravity','Alfonso Cuarón','1h31m','Fantascienza');
echo '<h1>Titolo: ' . $gravity->titolo . '</h1>';
echo '<h3>Regista: ' . $gravity->regista . '</h3>';
echo '<h3>Durata: ' . $gravity->durata . '</h3>';
echo '<h3>Genere: ' . $gravity->genere . '</h3>';
echo '<h3>Data Uscita: ' . $gravity->getDataUscita('03 ottobre 2013') . '</h3>';
echo '<h4>Descrizione: ' . $gravity->getDescrizione('In missione a bordo dell\'Explorer, l\'astronauta Matt Kowalski e la dottoressa Ryan Stone, esperta di ingegneria medica, cercano di sopravvivere alla distruzione della navicella sulla quale si trovavano.') . '</h4><br>';