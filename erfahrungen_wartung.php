

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

  
  <body >
      
   
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
          include('dbconnection/config.php');
          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
              header("location: login/login.php");
              exit;
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

      
<?php


if( isset( $_POST["senden"] ) )
{
	$postingHeader=htmlspecialchars(trim( $_POST["postingHeader"] ));
	$postingUser=htmlspecialchars(trim( $_POST["postingUser"] ));
	$postingText=htmlspecialchars(trim( $_POST["postingText"] ));
    $postingDatum=htmlspecialchars(trim( $_POST["postingDatum"] ));
	
	

	if( isset( $_POST["postingStatus"]  )  )
	{
		$postingStatus=1;
	}
	else
	{
		$postingStatus=0;		
	}
	
	$sql="	INSERT INTO postings 
	(postingHeader,postingUser,postingText,
	postingDatum,postingStatus)
	VALUES
	(:postingHeader,:postingUser,:postingText,
		:postingDatum,:postingStatus)
	";
	
	$stmt=$conn->prepare($sql);
	
	$stmt->bindParam(":postingHeader",$postingHeader);
	$stmt->bindParam(":postingUser",$postingUser);
	$stmt->bindParam(":postingText",$postingText);
	$stmt->bindParam(":postingDatum",$postingDatum);
	$stmt->bindParam(":postingStatus",$postingStatus);
	
	$stmt->execute();

	
	
	header("location:erfahrungen.php");
}

?>


<div class="p-3 mb-2 bg-dark text-white"></div>

<h2 class="center">Schreiben Sie Ihre Erfahrung</h2>

<div class="user-login">
<form action="" method="post">
PostingHeader<br>
<input type="text"  name="postingHeader" required><br>

PostingUser<br>
<input type="text"  name="postingUser" required><br>


PostingDatum<br>
<input type="date"  name="postingDatum"><br>
PostingText<br>

<div class="form-floating">
  <textarea class="form-control" name="postingText" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
</div>
<br>
<input type="submit"  name="senden" value="speichern" class="btn btn-danger" ><br>
</form>


</div>     
      </div>
</section>