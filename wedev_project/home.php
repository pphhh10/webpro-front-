<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook Eporium</title>
     <!-- JANGAN SENTUH!!! (BOOTSTRAP) -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" 
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
     crossorigin="anonymous">
     <!--CSS HERE -->
     <link rel="stylesheet" href="home.css">
     <link rel="stylesheet" href="baselayoutweb.css">
</head>
<body>
    <!-- BASE LAYOUT FOR WEBPAGE -->
    <header>
        <img src="Assets/logo.png" alt="logo">
    </header>

    <div class="topnav">
        <a class="active" href="home.php">Home</a>
        <a href="genre.php">Genre</a>
        <a href="index.html">New Realese</a>
        <a href="#about">Trending</a>
        <a href="signUp.php">Best Book</a>

        <!--SEARCH BAR -->
        <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit">Submit</button>
            </form>
          </div>
        
    </div>
    <!-- END OF BASE LAYOUT FOR WEPAGE -->

<!-- title -->
    <h2>New Added Books</h2>

<!-- BOOKS LAYOOUT -->
<div class="grid-container">
    <div class="gallery">
        <a target="_blank" href="onClickBooks.php">
          <img src="Assets/front_NW_haruki.jpg" alt="NW_haruki Murakami">
        </a>
        <div class="desc">Norwegian Wood</div>
    </div>
    <div class="gallery">
        <a target="_blank" href="Assets/BGaE_Nietzsche.jpg">
            <img src="Assets/BGaE_Nietzsche.jpg" alt="BGaE_Nietzsche">
          </a>
          <div class="desc">Beyond Good and Evil</div>
    </div>
    <div class="gallery">
        <a target="_blank" href="Assets/StudioAnywhere.jpg">
            <img src="Assets/StudioAnywhere.jpg" alt="StudioAnywhere">
          </a>
          <div class="desc">Studio Anywhere</div>
    </div>  
    <div class="gallery">
        <a target="_blank" href="Assets/StudioAnywhere2.jpg">
            <img src="Assets/StudioAnywhere2.jpg" alt="StudioAnywhere2">
          </a>
          <div class="desc">Studio Anywhere 2</div>
    </div>
    <div class="gallery">
        <a target="_blank" href="Assets/ILLUSTRATION2023.jpg">
            <img src="Assets/ILLUSTRATION2023.jpg" alt="ILLUSTRATION2023">
          </a>
          <div class="desc">ILLUSTRATION 2023 Japanese Art Book</div>
    </div>
    <div class="gallery">
        <a target="_blank" href="Assets/theWager.jpg">
            <img src="Assets/theWager.jpg" alt="theWager">
          </a>
          <div class="desc">The Wager</div>
    </div>  
    <div class="gallery">
        <a target="_blank" href="Assets/KingaLife.jpg">
            <img src="Assets/KingaLife.jpg" alt="KingaLife">
          </a>
          <div class="desc">King a life</div>
    </div>
    <div class="gallery">
        <a target="_blank" href="Assets/front_NW_haruki.jpg">
            <img src="Assets/front_NW_haruki.jpg" alt="NW_haruki Murakami">
          </a>
          <div class="desc">Norwegian Wood</div>
    </div>
    <div class="gallery">
        <a target="_blank" href="Assets/front_NW_haruki.jpg">
            <img src="Assets/front_NW_haruki.jpg" alt="NW_haruki Murakami">
        </a>
            <div class="desc">Norwegian Wood</div>
    </div>
    <div class="gallery">
        <a target="_blank" href="Assets/front_NW_haruki.jpg">
            <img src="Assets/front_NW_haruki.jpg" alt="NW_haruki Murakami">
          </a>
          <div class="desc">Norwegian Wood</div>
    </div>
</div>

    <!-- JANGAN SENTUH!!! (BOOTSTRAP) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
    crossorigin="anonymous"></script>
</body>
</html>