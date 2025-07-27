<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page

if(isset($_SESSION["c_username"]) && isset($_SESSION["c_id"])){
	header("location:client/index.php");
}
elseif(isset($_SESSION["username"]) && isset($_SESSION["v_id"])){
	header("location:admin/vendor/");
}
elseif(isset($_SESSION["a_id"])){
	header("location:admin/admin/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" constant="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!--BS 5 css link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--BS 5 js link-->
    
    <!--extranal css file-->
    
    <link href="style.css" rel="stylesheet">
    
    
    
</head>

<body>
  <!--navbar-->
  <?php include 'header3.php' ?>


<center>
<img src ="img/W.png" class="v">
</center>

<!-- card -->
<div class="title mt-5">
     
      <h1 class="heding" id="event"><br> </h1>
    </div>
  <section class="event mt-5">

    <div class="title mt-5">
       <h1 class="heding" id="event">Services</h1>
    </div>
    <div class="container mt-2 justify-content-center">
      <div class="row justify-content-center">

            <div class="col-md-4  col-sm-6  ">
            <a href="profile_card_getdata.php?service=<?php echo "Decoration";
            ?>" id="Decoration" class="a1">
                <div class="card b-2 text-white">
                  <div class="imgholder">
                   <img src="img/wedding-arch.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">Decoration</h4>
                   <p class="title">Creativity at its finest.</p>
                  
                 </div>
              
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Photographer";
            ?>" id="Photographer" class="a1">
                 <div class="card b-2 text-white">
                 <div class="imgholder">
                   <img src="img/camera.png" class="card-img img1 p-2" alt="...">
                 </div>
                   <h4 class="titleh3">photographers</h4>
                   <p class="title">Preserve your memories.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Videographer";
            ?>" id="Videographer" class="a1">
                 <div class="card b-2  text-white">
                  <div class="imgholder">
                   <img src="img/production.png" class="card-img img1 p-2" alt="...">
                   </div>
                   <h4 class="titleh3">videographers</h4>
                   <p class="title">Moments well shared.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Cake";
            ?>" id="Cake" class="a1">
                 <div class="card b-2  text-white">
                  <div class="imgholder">
                   <img src="img/birthday-cake (1).png" class="card-img img1 p-2" alt="...">
                   </div>
                   <h4 class="titleh3">Cake</h4>
                   <p class="title">Sweetness readfined.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Flowers";
            ?>" id="Flowers" class="a1">
                 <div class="card b-2  text-white">
                 <div class="imgholder"> 
                 <img src="img/flower-shop.png" class="card-img img1 p-2" alt="...">
                 </div> 
                 <h4 class="titleh3">flowers</h4>
                   <p class="title">Make your life colorful.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Event Wear";
            ?>" id="Event Wear" class="a1">
                 <div class="card b-2   text-white">
                 <div class="imgholder">
                   <img src="img/boutique.png" class="card-img img1 p-2" alt="...">
                 </div>
                   <h4 class="titleh3">Event Wear</h4>
                   <p class="title">Dress your dreams.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Jewellery";
            ?>" id="Jewellery" class="a1">
                 <div class="card  b-2 text-white">
                  <div class="imgholder">
                   <img src="img/display.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">jewellery</h4>
                   <p class="title">Jewelryize me.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Invitation Card";
            ?>" id="Invitation Card" class="a1">
                 <div class="card b-2  text-white">
                  <div class="imgholder">
                   <img src="img/wedding-invitation.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">invitation cards</h4>
                   <p class="title">Invite in style.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Sound System";
            ?>" id="Sound System" class="a1">
                 <div class="card  b-2 text-white">
                  <div class="imgholder">
                   <img src="img/sound-system.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">Sound System</h4>
                   <p class="title">Audio you can rely on.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Makeup Artist";
            ?>" id="Makeup Artist" class="a1">
                 <div class="card  b-2 text-white">
                  <div class="imgholder">
                   <img src="img/makeup.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">makeup artist</h4>
                   <p class="title">Ready, Set, Glow!.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Venues";
            ?>" id="Venues" class="a1">
                 <div class="card text-white">
                  <div class="imgholder">
                   <img src="img/venue.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">venues</h4>
                   <p class="title">	Where memories are made.</p>
                 </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Gifts";
            ?>" id="Gifts" class="a1">
                  <div class="card text-white">
                  <div class="imgholder">
                   <img src="img/presents.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">gifts</h4>
                   <p class="title">More than just a gift.</p>
                 </div>
              </a>
            </div> 
            <div class="col-md-4 col-sm-6 ">
            <a href="profile_card_getdata.php?service=<?php echo "Catering";
            ?>" id="Catering" class="a1">
                  <div class="card text-white">
                  <div class="imgholder">
                   <img src="img/banquet.png" class="card-img img1 p-2" alt="...">
                  </div>
                   <h4 class="titleh3">catering</h4>
                   <p class="title">Good food, Good mood.</p>
                 </div>
              </a>
            </div> 
    </div>      
  </div>
</section>   


  <!-- registration section ....-->


<script src="js/bootstrap.min.js"></script>  
<script src="js/bootstrap.bundle.min.js"></script> 

<section class="footer" id="footer">
  <?php
  include("footer.php");

  ?>

</section>

</body>


</html>
