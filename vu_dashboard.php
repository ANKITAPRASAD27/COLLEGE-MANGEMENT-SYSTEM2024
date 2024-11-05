 <?php
 include('header.php')
 ?>
 
 <!-- section part VIDEO-->
 <div class="container-fluid  mt-3 ">
                <a class="navbar-brand" href="#">
                    <video  src="./VIDEO/v2.mp4"  width="100%" height="80%" autoplay muted loop>
                        <h2>    </h2>
                    </video>
                </a>
              </div>
<!-- CARDpart-->
<div class="container-fluid  mt-3  cards">
    <!-- card1 -->
   
    <div class="card" style="width:400px">
      <img class="card-img-top" src="./IMAGES/asset 25.avif" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title">CIVIL ENGINEERING</h4>
        <p class="card-text">civil students can expoler</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <!-- card2 -->
    
    <div class="card" style="width:400px">
      <img class="card-img-top" src="IMAGES/asset 21.avif" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title">COMPUTER SCIENCE & ENGINEERING</h4>
        <p class="card-text">Programming isn't about what you know; it's about what you can figure out</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <!-- card3 -->
   
    <div class="card" style="width:400px">
      <img class="card-img-top" src="IMAGES/asset 23.avif" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title">ELECTRICAL ENGINEERING</h4>
        <p class="card-text">do aand learn new things</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>

    <!-- card4 -->

    <div class="card" style="width:400px">
      <img class="card-img-top" src="IMAGES/asset 24.avif" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title">ELECTRONIC & COMMUNICATION ENGINEERING</h4>
        <p class="card-text">LEARN SOMTHING NEW</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>
    
</div>

<!-- OUR GALARY -->
<div class="container-fluid  mt-3  GALARY">
    <div class="gellary1">
        <div class="card" style="width:400px">
        <img class="card-img-top" src="IMAGES/asset 34.avif" alt="Card image" style="width:100%">
        </div>
      <div class="card" style="width:400px">
        <img class="card-img-top" src="IMAGES/asset 15.avif" alt="Card image" style="width:100%">
        
      </div>
      <div class="card" style="width:400px">
        <img class="card-img-top" src="IMAGES/asset 36.avif" alt="Card image" style="width:100%">
        
      </div>
    </div>

    <div class="gellary2">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="IMAGES/asset 37.avif" alt="Card image" style="width:100%">
        
      </div>
      <div class="card" style="width:400px">
        <img class="card-img-top" src="IMAGES/asset 38.avif" alt="Card image" style="width:100%">
        
      </div>
      <div class="card" style="width:400px">
        <img class="card-img-top" src="IMAGES/asset 39.avif" alt="Card image" style="width:100%">
      </div>
    </div>

     
</div>



<!-- pop up msg -->
  <!-- <div class="popup" id="popup">
    <img src="./IMAGES/asset 61.png" alt="">
    <h2>THANK U</h2>
    <P>WELCOME</P>
    <button type="button" onclick="closePopup()">ok</button>
  </div>
  -->

  <?php
 include('footer.php')
 ?>

<script>
    let pop = document.getElementById("popup-form");
    function openPopup()
    {
          pop.classList.add("open-Popup");
    }
    function closePopup()
    {
          pop.classList.remove("open-Popup");
    }
    
    
   
   </script>
