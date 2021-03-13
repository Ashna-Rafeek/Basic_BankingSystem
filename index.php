<!DOCTYPE html>
<html lang="en">
<head>    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/dd9069cf88.js" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    
    <title>Basic Banking System</title>
    <style type="text/css">
		body{
			background-image: url("https://www.pymnts.com/wp-content/uploads/2020/04/Railsbank-digital-banking-service.jpg");
			background-repeat: no-repeat;
  			background-size: 1600px 800px;
                        text-align: center; }
    </style>
</head>
<body>
    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid">
        <div class="row intro py-1" >
                    <h1>Welcome to The Sparks Bank</h1>

        </div>
        <div class="div1">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7oYT8nH5sy2WHTxb22D-32VXHrgpadgI6mA&usqp=CAU" alt="bank" height="250" width="250"></div>
        <div class="row activity text-center">

            <div class="col-md act">
                <img src="https://images.assetsdelivery.com/compings_v2/blankstock/blankstock1904/blankstock190401851.jpg" alt="transferimg" class="img-fluid" height="350" width="130">
                <br>
                <a href="transfer.php"><button style="background-color: lightsalmon;">Make a Transaction</button></a>
            </div>

            <div class="col-md act">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnR-rTGN_W2LkI68vjWsHB0Dkmx-ko-YL8sQ&usqp=CAU" alt="historyimg" class="img-fluid" height="200" width="100"">
                <br>
                <a href="history.php"><button style="background-color: lightsalmon;">Transaction History</button></a>
            </div>

        </div>

  <section id="features">
    <div id="testimonial-carousel" class="carousel slide" data-ride="carousel" data-interval=3000 data-pause="hover">

      <ol class="carousel-indicators">
        <li data-target="#features-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#features-carousel" data-slide-to="1"></li>
        <li data-target="#features-carousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
          
         <div class="carousel-item active features-items "><br>
          <i class="fas fa-hand-holding-usd fa-3x"></i>
          <p>Your transactions are safe and secure.</p><br>
        </div>

          <div class="carousel-item features-items"><br>
          <i class="fas fa-check fa-3x"></i>
          <i class="fas fa-coins"></i>
          <p>Banking is just a click away.</p><br>
        </div>

        <div class="carousel-item features-items"><br>
          <i class="fas fa-user-clock fa-3x"></i>
          <p>Do Online transactions anytime and anywhere.</p><br>
        </div>

      </div>

      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

  </section>  

    <footer class="text-center mt-5 py-2">

        <p>&copy 2021. Designed by <b>Ashna Rafeek </b><br>As part of TheSparksFoundation internship.<br>
         For more information:
<a href="https://www.linkedin.com/in/ashna-rafeek-205/" class="fa fa-linkedin"></a>  
<a href="https://www.linkedin.com/in/ashna-rafeek-205/" class="fa fa-github"></a>
<a href="https://www.facebook.com" class="fa fa-facebook"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
        
    </footer>

</body>

</html>