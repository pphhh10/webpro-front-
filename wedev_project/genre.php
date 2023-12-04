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
</head>
<body>
     <!-- BASE LAYOUT FOR WEBPAGE -->
     <header>
        <img src="Assets/logo.png" alt="logo">
    </header>

    <div class="topnav">
        <a href="home.php">Home</a>
        <a class="active" href="genre.php">Genre</a>
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

     <!-- JANGAN SENTUH!!! (BOOTSTRAP) -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
    crossorigin="anonymous"></script>
</body>
</html>