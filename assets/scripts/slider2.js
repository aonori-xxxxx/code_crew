/*
swiper
*/

// スライダー 自動スクロール
const swiper = new Swiper('.swiper', {
  centeredSlides: true,
  loop: true,
  effect: 'fade',
  slidesPerView: 2, // 一度に表示する枚数
  speed: 6000, // ループの時間
  allowTouchMove: false, // スワイプ無効
  autoplay: {
    delay: 0, // 途切れなくループ
  },

});