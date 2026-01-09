<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
      .carousel-img {
        height: 300px;
        object-fit: cover;
      }
      @media (max-width: 576px) {
        .carousel-img { height: 180px; }
      }
    </style>
</head>
<?php include ('commun/header.php'); ?>
<body>
    <h1>Club Sports</h1>

<section>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/mma.jpg" class="d-block w-100 rounded carousel-img" alt="Image carousel 1">
          </div>
          <div class="carousel-item">
            <img src="img/image2carrousel.jpg" class="d-block w-100 rounded carousel-img" alt="Image carousel 2">
          </div>
          <div class="carousel-item">
            <img src="img/image3carrousel.jpg" class="d-block w-100 rounded carousel-img" alt="Image carousel 3">
          </div>
        </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
</body>
</html>