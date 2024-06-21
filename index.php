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
}

//AGGIUNGO ALLA CLASSE MOVIE LA VARIABILE CAPITAN AMERICA
$capitan_america = new Movie();
//RINOMINO IL TITOLO PER QUELLA VARIABILE CHE SI TROVA NELLA CLASSE MOVIE
$capitan_america->titolo = "Capitan America";
//RINOMINO IL GENERE PER QUELLA VARIABILE CHE SI TROVA NELLA CLASSE MOVIE
$capitan_america->genere = "Azione, Avventura";
//RINOMINO IL VOTO PER QUELLA VARIABILE CHE SI TROVA NELLA CLASSE MOVIE
$capitan_america->voto = 4;
//RINOMINO LA DURATA PER QUELLA VARIABILE CHE SI TROVA NELLA CLASSE MOVIE
$capitan_america->durata_film = "125 Minuti";

$io_sono_leggenda = new Movie();
$io_sono_leggenda->titolo = "Io sono Leggenda";
$io_sono_leggenda->genere = "Drammatico";
$io_sono_leggenda->voto = 5;
$io_sono_leggenda->durata_film = "100 Minuti";

$la_mano_de_dios = new Movie();
$la_mano_de_dios->titolo = "La Mano De Dios";
$la_mano_de_dios->genere = "Drammatico, Sportivo";
$la_mano_de_dios->voto = 5;
$la_mano_de_dios->durata_film = "113 Minuti";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP</title>
</head>

<body>
    <ul>
        I Film Sono:
        <!-- IN QUESTO MODO STAMPO OGNI FILM A MANO E OGNI ISTANZA A MANO -->

        <!-- <li>
            <?= "Titolo: $capitan_america->titolo, Genere: $capitan_america->genere, Voto: $capitan_america->voto, Durata: $capitan_america->durata_film"  ?>
        </li>
        <li>
            <?= "Titolo: $io_sono_leggenda->titolo, Genere: $io_sono_leggenda->genere, Voto: $io_sono_leggenda->voto, Durata: $io_sono_leggenda->durata_film"  ?>
        </li>
        <li>
            <?= "Titolo: $la_mano_de_dios->titolo, Genere: $la_mano_de_dios->genere, Voto: $la_mano_de_dios->voto, Durata: $la_mano_de_dios->durata_film"  ?>
        </li> -->


        <!-- COSI STAMPO TRAMITE LA FUNZIONE FILM_COMPLETO CHE STA NELLA CLASSE MOVIE MA DEVO SEMPRE AGGIUNGERE LA VARIABIKE DEL FILM CHE VOGLIO STAMPARE -->
        <li>
            <?= $capitan_america->film_completo() ?>
        </li>
        <li>
            <?= $io_sono_leggenda->film_completo() ?>
        </li>
        <li>
            <?= $la_mano_de_dios->film_completo() ?>
        </li>
    </ul>
</body>

</html>