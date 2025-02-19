<?php

$produits = [
    [
        "categorie" => "Boisson",
        "nom" => "Coca",
        "prix" => 2.54,
        "description" => "Un Coca bien frais chacal",
        "image" => "./images/coca.webp"
    ],
    [
        "categorie" => "Boisson",
        "nom" => "Fanta",
        "prix" => 1.99,
        "description" => "Une boisson rafraîchissante",
        "image" => "./images/fanta.webp"
    ],
    [
        "categorie" => "Fruit",
        "nom" => "Pomme",
        "prix" => 6,
        "description" => "Des Pommes de Normandie",
        "image" => "./images\pomme.png"
    ],
    [
        "categorie" => "Légume",
        "nom" => "Carotte",
        "prix" => 4,
        "description" => "Les Carottes de Mr.MAHDJOUB",
        "image" => "./images\carotte.png"
    ],
    [
        "categorie" => "Légume",
        "nom" => "Salade",
        "prix" => 10,
        "description" => "La Salade de Mr.FADLI",
        "image" => "./images\Salade.png"
    ],
    [
        "categorie" => "Boisson",
        "nom" => "Eau",
        "prix" => 1,
        "description" => "Esprit KAIZEN",
        "image" => "./images\cristaline.png"
    ],
    [
        "categorie" => "Informatique",
        "nom" => "Clavier",
        "prix" => 50,
        "description" => "Clavier de qualité venant de notre partenaire Mr.BARBIER",
        "image" => "./images\clavier-blanc-removebg-preview.png"
    ],
    [
        "categorie" => "Informatique",
        "nom" => "Souris",
        "prix" => 30,
        "description" => "Souris de qualité venant de notre partenaire Mr.SEHIM",
        "image" => "./images\souris_blanche-removebg-preview.png"
    ],
    [
        "categorie" => "Informatique",
        "nom" => "Écran",
        "prix" => 40,
        "description" => "Écran de qualité venant de notre partenaire Mme.LE CALVEZ",
        "image" => "./images\écran-removebg-preview.png"
    ],
    [
        "categorie" => "Boisson",
        "nom" => "Pepsi",
        "prix" => 2.31,
        "description" => "Un Pepsi bien frais chacal de chez Barbier",
        "image" => "./images\pepsi.png"
    ],
    [
        "categorie" => "Légume",
        "nom" => "Choux",
        "prix" => 3,
        "description" => "Les Choux de Mr.DECERF",
        "image" => "./images\chou-blanc-removebg-preview.png"
    ],
    [
        "categorie" => "Fruit",
        "nom" => "Banane",
        "prix" => 2,
        "description" => "Les Bananes de Mr.JOURDAIN",
        "image" => "./images\bananes-2-removebg-preview.png"
    ]
];

array_push($produits, ["categorie" => "Fruit",
        "nom" => "Banane",
        "prix" => 2,
        "description" => "Les Bananes de Mr.JOURDAIN",
        "image" => "./images\bananes-2-removebg-preview.png"]);

// foreach ($produits as $key => $value) {
//     var_dump($value);
// }

$fmt = numfmt_create('fr_FR', NumberFormatter::CURRENCY);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="fond">
        <h1 class="text-center text-uppercase text-white">Action</h1>
        <div class="row mx-0 mt-3 justify-content-center gap-5">
            <?php
            foreach ($produits as $key => $data) { ?>
                <div class='card col-lg-3 col-10 p-3 row gris text-light'>
                    <img src='<?= $data["image"] ?>' class='card-img-top col-12' alt='Image de <?= $data["nom"] ?>'>
                    <div class='card-body d-flex flex-column justify-content-end'>
                        <h2 class='card-title'><?= $data["nom"] ?></h2>
                        <h3 class='card-text'>Catégorie : <?= $data["categorie"] ?></h3>
                        <p class='card-text'><?= $data["description"] ?></p>
                        <p class='card-text'><?= numfmt_format_currency($fmt, $data["prix"], "EUR") ?></p>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>