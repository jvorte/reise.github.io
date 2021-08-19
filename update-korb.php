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

<div class="bestel-l">
                
                    
                    <br><br>

                    <?php if (isset($_GET['bestellID']))
                    {
                        $id=$_GET['bestellID'];

                        $sql= "SELECT * FROM bestellungen WHERE bestellID=$id";

                        $abfrage=$conn->query($sql);

                        $count = $abfrage->rowCount();

                        //check the data are available or not
                 if ($count==1)
                        {
                            
                            $row= $abfrage->fetch();
                            
                            $produkt = $row['artikelName']; 
                            $qty = $row['bestStueck'];
                            $price = $row['bestUmsatz'];                          
                            $produktPr = $row['bestPreis'];                                                    
                            $status = $row['status'];
                            $name = $row['bestUserFID'];
                            $datum = $row['bestDatum'];
                            $id = $row['bestellID'];
                           

                            
                            }
                        else 
                            {
                                
                                header('location:'.SITEURL.'korb.php');
                            }
                            

                            } 
                        else 
                            {
                                header('location:'.SITEURL.'korb.php');
                            }


                        if (isset($_POST['submit'])) 
                        {
                         
                            $id = $_POST['bestellID'];                        
                            $qty = $_POST['bestStueck'];

                            $sql2 = "UPDATE bestellungen SET
                            bestStueck = $qty                      
                           WHERE bestellID= $id         
                            ";                           

                            $abfrage2=$conn->query($sql2);

                            if ($abfrage2 == true)
                            {
                                $_SESSION['update']=  "<div class='success'><h2>Ihre Bestellung updated</h2></div>";
                               echo "<script type='text/javascript'>window.top.location='korb.php';</script>"; 
                            }
                            else 
                            {
                               
                                $_SESSION['update']=  "<div class='success'><h2>Bestellung  not updated</h2></div>";
                                 echo "<script type='text/javascript'>window.top.location='update-korb.php';</script>"; 
                            }              
                          

                        }
                      
                        $sql= "SELECT * FROM users  WHERE $name = id";

                        $abfrage=$conn->query($sql);
    
                        $count = $abfrage->rowCount();
    
                        //check the data are available or not
                        if ($count==1)
                        {    
                            
                            $row= $abfrage->fetch();
                            
                            $cust_id = $row['id']; 
                            $username = $row['username'];
                            $password = $row['password'];                          
                            $created_at = $row['created_at'];                                                    
                            $fullname = $row['fullname'];
                            $contact = $row['contact'];
                            $email = $row['email'];
                            $address = $row['address'];                    
    
                            
                        }?>  

                        
                        
                     
</div>
                  

</div>
<div class="p-3 mb-2 bg-dark text-white"></div>
<fieldset>
<legend>Meine Daten</legend>
<form class="row g-3 needs-validation" novalidate method="POST">
  <div class="col-md-1">
    <label for="validationCustom01" class="form-label">VollName</label>
    <input type="text" class="form-control" id="validationCustom01" name="username" value="<?php echo $fullname;?>" readonly> 
    <div class="valid-feedback">
      Looks good!
    </div><br>
  </div>
  <div class="col-md-1">
    <label for="validationCustom02" class="form-label">Customer-Nummer</label>
    <input type="text" class="form-control" id="validationCustom02"  name="" value="<?php echo $cust_id;?>" readonly>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-1">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
     
      <input type="text" class="form-control" id="validationCustomUsername"value="<?php echo $username; ?>" readonly>
      
    </div>
  </div>
  <div class="col-md-2">
    <label for="validationCustom03" class="form-label">Email</label>
    <input type="email" name="email" value="<?php echo $email;?>" class="form-control" readonly>
   
  </div>
  <div class="col-md-2">
    <label for="validationCustom03" class="form-label">Adresse</label>
    <input type="text" name="address" value="<?php echo $address;?>"class="form-control" id="validationCustom03" readonly>
   
  </div>
    
  </div>
  <div class="col-md-1">
    <label for="validationCustom05" class="form-label">Kontakt</label>
    <input type="text"name="" value="<?php echo $contact;?>" class="form-control" id="validationCustom05" readonly>
    
  </div>
  <div class="col-md-2">
    <label for="validationCustom05" class="form-label">Mitglied-Datum</label>
    <input type="text"name=""  value="<?php echo $created_at;?>"class="form-control" id="validationCustom05" readonly>
   
  </div>
    </div>
  </div>
  
  
<legend>Meine Bestellung</legend>

<div class="col-md-2">
    <label for="validationCustom05" class="form-label">Bestellung Datum:</label>
    <input type="text"name="" value="<?php echo $datum?>" class="form-control" id="validationCustom05" readonly>
    
  </div>
  <div class="col-md-1">
    <label for="validationCustom05" class="form-label">Bestellung Nr</label>
    <input type="text"name="" value="<?php echo $id;?>" class="form-control" id="validationCustom05"readonly >
    
  </div>
  <div class="col-md-1">
    <label for="validationCustom05" class="form-label">Produkt Name</label>
    <input type="text"name="" value="<?php echo $produkt;?>" class="form-control" id="validationCustom05" readonly>
    
  </div>
  <div class="col-md-1">
    <label for="validationCustom05" class="form-label">Produkt Preis</label>
    <input type="text"name="" value="<?php echo $produktPr?>" class="form-control" id="validationCustom05" readonly>
    
  </div>
  <div class="col-md-1">
    <label for="validationCustom05" class="form-label">Summe</label>
    <input type="text"name="" value="<?php echo $price?>" class="form-control" id="validationCustom05" readonly>
    
  </div>
  <div class="col-md-1">
    <label for="validationCustom05" class="form-label">Menge</label>
  
    <input type="text"  value="<?php echo $qty;?>"class="form-control" readonly >
   
  </div>
  <div class="col-md-1">
    <label for="validationCustom05" class="form-label">Status</label>
    <input type="text" name="bestStueck"  value="<?php echo $status;?>"class="form-control" id="validationCustom05" readonly>
   
  </div>
<br>


  <div class="">
  <tr>
   <td>Update Menge</td>
     <td>
       <input type="number" name="bestStueck" value="<?php echo $qty;?>"> <input type="hidden" name="bestellID" value="<?php echo $id?>">
    <button class="btn btn-primary" name="submit" type="submit">Submit</button>
     </td>


                     
</form>
</fieldset>
<br>

<footer>
    <div>
      <p>Dimitrios Vortelinas<br>
        <a href="#">jvortelinas@gmail.com</a></p>
    </div>
  
  </footer>

  </body>
</html>