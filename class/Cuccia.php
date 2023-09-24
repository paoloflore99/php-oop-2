<?php 


// class Cuccia extends Prodotti{
//     public function __construct($immagine,$titolo,$prezzo,Categoria  $categoria)
//     {
//         parent::__construct($immagine,$titolo,$prezzo,$categoria);
        
//     }

//     public function STampaDEtagliata() {
//         echo "Immagine :" . $this->immagine . "<br>";
//         echo "Titolo :" . $this->titolo . "<br>";
//         echo "Prezzo :" . $this->prezzo . "<br>";
//     }

    

// };


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

// Creiamo un'istanza di Categoria
$categoriaCuccia = new Categoria("Cuccia");

// Creiamo un'istanza di Cuccia con dati appropriati
$cuccia = new Cuccia(
    "https://animaloutlet.it/wp-content/uploads/2023/04/Cuccia-Rilassante-a-Forma-di-Zampa-Labrador.jpg",
    "Cuccia per cane morbida e avvolgente",
    49.99,
    $categoriaCuccia
);

// Chiamiamo il metodo per stampare i dettagli
$cuccia->stampaDettagliata();




?>