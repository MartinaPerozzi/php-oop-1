<?php

// Creo una classe Movie
class Movie
{
    // Con le sue specifiche caratteristiche
    public $movie_title;
    public $movie_description;



    // Mi passo le variabili con un costruttore
    public function __construct($_movie_title, $_movie_description)
    {
        $this->movie_title = $_movie_title;
        $this->movie_description = $_movie_description;
    }

    public function movieList($movie)
    {
        echo "$movie->movie_title";
        echo "$movie->movie_description";
    }
}

// Creo un'istanza di quella classe- in questo caso un array di istanze
$movies = [
    new Movie("Requiem for a Dream", "loremipsum"),
    new Movie("Mr. Nobody", "loremipsum"),
    new Movie("Brokeback Mountain", "loremipsum"),
    new Movie("The Lion King", "loremipsum"),
    new Movie("The Theory of Everything", "loremipsum"),
    new Movie("Call me by your name", "loremipsum"),
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITLE -->
    <title></title>
    <!-- LINK -->
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div>
        <?php foreach ($movies as $movie) { ?>
            <h3><?= $movie->movie_title; ?></h3>
            <p><?= $movie->movie_description; ?></p>


        <?php } ?>
    </div>

</body>

</html>