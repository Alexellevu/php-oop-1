<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

use JetBrains\PhpStorm\Language;

class Movie
{
    public $title;
    public $desc;
    public $director;
    public $year;
    public $language;
    public $img;

    function __construct(
       string $title, string $desc , string $director, int $year ,  string $language, string $img ='')
    {
        $this ->title= $title;
        $this ->desc = $desc;
        $this ->director = $director;
        $this ->year =$year;
        $this->language = $language;
        $this->img = $img;


    }
    public function setLanguage(string $language){
        $this->Language = $language;
    }
    


    
}

$movies =[
    new Movie('Titanic', 'Lorem ipsum dolor, sit amet consectetur adipisicing.','James Cameroon',1998,'english','https://movieplayer.net-cdn.it/t/images/2009/09/29/la-locandina-di-titanic-7522_jpg_400x0_crop_q85.jpg'),
    new Movie('Sin City', 'Lorem ipsum dolor, sit amet consectetur adipisicing.','Frank Miller',2005,'english','https://pad.mymovies.it/filmclub/2005/05/015/locandina.jpg'),
    new Movie('La Vita è Bella', 'Lorem ipsum dolor, sit amet consectetur adipisicing.','Roberto Benigni',1998,'italian','http://www.cgentertainment.it/img/film/3690/LOC1_3690.jpg'),
    new Movie('Trainspotting', 'Lorem ipsum dolor, sit amet consectetur adipisicing.','Danny Boyle',1996,'english','https://pad.mymovies.it/filmclub/2006/08/133/locandina.jpg')

];





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>
        <div class="movies">
           <?php foreach($movies as $movie): ?>
                <div class="movie">
                <img src="<?php echo $movie->img ?>" alt="">
                <h2> <?php echo $movie->title ?> </h2>
                <p><?php echo $movie->desc ?></p>
                <p>Directed by: <?php echo $movie->director ?></p>
                <p>Year: <?php echo $movie->year?></p>
                <p>language: <?php echo $movie->language?></p>

                
                </div>

            <?php endforeach; ?>  
        </div>
</body>
</html>