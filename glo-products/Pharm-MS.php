<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO | Pharmacy Management System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/products.css" />
  <link rel="stylesheet" href="../css/singleProduct.css" />
  <link rel="stylesheet" href="../css/product-colors.css" />
  <link rel="icon" href="../images/glo-products/favicon/pharmacy.png" type="image/png">


</head>

<body>
  <?php include '../includes/loader.php' ?>
  <!-- header section -->
  <?php include '../includes/gloProdHeader.php' ?>

  <main>
    <section id="about-section">
      <div class="about-section pharmacy">
        <!--         <h2>GLO Pharmacy Management System</h2>
        <p>Simplifying pharmacy operations and improving patient care.</p> -->
      </div>
    </section>

    <section id="hero-section">
      <div class="hero-section">
        <h3>
          Take control of your pharmacy with our system for inventory, sales,
          prescriptions, and customer management.
        </h3>
        <p>Deliver better service and streamline your pharmacy operations!</p>

        <div class="card">

          <div class="card-inner">
            <div class="card-front">
              <img
                src="../images/glo-products/banners/gloposshot.png"
                alt="glo pharmacy management system screenshot" />
            </div>
            <div class="card-back pharmacy">
              “A pharmacy management system that simplifies operations, improves patient safety, and drives efficiency.”

              <div class="card-button">

                <a class="btn" href="../demo.php"><span class="far fa-bell"></span> &nbsp;Request a Demo</a>

              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <section id="about-each">
      <h3>ABOUT GLO Pharmacy Management System</h3>

      <div class="about-each-grid-container">
        <div class="about-each-img">
          <img
            src="../images/glo-products/glo-pharmacy-management-sys.jpg"
            alt="glo pharmacy management system logo" />
        </div>
        <div class="about-each-text pharmacy">

          <!--   <p>
            <strong>GLO Pharmacy Management System</strong> is an advanced management system designed to simplify pharmacy operations while improving patient safety and service delivery. It supports electronic prescriptions, accurate dispensing, dosage checks, and interaction alerts, reducing the risk of errors and ensuring quality care. Pharmacies can maintain complete patient profiles, track medication history, and send reminders for refills and adherence.
          </p>

          <p>On the business side, GLO Pharmacy optimizes stock control with real-time inventory tracking, expiry alerts, automated replenishment, and vendor management, while also providing seamless POS integration for sales and insurance billing.</p>
          <p>
            With detailed reporting, financial tracking, and compliance tools, GLO Pharmacy helps pharmacies increase efficiency, cut costs, and deliver consistent, professional care to every patient
          </p> -->
          <p> <strong>GLO-<abbr title="Pharmacy Management System">PMS</abbr></strong> is a user-friendly, reliable pharmacy management platform that improves patient care and streamlines pharmacy operations. It integrates prescription handling, patient management, and inventory tracking into one efficient system. </p>
          <p> With built-in drug interaction checks, automated refills, and secure compliance features, GLO Pharmacy enhances patient safety while ensuring smooth operations. Pharmacies can manage sales, suppliers, expenses, and insurance claims seamlessly, all while maintaining regulatory compliance.</p>
        </div>
      </div>
    </section>

    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Pharmacy Management System">PMS</abbr> </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fa-solid fa-notes-medical pharmacy"></i> <br> <strong class="pharmacy">Prescription Management</strong> <br><br> Process e-prescriptions, verify dosages, and print labels.
          </div>
          <div class="feature">
            <i class="fas fa-heart-pulse pharmacy"></i> <br> <strong class="pharmacy">Patient Care</strong> <br><br> Track medical history, allergies, and send refill reminders..
          </div>
          <div class="feature">
            <i class="fa-solid fa-list-check pharmacy"></i> <br><strong class="pharmacy">Inventory Control</strong> <br><br> Monitor stock levels, expiries, and automate reorders.
          </div>
          <div class="feature">
            <i class="fa-solid fa-cash-register pharmacy"></i> <br><strong class="pharmacy">POS & Billing</strong> <br> <br> Handle payments, discounts, insurance claims, and receipts.
          </div>
        </div>

      </div>
    </section>



    <?php include '../includes/demovideo.php' ?>


    <section id="installation">
      <h3>Installation Type</h3>
      <div class="installation pharmacy">
        <p>
          GLO Pharmacy Management System can be installed in two modes to
          suit your business needs:
        </p>


        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="pharmacy"><span class="fa-solid fa-cloud"></span> Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>
          </div>
          <div class="installation-card offline">
            <h4 class="pharmacy"><span class="fa-solid fa-server"></span> Offline Installation</h4>
            <?php include '../includes/offlineInstall.php' ?>

          </div>
        </div>
      </div>
    </section>

    <?php include '../includes/gotoContDemo.php' ?>




  </main>

  <!-- Footer -->
  <?php include '../includes/gloProdFooter.php' ?>

  <!-- js links -->
  <script src="../js/script.js"></script>
  <script src="../js/videodemo.js"></script>



</body>

</html>