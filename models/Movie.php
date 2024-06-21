<?php
//CREO CLASSE MOVIE
class Movie
{
    //CREO ISTANZE CHE SONO DENTRO LA CLASSE MOVIE
    public $titolo;
    public $genere;
    public $voto;
    public $durata_film;

    //CREO FUNZIONE CHE MI RESTITUISCE TUTTE LE ISTANZE INSIEME DI OGNI FILM CHE VADO A STAMPARE
    public function film_completo()
    {
        return "Titolo: $this->titolo Genere:$this->genere Voto:$this->voto Durata:$this->durata_film";
    }

    public function __construct($dato_titolo, $dato_genere, $dato_voto, $dato_durata_film)
    {
        $this->titolo = $dato_titolo;
        $this->genere = $dato_genere;
        $this->voto = $dato_voto;
        $this->durata_film = $dato_durata_film;
    }
}
