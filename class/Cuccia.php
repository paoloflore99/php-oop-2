<?php 


class Cuccia extends Prodotti{
    public function __construct($immagine,$titolo,$prezzo,Categoria  $categoria)
    {
        parent::__construct($immagine,$titolo,$prezzo,$categoria);
        
    }

    public function STampaDEtagliata() {
        
    }
};


?>