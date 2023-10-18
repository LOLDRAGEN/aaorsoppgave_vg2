<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>The Movie Database</title>
</head>
<body>

<header>
    <a href="index.html">
        <img id="logo" src="img/the-movie-database.svg" alt="the logo composed of TMDB">
    </a>
    <a href="">
        <button class="header_button">placeholder</button>
    </a>
    <a href="">
        <button class="header_button">placeholder</button>
    </a>
    <a href="">
        <button class="header_button">placeholder</button>
    </a>
    <a href="">
        <button class="header_button">login</button>
    </a>
</header>

<div id="title">
<h1>The Move Database</h1>
</div>

<!--<div id="test">-->
<!--    <h3>movie title</h3>-->
<!--    <img id="placeholder"-->
<!--         src="https://aumiekjrpq.cloudimg.io/v7/_intoprodweb_/uploads/2023/07/mv5bnmnknwu5nzutnmvkns00zde2ltg0njgtntixnwyxowiym2flxkeyxkfqcgdeqwfkcmlly2xh.-v1-.jpg?auto=format&auto=compress&fit=crop&gravity=face&w=1536&h=800"-->
<!--         alt="openhimer">-->
<!--    <h4>9.3 stars <img id="star_img" src="https://pngimg.com/d/star_PNG41507.png"></h4>-->
<!--</div>-->


<?php


$imageURL = [
    "https://www.apple.com/tv-pr/shows-and-films/t/tetris/images/show-home-graphic-header/key-art-01/4x1/Apple_TV_Tetris_key_art_graphic_header_4_1_show_home.jpg.og.jpg?1679955333330",
    "https://aumiekjrpq.cloudimg.io/v7/_intoprodweb_/uploads/2023/07/mv5bnmnknwu5nzutnmvkns00zde2ltg0njgtntixnwyxowiym2flxkeyxkfqcgdeqwfkcmlly2xh.-v1-.jpg?auto=format&auto=compress&fit=crop&gravity=face&w=1536&h=800",
    "https://www.barbie-themovie.com/images/share.jpg",
    "https://coolmusicltd.com/wp-content/uploads/2023/03/DD-1.jpg",
    "https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/34DFD0B161142821AD93F62B4DC3DBD82DAB42533D8A721DB54FA2C04AC854AD/scale?width=1200&aspectRatio=1.78&format=jpeg",
    "https://images.thedirect.com/media/article_full/spider-verse-posters_VMqW9U1.jpg",
    "https://flxt.tmsimg.com/assets/p17845781_v_h10_an.jpg"
];

$title = [
    "Tetris",
    "Oppenheimer",
    "Barbie",
    "Dungeons & Dragons: Honor Among Thieves",
    "The Little Mermaid",
    "Spider-Man: Across the Spider-Verse",
    "Guardians of the Galaxy Vol. 3"
];
$imig = [
    "Tetris",
    "Oppenheimer",
    "Barbie",
    "Dungeons & Dragons: Honor Among Thieves",
    "The Little Mermaid",
    "Spider-Man: Across the Spider-Verse",
    "Guardians of the Galaxy Vol. 3"

];
$raiting = [
    7.4,
    8.6,
    7.3,
    7.2,
    7.2,
    8.7,
    7.9
];
?>

<?php for ($i = 0; $i < count($title); $i++) : ?>
    <div class="movie-box">
        <h3><?php echo $title[$i]; ?></h3>
        <img class="img" src="<?php echo $imageURL[$i]; ?>" alt="Movie Poster">
        <h4><?php echo $raiting[$i]; ?> stars <img class="star_img" src="https://pngimg.com/d/star_PNG41507.png"></h4>
    </div>
<?php endfor; ?>

</body>
</html>

