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
                <a class="nav-link" href="erfahrungen_besucher.php">Erfahrungen</a>
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

            
            <form class="d-flex" action="<?php echo SITEURL;?>reisezubehor-search.php" method="POST">
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
      <h1>ReisenDotCom</h1>      
      </div>
</section>
<div class="p-3 mb-2 bg-dark text-white"></div>
<?php

if( isset( $_POST["senden"] ) )
{
	$first_name=htmlspecialchars(trim( $_POST["first_name"] ));
	$last_name=htmlspecialchars(trim( $_POST["last_name"] ));
	$email=htmlspecialchars(trim( $_POST["email"] ));
    $message=htmlspecialchars(trim( $_POST["message"] ));

	
	$sql="
	INSERT INTO contact 
	(first_name,last_name,email,
	message)
	VALUES
	(:first_name,:last_name,:email,
		:message)
	";
	
	$stmt=$conn->prepare($sql);
	
	$stmt->bindParam(":first_name",$first_name);
	$stmt->bindParam(":last_name",$last_name);
	$stmt->bindParam(":email",$email);
	$stmt->bindParam(":message",$message);

	
	$stmt->execute();
  

	
    $_SESSION['text'] =  "<div class='success'>********Wir haben Ihre Nachricht erhalten. Wir werden uns so schnell wie möglich ist</div>";

    header('location:'.SITEURL.'index.php');
}



?>

<div class="user-login">

<a href="https://www.animatedimages.org/cat-email-235.htm"><img src="https://www.animatedimages.org/data/media/235/animated-email-image-0193.gif" border="0" alt="animated-email-image-0193" /></a>
	<h3>Contact Form</h3>

	<form action="" method="post">
  <div class="form-group">
		<label for="first_name">Name</label><br>
		<input class="form-control" name="first_name" type="text" required placeholder="John"/><br>
    </div>
		<br>
    <div class="form-group">
		<label for="last_name">FamilieName</label><br>
		<input  class="form-control" name="last_name" type="text" required placeholder="Doe"/><br>
		</div>
    <div class="form-group">
		<label for="email">Email</label><br>
		<input  class="form-control" name="email" type="email" required placeholder="you@domain.com"/><br>
		</div>
    <div class="form-group">
		<label for="message">Nachricht</label><br>
		<textarea class="form-control" name="message" cols="40" rows="5" placeholder="Enter your message here ..." required> </textarea><br>
		</div>
    <div class="center">
			<input type="submit" value="senden" name="senden" class="btn btn-primary" >
		</div>
	</form>	
</div>
      <p id="time"></p>
      <script src="js/time.js"></script>
<footer>
    <div>
      <p>Dimitrios Vortelinas<br>
        <a href="#">jvortelinas@gmail.com</a></p>
    </div>
  </footer>

  </body>
</html>