<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css" >
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title> GRIP Basic Banking System </title>
  </head>
  <body>
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid ">
            <div class="row intro py-1 bg-light">
              <div class="col-sm-12 col-md img text-center">
                <img src="img/octamoney.png" width="30%" height="30%" class="img-fluid pt-2">
              </div>

            </div>
            <br>
            <br>
        <div class="row">
          <div class="col; w-45">
            <div class="list-group text-left">
            <a href="createuser.php" class="list-group-item list-group-item-secondary align-items-left fas fa-user-plus fa-2x" style="font-size:25px; color : #050a30;">&nbsp&nbspAdd a user</a>
            <a href="transfermoney.php" class="list-group-item list-group-item-secondary fas fa-money-check-alt fa-2x" style="font-size:25px; color : #050a30;">&nbsp&nbspTransfer Money</a>
            <a href="transactionhistory.php" class="list-group-item list-group-item-secondary fas fa-history fa-2x" style="font-size:25px; color : #050a30;">&nbsp&nbsp&nbspTransaction History</a>
            <a href="contactus.php" class="list-group-item list-group-item-secondary fas fa-phone-alt fa-2x" style="font-size:25px; color : #050a30;">&nbsp&nbsp&nbspSupport</a>
            <a href="about.php" class="list-group-item list-group-item-secondary fas fa-info-circle fa-2x" style="font-size:25px; color : #050a30;">&nbsp&nbsp&nbspAbout us</a>
            </div>
          </div>
          <div class="col bg-light">
            <div class="col-sm-12 col-md bg-light">
              <div class="heading text-center my-5 bg-light">
                <h2 style="color : #050a30;">Welcome to</h2>
                <h1>
                  <a href= "about.php" style="color : #050a30;">OctaMoney Bank</a>
                </h1>
                <h3 style="color : #050a30;">(Online Portal)</h3>
              </div>
            </div>
          </div>
        </div>
     </div>
      <footer class="text-center mt-5 py-2 bg-light">
        <p>&copy 2021<br><b>Rohan Mehta</b> <br>The Sparks Foundation Singapore</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
