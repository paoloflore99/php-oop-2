<?php 
require_once __DIR__ . '/Prodotti.php';

class Cibo extends Prodotti{
    
    public function __construct($immagine,$titolo,$prezzo,Categoria  $categoria)
    {
        parent::__construct($immagine,$titolo,$prezzo,$categoria);
        
    }

    public function STampaDEtagliata() {
        echo "Immagine: " . $this->getImmagine() . "<br>";
        echo "Titolo: " . $this->getTitolo() . "<br>";
        echo "Prezzo: " . $this->getPrezzo() . "<br>";
        echo "Categoria: " . $this->getCategoria()->getNome() . "<br>";
    }

};


?>