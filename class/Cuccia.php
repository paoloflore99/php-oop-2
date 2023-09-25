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

$cuccia2 = new Cuccia(
    "https://animaloutlet.it/wp-content/uploads/2023/04/Cuccia-Rilassante-a-Forma-di-Zampa-Labrador.",
    "Cuccia per cane morbida e avvolgente",
    49.99,
    $categoriaCuccia1
);

$cuccia1 = new Cuccia(
    "https://animaloutlet.it/wp-content/uploads/2023/04/Cuccia-Rilassante-a-Forma-di-Zampa-Labrador.",
    "Cuccia per cane morbida e avvolgente",
    9.99,
    $categoriaCuccia2
);

// var_dump($cuccia2);
$cuccia1->stampaDettagliata();
$cuccia2->stampaDettagliata();

$cuccie = [$cuccia1,$cuccia2];
