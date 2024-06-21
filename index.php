<?php
//CREO CLASSE MOVIE
class Movie
{
    //CREO ISTANZE CHE SONO DENTRO LA CLASSE MOVIE
    public $titolo;
    public $genere;
    public $voto;
    public $durata_film;
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
        <li>
            <?= "Titolo: $capitan_america->titolo, Genere: $capitan_america->genere, Voto: $capitan_america->voto, Durata: $capitan_america->durata_film"  ?>
        </li>
        <li>
            <?= "Titolo: $io_sono_leggenda->titolo, Genere: $io_sono_leggenda->genere, Voto: $io_sono_leggenda->voto, Durata: $io_sono_leggenda->durata_film"  ?>
        </li>
        <li>
            <?= "Titolo: $la_mano_de_dios->titolo, Genere: $la_mano_de_dios->genere, Voto: $la_mano_de_dios->voto, Durata: $la_mano_de_dios->durata_film"  ?>
        </li>
    </ul>
</body>

</html>