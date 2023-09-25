<?php 
class Cuccia extends Prodotti {
    public function __construct($immagine, $titolo, $prezzo, Categoria $categoria) {
        parent::__construct($immagine, $titolo, $prezzo, $categoria);
    }

    public function stampaDettagliata() {
        echo "Immagine: " . $this->getImmagine() . "<br>";
        echo "Titolo: " . $this->getTitolo() . "<br>";
        echo "Prezzo: " . $this->getPrezzo() . "<br>";
        echo "Categoria: " . $this->getCategoria()->getNome() . "<br>";
    }
}

$categoriaCuccia1 = new Categoria("Cuccia");
$categoriaCuccia2 = new Categoria("Cuccia");

$cucci1 = new Cuccia(
    "https://www.minellisrl.eu/1110-large_default/cuccia-per-gatto-in-vimini-con-cuscino-simple-day.jpg",
    "Cuccia per cane morbida e avvolgente",
    49.99,
    $categoriaCuccia1
);

$cucci2 = new Cuccia(
    "https://animaloutlet.it/wp-content/uploads/2023/04/Cuccia-Rilassante-a-Forma-di-Zampa-Labrador.jpg",
    "Cuccia per cane morbida e avvolgente",
    29.99,
    $categoriaCuccia2
);

$cucci1->stampaDettagliata();
$cucci2->stampaDettagliata();
$cuccie = [$cucci1,$cucci2];
var_dump($cucci1);