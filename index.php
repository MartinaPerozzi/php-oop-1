<?php

// Creo una classe Movie
class Movie
{
    // Con le sue specifiche caratteristiche
    public $movie_title;
    public $movie_description;
    public $genres;


    // Mi passo le variabili con un costruttore e specifico il TIPO di dato per evitare problemi futuri
    public function __construct(string $_movie_title, string $_movie_description, array $_genres)
    {
        $this->setTitle($_movie_title);
        $this->setDescription($_movie_description);
        $this->genres = $_genres;
    }

    public function setTitle($movie_title)
    {
        if (!is_string($movie_title) || $movie_title === "") return false;
        $this->movie_title = $movie_title;
    }
    public function setDescription($movie_description)
    {
        if (!is_string($movie_description) || $movie_description === "") return false;
        $this->movie_description = $movie_description;
    }
}

class Genre
{
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }
}

// Creo un'istanza di quella classe- in questo caso un array di istanze
$movies = [
    new Movie("Requiem for a Dream", "loremipsum", [new Genre("Drammatic"), new Genre("Romance")]),
    new Movie("Mr. Nobody", "loremipsum", [new Genre("Drammatic"), new Genre("Romance")]),
    new Movie("Brokeback Mountain", "loremipsum", [new Genre("Drammatic"), new Genre("Romance")]),
    new Movie("The Lion King", "loremipsum", [new Genre("Drammatic"), new Genre("Romance")]),
    new Movie("The Theory of Everything", "loremipsum", [new Genre("Drammatic"), new Genre("Romance")]),
    new Movie("Call me by your name", "loremipsum", [new Genre("Drammatic"), new Genre("Romance")]),
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