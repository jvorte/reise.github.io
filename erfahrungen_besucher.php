<?php include('dbconnection/config.php');?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="styles/styles.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

    <title>ReisenDotCom</title>
  </head>

  
  <body>
      
 
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   

    <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">ReisenDotCom&#174;</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categories.php">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reisezubehor.php">Reisezubehör</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="erfahrungen.php">Erfahrungen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">FotoGallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="uber_uns.php">Uber Uns</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontakt.php">kontakt</a>
              </li>
              <button type="button" class="btn btn-outline-secondary"><a href="korb.php">WarenKorb</a></button>
             
            </ul>
            
             <p id="time"></p>
            <script src="js/time.js"></script>

            <form class="d-flex" action="reisezubehor-search.php" method="POST">
              <input class="form-control me-2" type="search"  name="search" placeholder="Search" aria-label="Search" required>
              <input type="submit" name="submit" value="Suchen" class="btn btn-outline-success">
            
            </form>
           

          </div>
        </div>
      </nav>
      <?php session_start(); ?>  
          <?php

          
          // Check if the user is logged in, if not then redirect him to login page
          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

            
              echo '<a href="login/login.php" class="out"><button  type="button"  class="btn btn-outline-primary">Anmelden</button></a>';
              // echo "hi";
          }
          else {

              ?>
          <div class="in">
            
            <h3 class="hello">Hello, <?php echo htmlspecialchars($_SESSION["username"]); ?></h3>
            
                
                    <button class="btn btn-outline-primary"><a href="reset-password.php" >Reset</a></button>
                    <button class="btn btn-outline-primary"><a href="login/logout.php" >Sign Out</a></button>

              </div>
              <?php
          }

          ?>
      <div class="logo">
      <h1>ReisenDotCom </h1>      
      </div>
</section>


<div class="p-3 mb-2 bg-dark text-white"></div>


<div class="container">


<!-- //title fur Erfahrungen -->

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
  
      $( ".newClass" ).switchClass( "newClass", "anotherNewClass", 1000 );
      $( ".anotherNewClass" ).switchClass( "anotherNewClass", "newClass", 1000 );
    });
  
  </script>


<div class="toggler">
  <div id="effect" class="newClass ui-corner-all">
  <h1>Teilen Sie ihre Erfahrung</h1>
  <a href="erfahrungen_wartung.php"><button type="button" class="btn btn-danger">Hier!</button></a>
  </div>
</div>

<!-- end title fur Erfahrungen -->



<!-- postings fur Erfahrungen -->
<img class="img-erfahrung" src="images\people1.png" alt="" srcset="">
<div class="all-postings">
  
<?php
$sql="SELECT * FROM postings";

$abfrage=$conn->query($sql);

function displayNote($postingHeader,$postingDatum,$postingUser,$postingText)
{

	$output="<div class='postings'>";
	echo "<br>";
	$output.="<h1>$postingHeader</h1>";
	$output.="<h4>$postingUser</h4>";
	$output.="<h4>$postingDatum </h4>";
	$output.="<p>$postingText</p>";
	
	$output.="</div>";
	return $output;
	
}

while( $row= $abfrage->fetch() )
{
    echo displayNote($row["postingHeader"],$row["postingUser"],$row["postingDatum"],' '.$row["postingText"]);

}

?>

</div>
<br><br>
<!-- end postings fur Erfahrungen -->
<footer>
    <div>
      <p>Dimitrios Vortelinas<br>
        <a href="#">jvortelinas@gmail.com</a></p>
    </div>
  </footer>

</body>
</html>