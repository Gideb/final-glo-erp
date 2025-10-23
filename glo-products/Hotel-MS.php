<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO | Hotel Management System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/products.css" />
  <link rel="stylesheet" href="../css/singleProduct.css" />
  <link rel="stylesheet" href="../css/product-colors.css" />
  <link rel="icon" href="../images/favicon.png" type="image/png">



</head>

<body>
  <?php include '../includes/loader.php' ?>
  <?php include '../includes/gloProdHeader.php' ?>

  <main>
    <section id="about-section">
      <div class="about-section hotel">
        <h2>GLO Hotel Management System</h2>
        <p>Improving guest experiences</p>
      </div>
    </section>

    <section id="hero-section">
      <div class="hero-section">
        <h3>
          Elevate your hospitality business with GLO Hotel Management
          System—an all-in-one platform for managing reservations, guest
          services, billing, and more.
        </h3>
        <p>
          Deliver exceptional guest experiences and streamline hotel
          operations!
        </p>

        <div class="card">

          <div class="card-inner">
            <div class="card-front">
              <img
                src="../images/glo-products/banners/glohotelshot.png"
                alt="glo hotel management system screenshot" />
            </div>
            <div class="card-back hotel">
              “A powerful hotel management system that simplifies bookings, enhances guest satisfaction, and maximizes revenue.”

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
            src="../images/glo-products/glo-hms.jpg"
            alt="glo POS with inventory management system logo" />
        </div>
        <div class="about-each-text hotel">
          <h3>ABOUT GLO Hotel Management System</h3>
          <!-- <p>
            <strong>GLO Hotel Management System</strong> is a comprehensive,
            web-based solution designed to simplify and automate hotel
            operations. The system offers intuitive tools for managing
            reservations, room assignments, check-ins, check-outs, and guest
            profiles.
          </p>
          <p>
            Staff can efficiently handle billing, payments, and inventory,
            while integrated housekeeping and maintenance modules ensure rooms
            are always ready for guests. Real-time reporting and analytics
            provide valuable insights into occupancy rates, revenue, and guest
            preferences.
          </p>
          <p>
            GLO HMS supports multi-property management, making it ideal for
            both independent hotels and large chains. With secure data
            handling and customizable features, you can enhance operational
            efficiency, reduce errors, and focus on delivering outstanding
            service.
          </p> -->
          <p>
            <strong>GLO Hotel Management System </strong> is a modern, cloud-based hotel management system built to transform the way hotels operate. It combines online booking, room and rate management, guest engagement, and payment processing into one intuitive platform.
          </p>
          <p>
            Hoteliers can easily manage reservations, track room availability in real time, create dynamic pricing strategies, and offer personalized guest services that boost satisfaction and loyalty. </p>
          <p>
            With automated communication, detailed analytics, and integrated extras like vouchers and add-on services, GLO HoMs helps hotels increase occupancy, improve efficiency, and grow revenue. Whether you run a boutique lodge or a large resort, GLO HoMs gives you the flexibility and control to succeed in today’s competitive hospitality market.</p>
        </div>
      </div>
    </section>


    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Hotel Management System">HoMS</abbr> </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fa-solid fa-desktop hotel"></i> <br> <strong class="hotel">Smart Booking Engine</strong> <br><br> Handle online reservations with real-time availability and group bookings
          </div>
          <div class="feature">
            <i class="fas fa-bed hotel"></i> <br> <strong class="hotel">Room & Rate Control </strong> <br><br> Manage room types, statuses, and dynamic pricing to boost revenue.
          </div>
          <div class="feature">
            <i class="fa-solid fa-toolbox hotel"></i> <br><strong class="hotel"> Guest Experience Tools </strong> <br><br> Offer add-ons, vouchers, and personalized services.
          </div>
          <div class="feature">
            <i class="fa-solid fa-comment-dollar hotel"></i> <br><strong class="hotel">Payment & Messaging </strong> <br> <br> Secure payments with automated email/SMS communication.
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
      <div class="installation hotel">
        <p>
          GLO Hotel Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="hotel">Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>

          </div>
          <div class="installation-card offline">
            <h4 class="hotel">Offline Installation</h4>
            <?php include '../includes/offlineInstall.php' ?>

          </div>
        </div>
      </div>
    </section>


    <?php include '../includes/gotoContDemo.php' ?>



    <!-- <section id="contact">
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

  <?php include '../includes/footer.php' ?>

  <script src="../js/script.js"></script>
</body>

</html>