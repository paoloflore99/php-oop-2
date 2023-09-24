<?php 

class Giochi  extends Prodotti{
    public function __construct($immagine,$titolo,$prezzo,Categoria  $categoria)
    {
        parent::__construct($immagine,$titolo,$prezzo,$categoria);
        
    }

    public function stampaDettagliata() {
        echo "ImmagineGatto: " . $this->getImmagine() . "<br>";
        echo "Titolo: " . $this->getTitolo() . "<br>";
        echo "Prezzo1: " . $this->getPrezzo() . "<br>";
        echo "Categoria: " . $this->getCategoria()->getNome() . "<br>";
    }
}

    // $Giochi->stampaDettagliata();

    $categoriaGiochi1 =  new Categoria("Giochi");
    $categoriaGiochi2 =  new Categoria("Giochi");

$Giochi1 = new Giochi(
    "https://www.animaliapet.it/immagini/ecommerce/pneumatico-21.jpg",
    "gioco per cane" ,
    "9.99" ,
    $categoriaGiochi1);


$Giochi2 = new Giochi(
    "https://arcaplanet.vtexassets.com/arquivos/ids/266266/yes-gioco-con-pallina-per-gatti-intelligenza.jpg?v=1781223577",
    "gioco per gatto" ,
    "14.99" ,
    $categoriaGiochi2);


    $Giochi1->stampaDettagliata();
    $Giochi2->stampaDettagliata();



$cuccie = [$Giochi1,$Giochi2];




