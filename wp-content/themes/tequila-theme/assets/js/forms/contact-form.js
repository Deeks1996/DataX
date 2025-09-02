
document.addEventListener("DOMContentLoaded", function () {
  const customSubmit = document.querySelector(".custom-submit");
  const realSubmit = document.querySelector(".real-submit .wpcf7-submit");

  // Trigger real submit when clicking custom button
  if (customSubmit && realSubmit) {
    customSubmit.addEventListener("click", function (e) {
      e.preventDefault();
      realSubmit.click();
    });
  }

});
