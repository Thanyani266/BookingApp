<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KT Hotel - About</title>
    <?php require ('inc/links.php');?>
    <style>
    
    .pol:hover {
            border-top-color: aquamarine !important;
            transform: scale(1.03);
            transition: all 0.3s;
    }

    </style>
</head>
<body class="bg-light">

    <!-- Header -->
    <?php require ('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">About Us</h2>
        <div class="h-line bg-dark">
            <hr>
        </div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti odio quae, aspernatur neque quis soluta assumenda, temporibus porro pariatur iure quisquam? Fugit quis consectetur aut vitae. Repellendus alias nihil corporis.</p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nemo iure soluta ipsum iste nam quaerat illum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nemo iure soluta ipsum iste nam quaerat illum.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/carousel/6.jpg" slass="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                    <img src="images/carousel/2.jpg" width="70px">
                    <h4 class="mt-3">200+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                    <img src="images/carousel/2.jpg" width="70px">
                    <h4 class="mt-3">200+ Cutomers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                    <img src="images/carousel/2.jpg" width="70px">
                    <h4 class="mt-3">200+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                    <img src="images/carousel/2.jpg" width="70px">
                    <h4 class="mt-3">200+ Staff</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">Management Team</h3>

    <!-- Swiper -->
    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/carousel/4.jpg" class="w-100">
                    <h5 class="mt-2">Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/carousel/4.jpg" class="w-100">
                    <h5 class="mt-2">Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/carousel/4.jpg" class="w-100">
                    <h5 class="mt-2">Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/carousel/4.jpg" class="w-100">
                    <h5 class="mt-2">Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/carousel/4.jpg" class="w-100">
                    <h5 class="mt-2">Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/carousel/4.jpg" class="w-100">
                    <h5 class="mt-2">Random name</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
   

    <!-- Footer -->
    <?php require ('inc/footer.php');?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 40,
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
      });
    </script>

</body>
</html>