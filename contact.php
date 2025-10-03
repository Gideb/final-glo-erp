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
    <link rel="stylesheet" href="./css/contact.css" />
    <link rel="icon" href="../GloERP/images/favicon.png" type="image/png">

</head>

<body>
    <?php include './includes/loader.php' ?>

    <!-- header -->
    <?php include './includes/header.php'; ?>

    <!-- contact  details-->
    <main>
        <section id="contact">
            <div class="contact">
                <div class="contact-header">
                    <h2> CONTACT US</h2>
                    <p>
                        Home : Contact Us
                    </p>
                </div>
                <div class="contact-main">
                    <div class="contact-main-head">
                        <h3>GET IN TOUCH</h3>
                        <p>
                            For general enquiries, please get in touch with our team at <br> <a href="mailto:askus@utsafrica.com">askus@utsafrica.com </a>, or call on <a href="tel:+233302953111">+233 302 953 111</a> or <a href="tel:+233557407579">+233 55 740 4579</a>
                        </p>
                    </div>
                    <section id="main-info">
                        <div class="contact-main-info">
                            <div class="info col-1">
                                <span class="fa-regular fa-map"></span>

                                <h4>Address</h4>

                                <p><b>Development Center: </b> Kpong - Akosombo</p>

                                <p><b>Business Center: </b> Tesano - Accra</p>


                                <br><br>
                                <span class="fa-solid fa-location"></span>

                                <h4>GPS Address</h4>

                                <p>EL-0417-4521</p>


                            </div>


                            <div class="info col-2">
                                <span class="fa-regular fa-address-book"></span>

                                <h4>Phone</h4>

                                <a href="tel:+233302953111">+233 302 953 111</a>
                                <br>
                                <a href="tel:+233532759520">+233 (0) 53 275 9520</a>
                                <p>(Sales & Support - Ghana)</p>
                                <br>
                                <a href="tel:+27677734940">+27 (0) 67 773 4940</a>
                                <p>(Sales & Support - South Africa)</p>

                            </div>

                            <div class="info col-3">
                                <span class="fa-regular fa-envelope"></span>

                                <h4>E-Mail</h4>
                                <a href="mailto:askus@utsafrica.com">askus@utsafrica.com </a>
                                <br>
                                <a href="mailto:support@utsafrica.com">support@utsafrica.com </a>

                            </div>
                        </div>
                    </section>


                </div>
            </div>
        </section>

        <!-- contact form -->
        <section id="contact-form">
            <div class="contact-form-div">

                <h2>FOR MORE INFORMATION, KINDLY FILL OUT THE FORM BELOW</h2>
                <p>Send Us A Message</p>

                <div class="forms-grid">
                    <form action="" class="contact-form">
                        <input type="text" id="name" placeholder="Full Name" required aria-label="full name" autocomplete="" autofocus>

                        <input type="tel" id="phone" placeholder="Phone Number" required aria-label="phone number" autocomplete="">

                        <input type="email" id="email" placeholder="Email Address" required aria-label="Email Address" autocomplete="">

                        <!-- <input type="Subject" id="subject" placeholder="Subject" required aria-label="Subject"> -->

                        <label for="purpose">Purpose:</label>

                        <select
                            id="purpose"
                            name="purpose"
                            required>

                            <option value="">---</option>
                            <option value="info">Product Information</option>
                            <option value="support">Support</option>
                            <option value="other">Other</option>

                        </select>

                        <textarea name="message" id="add-message" placeholder="Additional Message" rows="5"></textarea>

                        <button class="btn-submit" type="submit">Send Message</button>
                    </form>
                    <div class="maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8115861454735!2d0.05801457599217399!3d6.155983827322975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1020a7da30768b3b%3A0x54dc43e3fb0d3e1f!2sUTS%20Developers!5e0!3m2!1sen!2sgh!4v1755770391010!5m2!1sen!2sgh"
                            style="border: 0"
                            allowfullscreen
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>

        </section>


    </main>



    <!-- footer -->

    <?php include './includes/footer.php' ?>

    <script src="../GloERP/js/demo.js"></script>
    <script src="../GloERP/js/script.js"></script>
</body>

</html>