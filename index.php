<?php
require_once __DIR__ . "/classes/movie.php";
require_once __DIR__ . "/genre.php";

$movies = [
    new Movie("https://m.media-amazon.com/images/I/51AP5MY2B5L._AC_UF894,1000_QL80_.jpg", 
    "Rocky", 
    ["Drammatico", "Azione", "Sportivo"], 
    119, 
    "John G. Avildsen",),

    new Movie("https://m.media-amazon.com/images/I/51DZpY7tfoL._AC_UF1000,1000_QL80_.jpg",
    "Pulp Fiction", 
    ["Thriller", "Azione", "Gangster"], 
    150, 
    "Quentin Tarantino"),
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Php OOP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.5/axios.min.js" integrity="sha512-JEXkqJItqNp0+qvX53ETuwTLoz/r1Tn5yTRnZWWz0ghMKM2WFCEYLdQnsdcYnryMNANMAnxNcBa/dN7wQtESdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body style="background-color: rgb(38, 50, 79);">
<div id="app">
        <main>
            <div class="container d-flex jusify-content-center">
            <h1 class="text-white">Film da vedere:</h1> 

                <div class="row row-cols-4 d-flex gap-5 justify-content-center p-5">
                <!-- ciclo foreach che stampa elementi di Movie nelle card -->
                <?php foreach($movies as $movie) { ?>
                    <div class="card my-2 p-2" style="background-color: rgb(68, 107, 199); width: 350px;">
                        <!-- Immagine delle card -->
                        <img src="<?php echo $movie->getImage(); ?>" alt="Immagine del film" srcset="" class="card-img-top">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <!-- titolo -->
                            <p class="fs-3 fw-bold text-center text-white"> <?= $movie->title; ?> </p>
                            <!-- regista -->
                            <p class="fs-4 mt-1 fw-bold"> Regista:<?php echo $movie->director; ?> </p>
                            <!-- ciclo foreach per stampare più generi dall'array genre -->
                            <?php foreach($movie->genres as $genre ) { ?>
                            <p class="fs-6"> <?php echo ($genre); ?> </p>
                            <?php } ?>
                            <!-- durata -->
                            <p class="fs-4"> Durata:<?php echo $movie->duration; ?> minuti </p>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </main>
    </div>
    <script src="./script.js"></script>
</body>

</html>