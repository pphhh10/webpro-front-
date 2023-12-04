<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- JANGAN SENTUH!!! (BOOTSTRAP) -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" 
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
     crossorigin="anonymous">
    <link rel="stylesheet" href="baselayoutweb.css">
    <link rel="stylesheet" href="onClickBooks.css">
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
        <a href="#Bestbook">Best Book</a>

        <!--SEARCH BAR -->
        <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit">Submit</button>
            </form>
        </div>
        
    </div>
    <!-- END OF BASE LAYOUT FOR WEPAGE -->

<div class="row">
    <div class="column left" style="background-color:#aaa;">
        <div>
            <img src="Assets/front_NW_haruki.jpg" alt="NW_haruki Murakami">
            <p>paste echo "book_image" here</p>
        </div>
    </div>
     <div class="column right">
        <!--PASTE LIKE BELOW --> 
        <h2 class="book_title"><?php echo $row ["book_title"]; ?>"Paste echo "book_title" here</h2>
            <h6>desc</h6>
            <p>ajssdsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                daasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
            </p>
            <p>Paste echo "author" here</p> <!--DO as above paste and do same here -->
            <p>Paste echo "ISBN" here</p> <!--DO as above paste and do same here -->
            <p>paste echo "Pages" here</p> <!--DO as above paste and do same here -->
            <p>paste echo "Genre" here</p> <!--DO as above paste and do same here -->
    </div>
</div>

<div class="row">
    <footer>
        <h2>paste echo "author" here</h2>
    </footer>
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