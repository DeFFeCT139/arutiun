const modal = document.getElementById("modal");
const scrollUp = this.document.querySelector(".scroll-up");

document.getElementById("show-review").addEventListener("click", () => {
  document.getElementById("more-reviews").classList.toggle("display-flex");
});

document.getElementById("home").addEventListener("click", (e) => {
  smoothScroll("autor-info", e.target.parentElement);
});

document.getElementById("how-i-work").addEventListener("click", (e) => {
  smoothScroll("how", e.target.parentElement);
});

document.getElementById("experience").addEventListener("click", (e) => {
  smoothScroll("education", e.target.parentElement);
});

document.getElementById("menu-price").addEventListener("click", (e) => {
  smoothScroll("price", e.target.parentElement);
});

document.getElementById("menu-reviews").addEventListener("click", (e) => {
  smoothScroll("reviews", e.target.parentElement);
});

document.getElementById("total").addEventListener("click", (e) => {
  smoothScroll("stages", e.target.parentElement);
});

document.querySelector(".contacts").addEventListener("click", () => {
  modal.style.display = "flex";
});

scrollUp.addEventListener("click", () => {
  smoothScroll("autor-info");
});

document.querySelector(".burger-menu").addEventListener("click", (e) => {
  document.querySelector(".burger-menu").classList.toggle("open");
  document.querySelector(".menu").classList.toggle("menu-toggle");
});

window.addEventListener("scroll", function () {
  if (window.scrollY > 400) {
    scrollUp.style.opacity = 1;
  } else {
    scrollUp.style.opacity = 0;
  }
});

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

function smoothScroll(id, parent = null) {
  if (parent && parent.classList.contains("menu-toggle")) {
    parent.classList.toggle("menu-toggle");
    document.querySelector(".burger-menu").classList.toggle("open");
  }
  if (id === "header") {
    window.scrollTo({ top: 0, behavior: "smooth" });
  } else {
    document.querySelector(`#${id}`).scrollIntoView({
      behavior: "smooth",
    });
  }
}
