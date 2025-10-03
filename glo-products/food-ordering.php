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
        <h2>GLO Food Ordering System</h2>
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
                alt="glo food ordering management system screenshot" />
            </div>
            <div class="card-back food">
              “Manage your pharmacy inventory, sales, and prescriptions with ease. Streamline operations and improve accuracy.”

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
            alt="glo food ordering management system logo" />
        </div>
        <div class="about-each-text food">
          <h3>ABOUT GLO Food Ordering System</h3>
          <!--  <p>
            <strong>GLO Food Ordering System</strong> is a comprehensive,
            web-based solution designed for restaurants, cafes, and food
            delivery businesses. It streamlines the entire ordering process,
            from menu browsing to payment and delivery, making operations
            smoother and more efficient.
          </p>
          <p>
            Customers can easily place orders online, customize their meals,
            and choose delivery or pickup options. The system supports
            real-time order tracking, automated notifications, and secure
            payment processing, ensuring a hassle-free experience for both
            customers and staff.
          </p>
          <p>
            Powerful management tools allow you to update menus, manage
            inventory, track sales, and analyze customer preferences.
            Integration with POS and kitchen display systems helps reduce
            errors and speed up service.
          </p>
          <p>
            GLO Food Ordering System is scalable and secure, suitable for
            single outlets or multi-location chains. Enhance your business
            efficiency, boost sales, and deliver exceptional service with GLO.
          </p> -->
          <p>
            <strong> GLO Restaurant Management System </strong> is designed to help restaurants, cafés, and food outlets run smoothly. It combines table reservations, order processing, kitchen coordination, and payment handling into one intuitive system.
          </p>
          <p> With features that improve customer experience, track sales, and manage inventory, GLO Restaurant Management System reduces bottlenecks and ensures quick service. Its reporting tools help managers monitor performance, cut costs, and make smarter business decisions while delivering outstanding dining experiences.</p>
        </div>
      </div>
    </section>



    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Restaurant Management System">RMS</abbr> </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fas fa-concierge-bell food"></i> <br> <strong class="food"> Order & Table Management </strong> <br><br>Handle reservations and track dine-in orders easily.
          </div>
          <div class="feature">
            <i class="fas fa-utensils food"></i> <br> <strong class="food">Menu Control </strong> <br><br> Manage digital menus, pricing, and specials in real-time.
          </div>
          <div class="feature">
            <i class="fa-solid fa-cash-register food"></i> <br><strong class="food">POS Integration </strong> <br><br> Streamlined billing with cash, card, and mobile payments.
          </div>
          <div class="feature">
            <i class="fa-solid fa-desktop food"></i> <br><strong class="food">Kitchen Display System </strong> <br> <br> Coordinate orders directly with kitchen staff
          </div>
        </div>

      </div>
    </section>


    <section id="demo">
      <h3>Watch Our Demo</h3>
      <div class="demo-video">
        <iframe
          src="https://www.youtube.com/embed/https://www.youtu.be/b1_yZDLJlA0"
          width="100%"
          height="600"
          title="demo video"
          frameborder="0"
          allowfullscreen></iframe>
      </div>
    </section>


    <section id="installation">
      <h3>Installation Type</h3>
      <div class="installation food">
        <p>
          GLO Restaurant Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="food">Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>

          </div>
          <div class="installation-card offline">
            <h4 class="food">Offline Installation</h4>
            <?php include '../includes/offlineInstall.php' ?>

          </div>
        </div>
      </div>
    </section>
    <?php include '../includes/gotoContDemo.php' ?>



    <!--  <section id="contact">
      <div class="contact">
        <h4>
          Do you have any questions or inquiries? Feel free to reach out to us!
        </h4>
        <div class="button-container">
          <a class="btn" href="contact.php">Request a Demo</a>
          <a class="btn" href="contact.php">Contact Us</a>
        </div>
      </div>
    </section> -->
  </main>

  <!-- Footer -->
  <?php include '../includes/footer.php'; ?>

  <script src="../js/script.js"></script>

</body>

</html>