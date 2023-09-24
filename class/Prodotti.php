<?php 


class Prodotti {
    protected $immagine ;
    protected $titolo ;
    protected $prezzo ;
    protected $categoria ;

    public function __construct($immagine,$titolo,$prezzo,Categoria  $categoria)
    {
        $this->immagine = $immagine;
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->$categoria = $categoria;
    }

    /**
     * Get the value of titolo
     */ 
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set the value of titolo
     *
     * @return  self
     */ 
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get the value of immagine
     */ 
    public function getImmagine()
    {
        return $this->immagine;
    }

    /**
     * Set the value of immagine
     *
     * @return  self
     */ 
    public function setImmagine($immagine)
    {
        $this->immagine = $immagine;

        return $this;
    }

    /**
     * Get the value of prezzo
     */ 
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     *
     * @return  self
     */ 
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
};


