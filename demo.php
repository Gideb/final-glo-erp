<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO-ERP | Demo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/demo.css" />
  <link rel="icon" href="../GloERP/images/favicon.png" type="image/png">

</head>

<body>
  <?php include './includes/loader.php' ?>


  <?php include './includes/header.php'; ?>

  <section>
    <div class="contact-header">
      <h2> Request A Demo</h2>
    </div>
  </section>

<legend>
      Use the form below to request a personalized demo of any GLO-ERP product. We’re here to help with all
      questions and inquiries.
    </legend>


  <div class="contact-container">

    <div class="form-grid">
      <div class="form-image">
        <img src="../GloERP/images/contact2.jpg" alt="image of a customer support agent">
      </div>
      <form id="contactForm">

        <input
          type="text"
          id="name"
          placeholder="Full Name"
          required
          autocomplete />

        <input
          type="email"
          id="email"
          placeholder="Email Address"
          required
          autocomplete />

        <input
          type="tel"
          id="phone"
          placeholder="Phone Number"
          required
          autocomplete />

        <input
          type="text"
          id="company-name"
          placeholder="Company Name"
          required
          autocomplete />
        <input
          type="text"
          id="company-location"
          placeholder="Company Location"
          required
          autocomplete />

        <!--    <label for="purpose">Purpose:</label>

      <select 
      id="purpose" 
      name="purpose" 
      required>

        <option value="">---</option>
        <option value="info">Product Information</option>
        <option value="demo">Request a Demo</option>
        <option value="support">Support</option>
        <option value="other">Other</option>

      </select> -->

        <label for="product">Select Product:</label>

        <select
          name="product"
          id="product"
          class="select-product">

          <option value="">---</option>
          <option value="food">Food Ordering Management System</option>
          <option value="hospital">Hospital/Clinic Management System</option>
          <option value="hotel">Hotel Management System</option>
          <option value="hrms">Human Resource Management System</option>
          <option value="laundry">Laundry Management System</option>
          <option value="ecommerce">Multipurpose Ecommerce System</option>
          <option value="pharmacy">Pharmacy Management System</option>
          <option value="pos">PoS with Inventory Management System</option>
          <option value="school">School Management System</option>

        </select>

        <textarea
          id="message"
          placeholder="Additional Information"></textarea>

        <button type="submit">Submit</button>

      </form>
    </div>


  </div>


  <?php include './includes/footer.php' ?>

  <script src="../GloERP/js/demo.js"></script>
  <script src="../GloERP/js/script.js"></script>
</body>

</html>