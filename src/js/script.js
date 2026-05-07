// header drawer
// 要素を変数にまとめる
const drawerIcon = document.getElementById("js-drawer");
const drawerTarget = document.getElementById("js-drawer-target");
const drawerOverlay = document.getElementById("js-drawer-overlay");
const drawerLinks = document.querySelectorAll(".l-header__item a"); // aタグを対象にする

// ドロワーを閉じる関数
const closeDrawer = () => {
  drawerIcon.classList.remove("is-open");
  drawerTarget.classList.remove("is-open");
  drawerOverlay.classList.remove("is-open");
  drawerIcon.setAttribute("aria-expanded", "false"); // アクセシビリティへの配慮
};

// ハンバーガーアイコンクリック時
drawerIcon.addEventListener("click", function () {
  const isOpen = this.classList.toggle("is-open");
  drawerTarget.classList.toggle("is-open");
  drawerOverlay.classList.toggle("is-open");
  this.setAttribute("aria-expanded", isOpen);
});

// オーバーレイクリック時
drawerOverlay.addEventListener("click", closeDrawer);

// ページ内リンククリック時（全てのリンクに対応）
drawerLinks.forEach((link) => {
  link.addEventListener("click", closeDrawer);
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
