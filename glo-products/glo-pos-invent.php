<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO-POS - Inventory Management System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/products.css" />
  <link rel="stylesheet" href="../css/singleProduct.css" />
  <link rel="stylesheet" href="../css/product-colors.css" />
  <link rel="icon" href="../images/glo-products/favicon/pos.png" type="image/png">


</head>

<body>



  <?php include '../includes/loader.php' ?>
  <?php include '../includes/gloProdHeader.php'; ?>

  <main>
    <section id="about-section">
      <div class="about-section pos">
        <!--  <h2>GLO POS With Inventory System</h2>
        <p>Smarter, Smoother Sales</p> -->
      </div>
    </section>

    <section id="hero-section">
      <div class="hero-section">
        <h3>
          With GLO POS, we offer you cutting-edge solutions to help you drive
          better sales.
        </h3>
        <p>Power up your business !</p>

        <div class="card">

          <div class="card-inner">
            <div class="card-front">
              <img
                src="../images/glo-products/banners/gloposshot.png"
                alt="glo pos screenshot" />
            </div>
            <div class="card-back pos">
              “A cloud-based POS and inventory system that boosts efficiency, control, and business growth.”

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
            src="../images/glo-products/glo-POS.jpg"
            alt="glo POS with inventory management system logo" />
        </div>
        <div class="about-each-text pos">
          <h3>ABOUT GLO POS WITH INVENTORY SYSTEM</h3>

          <!--  <p>
            <strong> POS & Inventory System </strong> is a complete business management solution that empowers retailers, wholesalers, and service providers to manage stock, sales, purchases, and finances with ease.
            It offers real-time inventory tracking across multiple warehouses, intuitive POS transactions, customizable financial reports, and built-in tax compliance.
          </p>
          <p>
            Businesses can enhance customer engagement with loyalty management, discounts, promotions, and SMS notifications while maintaining accuracy through role-based access and audit trails.
          </p>
          <p>
            From small shops to growing enterprises, GLO POS adapts to your needs with scalable features that reduce costs, improve accuracy, and provide clear insights into business performance. With cloud-based access, you can manage and monitor your operations anytime, anywhere, ensuring you’re always in control.
          </p> -->
          <p>GLO Point-on-Sale with Inventory is a robust business management solution designed to simplify sales, stock management, and financial tracking. It offers real-time visibility across multiple warehouses, seamless point-of-sale transactions, and role-based access control for enhanced security. </p>
          <p>With reporting and analytics built-in, businesses can make informed decisions while reducing costs and improving customer satisfaction. Scalable and cloud-enabled, GLO POS & Inventory adapts to businesses of all sizes and supports growth through better efficiency and control.</p>
        </div>
      </div>
    </section>


    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Point-on Sale">PoS</abbr> & Inventory </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fas fa-warehouse pos"></i> <br> <strong class="pos">Stock Management</strong> <br><br> Real-time tracking, barcoding, and warehouse transfers
          </div>
          <div class="feature">
            <i class="fa-solid fa-money-check-dollar pos"></i> <br> <strong class="pos">POS Transactions </strong> <br><br> Fast checkout, multiple payments, and receipt printing.
          </div>
          <div class="feature">
            <i class="fa-solid fa-coins pos"></i> <br><strong class="pos"> Finance & Expenses </strong> <br><br> Manage accounts, expenses, and generate financial reports.
          </div>
          <div class="feature">
            <i class="fa-solid fa-file-invoice-dollar pos"></i> <br><strong class="pos">Reports & Insights</strong> <br> <br> Access sales, inventory, and tax reports for smart decisions.
          </div>
        </div>

      </div>
    </section>


    <section id="demo">
      <h3>Watch Our Demo</h3>
      <div class="demo-video">
        <iframe
          src="https://www.youtube.com/embed/9oTRVGFPBYE?rel=0"
          width="100%"
          height="600"
          title="demo video"
          frameborder="0"
          allowfullscreen></iframe>
      </div>
    </section>


    <section id="installation">
      <h3>Installation Type</h3>
      <div class="installation pos">
        <p>
          GLO-POS with Inventory Management can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="pos">Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>

          </div>
          <div class="installation-card offline">
            <h4 class="pos">Offline Installation</h4>
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
  <?php include '../includes/footer.php'; ?>

  <script src="../js/script.js"></script>
</body>

</html>