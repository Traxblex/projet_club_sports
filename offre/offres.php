<html lang="fr">
<doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projet Sport - Offres</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
  <?php include '../commun/header.php'; ?>
  <div class="container mt-4">
    <h1>Nos Offres</h1>
    <p>Découvrez nos offres spéciales pour les abonnés du club de sport.</p>
  </div>
  <section id="menu" class="py-5">
        <!-- Contenu des offres -->
        <div class="container">
          <h2 class="text-center mb-4">NOS OFFRES.</h2>
          <div class="row g-4"> <!--sert a aligner les cartes avec un espacement-->
             <div class="col-md-4">
              <div class="card h-100">
                <img src="../img/logo_yoga.jpg" class="card-img-top" alt="logo_yoga">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">YOGA</h5>
                  <p class="card-text">Séances de relaxation et étirements pour tous niveaux.</p>
                  <div class="mt-auto d-flex justify-content-between align-items-center">
                    <a href="../cours/cours_info/yoga.php"class="btn btn-outline-primary">S'inscrire</a>
             <div class="col-md-4">
              <div class="card h-100">
                <img src="../img/logo_MMA.jpg" class="card-img-top" alt="logo_MMA">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">MMA</h5>
                  <p class="card-text">Arts martiaux mixtes avec coachs professionnels</p>
                  <div class="mt-auto d-flex justify-content-between align-items-center">
                    <a href="../cours/cours_info/yoga.php"class="btn btn-outline-primary">S'inscrire</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card h-100">
                <img src="../img/logo_Natation.jpg" class="card-img-top" alt="logo_Natation">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Natation</h5>
                  <p class="card-text">Perfectionnez votre technique natation.</p>
                  <div class="mt-auto d-flex justify-content-between align-items-center">
                    <a href="../cours/cours_info/yoga.php"class="btn btn-outline-primary">S'inscrire</a>


  <?php include '../commun/footer.php'; ?>
</body> 
</html>
