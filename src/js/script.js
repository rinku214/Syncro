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

//Videoのフェードイン
document.addEventListener("DOMContentLoaded", () => {
  // PCサイズ（768px以上）の時だけ実行
  if (window.innerWidth >= 768) {
    const videoContainers = document.querySelectorAll(".p-usage__video");

    const observerOptions = {
      root: null, // ブラウザのビューポートを基準にする
      rootMargin: "0px",
      threshold: 0.35, // 要素が35%見えたら実行
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // 画面内に入ったら is-show クラスを追加
          entry.target.classList.add("is-show");

          // 一度表示されたら監視を止める
          observer.unobserve(entry.target);
        } else {
        }
      });
    }, observerOptions);

    videoContainers.forEach((container) => {
      observer.observe(container);
    });
  }
});

//Q&Aアコーディオン
jQuery(".p-faq__item").on("click", function (e) {
  if (jQuery(e.target).closest("a").length) return;

  jQuery(this).toggleClass("is-open");

  jQuery(this).find(".p-faq__item-A").stop(true, true).slideToggle(300);
});
