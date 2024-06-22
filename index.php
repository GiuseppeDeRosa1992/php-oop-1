<?php
// INCLUDO QUELLO CHE C'è IN STORE.PHP CHE A SUA VOLTA HA LE FUNZIONI CHE SONO INCLUSE IN MOVIE.PHP
include __DIR__ . "/store.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP</title>
</head>

<body>
    <ol class="text-center">
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
        <!-- <li>
            <?= $capitan_america->film_completo() ?>
        </li>
        <li>
            <?= $io_sono_leggenda->film_completo() ?>
        </li>
        <li>
            <?= $la_mano_de_dios->film_completo() ?>
        </li> -->

        <!-- CICLO FOREACH DOVE STAMPO OGNI FILM NELLA LISTA MOVIES -->
        <?php foreach ($movies as $movie) { ?>
            <li> <?= $movie->film_completo() ?> </li>
        <?php } ?>
    </ol>

    <!-- STAMPO LE CARD DEI FILM NELLA LISTA SOPRA -->
    <h2 class="text-center">Le Card dei Film sono:</h2>
    <div class="row m-0 p-0 px-2 justify-content-between">
        <?php foreach ($movies as $movie) { ?>
            <div class="card col-4 p-2 bg-black">
                <img src=<?= $movie->path_img ?> class="card-img-top img-fluid h-100" alt="immagine-film">
                <div class="card-body bg-white">
                    <h5 class="card-title">Titolo: <?= $movie->titolo ?></h5>
                    <p class="card-text">Genere: <?= $movie->genere ?></p>
                    <p class="card-text">Voto: <?= $movie->voto ?></p>
                    <p class="card-text">Durata: <?= $movie->durata_film ?></p>
                    <p class="m-0 text-center">
                        <a href="#film" class="btn btn-primary">Go Film</a>
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>