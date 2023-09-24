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

$categoriaCuccia = new Categoria("Cuccia");

$cuccia = new Cuccia(
    "https://animaloutlet.it/wp-content/uploads/2023/04/Cuccia-Rilassante-a-Forma-di-Zampa-Labrador.",
    "Cuccia per cane morbida e avvolgente",
    49.99,
    $categoriaCuccia
);


$cuccia->stampaDettagliata();

$categoriaCuccia1 =  new Categoria("Cuccia");
$categoriaCuccia2 =  new Categoria("Cuccia");

$Cuccia1 = new Cuccia(
    "https://animaloutlet.it/wp-content/uploads/2023/04/Cuccia-Rilassante-a-Forma-di-Zampa-Labrador.jpg",
    "cuccia per cane morbida e avvolgente" ,
    "39.99" ,
    $categoriaCuccia1);


$Cuccia2 = new Cuccia(
    "https://www.minellisrl.eu/1110-large_default/cuccia-per-gatto-in-vimini-con-cuscino-simple-day.jpg",
    "cuccia per gatto morbida e fuori in legno" ,
    "59.99" ,
    $categoriaCuccia1);

    $cuccie = [$Cuccia1,$Cuccia2]


?>