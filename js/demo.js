document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("contactForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();

      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const companyName = document.getElementById("company-name").value.trim();
      const companyLocation = document
        .getElementById("company-location")
        .value.trim();
      const product = document.getElementById("product").value.trim();

      const purpose = document.getElementById("purpose").value.trim();

      if (
        name === "" ||
        email === "" ||
        phone === "" ||
        companyName === "" ||
        companyLocation === "" ||
        product === "" ||
        purpose === ""
      ) {
        alert("Please fill in all fields.");
        return;
      }

      alert("Thank you, " + name + "! Your form has been submitted.");
      this.reset();
    });
});
