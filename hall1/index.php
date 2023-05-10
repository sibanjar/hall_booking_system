<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HAll Book-Home</title>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<?php require('inc/link.php');?>
<style type="text/css">
	
  .availability-form{
    margin-top: -50px;
    z-index: 2;
    position: relative;
  }
  @media screen and (max-width: 575px){

    .availability-form{
    margin-top: 25px;
    padding: 0 35px;
    }
  }
</style>

</head>
<body class="bg-light">
<?php require('inc/header.php');?>


<!--Carousel-->
<div class="container-fluid px-lg-4 mt-4">
     <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/11.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/22.jpg" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/33.jpg" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/44.jpg" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/55.jpg" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/66.jpg" class="w-100 d-block"/>
        </div>
     </div>
    </div>
</div>


<!--Check availability Form-->
  
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              
              <label class="form-label" style="font-weight: 500;">BOOK NOW</label>
              <input type="date" class="form-control shadow-none"> 
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>  
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<!--Our Halls-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR HALLS</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <img src="images/11.jpg" class="card-img-top" >
                <div class="card-body">
                 <h5>Simple room</h5>
                 <h6 class="mb-4">रू 5000 per day</h6>
                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                   
                       <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                    300 seats
                    </span>
                     <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                    Free wifi
                    </span>
                     <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                    6 Speakers
                    </span>
                </div>  
                 <div class="rating mb-4">
                   <h6 class="mb-1">Rating</h6>
                   <span class="badge rounded-pill bg-light">
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                    </span>                 
                 </div>

                 <div class="d-flex justify-content-evenly mb-2">
                   
                   <a href="#" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Book Now</a>
                   <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                 </div>

                </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <img src="images/22.jpg" class="card-img-top" >
                <div class="card-body">
                 <h5>Classic room</h5>
                 <h6 class="mb-4">रू 8000 per day</h6>
                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                   
                       <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                    400 seats
                    </span>
                     <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                    Free wifi
                    </span>
                     <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                    5 Speakers
                    </span>
                </div>  
                 <div class="rating mb-4">
                   <h6 class="mb-1">Rating</h6>
                   <span class="badge rounded-pill bg-light">
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                    </span>                 
                 </div>

                 <div class="d-flex justify-content-evenly mb-2">
                   
                   <a href="#" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Book Now</a>
                   <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                 </div>

                </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <img src="images/55.jpg" class="card-img-top" >
                <div class="card-body">
                 <h5>High Class room</h5>
                 <h6 class="mb-4">रू 9000 per day</h6>
                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                   
                       <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                    800 seats
                    </span>
                     <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                    Free wifi
                    </span>
                     <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                    10 Speakers
                    </span>

                     <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                    Couch
                    </span>
                </div>  
                 <div class="rating mb-4">
                   <h6 class="mb-1">Rating</h6>
                   <span class="badge rounded-pill bg-light">
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                   <i class="bi bi-star-fill text-warning"></i>
                    </span>                 
                 </div>

                 <div class="d-flex justify-content-evenly mb-2">
                   
                   <a href="#" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Book Now</a>
                   <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                 </div>

                </div>
        </div>
    </div>

    


    <div class="col-lg-12 text-center mt-5">
     <a href="Login_hall.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a> 
    </div>
  </div>
</div>

<!--Our Facilities-->
    
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
 <div class="container">
   <div class="row justify-content-evenly px-lg-0 px-md-0px-sm-5">
     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/wifi.png"width="80px">
      <h5 class="mt-3">Wifi</h5>
       
     </div>

     <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/wifi.png"width="80px">
      <h5 class="mt-3">Wifi</h5>
       
     </div>

      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/wifi.png"width="80px">
      <h5 class="mt-3">Wifi</h5>
       
     </div>

    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/wifi.png"width="80px">
      <h5 class="mt-3">Wifi</h5>
       
     </div>
     <div class="col-lg-12 text-center mt-5">
       
                   <a href="facilities.php" class="btn btn-sm btn-outline-dark shadow-none">More facilities</a>
     </div>

   </div>
 </div>  

 <!--Reach us-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14133.992791486167!2d85.439197!3d27.670993!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeec9e70e9a3ea1cc!2sKhwopa%20College%20of%20Engineering!5e0!3m2!1sen!2snp!4v1641383134719!5m2!1sen!2snp" loading="lazy"></iframe>
    </div>
    <div class="col-lg-4 col-lg-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel: +9779869489048" class="d-inline-block mb-1 text-decoration-none text-dark">
        <i class="bi bi-telephone-outbound-fill me-1"></i>+9779869489048</a>
        <br>

        <a href="tel: +9779869489048" class="d-inline-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-telephone-outbound-fill me-1"></i>+9779869489048</a>
      </div>

      <div class="bg-white p-4 rounded ">
        <h5>Follow Us us</h5>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i>Twitter
          </span>
        </a><br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i>Facebook
          </span>
        </a><br>
        <a href="#" class="d-inline-block ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i>Instagram
          </span>
        </a>
      </div>
    </div>
  </div>
</div>    

<!--Footer-->

  <br><br><br>
  <br><br><br>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

 <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonial", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
</body>
</html>

<?php require('inc/footer.php');?>
