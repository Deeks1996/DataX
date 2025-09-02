
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("enrolModal");
  const openBtns = document.querySelectorAll('[href="#enrolModal"]');
  const customSubmitBtn = document.querySelector(".custom-submit");
  const realSubmitBtn = document.querySelector(".real-submit");

  openBtns.forEach(btn => {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      if (modal) {
        modal.style.display = "block";
      }
    });
  });

  window.addEventListener("click", function (e) {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  });

  if (customSubmitBtn && realSubmitBtn) {
    customSubmitBtn.addEventListener("click", function (e) {
      e.preventDefault();
      realSubmitBtn.click();
    });
  }
});
