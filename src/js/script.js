document.getElementById("js-drawer").addEventListener("click", function () {
  this.classList.toggle("is-open");
  document.getElementById("js-drawer-target").classList.toggle("is-open");
  document.getElementById("js-drawer-overlay").classList.toggle("is-open");
});

document
  .getElementById("js-drawer-overlay")
  .addEventListener("click", function () {
    this.classList.remove("is-open");
    document.getElementById("js-drawer").classList.remove("is-open");
    document.getElementById("js-drawer-target").classList.remove("is-open");
  });
