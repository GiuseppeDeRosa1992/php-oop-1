<?php
//CREO CLASSE MOVIE
class Movie
{
    //CREO ISTANZE CHE SONO DENTRO LA CLASSE MOVIE
    public $titolo;
    public $genere;
    public $voto;
    public $durata_film;
    public $path_img;

    //CREO FUNZIONE CHE MI RESTITUISCE TUTTE LE ISTANZE INSIEME DI OGNI FILM CHE VADO A STAMPARE
    public function film_completo()
    {
        return "Titolo: $this->titolo Genere:$this->genere Voto:$this->voto Durata:$this->durata_film";
    }

    public function __construct($dato_titolo, $dato_genere, $dato_voto, $dato_durata_film, $dato_path_img,)
    {
        $this->titolo = $dato_titolo;
        $this->genere = $dato_genere;
        $this->voto = $dato_voto;
        $this->durata_film = $dato_durata_film;
        $this->path_img = $dato_path_img;
    }
}

/********************************************************************* CON FUNZIONE COSTRUTTO *********************************************************************************************/
$capitan_america = new Movie("Capitan America", "Azione, Avventura", 4, "125 Minuti", "img/capitan_america_.jpg");
$io_sono_leggenda = new Movie("Io sono Leggenda", "Drammatico", 5, "100 Minuti", "img/io_sono_leggenda.jpg");
$la_mano_de_dios = new Movie("La Mano de Dios", "Sportivo", 5, "113 Minuti", "img/mano_de_dios.jpg");
$io_vi_troverò = new Movie("Io vi Troverò", "Azione, Sparatutto", 5, "125 Minuti", "img/io_vi_troverò.jpg");
$dragon_ball = new Movie("Dragon Ball", "Cartone", 5, "100 Minuti", "img/dragon_ball.jpg");
$holly_e_benji = new Movie("Holly e Benji", "Sportivo, Cartone", 5, "113 Minuti", "img/hollybenji2.png");


/***********************************************************************  SENZA FUNZIONE COSTRUTTO  *********************************************************/

// //AGGIUNGO ALLA CLASSE MOVIE LA VARIABILE CAPITAN AMERICA 
// $capitan_america = new Movie();
// //RINOMINO IL TITOLO PER QUELLA VARIABILE CHE SI TROVA NELLA CLASSE MOVIE
// $capitan_america->titolo = "Capitan America";
// //RINOMINO IL GENERE PER QUELLA VARIABILE CHE SI TROVA NELLA CLASSE MOVIE
// $capitan_america->genere = "Azione, Avventura";
// //RINOMINO IL VOTO PER QUELLA VARIABILE CHE SI TROVA NELLA CLASSE MOVIE
// $capitan_america->voto = 4;
// //RINOMINO LA DURATA PER QUELLA VARIABILE CHE SI TROVA NELLA CLASSE MOVIE
// $capitan_america->durata_film = "125 Minuti";

// $io_sono_leggenda = new Movie();
// $io_sono_leggenda->titolo = "Io sono Leggenda";
// $io_sono_leggenda->genere = "Drammatico";
// $io_sono_leggenda->voto = 5;
// $io_sono_leggenda->durata_film = "100 Minuti";

// $la_mano_de_dios = new Movie();
// $la_mano_de_dios->titolo = "La Mano De Dios";
// $la_mano_de_dios->genere = "Drammatico, Sportivo";
// $la_mano_de_dios->voto = 5;
// $la_mano_de_dios->durata_film = "113 Minuti";
