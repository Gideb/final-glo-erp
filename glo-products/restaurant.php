<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO | Restaurant Management System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/products.css" />
  <link rel="stylesheet" href="../css/singleProduct.css" />
  <link rel="stylesheet" href="../css/product-colors.css" />
  <link rel="icon" href="../images/favicon.png" type="image/png">

  <!-- font awesome 7 -->
  <!--   <script src="https://kit.fontawesome.com/192436698a.js" crossorigin="anonymous"></script> -->

</head>

<body>

  <?php include '../includes/loader.php' ?>
  <?php include '../includes/gloProdHeader.php' ?>

  <main>
    <section id="about-section">
      <div class="about-section food">
        <h2>GLO Restaurant Management System</h2>
        <p>Streamlining food delivery and takeout services</p>
      </div>
    </section>

    <section id="hero-section">
      <div class="hero-section">
        <h3>
          Seamless online ordering, efficient management, and enhanced
          customer experience.
        </h3>
        <p>Serve more customers, faster and smarter!</p>

        <div class="card">

          <div class="card-inner">
            <div class="card-front">
              <img
                src="../images/glo-products/banners/gloposshot.png"
                alt="glo Restaurant management system screenshot" />
            </div>
            <div class="card-back food">
              “Manage your restaurant orders, menus, and inventory effortlessly. Streamline operations, enhance customer service, and boost efficiency.”

              <div class="card-button">

                <a class="btn" href="../demo.php"><span class="far fa-bell"></span> &nbsp;Request a Demo</a>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="about-each">
      <div class="about-each-grid-container">
        <div class="about-each-img">
          <img
            src="../images/glo-products/glo-restaurant.jpg"
            alt="glo Restaurant management system logo" />
        </div>
        <div class="about-each-text food">
          <h3>ABOUT GLO Restaurant System</h3>

          <p>
            <strong> GLO Restaurant Management System </strong> is a modern, cloud-based restaurant management solution that connects front-of-house, kitchen, and back-office operations into one seamless platform.
          </p>
          <p> It enhances order accuracy, inventory control, and customer satisfaction through intelligent POS, kitchen display systems, and analytics. From small cafés to multi-branch restaurants, GLO-RMS provides the tools to boost efficiency, reduce waste, and deliver consistent service excellence.</p>
        </div>
      </div>
    </section>



    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Restaurant Management System">RMS</abbr> </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fas fa-desktop food"></i> <br> <strong class="food"> POS & Table Management </strong> <br><br> Fast order processing, digital menus, and real-time table tracking.
          </div>
          <div class="feature">
            <i class="fas fa-utensils food"></i> <br> <strong class="food"> Kitchen & Recipe Control</strong> <br><br> Smart kitchen display system with costed recipes and prep planning.
          </div>
          <div class="feature">
            <i class="fa-solid fa-concierge-bell food"></i> <br><strong class="food">Inventory & Supply Chain </strong> <br><br> Real-time ingredient tracking, purchase orders, and waste reduction tools.
          </div>
          <div class="feature">
            <i class="fa-solid fa-comment-dollar food"></i> <br><strong class="food">Analytics & CRM </strong> <br> <br> Advanced sales dashboards, customer insights, and loyalty management.
          </div>
        </div>

      </div>
    </section>


    <?php include '../includes/demovideo.php' ?>

    <section id="installation">
      <h3>Installation Type</h3>
      <div class="installation food">
        <p>
          GLO Restaurant Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="food"><span class="fa-solid fa-cloud"></span> Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>

          </div>
          <div class="installation-card offline">
            <h4 class="food"><span class="fa-solid fa-server"></span> Offline Installation</h4>
            <?php include '../includes/offlineInstall.php' ?>

          </div>
        </div>
      </div>
    </section>
    <?php include '../includes/gotoContDemo.php' ?>


  </main>

  <!-- Footer -->
  <?php include '../includes/gloProdFooter.php'; ?>


  <!-- js links -->
  <script src="../js/videodemo.js"></script>

  <script src="../js/script.js"></script>



</body>

</html>